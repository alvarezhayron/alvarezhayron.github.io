<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my delete page for "my shop"} 

    Due Date   : 10/15/2018
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<html> 
  <head><title>alvarezH delete.php</title></head>
  <body>
    <?php
                   
       $record = "RECORD ". $Telephone." DELETED";
         
       $found = $_POST['found']; 
       //echo "delete  found = [" . $found . "]<br>";
        
       // sql to delete a record
       $sql="DELETE FROM customers WHERE Telephone='$Telephone'";
         
       $Telephone=trim($Telephone);
          
       //     if(strlen($Telephone)>0)           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       { 
                      
          if (mysqli_query($connection, $sql)) 
          {
             //echo "Record deleted successfully found = {".$found."}";
             $message ="<span style=\"color: red;\">RECORD $found DELETE</span><br\>";
             $found=""; //this clear the flag for record found to be able to modify 
          }         
          else 
          {
             $message = "Error deleting record: " . mysqli_error($connection); 
          }
          
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT DELETED<BR>$Telephone DOES NOT EXIST or YOU MUST FIND FIRST</span><br\>";
       }
       
    ?>
  </body>

 

</html>
