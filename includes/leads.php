<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my program Three page which will diaplay the "Shop"} 

    Due Date   : 11/19/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->
<html>
  <head><title>AlvarezH leads</title><head>
  <style>
    .tooltip 
    {
      position: relative;
      display: inline-block;

    }

    .tooltip .tooltiptext 
    {
      visibility: hidden;
      width: 120px;
      background-color: green;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -60px;
      opacity: 0;
      transition: opacity 1s;
    }


    .tooltip .tooltiptext .tooltip-left 
    {
      top: -5px;
      bottom:auto;
      right: 128%;  
    }



    .tooltip .tooltiptext::after 
    {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: red transparent transparent transparent; /*arrow*/
    }

    .tooltip:hover .tooltiptext 
    {
      visibility: visible;
      opacity: 1;
    }

  </style>

<!-- this table is for the time and date -->  
  <table>
    <tr> <td width="19%"></td>  
      <script>
  
        function currentTime()
        {   
          var today    = new Date();
          var hour     = today.getHours();
          var minutes  = today.getMinutes();
          var sec      = today.getSeconds();
	
          minutes = checkTime(minutes);
          sec     = checkTime(sec);

          document.getElementById('txt').innerHTML = "CurrentTime : "+hour+":"+minutes+":"+sec; 

          var t = setTimeout(function(){currentTime()},500); 

          }

          function checkTime(i)
          {
            if (i<10) {i = "0" + i};//add zero in front of numbers <10
            return i; 
          }
      </script> 


      <body onload="currentTime()">
        <td> 
          <script>  
            loggedInTime();
            
            var temp1;
      
            function loggedInTime( temp )
            {
              var tiempo = new Date();  
              var temp2 =  "logged in at &nbsp; &nbsp;: " + tiempo;
              temp1 = temp2;
              document.write( temp2 );
            }

            currentTime(); 
          </script>
        </td> 
        <td width= "19%"></td> 
	<td> <div id="txt"></div> </td> 
      </body>
    </tr>
  </table> 
  
  <body>
    <form method="post" action="leadController.php">
      <!-- table for company name and drop down menu --> 
      <table width="100%" >
        <td align="middle"><font size="5"><br>Sea Gear<br><br></font></td> 
      </table>

      <?php include( 'mainMenu.php' ); ?>  

      <!-- table for contact us text--> 
      <table width="100%" >
        <td align="middle"><font size="4">Contact_Us<br><br><br></font></td>  
      </table>

      <!-- main table for user input--> 
      <table width="100%" >

        <tr>
          <td width="38%"></td>
	  <td align="left" width="8%">Telephone </td>
          <td>
              <input type="text" name="Telephone"  size="35"  maxlength="256" value="<?php echo $Telephone ?>">
          </td>
        </tr> 


        <tr>
          <td width="38%"></td>
	  <td align="left" width="8%">Last Name </td>
          <td>
            <input type="text" name="LastName" size="35"  maxlength="256" value="<?php echo $LastName ?>">
          </td>
        </tr> 


        <tr>
          <td width="38%"></td>
	  <td align="left" width="8%">First Name</td>
	  <td>
            <input type="text" name="FirstName" size="35"  maxlength="256" value="<?php echo $FirstName ?>">
          </td>
        </tr> 

        <tr>
          <td width="38%"></td>
	  <td align="left" width="8%">Email </td>
          <td>
            <input type="text" name="Email" size="35"  maxlength="256" value="<?php echo $Email ?>">
          </td>
        </tr> <tr><td> &nbsp</td></tr><tr><td> &nbsp</td></tr>

        <tr>
          <td width="38%"></td>
          <td align ="left" width= "8%" valign="top">Comments</td>
          <td>
            <textarea placeholder="Comments" name="Comments" rows="5" cols="42"><?php echo $Comments; ?></textarea>
          </td>
        <tr>

      </table>

      <!-- table for submit comment display area --> 
      <table width="100%"> 
        <td align="middle"> <br><br> <?php echo $message ?><br><br></td>
      <table> 

      <!-- table for submit buttons --> 
      
      <table width="100%">
	<td align="middle">
          <input type="submit" name="First"     value="FIRST">
	  <input type="submit" name="Next"      value="NEXT">
	  <input type="submit" name="Previous"  value="PREVIOUS">
	  <input type="submit" name="Last"      value="LAST">
          <input type="hidden" name="location"  value="<?php echo $location ?>">
        </td>	
      </table>
  
    </form>
  </body>








<html>
