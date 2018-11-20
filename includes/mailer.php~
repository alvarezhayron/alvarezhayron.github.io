<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my mailer page which will serve as back end } 

    Due Date   : 10/31/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<?php
if(isset($_POST['submit'])) 
{ 
    $to          = "michael.robinson@cs.fiu.edu"; 
    $subject     = "Sea Gear"; 
    $name_field  = $_POST['UserName']; 
    $email_field = $_POST['UserEmail']; 
    $UserTel     = $_POST['UserTel'];  
    $option      = $_POST['MessageType']; 
    $dropdown    = $_POST['drop_down']; 
    $SubjectOther= $_POST['SubjectOther']; 
    $messagee    = $_POST['Comments'];

    //foreach($_POST['check'] as $value) 
    //{ 
    //    $check_msg .= "Yes, $value\n"; 
    //} 

    $body = " From:             $name_field\n E-Mail:            $email_field\n Tel:                  $UserTel\n Option:            $option\n Drop-Down:     $dropdown\n SubjectOther:  $SubjectOther\n Message:         $messagee\n";

    mail($to, $subject, $body); 

    include('./program4.php');
    
} 
else 
{ 
   include('./program4.php');
   
}
 
?>
