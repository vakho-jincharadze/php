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
        
            $fullName = $_POST["fullName"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];

            echo "Your for is submitted."  . "<br>";
            echo "სახელი და გვარი: " . $fullName . "<br>";
            echo "ელ. ფოსტა: " . $email . "<br>";
            echo "ტელეფონი: " . $phone . "<br>";
            echo "შეტყობინება: " . $message . "<br>";

        ?>

            <a href="/">უკან დაბრუნება</a>
    </div>
    
</body>
</html>


