

import java.io.*;
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

    public WriteConfig(){

        try{

            f = new File(getClass().getResource("zsms/conf/lighttpd.conf").toURI().getPath());  
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
            writer.newLine();
            writer.write("cgi.assign = ( \".php\" => \"zsms/php/php-cgi.exe\" )");
            writer.close();
        }catch(Exception e){
            
        }finally{
              
        }
    }
    
}
