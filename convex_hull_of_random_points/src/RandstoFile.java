
import java.io.FileWriter;
import java.io.IOException;
import java.util.Random;


public class RandstoFile {
	//Creates Random Numbers from a* to b*  up to given number*.
	public void randNumbers(int a,int b,int number) throws IOException{
		
		Random r=new Random();
		FileWriter fw=new FileWriter("random1.txt");
		for(int i=0;i<number;i++){
			fw.append(r.nextInt(b)+a+"\n");
		}
		fw.close();
	
	}
	
	public void randNumbers2(int a,int b,int number) throws IOException{
		Random r=new Random();
		FileWriter fw=new FileWriter("random2.txt");
		for(int i=0;i<number;i++){
			fw.append(r.nextInt(b)+a+","+r.nextInt(b)+a+"\n");
		}
		fw.close();
	

	}
	
	public void randNumbers3(int a,int b,int number,int number2) throws IOException{
		
		Random r=new Random();
		FileWriter fw=new FileWriter("random3.txt");
		FileWriter fw2=new FileWriter("randompoints.txt");
		for(int i=0;i<number;i++){
			fw.append(r.nextInt(b)+a+"\n");
		}
		
		for (int j = 0; j<number2; j++) {
			
			fw2.append(r.nextInt(100)+a+" "+(r.nextInt(100)+a)+"\n");
		}
		fw.close();
		fw2.close();
		
	

	}
	
	
}
