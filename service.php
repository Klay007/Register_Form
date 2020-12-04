
<?php
    $username = "";
    $email = "";
    $errors =array();
        // connect to database 
        $db = mysql_connect('localhost','root','registration');
        // if the register button is clicked

        if (isset($_POST[register])){
            $username = mysql_real_escape_string($_POST['username']);
            $email = mysql_real_escape_string($_POST['email']);
            $password_1 = mysql_real_escape_string($_POST['password_1']);
            $password_2 = mysql_real_escape_string($_POST['password_2']);

            // ensure that form fieled properly
            if(emty($username)){
                array_push($errors,"Username is required");
            }
            if(emty($email)){
                array_push($errors,"Email is required");
            }
            if(emty($password_1)){
                array_push($errors,"Password is required");
            }
            if($password_1 != $password_2){
                array_push($errors,"The two password do not match");
            }
            // if there are no errors, save user to database
            if (count($errors) == 0){
                $dbmysql = "INSERT INTO user (username, email, password) 
                                VALUES('$username','$email') ";
                                mysqli_query($db,$dbmysql);
            }


        }

?>
