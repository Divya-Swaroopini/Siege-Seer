<?php
    session_start();
    ob_start();
    include("connection.php");
    if($conn) {}
    else {
        echo "Database not connected ".mysqli_error();
    }
    print_r($_POST);
    if(isset($_POST['submit'])) {
        $_SESSION['PlayerID'] = ($_POST['PlayerID']);
        $conn->close();
    }
    else {
        echo "Error in display file";
    }
    header("Location: ");
    exit;
?>