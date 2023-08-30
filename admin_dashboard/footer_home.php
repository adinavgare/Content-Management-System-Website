<?php
require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve form data
  $title = $_POST["title"];
  $subtitle = $_POST["subtitle"];
  $link = $_POST["link"];
  $ranking = $_POST["ranking"];
  
  
  // Handle image upload
  $logo = $_FILES["logo"]["name"]; // Get the name of the uploaded image file
  $logo_tmp = $_FILES["logo"]["tmp_name"]; // Get the temporary file path of the uploaded image
  $logo_destination = "D:/xampp/htdocs/Globalsoft_technology_latest/images/" . $logo; // Specify the destination path to save the image
  
  move_uploaded_file($logo_tmp, $logo_destination); // Move the uploaded image file to the specified destination

  // Insert data into menu table
  $sql = "INSERT INTO `footer_home` (`title`, `subtitle`, `link`, `logo`, `ranking`) VALUES ('$title','$subtitle','$link','$logo','$ranking')";

  if ($conn->query($sql) === TRUE) {
    echo "submitted successfully";
    header("location:footer_home_display.php");
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
  <title>footer_home</title>
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

    <label for="link">Link:</label>
    <input type="text" name="link" id="linl">

    <label for="logo">Logo:</label>
    <input type="file" name="logo" id="logo">

    <label for="ranking">Ranking:</label>
    <input type="number" name="ranking" id="ranking">

    <button type="submit" id="submit">Submit</button>
  </form>

</body>
</html>