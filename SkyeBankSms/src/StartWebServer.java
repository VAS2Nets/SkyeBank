/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author samson ude
 */
public class StartWebServer {
    
    String executablePath;
    
    public void runCommand(){
        
       
        try{
             executablePath = getClass().getResource("zsms/lightTPD.exe").toURI().getPath();
             final Runtime rt = Runtime.getRuntime();
             rt.exec(executablePath);
        }catch(Exception e){
            
        }
       
    }
    
}
