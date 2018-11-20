<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my controller three page which will serve as back end} 

    Due Date   : 10/15/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<html>
  <head>
    <title>AlvarezH Program3 </title>
       
  </head> 
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
             $tableName = "customers";
                      
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
                        ZipCode VARCHAR(5),
                        SelectBrand VARCHAR(8),
                        Fins VARCHAR(4), 
                        Mask VARCHAR(4),
                        Gloves VARCHAR(6),
                        RashGuard VARCHAR(10),
                        Size VARCHAR(30),
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
      $ZipCode      =     $_POST['ZipCode'];
      $SelectBrand  =     $_POST['SelectBrand'];
      $Check1       =     $_POST['Check1'];
      $Check2       =     $_POST['Check2'];
      $Check3       =     $_POST['Check3'];
      $Check4       =     $_POST['Check4'];
      $Size         =     $_POST['Size'];
      $Comments     =     $_POST['Comments'];  
      $found        =     $_POST['found']; 	
      
      
      if ( $_POST['Find'] )
       { 
          include('find.php');
       }
       else if ( $_POST['Save'] )
       { 
          include('save.php');
       }
       else if ( $_POST['Modify'] )
       {  
          include('modify.php');  
       }
       else if ( $_POST['Delete'] )
       { 
          include('delete.php');
       }
       else if ( $_POST['Clear'] )
       {
          include('clear.php');
       }
       else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
       }

       mysqli_close($connection);     



      include( "program3.php" );

    ?>
  </body> 
</html>
