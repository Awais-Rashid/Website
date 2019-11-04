<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background:linear-gradient(#00bf8f,#001510);
  height: 1100px;
}

* {
  box-sizing: border-box;
  
}

/* Add padding to containers */
.container {
  padding: 25px;
  background:linear-gradient(#cb2d3e,
    #ef473a);
  margin-left: 600px;
  margin-top: 50px;
  width: 800px;
  height: 1100px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  margin: 8px 170px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form method="POST" action="save.php">
  <div class="container">
    <h1>New Employee</h1>
    <p>Employee Information</p>
    <hr>

    <label for="Full Name"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="Full_Name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Confirm  Password</b></label>
    <input type="password" placeholder="Repeat Password" name="Confirm_Password" required>
    
    <label for="Cell No"><b>Cell No</b></label>
    <input type="text" placeholder="Enter Cell No" name="Cell_No" required>

    <label for="Employee Type"><b>Employee Type</b></label>
    <input type="text" placeholder="Enter Employee Type" name="Employee_Type" required>
    
    <label for="Gender" ><b>Gender</b></label><br>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br><br>

  <label for="Date of Birth"><b>Date of Birth</b></label>
  <input type="date" placeholder="Date of Birth" name="Date_of_Birth" required>
  <br><br>
    <label for="Join Date"><b>Join Date</b></label>
    <input type="date" placeholder="Enter Join Date" name="Join_Date" required>
    <br><br>
    <label for="Salary"><b>Salary</b></label>
    <input type="text" placeholder="Enter Salary" name="Salary" required>

    <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="Full Name" required>


    <button type="submit" class="registerbtn">Save</button>
  </div>
  
</form>

</body>
</html>
