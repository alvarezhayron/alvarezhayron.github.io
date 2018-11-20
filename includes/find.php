<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my program 3 find page for "my shop"} 

    Due Date   : 09/26/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->
<html> 
  <head><title> alvarezH find.php </title></head>
  <body>

    <?php
      //$sql="SELECT * FROM customers ORDER BY Telephone";
           
       $sql="SELECT * FROM customers where Telephone = '$Telephone'";
             
       if ($result=mysqli_query($connection,$sql))
       {
          //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);
          
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
                   
          //printf("Result set has %d rows.\n",$rowcount);
             
                        
          while( $row = mysqli_fetch_array( $result ) )
          {
             $Telephone        = $row['Telephone'];     //primary key
             $FirstName        = $row['FirstName'];     //type="text"
             $LastName         = $row['LastName'];      //type="text"
             $Email            = $row['Email'];         //type="text"
             $ZipCode          = $row['ZipCode'];       //type="text"
             $SelectBrand      = $row['SelectBrand'];   //type="dropdown" 
             $Check1           = $row['Fins'];          //type="checkbox"
             $Check2           = $row['Mask'];          //type="checkbox" 
             $Check3           = $row['Gloves'];        //type="checkbox"
             $Check4           = $row['RashGuard'];     //type="checkbox"
             $Size             = $row['Size'];          //type="radio"
             $Comments         = $row['Comments'];      //type="textarea"          
          } 

          //printf("\ni am here in find.php\n [%s] [%s]", $Telephone, $FirstName );
          //echo "(".$Telephone." ".$FirstName.")";


          $Telephone=trim($Telephone); //take all front and back spaces out

                
          //if (mysqli_query($connection, $sql)) 
          if ( $rowcount )
          {
             $found = $Telephone;
             $message ="<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($Telephone) ==0 )           
          {
             $message ="<span style=\"color: red;\">Telephone CAN NOT BE EMPTY</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone    = "";
             $FirstName    = "";
             $LastName     = "";
             $Email        = "";
             $ZipCode      = "";
             $SelectBrand  = "";
             $Fins         = "";
             $Mask         = "";
             $Gloves       = "";
             $RashGuard    = "";
             $Size         = "";
             $Comments     = "";            
             $found        = "";  
          }
          else 
          {
             $message ="<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone    = "";
             
             //$FirstName    = "";
             //$LastName     = "";
             //$Email        = "";
             //$ZipCode      = "";
             //$SelectBrand  = "";
             //$Fins         = "";
             //$Mask         = "";
             //$Gloves       = "";
             //$RashGuard    = "";
             //$Size         = "";
             //$Comments     = "";            
             //$found        = "";            
             // for the program three i submitted this section without the comments on all but telephone i fixed it for program four         
            
          }
             
      }          
   
    ?>
 
  </body>


</html>
