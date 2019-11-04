
<?php
    
    $Student_Name = $_POST['Student_Name'];
    $Meal_Type = $_POST['Meal_Type'];
    $No_of_Meal = $_POST['No_of_Meal'];
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
   
    

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "hostel_system";
    
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error(); 
    }
    else{
        $sql = "INSERT INTO meal (Student_Name,Meal_Type,No_of_Meal,Date,Time)
      
        VALUES ('$Student_Name','$Meal_Type','$No_of_Meal','$Date','$Time')";
        if ($conn->query($sql))
        {
            echo "New record is inserted successfully";
            echo "<script> window.location.assign('meal_display.php');</script>";

             
        }
        else
        {
            echo "Error Inserting record Witch";
        }
        $conn->close();
    }
?>
 