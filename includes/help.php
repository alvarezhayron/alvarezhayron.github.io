<!-- ***************************************************************************************
    Author     : Hayron Alvarez  
    Course     : WEB-1 
    URL        : ocelot.aul.fiu.edu/~halva023
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 {This is my help page which will serve as front end} 

    Due Date   : 10/31/2018 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{Hayron ALvarez }..........

  **************************************************************************************** -->

<html>
  <body onload="help(); currentTime()" >
    <script>

  function help()
  { 
    // Open a new window at a specific location
    var myWindow = window.open("", "Help","width=300, height=600, scrollbars=yes,resizable=yes, left=80, top=80");    	
    // Display the purpose of each button on the form in the newly opened window 
    myWindow.document.write("<head>");
    myWindow.document.write("<title>Help</title>");
    myWindow.document.write("</head>");
    myWindow.document.write("<div>");
    myWindow.document.write("<div><h1 style='color:maroon'>* HELP * </h1></div>");
    myWindow.document.write("<hr>");
    myWindow.document.write("<div> <h2><span style='color:navy'>Buttons Purpose</span></h2></div>");
    myWindow.document.write("<div>");
    myWindow.document.write("<ul style='list-style-type:circle'>");
    myWindow.document.write("<li>\n <h3 style='color:green'>FIND.</h3>");
    myWindow.document.write("<div>Use to find a record enter the Telephone number and press the FIND button,then pass the telphone (primary key), using POST, to the table.</div><br></li>");
    myWindow.document.write("<div>If the record is found, the fields on the Data page will be filled with information about the user, and a message will appear, stating <span style='color:red'>RECORD FOUND</span>. Otherwise, a message will appear stating <span style='color:red'>RECORD NOT FOUND.</span></div>");
    myWindow.document.write("<li>\n <h3 style='color:green'>SAVE.</h3>");
    myWindow.document.write("<div>Use the Save button to add information on the database.The information will be stored in the table, and a message will appear stating <span style='color:red'>RECORD ADDED</span>. Otherwise, if the information has previously been entered, a message will appear, stating <span style='color:red'>RECORD ALREADY EXISTS.</span></div><br></li>");
    //myWindow.document.write("<br>");
    myWindow.document.write("<li>\n <h3 style='color:green'>MODIFY.</h3>");
    myWindow.document.write("<div>Use the Modify button to edit existing record on the table. to do that the telephone must be found first, then the data can be changed.</div><br></li>");
    myWindow.document.write("<div>To modify a user info, follow these steps:</div>");
    myWindow.document.write("<ol class='popup-list' type='1'>");
    myWindow.document.write("<li>Enter the user Telephone number that you want update.</li>");
    myWindow.document.write("<li>Then, press the <b>Find button</b> to search for the record .</li>");
    myWindow.document.write("<li>Next, change the data you want update</li>");
    myWindow.document.write("<li>Finally, press the <b>Modify button </b> to store the modified information.</li>");
    myWindow.document.write("</ol>");
    // myWindow.document.write("<br>");
    myWindow.document.write("<li><h3 style='color:green'>DELETE.</h3>");
    myWindow.document.write("<div>Use the Delete button to delete existing telephone . To do that, the telephone must be found, then the data can be deleted from the database.</div><br></li>");
    myWindow.document.write("<li><h3 style='color:green'>CLEAR.</h3>");
    myWindow.document.write("<div>Use the clear button to clear the data from the fields on the Data page.</div><br></li>");
    myWindow.document.write("<li><h3 style='color:green'>HELP.</h3>");
    myWindow.document.write("<div> Help button to discover the purpose and functionality of the buttons and using JavaScript</div><br></li>");
    myWindow.document.write("<li><h3 style='color:green'>ABOUT.</h3>");
    myWindow.document.write("<div>The about button will give a brief exlanation of the website and all of its functionalities</div><br></li>");
    myWindow.document.write("<li><h3 style='color:green'>Email_Me.</h3>");
    myWindow.document.write("<div>The Email_Me button allows the user to send the creator and email regarding any concerns or comments</div><br></li>")
    myWindow.document.write("<li><h3 style='color:green'>Contact_US.</h3>");
    myWindow.document.write("<div>The Contact_US button allows the user to add a contact to a contacts table in the database</div><br></li>")
    myWindow.document.write("<li><h3 style='color:green'>Leads.</h3>");
    myWindow.document.write("<div>The Leads button allows the user to navigate and see all contacts in the contacts table</div><br></li>")
    myWindow.document.write("</ul>");
    myWindow.document.write("</div>");
   
  }

  </script>


  </body>

</html>
