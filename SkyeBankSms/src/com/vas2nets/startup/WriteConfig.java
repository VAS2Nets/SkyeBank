package com.vas2nets.startup;



import java.io.*;
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
public class WriteConfig {
    
    BufferedWriter writer;
    File f;
    String path;
    String currentPath;
    public WriteConfig(){
        
         Path currentRelativePath = Paths.get("");
         currentPath = currentRelativePath.toAbsolutePath().toString();
         currentPath = currentPath.replace("\\", "/");
         System.out.println("Current relative path is: " + currentPath);

        try{
            f = new File(currentPath + "/conf/lighttpd.conf");
            //f = new File(getClass().getResource("sms/conf/lighttpd.conf").toURI().getPath());  
            writer = new BufferedWriter(new FileWriter(f, true));
            
        }catch(Exception e){
           e.printStackTrace();
        }finally{

             try {
                // Close the writer regardless of what happens...
              
            } catch (Exception ex) {
                ex.printStackTrace();
            }

        }

    }
    
    public void write(){
        
      try{
          
          //delete last line
            byte b = 0;
            RandomAccessFile f = new RandomAccessFile(currentPath + "/conf/lighttpd.conf", "rw");
            long length = f.length() - 1;

            do {                     
              length -= 1;
              f.seek(length);

                b = f.readByte();
            } while(b != 10);
            f.setLength(length+1);

            //cgi.assign = ( ".php" => "C:/Users/IHEAYIN/Downloads/sms1/php/php-cgi.exe" )

            String value = "cgi.assign = ( \".php\" => " + "\"" + currentPath + "/php/php-cgi.exe\")";


                writer.newLine();
                writer.write(value);
                writer.close();
        }catch(Exception e){
            
        }finally{
              
        }
    }
    
}
