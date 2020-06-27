/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package shopping;

import java.io.FileOutputStream;
import java.sql.*;
public class seller {
    
    private Connection con;
    private Statement stmt;
    private ResultSet rs;

    public seller() {
        
        try{
            
            Class.forName("com.mysql.jdbc.Driver");
            
            con=DriverManager.getConnection("jdbc:mysql://localhost:3306/shopping?useSSL=false","root","");
            stmt=con.createStatement();
            
        }
        catch(Exception e){
            
            System.out.println(e);
        }
        
    }
    
    
   public void getData(){
       
       try{
           
       String query="select * from seller";
       rs=stmt.executeQuery(query);
       System.out.println("Record from database");
       
       
       while(rs.next()){
           
           
           
           String p_id=rs.getString("P_id");
           String p_name=rs.getString("p_name");
           Blob p_img1=rs.getBlob("p_img1");
           byte img1[]=p_img1.getBytes(1,(int)p_img1.length());
           FileOutputStream fo=new FileOutputStream("E:\\sem-5\\MINIPROJECT\\lab\\abc.jpg");
           fo.write(img1);
          
           Blob p_img2=rs.getBlob("p_img2");
            System.out.println("id :" + p_id  + " name :" + p_name);
           
       }
       
      
        }catch(Exception e){
     System.out.println(e);
}
    
   } 
}
