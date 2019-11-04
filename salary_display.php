<!DOCTYPE html>
<html >
<head>
</head>
</html>
<?php
    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "hostel_system";
        
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

    $ret = mysqli_query($conn,"SELECT * FROM salary_add");
    echo "<table border='1'>";
        echo "<tr>";
     
            echo "<th> Employee_Name </th>";
            echo "<th> Month </th>";
            echo "<th> Amount </th>";
            
            



            while($row=mysqli_fetch_array($ret))
            {
                echo "<tr>";
                echo "<tr>";
                echo "<tr>";

                


                     echo "<td>" .$row ['Employee_Name']. "</td>";
                    echo "<td>" .$row ['Month']. "</td>";
                    echo "<td>" .$row ['Amount']. "</td>";

                echo "</tr>";
                echo "</tr>";
                echo "</tr>";

            }
        echo "</tr>";
    echo "</table>";
    $conn->close();
?>