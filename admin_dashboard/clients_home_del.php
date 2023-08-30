<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Display confirmation popup
    echo '<script>
        var confirmed = confirm("Are you sure you want to delete this record?");
        if (confirmed) {
            window.location.href = "clients_home_del.php?confirm_delete=' . $id . '";
        } else {
            window.location.href = "clients_home_display.php";
        }
    </script>';
}

if (isset($_GET['confirm_delete'])) {
    $id = $_GET['confirm_delete'];

    // Delete slider record
    $sliderSql = "DELETE FROM `clients_home` WHERE id = $id";
    $sliderResult = mysqli_query($conn, $sliderSql);

    if ($sliderResult) {
        header("location: clients_home_display.php");
    } else {
        die(mysqli_error($conn));
    }
}
?>