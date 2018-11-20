<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my program two page which will diaplay the "Shop"} 

    Due Date   : 09/26/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<html>
  <head>
    <title>AlvarezH Program2 </title>
       
  </head> 
  <body> 
    <form method="post" action="Controller2.php">
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
            <td width="30%">Primary Key</td>
            <td><input type="text" size="35" name="PrimaryKey" maxlength="256"> </td></tr>
          <tr> <td width=10%></td>
            <td width="15%">Last Name</td>
            <td><input type="text" size="35" name="LastName" maxlength="256"> </td></tr>
          <tr> <td width=10%></td>
            <td width="15%">First Name</td>
            <td><input type="text" size="35" name="FirstName" maxlength="256"> </td></tr>
          <tr> <td width=10%></td>
            <td width="15%">Email</td>
            <td><input type="text" size="35" name="Email" maxlength="256"> </td></tr>
          <tr> <td width=10%></td>
            <td width="15%">Telephone</td>
            <td><input type="text" size="35" name="Telephone" maxlength="256"> </td></tr>
        </table>

        <!-- table for user input on the right -->
        <table  width ="50%"  >
	  <!-- drop down -->
          <tr> 
            <td>&nbsp; Select Brand &nbsp;
              <select name="SelectBrand" size ="1" style="width:15%;">
                <option>Riffe </option>
	        <option>Omer </option>
	        <option>Beuchat </option> 
	        <option>SporaSub </option>
	        <option>Mares </option> 
              </select>
            </td> 
          </tr>
	
	  <!-- Check boxes, the tr below will skip over a row--> 
          <tr> <td>&nbsp;</td> </tr>
	  <tr>
	    <td>&nbsp; Select Gear &nbsp;&nbsp;
              <input type="checkbox" name="Check1" value="Fins">Fins &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="Checkbox" name="Check2" value="Mask">Mask &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="Checkbox" name="Check3" value="Gloves">Gloves &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="Checkbox" name="Check4" value="Rash-Guard">Rash-Guard 
	    </td>
	  </tr>
       
          <!-- Radio buttons, the tr below will skip over a row -->
	  <tr><td>&nbsp;</td></tr>
          <tr>
	    <td>&nbsp; Select Size &nbsp; &nbsp;
	      <input type="radio" name="Size" value="Small">Small &nbsp; &nbsp;&nbsp;
	      <input type="radio" name="Size" value="Medium">Medium &nbsp;&nbsp; 
	      <input type="radio" name="Size" value="large">Large &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	      <input type="radio" name="Size" value="X-Large">X-Large &nbsp; &nbsp;
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
	          <textarea name="Comments" rows="5" cols="42"></textarea>
	        </td><td width="30%"></td>
	      </tr>
	    </table>
	  </tr>
        </table><br>
      
        <!-- this new table is for the $message only -->
        <table  width="100%">
          <tr>
	    <td align="center"> 
              $message 
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
             <input type="reset"  value="ClearScreen">
	    </td>
	  </tr> 
        </table><br><br>
      </table>
    
       <!-- header --> 
       <?php include( 'mainMenu.php' ); ?> 
    </form>
  </body> 
</html>
