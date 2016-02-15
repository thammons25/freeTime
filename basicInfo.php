
<!-- THIS IS WHERE YOU ARE BROUGHT IF YOU CLICK 'REGISTER' ON THE FIRST PAGE -->
<!-- CONSIDER IT AS PAGE 2 -->
<!-- PAGE LOADS IN RESPONSE TO INDIVIDUAL WISHING TO CREATE AN ACCOUNT -->
<!-- CSS: ./basicInfoOne.css -->
<!-- MAKE SURE CSS AND HTML ARE IN SAME FOLDER  -->

<html>
  <head>
    <title> idk </title>
    <link rel = "stylesheet" type = "text/css" href = "./basicInfo.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
    <script language = "JavaScript">
      function heyWorld()
      {
        alert("hello, world!");
      }
    <!--
    //IF YOU NEED JS FUNCTIONS PUT THEM 
      //HERE
    //-->
    </script>
  </head>
  <body>
    <header>
      <h1>Hello, World!</h1>  
    </header> 
    <form action="###" method="post" id="###">
      <h2>REGISTER NEW ACCOUNT</h2>
      <div id="topForm">
      <textarea name="firstName" placeholder="First Name"></textarea> 
     </div> 
     <div>
      <textarea name="lastName" placeholder="Last Name"></textarea> 
     </div>
     <div>
      <textarea name="email" placeholder="Email"></textarea>  
     </div> 
     <div>
      <textarea name="userName" placeholder="Username"></textarea>  
     </div>
     <div>
      <textarea name="address" placeholder="Address"></textarea>  
     </div>  
     <div id="gender">
      <span class="title">Gender:</span> 
          <input type="radio" name="gender" value="male" checked="checked"/> Male
          <input type="radio" name="gender" value="female" /> Female
     </div>
     <div id="birthday"> 
      <span class="title">Birthday:</span>
            <select name="yearOfBirth">
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">March</option>
              <option value="april">April</option>
              <option value="may">May</option>
              <option value="june">June</option>
              <option value="july">July</option>
              <option value="august">August</option>
              <option value="september">September</option>
              <option value="october">October</option>
              <option value="november">November</option>
              <option value="december">December</option>
        </select>
     </div> 
     <div>
      <input type="submit" name="submit" value="submit" id="submit"/>
     </div> 
    </form>
    <footer>
      <p>Thomas Hammons & Emma Phillips &copy; 2016</p>
    </footer>
  </body> 
</html>
