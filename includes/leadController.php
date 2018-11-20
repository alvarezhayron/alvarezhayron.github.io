<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my leads controller which will serve as back end for leads
		  and do the functions that leads says} 

    Due Date   : 11/19/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->
<html>
  <head><title>AlvarezH leadController</title><head>

  <body>
     <?php
    
      //extact variable to track array's location
      $location=$_POST['location'];
      $location=(int)$location;
      
      //connect to Host
      $connection = mysqli_connect("ocelot.aul.fiu.edu","fall18_halva023","5200111","fall18_halva023");
    
      //Extract button pressed, If no button is pressed execute First button code.
      if($_POST['Last'])
      {
        //here Telephone is the primary key, 
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //find the total number of rows and sets the location to last row.
          $rowcount=mysqli_num_rows($results);
          $location=$rowcount-1;
         
          //data_seek command moves the memory pointer in SQL table objects.
          //location must be INT or LONG.
          mysqli_data_seek($results, $location);
            
          $row=mysqli_fetch_assoc($results);
            
          $Telephone      = $row['Telephone'];
          $FirstName      = $row['FirstName'];
          $LastName       = $row['LastName'];
	  $Email          = $row['Email'];
          $Comments       = $row['Comments'];    
          $message="<span style=\"color: blue;\">Last Contact</span><br\>";  
        }//end if ($results=mysqli_query($connection,$sql)) 
      }//end if($_POST['Last'])
      
      
      else if($_POST['Previous'])
      {
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //Decrement location only if it is above the lowest possible value.
          if ($location >0)    
          {
            $location--;
          }                           
          mysqli_data_seek($results, $location);
          $row=mysqli_fetch_assoc($results);
            
          $Telephone      = $row['Telephone'];
          $FirstName      = $row['FirstName'];
          $LastName       = $row['LastName'];
	  $Email          = $row['Email'];
          $Comments       = $row['Comments']; 
	  $message        = "<span style=\"color: blue;\">Previous Contact</span><br\>" ;  
        }//end if ($results=mysqli_query($connection,$sql))
      }//end else if($_POST['Previous'])
      
      
      else if($_POST['Next'])
      {
        $sql="SELECT * FROM contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //total number of rows for the upper limit of the search function.
          $rowcount=mysqli_num_rows($results);
              
          //Increment location only if it is below the highest possible value.
          if ($location <$rowcount-1)    
          {
            $location++;
          } 
	                            
                        
          mysqli_data_seek($results, $location);
          $row=mysqli_fetch_assoc($results);
            
          $Telephone      = $row['Telephone'];
          $FirstName      = $row['FirstName'];
          $LastName       = $row['LastName'];
	  $Email          = $row['Email'];
          $Comments       = $row['Comments'];        
          $message        = "<span style=\"color: blue;\">Next Contact</span><br\>";

          if (!($location <$rowcount-1))
          {
            $message = "<span style=\"color: blue;\">Last Contact</span><br\>";
          }
        }//end if ($results=mysqli_query($connection,$sql))
      }//end else if($_POST['Next'])
    
    
      else //get First record
      {
        //Resets location to position 0, and grab the first record in the table.
        $location=0;    
        $sql="SELECT * FROM contacts order by Telephone ASC limit 1";
             
        if ($result=mysqli_query($connection,$sql))
        {
          $row = mysqli_fetch_array( $result );
                
          $Telephone      = $row['Telephone'];
          $FirstName      = $row['FirstName'];
          $LastName       = $row['LastName'];
	  $Email          = $row['Email'];
          $Comments       = $row['Comments'];  
          $message        = "<span style=\"color: blue;\">First Contact</span><br\>";      
        }//end if ($result=mysqli_query($connection,$sql))
      
      }//end else
    
      mysqli_close($connection); //close sql connection
      include('leads.php');
    ?>




  </body>



</html>
