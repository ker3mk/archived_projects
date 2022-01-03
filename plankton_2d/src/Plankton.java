import java.awt.Image;
import java.awt.Rectangle;

import java.awt.event.KeyEvent;

import javax.swing.ImageIcon;


public class Plankton {
int x,dx,y,nx2,nx,left,dy,health=100;
Image main;
Frame f;
ImageIcon righti=new ImageIcon("src/resources/sagabakorj1.png");
ImageIcon dead=new ImageIcon("src/resources/olu1.png");
ImageIcon lefti=new ImageIcon("src/resources/solabakorj1.png");
public Plankton() {
main=righti.getImage();
left=100;
x=75;
y=433;
nx2=785;
nx=0;
}


public void move(){
	if(dx!=-1){
		if(left+dx<=100){
			left=left+dx;
			System.out.println("SSSS "+left);}
		else{
	x=x+dx;
	nx2=nx2+dx;
	nx=nx+dx;
	if(y>=1&&y<=433){
	y=y+dy;}
	else if(y<1){
		y=1;
	}
	else if(y>433){
		y=433;
	}
	
	}
		}
	else{
		if(left+dx>0)
			left=left+dx;
	}
}
	public int getX() {
	return x;
}
public void setX(int x) {
	this.x = x;
}
public int getY() {
	return y;
}
public void setY(int y) {
	this.y = y;
}


public Image getImage() {
	return main;
}
public Rectangle getBouns(){
	return new Rectangle(left, y, 110, 118);
}
public void KeyPressed(KeyEvent e){
	int key=e.getKeyCode();
	
	if (key==KeyEvent.VK_LEFT){
	 
			dx= -1;
			main=lefti.getImage();
	 }
	
	
	
	
	if (key==KeyEvent.VK_RIGHT){
		
	dx=1;
	main=righti.getImage();
	}
	
	if (key==KeyEvent.VK_UP){
		
		dy=-1;
	
		
 }
	if (key==KeyEvent.VK_DOWN){
		
	
		dy=1;
		
		
 }
	
	
}
public void KeyReleased(KeyEvent e){
	int key=e.getKeyCode();
	if (key==KeyEvent.VK_LEFT){
	dx=0;}
	if (key==KeyEvent.VK_RIGHT){
	dx=0;}
}
	

}
