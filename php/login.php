
<?php

    include "database.php";

    function validate ($string) {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }   

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

            $username = validate($_POST['username']);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = validate($password);
            
            if (empty($username) || empty($password)) {
                echo "Username / Passoword cannot be empty";
            }
            else {
                $query = "SELECT username, email, password FROM users WHERE username='$username' AND password='$password'";
                $result = $connection->query($query);

                if (mysqli_num_rows($result) <= 0) {
                    echo "User not found";
                }
                else {
                    $row = mysqli_fetch_assoc($result);
                    
                    echo '<pre>'; print_r($row); echo '</pre>';

                    echo "Welcome " . $row['username'];
                }

                
            }

            $connection->close();

        ?>
    </body>
</html>