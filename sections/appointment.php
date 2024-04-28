<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="submit_form">
        
        <?php
        
            $PatientName = $_POST["PatientName"];
            $DoctorName = $_POST["DoctorName"];
            $DepartmentName = $_POST["DepartmentName"];
            $Phone = $_POST["Phone"];
            $Symptoms = $_POST["Symptoms"];
            $Date = $_POST["Date"];

            echo "ჯავშანი მიღებულია"  . "<br>";
            echo "პაციენტის სახელი და გვარი: " . $PatientName . "<br>";
            echo "ექიმი: " . $DoctorName . "<br>";
            echo "განყოფილება: " . $DepartmentName . "<br>";
            echo "ტელეფონის ნომერი: " . $Phone . "<br>";
            echo "სიმპტომები: " . $Symptoms . "<br>";
            echo "თარიღი: " . $Date;

           

        ?>

            <a href="/">უკან დაბრუნება</a>
    </div>
    
</body>
</html>


