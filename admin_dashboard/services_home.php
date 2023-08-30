<?php
  require_once('connect.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $description = $_POST["description"];
    $logo = $_POST["logo"];
    $ranking = $_POST["ranking"];
    $date = $_POST["date"];
    
    
    // Insert data into menu table
    $sql = "INSERT INTO `services_home`( `title`, `subtitle`, `description`, `logo`, `ranking`, `date`) VALUES ('$title','$subtitle','$description','$logo','$ranking','$date')";

    if ($conn->query($sql) === TRUE) {
        //echo "submitted successfully";
        header("location: services_home_display.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close the database connection
$conn->close();
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
    <input type="text" name="title" id="title">

    <label for="subtitle">Subtitle:</label>
    <input type="text" name="subtitle" id="subtitle">

    <label for="description">Description:</label>
    <input type="text" name="description" id="description">

    <label for="logo">Logo:</label>
    <input type="text" name="logo" id="logo">

    <label for="ranking">Ranking:</label>
    <input type="number" name="ranking" id="ranking">

    <label for="date">Date:</label>
    <input type="date" name="date" id="date">

    <button type="submit" id="submit">Submit</button>
  </form>

</body>
</html>