
<?php
    
    $Employee_Name = $_POST['Employee_Name'];
    $Month = $_POST['Month'];
    $Amount = $_POST['Amount'];
   
    

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "hostel_system";
    
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error(); 
    }
    else{
        $sql = "INSERT INTO salary_add (Employee_Name,Month,Amount)
      
        VALUES ('$Employee_Name','$Month','$Amount')";
        if ($conn->query($sql))
        {
            echo "New record is inserted successfully";
            echo "<script> window.location.assign('salary_display.php');</script>";

             
        }
        else
        {
            echo "Error Inserting record Witch";
        }
        $conn->close();
    }
?>
 