<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my contact us controller which will serve as back end for 
		  my contact us page} 

    Due Date   : 11/19/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->
<html> 
  <head><title>AlvarezH submit Controller</title></head>

  <body>
    <?php 
      //connecting to mysql 
      //echo "<h3>I am going to connect to mySql";

      //                                server               user         password   database     
      $connection = mysqli_connect("ocelot.aul.fiu.edu","fall18_halva023","5200111","fall18_halva023");
      if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

     else
       {  
          //echo "<br>I have connected to mySql<br>";            
             
          // Change database to another name if needed
             
          $dbName="fall18_halva023"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {
             //echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;
                   
             //access to a table                    
             $tableName = "contacts";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                 $sql = "CREATE TABLE ".$tableName."(
                        Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Email VARCHAR(30),
                        Comments VARCHAR(200)
                        )";
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error() );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db
                
       }//end if (mysqli_connect_errno()) connecting to mysql
       
       $Telephone    =     $_POST['Telephone'];
       $LastName     =     $_POST['LastName'];
       $FirstName    =     $_POST['FirstName'];
       $Email        =     $_POST['Email'];
       $Comments     =     $_POST['Comments'];

       $Telephone=trim($Telephone);
       if(strlen($Telephone)>0)           
       {   
          $sql="INSERT INTO contacts (
                  Telephone,
                  FirstName,
                  LastName,
                  Email,
                  Comments
               )
               VALUES
               (            
                  '$Telephone',
                  '$FirstName',
                  '$LastName',
                  '$Email',
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

       include('contact_us.php');








    
    ?>
  </body> 
</html>
