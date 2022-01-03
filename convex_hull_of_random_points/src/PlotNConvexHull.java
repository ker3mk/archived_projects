import java.awt.Color;
import java.awt.Graphics;
import java.awt.Polygon;
import java.io.FileNotFoundException;
import java.io.File;
import java.util.Scanner;
import javax.swing.JFrame;

public class PlotNConvexHull extends JFrame {
	private int NumberOfElts = 2000, NumberofBorderPoint;
	private int x[] = new int[NumberOfElts], y[] = new int[NumberOfElts],
			x2[] = new int[NumberOfElts], y2[] = new int[NumberOfElts];



	// Gift Wrapping Algorithms.
	public PlotNConvexHull() {
		super("Randompoints");
		setSize(600, 600);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setLocationRelativeTo(null);
		setVisible(true);
		giftWrapping();
		repaint();

	}

	public void giftWrapping() {
		getPoints();
		int min = 0;
		for (int i = 0; i < NumberOfElts; i++) {
			if (y[i] == y[min]) {
				if (x[i] < x[min])
					min = i;
			} else if (y[i] < y[min])
				min = i;
		}

		NumberofBorderPoint = 0;
		int smallest;
		int current = min;
		do {
			x2[NumberofBorderPoint] = x[current];
			y2[NumberofBorderPoint] = y[current];
			
			smallest = 0;
			if (smallest == current)
				smallest = 1;
			for (int i = 0; i < NumberOfElts; i++) {
				if ((current == i)
						|| (smallest == i)
						|| (x2[NumberofBorderPoint] == x[i] && y2[NumberofBorderPoint] == y[i]))
					continue;
				if (GiftWrapper(current, smallest, i))
					smallest = i;
			}
			NumberofBorderPoint++;
			System.out.println("NumberofBorderPoint: " + NumberofBorderPoint
					+ ", CurrentPoint: " + current + "(" + x[current] + ", "
					+ y[current] + ")");
			
			current = smallest;
		} while (current != min);
	}

	public boolean GiftWrapper(int current, int smallest, int i) {
		int xa, ya, xb, yb, val;
		xa = x[smallest] - x[current];
		xb = x[i] - x[current];
		ya = y[smallest] - y[current];
		yb = y[i] - y[current];

		val = xa * yb - xb * ya;
		if (val > 0)
			return true;
		else if (val < 0)
			return false;
		else {
			if (xa * xb + ya * yb < 0)
				return false;
			else {
				if (xa * xa + ya * ya > xb * xb + yb * yb)
					return true;
				else
					return false;
			}
		}
	}

	public void getPoints() {
		try {
			Scanner in = new Scanner(new File("randompoints.txt"));
			int i = 0;
			for (int h = 0; h < NumberOfElts; h++) {

				x[i] = in.nextInt();
				y[i++] = in.nextInt();
				
			}
			in.close();
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		}
	}

	@Override
	public void paint(Graphics g) {
		// background
		g.setColor(Color.white);
		g.fillRect(0, 0, getWidth(), getHeight());
		// System.out.println("w:" + getWidth() + ", h:" + getHeight());

		// set of points
		g.setColor(Color.black);
		for (int i = 0; i < NumberOfElts; i++) {
			g.fillOval(xy(x[i]) - 2, xy(y[i]) - 2, 5, 5);
		}

		// border edge
		g.setColor(Color.black);
		Polygon p = new Polygon();

		for (int i = 0; i < NumberofBorderPoint; i++) {
			p.addPoint(xy(x2[i]), xy(y2[i]));
		}
		g.setColor(Color.blue);
		// g.drawPolygon(x2, y2, num);
		g.drawPolygon(p);

		// border points
		g.setColor(Color.red);
		for (int i = 0; i < NumberofBorderPoint; i++) {
			g.drawOval(xy(x2[i]) - 5, xy(y2[i]) - 5, 10, 10);
			g.drawOval(xy(x2[i]) - 5, xy(y2[i]) - 5, 12, 12);
		}
	}

	public int xy(int a) {
		return ((a * 3) + 100);
	}
}