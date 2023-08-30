<?php
include 'connect.php';

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    $sql = "SELECT * FROM `services_home` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $title = $row['title'];
        $subtitle = $row['subtitle'];
        $description = $row['description'];
        $logo = $row['logo'];
        $ranking = $row['ranking'];
        $date = $row['date'];
    } else {
        die(mysqli_error($conn));
    }
}


if (isset($_POST['submit'])) {
    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $description = $_POST["description"];
    $logo = $_POST["logo"];
    $ranking = $_POST["ranking"];
    $date = $_POST["date"];

    $sql = "UPDATE `services_home` SET title = '$title', subtitle = '$subtitle', description = '$description', logo = '$logo', ranking = '$ranking', date = '$date' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Updated successfully";
        header("location: services_home_display.php");
    } else {
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>services_home</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 8px;
        }

        button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="<?php echo $title; ?>">

    <label for="subtitle">Subtitle:</label>
    <input type="text" name="subtitle" id="subtitle" value="<?php echo $subtitle; ?>">

    <label for="description">Description:</label>
    <input type="text" name="description" id="description" value="<?php echo $description; ?>">

    <label for="logo">Logo:</label>
    <input type="text" name="logo" id="logo">

    <label for="ranking">Ranking:</label>
    <input type="number" name="ranking" id="ranking" value="<?php echo $ranking; ?>">

    <label for="date">Date:</label>
    <input type="date" name="date" id="date" value="<?php echo $date; ?>">

    <button type="submit" name="submit" id="submit">Update</button>
</form>

</body>
</html
