<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my Main menu page which will display 
		  users input} 

    Due Date   : 09/26/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<html>
  <head> 
    <title>alvarezH Controller2.php</title>
  </head>

    <body>
      <?php
	echo 'This is Controller2.php<br><br>';
	// retrieve information and store into global variables 
        $PrimaryKey = $_POST['PrimaryKey'];
	$LastName = $_POST['LastName'];
	$FirstName = $_POST['FirstName'];
	$Email = $_POST['Email'];
	$Telephone = $_POST['Telephone'];
	$SelectBrand = $_POST['SelectBrand'];
	$Check1 = $_POST['Check1'];
	$Check2 = $_POST['Check2'];
	$Check3 = $_POST['Check3'];
	$Check4 = $_POST['Check4'];
	$Size = $_POST['Size'];
	$Comments = $_POST['Comments'];

	//print the user input 
	echo 'Primary Key: '. $PrimaryKey.'<br>';
	echo 'Last Name: '. $LastName.'<br>';
	echo 'First Name: '.$FirstName.'<br>';
	echo 'Email: '.$Email.'<br>';
	echo 'Telephone: '.$Telephone.'<br>';
	echo 'Brand: '.$SelectBrand.'<br>';
	echo 'Gear selected: '.$Check1.' ';
	echo $Check2.' ';
	echo $Check3.' ';
	echo $Check4.'<br>';
	echo 'Size Seleted: '.$Size.'<br>';
	echo 'Comments: '.$Comments.'<br><br>';
	
	//find out what input button user selected 
	if ( $_POST['Find'] )
	{
	    echo 'You have selected the find button';
	}
	else if ( $_POST['Modify'] )
	{
	    echo 'You have selected the Modify button';
	}
	else if ($_POST['Save'] )
	{ 
	    echo 'You have selected the Save button';
	}
	else if ($_POST['Delete'] )
	{
	    echo 'You have selected the Delete button';
	}
	else 
	{
	    echo 'I have no idea what button you pressed';
	}
	

      ?>
    </body>
</html>
