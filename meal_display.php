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

    $ret = mysqli_query($conn,"SELECT * FROM meal");
    echo "<table border='1'>";
        echo "<tr>";
     
            echo "<th> Student_Name </th>";
            echo "<th> Meal_Type </th>";
            echo "<th> No_of_Meal </th>";
            echo "<th> Date </th>";
            echo "<th> Time </th>";
            



            while($row=mysqli_fetch_array($ret))
            {
                echo "<tr>";
                echo "<tr>";
                echo "<tr>";

                


                     echo "<td>" .$row ['Student_Name']. "</td>";
                    echo "<td>" .$row ['Meal_Type']. "</td>";
                    echo "<td>" .$row ['No_of_Meal']. "</td>";
                    echo "<td>" .$row ['Date']. "</td>";
                    echo "<td>" .$row ['Time']. "</td>";

                echo "</tr>";
                echo "</tr>";
                echo "</tr>";

            }
        echo "</tr>";
    echo "</table>";
    $conn->close();
?>