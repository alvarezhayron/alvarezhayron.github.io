<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my program 3 modify page for "my shop"} 

    Due Date   : 10/15/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->
<html>
  <head><title> alvarezH modify.php </title></head>
  <body>
  
    <?php
       
       $found = $_POST['found']; 
	

       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       {             
                  
          $query = "UPDATE customers 
                    SET Telephone     =  '$Telephone', 
                        FirstName     =  '$FirstName',  
                        LastName      =  '$LastName',
                        Email         =  '$Email',
                        ZipCode       =  '$ZipCode',
                        SelectBrand   =  '$SelectBrand',
                        Fins          =  '$Check1',
                        Mask          =  '$Check2',
                        Gloves        =  '$Check3',
                        RashGuard     =  '$Check4',
                        Size          =  '$Size',
                        Comments      =  '$Comments'  
                                 
                   WHERE Telephone = '$Telephone'";
                       
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";
          }   
          else
          {
             //echo "Problem updating record. MySQL Error: " . mysqli_error($connection);
             $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
          }
             
       }   
       else
       {
          $message ="<span style=\"color: red;\">FIND THE RECORD BEFORE MODIFING IT</span><br\>";
       }
           
    ?>   

    
  </body>

</html>
