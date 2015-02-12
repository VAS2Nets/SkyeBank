/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.vas2nets.smpp;

import java.io.IOException;
import java.util.Date;
import org.jsmpp.bean.Alphabet;
import org.jsmpp.bean.BindType;
import org.jsmpp.bean.ESMClass;
import org.jsmpp.bean.GeneralDataCoding;
import org.jsmpp.bean.MessageClass;
import org.jsmpp.bean.NumberingPlanIndicator;
import org.jsmpp.bean.RegisteredDelivery;
import org.jsmpp.bean.SMSCDeliveryReceipt;
import org.jsmpp.bean.TypeOfNumber;
import org.jsmpp.session.BindParameter;
import org.jsmpp.session.SMPPSession;
import org.jsmpp.util.AbsoluteTimeFormatter;
import org.jsmpp.util.TimeFormatter;

/**
 *
 * @author samson ude
 */
public class SMPPConnection implements Runnable{
    
    private String host, userName, password;
    private int port;
    
    private static TimeFormatter timeFormatter = new AbsoluteTimeFormatter();
    SMPPSession smppSession;
    
    public SMPPConnection(String host, String userName, String password, int port){
        this.host = host;
        this.userName = userName;
        this.password = password;
        this.port = port;
        
        
    }
    
    public void run() {
         BindParameter bP = new BindParameter(
                BindType.BIND_TRX,
                userName,
                password,
                "any",
                TypeOfNumber.UNKNOWN,
                NumberingPlanIndicator.UNKNOWN,
                null);

        // smpp session is created using the bindparam and the smsc ip address/port
        smppSession = new SMPPSession();

        try
        {
            
            smppSession.connectAndBind(host, port, bP);
            
            sendMessage("Samson", "+2348105364269", "Vote Buhari 2015 Presidential Election");
        }
        catch (IOException e1)
        {
            e1.printStackTrace();
        }
        
    }
    
   
    
    public void sendMessage(String sender, String receiver, String message){
        
        TimeFormatter tF = new AbsoluteTimeFormatter();
        GeneralDataCoding dataCoding = new GeneralDataCoding(false, true,
                MessageClass.CLASS1, Alphabet.ALPHA_DEFAULT);

        ESMClass esmClass = new ESMClass();

        try
        {
            // submitShortMessage(..) method is parametrized with necessary
            // elements of SMPP submit_sm PDU to send a short message
            // the message length for short message is 140
            smppSession.submitShortMessage(
                    "CMT",
                    TypeOfNumber.NATIONAL,
                    NumberingPlanIndicator.ISDN,
                    sender,
                    TypeOfNumber.NATIONAL, 
                    NumberingPlanIndicator.ISDN, 
                    receiver,
                    esmClass, 
                    (byte) 0, 
                    (byte) 0, 
                    tF.format(new Date()),
                    null,
                    new RegisteredDelivery(SMSCDeliveryReceipt.DEFAULT),
                    (byte) 0,
                    dataCoding, 
                    (byte) 0, 
                    message.getBytes());
        }
        catch (Exception e)
        {
            e.printStackTrace();
        }
        
    }
    
}