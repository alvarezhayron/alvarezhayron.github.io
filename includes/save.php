<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my program 3 save page for "my shop"} 

    Due Date   : 10/15/2018
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->
<html>
  <head> <title> alvarezH save.php</title></head>
  <body>
    <?php
       $Telephone=trim($Telephone);
       if(strlen($Telephone)>0)           
       {   
          $sql="INSERT INTO customers (
                  Telephone,
                  FirstName,
                  LastName,
                  Email,
                  ZipCode,
	          SelectBrand,
                  Fins,
                  Mask,
                  Gloves,
                  RashGuard,
                  Size,
                  Comments
               )
               VALUES
               (            
                  '$Telephone',
                  '$FirstName',
                  '$LastName',
                  '$Email',
                  '$ZipCode',
                  '$SelectBrand',
                  '$Check1',
                  '$Check2',
                  '$Check3',
                  '$Check4',
		  '$Size',
                  '$Comments'                     
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //echo "<br>New record created successfully";
             $message ="<span style=\"color: blue;\">RECORD $Telephone ADDED</span><br\>";
          } 
          else                          
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $Telephone EXISTS NOT ADDED</span><br\>";
          }
                                                      
       }//end if(strlen($Telephone)>0)                      
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       } 

    ?>  

  </body>
  
</html>
