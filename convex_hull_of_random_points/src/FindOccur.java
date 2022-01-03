import java.awt.Graphics;
import java.awt.Point;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;

public class FindOccur {
	File random3,histo;
	ArrayList<Integer>milions;
	
	
	public FindOccur(){
		random3=new File("random3.txt");
		histo=new File("histo.txt");
		milions =new ArrayList<Integer>(10000000);
		try {
			FileReader fr=new FileReader(random3);
			BufferedReader bf=new BufferedReader(fr);
				String a=null;
				while((a=bf.readLine()) != null){
				milions.add(Integer.parseInt(a));
				}
				System.out.println("File Read is successfully: random3.txt");
		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
	}
	
	
	public void FindRealOccur(File f) throws IOException{
		FileWriter fw =new FileWriter(f);
		for(int i=1;i<=100;i++){
			int count=0;
			for(int j  : milions){
				if(j==i){
					count++;
				}
			}
			fw.append(i+ "  "+count+"\n");	
		}
		System.out.println("File Writing is successfully: histo.txt");
		fw.close();
		}
	
	public float Ort() throws FileNotFoundException{
		float count=0;
		for(int i: milions){
			count+=i;
		}
			return (count/milions.size());
	}
	
	public double sd() throws FileNotFoundException{
        int sum = 0;
        double mean = Ort();
        for (int i:milions ){
            sum += Math.pow((i- mean), 2);
            }
        return Math.sqrt(sum / ( milions.size() - 1 ) ); // sample
    }
	
	
	

	  
	

}
