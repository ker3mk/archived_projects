import java.awt.Font;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Image;
import java.awt.Rectangle;
import java.awt.event.*;
import java.util.ArrayList;
import java.util.Iterator;
import java.util.Random;

import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JPanel;
import javax.swing.Timer;


public class Board extends JPanel implements ActionListener,KeyListener{

Plankton p;
Image img,main,gameover,congru;
Timer time;
int Enemyno;
boolean lost=false;
Virus[] enemy;
private static State state = State.MAIN_MENU;


private static enum State {
    GAMEOVER, MAIN_MENU, GAME
}

public Virus[] CreateEnemyRandomly(int n){
	Random r=new Random();
	Virus[] enemy=new Virus[n];
	for(int i=0;i<n;i++){
		int x =r.nextInt(10000);
		int y=r.nextInt(600);
		enemy[i]=new Virus(x, y);
	}
	return enemy;
}
public Board(final int Enemyno){
	enemy=CreateEnemyRandomly(Enemyno);
	p=new Plankton();
	addKeyListener(this);
	addMouseListener(new MouseAdapter() {
		

	          public void mousePressed(MouseEvent me) { 
	        	 //491,239  382,367
	        	  //720,341        782,475
	        	  if(state==State.MAIN_MENU){
	        		  if(me.getX()>491&&me.getX()<720&&me.getY()>239&&me.getY()<341){
	 	        		 System.out.println("HAHAHAHAHAHAHAHAHAH");
	 	        		 
	 	        	 }
	        		  else if(me.getX()>382&&me.getX()<782&&me.getY()>367&&me.getY()<475){
	        			  enemy=CreateEnemyRandomly(Enemyno);
	        			  p.health=200;
	        			  p.left=100;
	        			  p.x=75;
	        			  p.y=433;
	        			 p.nx2=785;
	        			  p.nx=0;
	        			  state=State.GAME;
	        		  }
	        		  
	        	  }
	        	
	          	System.out.println(me);
	          } 
	        

	});
	setFocusable(true);
	ImageIcon i=new ImageIcon("src/resources/deee.png");
	ImageIcon m=new ImageIcon("src/resources/virusback1.jpg");
	ImageIcon g=new ImageIcon("src/resources/gameover.png");
	ImageIcon c=new ImageIcon("src/resources/congru.png");
	img=i.getImage();
	main=m.getImage();
	gameover=g.getImage();
	congru=c.getImage();
	time=new Timer(3,this);
	time.start();

}

	
	public void actionPerformed(ActionEvent e) {
	p.move();
	repaint();

	for(int i = 0; i<enemy.length;i++){
		enemy[i].move(p.dx, p.left);
		
	}
	checkcollisionVirus();
	}
	public void paint(Graphics g){
		super.paint(g);
		Graphics2D g2d=(Graphics2D) g;
		g2d.setFont(new Font("Arial", Font.BOLD, 14));
		
		switch (state) {
		case  GAMEOVER:
			System.out.println("intro");
			g2d.drawImage(gameover,0,0,null);
			break;
			
		case GAME:
			
			if(p.health<=0){
				state=state.GAMEOVER;
			}

			if(p.getX()>=10000){
				state=state.MAIN_MENU;
			}
		
			if((p.getX()-90)%1600==0){
				p.nx=0;}
			if((p.getX()-890)%1600==0){
				p.nx2=0;}
					g2d.drawImage(img, 785-p.nx2, 0, null );
					System.out.println(p.getX());
					if(p.getX()>=90)
						
						g2d.drawImage(img, 785-p.nx, 0, null );
										g2d.drawString("Health:"+p.health,600,90);
										g2d.drawString("Player x:"+p.getX(),600,50);
										g2d.drawString("Player y:"+p.getY(),600,65);
										
										for(int i = 0; i<enemy.length;i++){
											if(enemy[i].isAlive){
											g2d.drawImage(enemy[i].getImg(), enemy[i].getX(), enemy[i].getY(),null);	
										}
											
										
											}
										
										g2d.drawImage(p.getImage(),p.left, p.getY(), null );		
				
				
			break;
			
		case MAIN_MENU:
			g2d.drawImage(main,0, 0, null );
			if(p.getX()>=10000){
			g2d.drawImage(congru,0,0,null );
			}
		
				
			break;
		}

	}
	public void checkcollisionVirus(){
		
	for(int i = 0; i<enemy.length;i++){
		if(enemy[i].getBouns().intersects(p.getBouns())&&enemy[i].isAlive){
			enemy[i].isAlive=false;
			p.health=p.health-10;
	}
	}}

		  private  void checkInput(KeyEvent e) {
	        switch (state) {
	            case GAMEOVER:
	                if (e.getKeyCode()==KeyEvent.VK_ENTER) {
	                    state = State.MAIN_MENU;
	                }

	                break;
	            case GAME:
	            	p.KeyPressed(e);
	                if (e.getKeyCode()==KeyEvent.VK_ESCAPE) {
	                    state = State.MAIN_MENU;
	                   
	                }
	                break;
	            case MAIN_MENU:
	                if (e.getKeyCode()==KeyEvent.VK_ENTER) {
	                    state = State.GAME;
	                 
	                }
	                if (e.getKeyCode()==KeyEvent.VK_ESCAPE) {
	                    System.exit(0);
	                }
	                
	             
	                break;
	        }
	    }
		public void keyReleased(KeyEvent e){
			p.KeyReleased(e);
		
		}
		public void keyPressed(KeyEvent e){
			checkInput(e);
		
			

	}
	
		public void keyTyped(KeyEvent e) {
			
		}
		
	

}
