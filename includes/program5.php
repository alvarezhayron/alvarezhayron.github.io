<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my program Five page which will diaplay the "Shop"} 

    Due Date   : 11/19/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<html>
  <head>
    <title>Alvarez Hayron Program5 </title>    
  </head>

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
    <form method="post" action="Controller5.php">
      <!-- Table for company name-->
      <table height="5%" width="100%">
        <td align="middle">
          <font size="5"> Sea Gear <br>&nbsp;  </font> 
        </td>
      </table>

      <!-- header --> 
      <?php include( 'mainMenu.php' ); ?><br><br>
      <!-- table for the user input on the left  -->
      <!-- Text input --> 
      <table width ="100%" >
        <table width="43%"  style="float: left">
          <tr> <td width=35%></td>
            <td width="30%">
              <div class="tooltip">Telephone&nbsp; 
                <span class="tooltiptext"><font color="white">REQUIRED</font></span>
               </div>
            </td>
            <td><input type="text" placeholder="Telephone" size="35" name="Telephone" maxlength="256" value="<?php echo $Telephone ?>"> </td>
          </tr>

          <tr> <td width=10%></td>
            <td width="15%">
    	      <div class="tooltip">Last Name
		<span class="tooltiptext"> <font color="white">Enter Last Name</font></span>
  	      </div>
            </td>
            <td><input type="text" placeholder="LastName" size="35" name="LastName" maxlength="256" value="<?php echo $LastName ?>"> </td>
          </tr>

          <tr> <td width=10%></td>
            <td width="15%">
	      <div class="tooltip">First Name
	        <span class="tooltiptext"> <font color="white">Enter First Name</font></span>
	      </div>
	    </td>
            <td><input type="text" placeholder="First Name" size="35" name="FirstName" maxlength="256" value="<?php echo $FirstName ?>"> </td>
          </tr>

          <tr> <td width=10%></td>
            <td width="15%">
              <div class="tooltip">Email
                <span class="tooltiptext"><font color="white">Enter Your Email</font></span>
	      </div> 
	    </td>
            <td><input type="text" placeholder="Email" size="35" name="Email" maxlength="256"value="<?php echo $Email ?>"> </td>
          </tr>

          <tr> <td width=10%></td>
            <td width="15%">
	      <div class="tooltip">ZipCode
	        <span class="tooltiptext"><font color="white">Enter Your ZipCode</font></span>
	      </div>
            </td>
            <td><input type="text" placeholder="Zip-Code" size="35" name="ZipCode" maxlength="256" value="<?php echo $ZipCode ?>"> </td>
          </tr>
        </table>

        <!-- table for user input on the right -->
        <table  width ="50%"  >
	  <!-- drop down -->
          <tr> 
            <td>
              <div class="tooltip">&nbsp; Select Brand &nbsp;
	        <span class="tooltiptext"><font color="white">Select Preffered Brand</font></span>
	      </div>
              <select name="SelectBrand" size ="1" style="width:15%;">
                <option value="Riffe"   <?php if ($SelectBrand == "Riffe")    echo selected ?>>Riffe </option>
	        <option value="Omer"    <?php if ($SelectBrand == "Omer")     echo selected ?>>Omer </option>
	        <option value="Beuchat" <?php if ($SelectBrand == "Beuchat")  echo selected ?>>Beuchat </option> 
	        <option value="SporaSub"<?php if ($SelectBrand == "SporaSub") echo selected ?>>SporaSub </option>
	        <option value="Mares"   <?php if ($SelectBrand == "Mares")    echo selected ?>>Mares </option> 
              </select>
            </td> 
          </tr>
	
	  <!-- Check boxes, the tr below will skip over a row--> 
          <tr> <td>&nbsp;</td> </tr>
	  <tr>
	    <td>
	      <div class="tooltip">&nbsp; Select Gear &nbsp;&nbsp;
	        <span class="tooltiptext"><font color="white">Select all gear to be ordered</font></span>
	      </div>
              <input type="checkbox" name="Check1" value="Fins"  <?php if ($Check1 == "Fins") echo checked;?>>Fins &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="Checkbox" name="Check2" value="Mask"  <?php if ($Check2 == "Mask") echo checked;?>>Mask &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="Checkbox" name="Check3" value="Gloves"<?php if ($Check3 == "Gloves") echo checked;?>>Gloves &nbsp; &nbsp; &nbsp; &nbsp;
              <input type="Checkbox" name="Check4" value="Rash-Guard"  <?php if ($Check4 == "Rash-Guard") echo checked;?>>Rash-Guard 
	    </td>
	  </tr>
       
          <!-- Radio buttons, the tr below will skip over a row -->
	  <tr><td>&nbsp;</td></tr>
          <tr>
	    <td>
              <div class="tooltip">&nbsp; Select Size &nbsp; &nbsp;
	        <span class="tooltiptext"><font color="white">Select One Size</font></span>
	      </div>
	      <input type="radio"<?php if ($Size == "Small")   echo "checked"; ?> name="Size" value="Small">Small &nbsp; &nbsp;&nbsp;
	      <input type="radio"<?php if ($Size == "Medium")  echo "checked"; ?> name="Size" value="Medium">Medium &nbsp;&nbsp; 
	      <input type="radio"<?php if ($Size == "Large")   echo "checked"; ?> name="Size" value="Large">Large &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="radio"<?php if ($Size == "X-Large") echo "checked"; ?> name="Size" value="X-Large">X-Large &nbsp; &nbsp;
            </td>
          </tr>
     
        <!-- Text area, the tr below will skip over a row --> 
        <tr><td>&nbsp;</tr></td>
          <tr>
	    <!-- table for text area -->
	    <table  width="100%">
	      <tr>
	        <td width="43.65%">&nbsp;</td>
      	          <td valign="top">
                    <div class="tooltip">Comments &nbsp &nbsp &nbsp
		      <span class="tooltiptext"><font color="white">Enter any additional comments about your order</font></span>
		    </div>
                  </td>
	        <td>
	          <textarea placeholder="Comments" name="Comments"  rows="5" cols="42"><?php echo$Comments;?></textarea>
	        </td><td width="30%"></td>
	      </tr>
	    </table>
	  </tr>
        </table><br>
      
        <!-- this new table is for the $message only -->
        <table  width="100%">
          <tr>
	    <td align="center"> 
              &nbsp;<?php echo $message ?> 
	    </td> 
	  </tr>
        </table><br>

      <!-- this new table is for input buttons --> 
        <table  width="100%">
	  <tr>
	    <td align="center">    
             <input type="submit" value="Find"       name="Find">          
             <input type="submit" value="Modify"     name="Modify">
             <input type="submit" value="Save"       name="Save">
             <input type="submit" value="Delete"     name="Delete">
             <input type="submit" value="Clear"      name="Clear">
	     <input type="submit" value="Help"       name="Help">
             <input type="submit" value="About"      name="About">
 	     <input type="submit" value="Email_Me"   name="Email_Me">
	     <input type="submit" value="Contact_Us" name="Contact_Us">
	     <input type="submit" value="Leads"      name="Leads">
             <input type="hidden" name="found"  value="<?php echo $found ?>" >
	    </td>
	  </tr> 
        </table><br><br>
      </table>
    
       <!-- header --> 
       <?php include( 'mainMenu.php' ); ?> 
    </form>
  </body> 
</html>
