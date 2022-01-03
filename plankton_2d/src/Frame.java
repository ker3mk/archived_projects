
import javax.swing.JFrame;


public class Frame extends JFrame {
	int x=800;
	int y=600;
	public Frame() {
		setTitle("Plankton 2D Game");
		add(new Board(100));
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setSize(x, y);

	setVisible(true);
	}
	public static void main(String[] args) {
		new Frame();
	}


}
