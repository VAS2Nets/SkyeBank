package vas2nets.startup;


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
public class Start {
    
    public static void main(String [] args){
        
        //Write to Configuration file
         WriteConfig ws = new WriteConfig();
         ws.write();
         
         //Start WebServer
         StartWebServer ss = new StartWebServer();
        // ss.runCommand();
         ss.goStart();
         
         //start Browser
        // Browser b = new Browser();
        // b.startBrower();
    }
    
}
