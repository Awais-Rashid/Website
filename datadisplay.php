<!DOCTYPE html>

<html>
    <head>
        <title>
            Hostel Management System
        </title>
        <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head> 
<body>
    <div class="header-container">
        <div class="logo">
            </div>
            <div class="heading-container">Hostel Management System</div>
            </div>

    <div class="menu-bar">
    <ul>
        <li class="active"><a href="#"></i>&nbsp&nbspDash Board</a>
   
        <li><a href="#"><i class="fa fa-home"></i>Meal</a>
            <div class="sub-menu-1">
                <ul>
                
                    <li><a href="add_meal.php">Add Meal</a></li>
                    <li><a href="meal_display.php">View List</a></li>
                    
                    
                
                </ul>
                            </div></li>
                            <li ><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Employee</a>
                                <div class="sub-menu-1">
                    <ul>
                    
                        <li><a href="employeee_reg.php">Add Emp</a></li>
                        <li><a href="display.php">View List</a></li>
                        
                        
                    
                    </ul>
                                </div>
                            </li>
        <li><a href="#">Cost</a><div class="sub-menu-1">
            <ul>
            
                <li><a href="Cost_Manage.html">View</a></li>
                <li><a href="#"></a>View</li>
                
            
            </ul>
                        </div></li>
        <li><a href="#">Employee Management</a><div class="sub-menu-1">
            <ul>
            
                <li><a href="#">View</a></li>
                <li>View</li>
                <li>View</li>
                <li>View</li>
            
            </ul>
                        </div></li>
        <li><a href="#">Employee Management</a><div class="sub-menu-1">
            <ul>
            
                <li><a href="#">View</a></li>
                <li>View</li>
                <li>View</li>
                <li>View</li>
            
            </ul>
                        </div></li>
        <li><a href="#">>Employee Management</a><div class="sub-menu-1">
            <ul>
            
                <li><a href="#">View</a></li>
                <li>View</li>
                <li>View</li>
                <li>View</li>
            
            </ul>
                        </div><li>
    </ul>
</div>

<div class="data">
<tr>
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
            echo "<table class="rec">";
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
            echo "</table>";
            $conn->close();
        ?>
</tr>

</div>



    <div class="footer">
        <div class="text"><h4>About Us</h4></div>>
        <div class="image">
            <div class="text"><h4>Awais Rashid</h4></div>
        </div>
        <div class="imagee"><h4>Hamza Khalid</h4></div>

    </div>
</div>
</body>
</html>
