<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my program Three page which will diaplay the "Shop"} 

    Due Date   : 10/15/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<html>
  <head>
    <title>AlvarezHayron Program4 </title>
       
  </head> 
  <body>
    <form method="post" action="Controller3.php">
      <!-- Table for company name-->
      <table height="5%" width="100%">
        <td align="middle">
          <font size="5"> Sea Gear </font> 
        </td>
      </table>

      <!-- header --> 
      <?php include( 'mainMenu.php' ); ?><br><br>
        

      <!-- table for the user input on the left  -->
      <!-- Text input --> 
      <table width ="100%" >
        <table width="43%"  style="float: left">
          <tr> <td width=35%></td>
            <td width="30%">Telephone</td>
            <td><input type="text" size="35" name="Telephone" maxlength="256" value="<?php echo $Telephone ?>"> </td></tr>
          <tr> <td width=10%></td>
            <td width="15%">Last Name</td>
            <td><input type="text" size="35" name="LastName" maxlength="256" value="<?php echo $LastName ?>"> </td></tr>
          <tr> <td width=10%></td>
            <td width="15%">First Name</td>
            <td><input type="text" size="35" name="FirstName" maxlength="256" value="<?php echo $FirstName ?>"> </td></tr>
          <tr> <td width=10%></td>
            <td width="15%">Email</td>
            <td><input type="text" size="35" name="Email" maxlength="256"value="<?php echo $Email ?>"> </td></tr>
          <tr> <td width=10%></td>
            <td width="15%">ZipCode</td>
            <td><input type="text" size="35" name="ZipCode" maxlength="256" value="<?php echo $ZipCode ?>"> </td></tr>
        </table>

        <!-- table for user input on the right -->
        <table  width ="50%"  >
	  <!-- drop down -->
          <tr> 
            <td>&nbsp; Select Brand &nbsp;
              <select name="SelectBrand" size ="1" style="width:15%;">
                <option value="Riffe" <?php if ($SelectBrand == "Riffe") echo selected ?>> Riffe </option>
	        <option value="Omer" <?php if ($SelectBrand == "Omer") echo selected ?>> Omer </option>
	        <option value="Beuchat" <?php if ($SelectBrand == "Beuchat") echo selected ?>>Beuchat </option> 
	        <option value="SporaSub" <?php if ($SelectBrand == "SporaSub") echo selected ?>>SporaSub </option>
	        <option value="Mares" <?php if ($SelectBrand == "Mares") echo selected ?>>Mares </option> 
              </select>
            </td> 
          </tr>
	
	  <!-- Check boxes, the tr below will skip over a row--> 
          <tr> <td>&nbsp;</td> </tr>
	  <tr>
	    <td>&nbsp; Select Gear &nbsp;&nbsp;
              <input type="checkbox" name="Check1" value="Fins"  <?php if ($Check1 == "Fins") echo checked;?>>Fins &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="Checkbox" name="Check2" value="Mask"  <?php if ($Check2 == "Mask") echo checked;?>>Mask &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="Checkbox" name="Check3" value="Gloves"<?php if ($Check3 == "Gloves") echo checked;?>>Gloves &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="Checkbox" name="Check4" value="Rash-Guard"  <?php if ($Check4 == "Rash-Guard") echo checked;?>>Rash-Guard 
	    </td>
	  </tr>
       
          <!-- Radio buttons, the tr below will skip over a row -->
	  <tr><td>&nbsp;</td></tr>
          <tr>
	    <td>&nbsp; Select Size &nbsp; &nbsp;
	      <input type="radio"<?php if ($Size == "Small") echo "checked"; ?> name="Size" value="Small">Small &nbsp; &nbsp;&nbsp;
	      <input type="radio"<?php if ($Size == "Medium") echo "checked"; ?> name="Size" value="Medium">Medium &nbsp;&nbsp; 
	      <input type="radio"<?php if ($Size == "Large") echo "checked"; ?> name="Size" value="Large">Large &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
      	        <td valign="top">Comments &nbsp &nbsp &nbsp</td>
	        <td>
	          <textarea name="Comments"  rows="5" cols="42"><?php echo$Comments;?></textarea>
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
             <input type="submit" value="Find"   name="Find">          
             <input type="submit" value="Modify" name="Modify">
             <input type="submit" value="Save"   name="Save">
             <input type="submit" value="Delete" name="Delete">
             <input type="submit" value="Clear" name="Clear">
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
