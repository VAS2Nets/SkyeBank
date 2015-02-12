package com.vas2nets.startup;


import java.awt.Desktop;
import java.io.IOException;
import java.net.URI;
import java.nio.file.Path;
import java.nio.file.Paths;

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
    String currentPath;
    
    
    public void runCommand(){
        
        Path currentRelativePath = Paths.get("");
         currentPath = currentRelativePath.toAbsolutePath().toString();
         //currentPath = currentPath.replace("\\", "/");
         System.out.println("Current relative path is: " + currentPath);
         
         //executablePath = currentPath + "\\sms\\sms\\LightTPD.exe";
         executablePath = currentPath + "\\sms\\sms\\";
         
        
       
        try{
             //executablePath = getClass().getResource("zsms/lightTPD.exe").toURI().getPath();
             final Runtime rt = Runtime.getRuntime();
             Process p = rt.exec("cd " + executablePath);
             
             p.waitFor();
             
               final Runtime rtt = Runtime.getRuntime();
               Process pp =rtt.exec("LightTPD.exe");
               pp.waitFor();
        }catch(Exception e){
            
        }
       
    }
    
    public void goStart(){
        
          Path currentRelativePath = Paths.get("");
         currentPath = currentRelativePath.toAbsolutePath().toString();
         currentPath = currentPath.replace("\\", "/");
         System.out.println("Current relative path is: " + currentPath);
         
         //executablePath = currentPath + "\\sms\\sms\\LightTPD.exe";
         executablePath = currentPath + "/sms/sms/";
         
         
        
                try
        {            
            
            String[] cmd = new String[1];
            //cmd[0] = currentPath + "/service/Service-Remove.exe" ;
            //cmd[1] = currentPath + "/LightTPD.exe" ;
           // cmd[1] = "LightTPD.exe" ;
            cmd[0] = currentPath + "/LightTPD.exe" ;
             
            
           
            Runtime rt = Runtime.getRuntime();
            System.out.println("Execing " + cmd[0]);
            Process proc = rt.exec(cmd);
            
             startBrower();
            // any error message?
            StreamGobbler errorGobbler = new 
                StreamGobbler(proc.getErrorStream(), "ERROR");            
            
            // any output?
            StreamGobbler outputGobbler = new 
                StreamGobbler(proc.getInputStream(), "OUTPUT");
                
            // kick them off
            errorGobbler.start();
            outputGobbler.start();
                                    
            // any error???
            int exitVal = proc.waitFor();
            System.out.println("ExitValue: " + exitVal);   
            
           
            
        } catch (Throwable t)
          {
            t.printStackTrace();
          }
        
        
    }
    
    
     public void startBrower(){
        
        //String url = "http://localhost:8000/test1.php";
        String url = "http://localhost:8000/skye/login.html";

        if(Desktop.isDesktopSupported()){
            Desktop desktop = Desktop.getDesktop();
            try {
                desktop.browse(new URI(url));
            } catch (Exception e) {
                // TODO Auto-generated catch block
                e.printStackTrace();
            }
        }else{
            Runtime runtime = Runtime.getRuntime();
            try {
                runtime.exec("xdg-open " + url);
            } catch (IOException e) {
                // TODO Auto-generated catch block
                e.printStackTrace();
            }
        }
        
    }
    
}
