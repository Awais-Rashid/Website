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

    $ret = mysqli_query($conn,"SELECT * FROM employee_record");
    echo "<table border='1'>";
        echo "<tr>";
     
            echo "<th> Full_Name </th>";
            echo "<th> password </th>";
            echo "<th> Confirm_Password </th>";
            echo "<th> Cell_No </th>";
            echo "<th> Employee_Type </th>";
            echo "<th> Date_of_Birth </th>";
            echo "<th> Join_Date </th>";
            echo "<th> Salary </th>";
            echo "<th> gender </th>";
            echo "<th> Address </th>";
            
            



            while($row=mysqli_fetch_array($ret))
            {
                echo "<tr>";
                echo "<tr>";
                echo "<tr>";

                


                     echo "<td>" .$row ['Full_Name']. "</td>";
                    echo "<td>" .$row ['password']. "</td>";
                    echo "<td>" .$row ['Confirm_Password']. "</td>";
                    echo "<td>" .$row ['Cell_No']. "</td>";
                    echo "<td>" .$row ['Employee_Type']. "</td>";
                    echo "<td>" .$row ['Date_of_Birth']. "</td>";
                    echo "<td>" .$row ['Join_Date']. "</td>";
                    echo "<td>" .$row ['Salary']. "</td>";
                    echo "<td>" .$row ['gender']. "</td>";
                    echo "<td>" .$row ['Address']. "</td>";

                echo "</tr>";
                echo "</tr>";
                echo "</tr>";

            }
        echo "</tr>";
    echo "</table>";
    $conn->close();
?>