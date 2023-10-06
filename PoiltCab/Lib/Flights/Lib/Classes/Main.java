import java.io.BufferedReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;

public class Main implements Runnable {

    private static Thread Task;
  
    int id = 1;
    int count = 5;
    
    public void start() throws InterruptedException {
    
    	if(Task == null) {
        	Task = new Thread(this, "GET");
            Task.start();
    	}else {
    		
    	}
    	
    }
    
    public void join() {
    	
    		
    	
    }
   
	@Override
	public void run() {
		// TODO Auto-generated method stub
		
		try {
			
			if(true) {
				for(int i=0; i<count; i++) {
					
					String url="https://test.api.amadeus.com/v1/security/oauth2/token";
				       String[] command = {"curl", "-H" ,"Content-Type: application/x-www-form-urlencoded", "-d", "grant_type=client_credentials&client_id=v6ZAGpAfT1ekslGkBBIsYbNEou3MGGsT&client_secret=DZPiQ1UkCTGa33bU",url};
				        ProcessBuilder process = new ProcessBuilder(command); 
				        Process p;
				        try
				        {
				            p = process.start();
				             BufferedReader reader =  new BufferedReader(new InputStreamReader(p.getInputStream()));
				                StringBuilder builder = new StringBuilder();
				                String line = null;
				                while ( (line = reader.readLine()) != null) {
				                        builder.append(line);
				                        builder.append(System.getProperty("line.separator"));
				                }
				                String result = builder.toString();
				                
				              

				                try {
				                    FileWriter file = new FileWriter("output.json");
				                    file.write(result);
				                    file.close();
				                 } catch (IOException e) {
				                    // TODO Auto-generated catch block
				                    e.printStackTrace();
				                 }
				                //System.out.print(result);

				        }
				        catch (IOException e)
				        {   System.out.print("error");
				            e.printStackTrace();
				        }

					
			        Task.sleep(1500000);
					
		    			 count++;
		    		
					
				  
				}
	    		
	    	}
			
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			//e.printStackTrace();
		}
		
		
		
	} 

	public static void main(String[] args) throws InterruptedException {
		Main API = new Main();
		API.start();
		
	}

}
