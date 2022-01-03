import java.io.IOException;


public class Main {


	public static void main(String[] args) {
		RandstoFile rf=new RandstoFile();
		try {
			rf.randNumbers(1, 100, 10);
			rf.randNumbers2(1, 100, 1000);
			rf.randNumbers3(1,100, 10000000,2000);
			
			FindOccur findo=new FindOccur();
			findo.FindRealOccur(findo.histo);
			
			System.out.println("Mean of 10 milions number : "+findo.Ort());
			System.out.println("Standart Deviation of 10 milions number: "+findo.sd());
			new PlotNConvexHull();
			
		} catch (IOException e) {
			e.printStackTrace();
		}
			
		}

	}


