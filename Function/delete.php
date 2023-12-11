<?php

include('../database/koneksi.php');

// Check if the 'id' parameter is present in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the delete operation on the 'formulir' table
    $result = mysqli_query($koneksi, "DELETE FROM formulir WHERE id='$id'");
    
    if ($result) {
        // Redirect to home.php with a success parameter
        header("Location: ../interface/home.php?delete_success=true");
        exit;
    } else {
        // Redirect to home.php with an error parameter
        header("Location: ../interface/home.php?delete_success=false");
        exit;
    }
} else {
    // Redirect to home.php if 'id' parameter is not present
    header("Location: ../interface/home.php");
    exit;
}
?>
