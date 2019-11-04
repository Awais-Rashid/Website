<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background:linear-gradient(#00bf8f,#001510);
  height: 800px;
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
  margin-top: 150px;
  width: 800px;
  height: 700px;
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

<form method="POST" action="salary_view.php">
  <div class="container">
    <h1>Salary Add</h1>
    <p>Employee Salary Payement</p>
    <hr>

    <label for="Employee Name"><b>Employee Name</b></label>
    <input type="text" placeholder="Enter Employee Name" name="Employee_Name" required>
    
    <label for="Month"><b>Month</b></label><br><br>
    <input type="month" placeholder="Salary Month" name="Month" required style="font-size: 20px;">
<br><br>
    <label for="Amount"><b>Amount</b></label>
    <input type="text" placeholder="Amount" name="Amount" required>
    
    

    <button type="submit" class="registerbtn">Save</button>
  </div>
  
</form>

</body>
</html>
