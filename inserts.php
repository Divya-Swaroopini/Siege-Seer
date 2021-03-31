<?php
    session_start();
    ob_start();
    include("connection.php");
    if($conn) {}
    else { echo "database not connected ".mysqli_error(); }
    print_r($_POST);
        $id = $_POST['PlayerID'];
        $lang = $_POST['Language'];
        $g_mode = $_POST['game_mode'];
        $reg = $_POST['Region'];
        $num = $_POST['Number'];
        $your_role = $_POST['Role_you'];
        $_SESSION['Role_them'] = ($_POST['Role_them']);
        $their_role = ($_POST['Role_them']);
    if(isset($_POST['submit'])) {
        $query = "INSERT INTO PREFERENCES (player_id, lang, g_mode, reg, num, your_role, their_role) VALUES ('$id', '$lang', '$g_mode', '$reg', '$num', '$your_role', '$their_role')";
        if($conn->query($query) === TRUE) {
            echo "Query Sucessful";
        }
        else {
            echo "Unsucessful Query ".mysqli_error($conn);
        }
        $conn->close();
    }
?>