<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Display confirmation popup
    echo '<script>
        var confirmed = confirm("Are you sure you want to delete this record?");
        if (confirmed) {
            window.location.href = "submenu_del.php?confirm_delete=' . $id . '";
        } else {
            window.location.href = "submenu_display.php";
        }
    </script>';
}

if (isset($_GET['confirm_delete'])) {
    $id = $_GET['confirm_delete'];

    // Delete submenu record
    $sql = "DELETE FROM `submenu` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }

    header("location: submenu_display.php");
}
?>
