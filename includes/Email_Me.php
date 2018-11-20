<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my email me page which will serve as front end} 

    Due Date   : 10/31/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<html>
<title>Contact Us</title>

   
    <?php include('../includes/mainMenu.php')?>

 <center>
 <table border="1" cellpadding="0" cellspacing="0" width="75%" bgcolor="#CCCCCC" height="366" BORDERCOLOR=BLUE>
  <tr>
   <td width="75%" height="57"  colspan="2"  bgcolor="#F2F5A9" >
	
    <!--div align="center"><b><font size="4" color="#0000FF" bgcolor=yellow>Contact Me</font></b></div-->

    <p align="center">
	<b><font size="3" color="black" bgcolor=yellow>Sea Gear</font><b><br>
	200SW South Dixie Highway <br>
	Telephone 305-555-5555<br>
	Cutler Bay, Florida, USA 33157</a><br>
	<a href="http://ocelot.aul.fiu.edu/~halva023/includes/program4.php">Sea Gear</a><br>
    </p>

    <br>

    <center>
    <form method="POST" action="mailer.php">
        <p><strong>What kind of comment would you like to send?</strong></p>

        <input type="radio" checked name="MessageType" value="Question">Question 
        <input type="radio" name="MessageType" value="Problem">Problem
        <input type="radio" name="MessageType" value="Suggestion">Suggestion
        <br> 
        <p><strong>What about us do you want to comment on?</strong></p>
 
        <select name="drop_down" size="1">
            <option selected>Web-Site</option>
            <option>Availability</option>
            <option>Sizes</option>
        </select>

        Other: <input type="text" size="26" maxlength="256" name="SubjectOther">

        <p><strong>Enter your comments in the space provided below:</strong></p>

        <textarea name="Comments" rows="5" cols="42"></textarea><br><br>

        <strong>Tell us how to get in touch with you:</strong><br><br>

        <table>
          <tr><td width="45">&nbsp;Name     </td> <td><input type="text" size="35" maxlength="256" name="UserName"> </td></tr>
          <tr><td width="45">&nbsp;E-mail   </td> <td><input type="text" size="35" maxlength="256" name="UserEmail"></td></tr>
          <tr><td width="45">&nbsp;Telephone</td> <td><input type="text" size="35" maxlength="256" name="UserTel">  </td></tr>
        </table>
    
        <br>
         
        <input type="submit" value="Submit" name="submit"> 
        <input type="reset"  value="Clear Form">
        <br>
    </form>

   </td>
  </tr>
 </table>
 </center>

</html> 
