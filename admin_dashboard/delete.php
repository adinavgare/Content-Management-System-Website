<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Display confirmation popup
    echo '<script>
        var confirmed = confirm("Are you sure you want to delete this record?");
        if (confirmed) {
            window.location.href = "delete.php?confirm_delete=' . $id . '";
        } else {
            window.location.href = "display.php";
        }
    </script>';
}

if (isset($_GET['confirm_delete'])) {
    $id = $_GET['confirm_delete'];

    // Delete associated submenu records
    $submenuSql = "DELETE FROM `submenu` WHERE menu_id = $id";
    $submenuResult = mysqli_query($conn, $submenuSql);

    if (!$submenuResult) {
        die(mysqli_error($conn));
    }

    // Delete main menu record
    $menuSql = "DELETE FROM `menu` WHERE id = $id";
    $menuResult = mysqli_query($conn, $menuSql);

    if ($menuResult) {
        header("location: display.php");
    } else {
        die(mysqli_error($conn));
    }
}
?>
