
<?php

session_start();

    include_once 'dbcontact.php';
    
    

    if (isset($_POST['submit'])) {

        
        $first_name = $_POST['first_name'];
        $emails = $_POST['emails'];
        $messages = $_POST['messages'];

        $sql = "INSERT INTO users (`first_name`, `email`, `message`) VALUES ('$first_name','$emails','$messages')";
        $res = mysqli_query($conn, $sql);

        if ($res) {

            $msg = "has been sent!";
            $_SESSION['msg'] = $msg;
            header('location:index.php');       
            
            
        } else {
            echo "Error: " . $sql . "
        " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    ?>