
<?php
    
    $Full_Name = $_POST['Full_Name'];
    $password = $_POST['password'];
    $Confirm_Password = $_POST['Confirm_Password'];
    $Cell_No = $_POST['Cell_No'];
    $Employee_Type = $_POST['Employee_Type'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Join_Date = $_POST['Join_Date'];
    $Salary = $_POST['Salary'];
    $gender = $_POST['gender'];
    $Address = $_POST['Address'];
    

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "hostel_system";
    
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error(); 
    }
    else{
        $sql = "INSERT INTO employee_record (Full_Name,password, Confirm_Password,Cell_No,Employee_Type,Date_of_Birth,Join_Date,Salary,gender,Address)
      
        VALUES ('$Full_Name','$password','$Confirm_Password','$Cell_No','$Employee_Type','$Date_of_Birth','$Join_Date','$Salary','$gender','$Address')";
        if ($conn->query($sql))
        {
            echo "New record is inserted successfully";
            echo "<script> window.location.assign('display.php');</script>";

             
        }
        else
        {
            echo "Error Inserting record Witch";
        }
        $conn->close();
    }
?>
 