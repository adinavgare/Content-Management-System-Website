<?php
include 'connect.php';

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    $sql = "SELECT * FROM `clients_home` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $title = $row['title'];
        $image = $row['image'];
        $ranking = $row['ranking'];
    } else {
        die(mysqli_error($conn));
    }
}

if (isset($_POST['submit'])) {
    $title = $_POST["title"];
    $image = $_POST["image"];
    $ranking = $_POST["ranking"];

    $sql = "UPDATE `clients_home` SET title = '$title', image = '$image', ranking = '$ranking' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Updated successfully";
        header("location:clients_home_display.php");
    } else {
        die(mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
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
    input[type="file"],
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
  <form method="POST">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="<?php echo $title; ?>">

    <label for="image">Image:</label>
    <input type="file" name="image" id="image" value="<?php echo $image; ?>">

    <label for="ranking">Ranking:</label>
    <input type="number" name="ranking" id="ranking" value="<?php echo $ranking; ?>">

    <button type="submit" name="submit" id="submit">Update</button>
  </form>
</body>
</html>