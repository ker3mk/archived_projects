import java.awt.Image;
import java.awt.Rectangle;
import java.util.Random;

import javax.swing.ImageIcon;


public class Virus {

	Image img;
	int x,y;
	boolean isAlive=true;
Random i=new Random();
	
	public Virus(int startX, int startY, String location){
		x=startX;
		y=startY;
		ImageIcon i=new ImageIcon(location);
		img=i.getImage();
	}
	
	
	public Virus(int startX, int startY){
		x=startX;
		y=startY;
		ImageIcon i=new ImageIcon("src/resources/virus.png");
		img=i.getImage();
	}

	public Image getImg() {
		return img;
	}


	public void setImg(Image img) {
		this.img = img;
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


	public boolean isAlive() {
		return isAlive;
	}
	
	public Rectangle getBouns(){
		return new Rectangle(x, y, 50, 36);
	}


	public void setAlive(boolean isAlive) {
		this.isAlive = isAlive;
	}
	
	public void move(int dx,int left){
		int d = 0;
		if(dx==1){
			x=x-dx;
			for (int r = 0; r <3; r++) {
				d=i.nextInt(3)-1;
			}
		if(y>1&&y<600){
			y=(y)+d;
		}}
	
}}
