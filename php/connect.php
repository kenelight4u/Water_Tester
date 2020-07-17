<?php
    
    $email = filter_input(INPUT_POST, 'email');
    
    if(!empty($email)){
        
               
        $host = "x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $dbusername = "c2uqs4bvpx3wj09j";
        $dbpassword = "jbpjbzy9engvlzql";
        $dbname = "hpurwddktojfc4il";

        // Create Connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error ('.mysqli_connect_errno() .') '
                . mysqli_connect_error());
        }else {
            $sql = "INSERT INTO watertestone (email)
            values ('$email' )";

            if ($conn->query($sql)) {
                echo "Thanks for Subscribing, we'll get in touch Soon";
            }
            else {
                echo "Error: " . $sql ."<br>".$conn->error;
            }
            $conn->close();

            header("refresh: 2; url=../index.html ");
        }         

           
    }else{
        echo "Email should not be empty";
        die();

    }


?>
