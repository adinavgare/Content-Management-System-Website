<?php
  require_once('connect.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST["title"];
    $ranking = $_POST["ranking"];
    // Handle image upload
    $image = $_FILES["image"]["name"]; // Get the name of the uploaded image file
    $image_tmp = $_FILES["image"]["tmp_name"]; // Get the temporary file path of the uploaded image
    $image_destination = "D:/xampp/htdocs/Globalsoft_technology_latest/images" . $image; // Specify the destination path to save the image
    
    move_uploaded_file($image_tmp, $image_destination); // Move the uploaded image file to the specified destination

    // Insert data into menu table
    $sql = "INSERT INTO clients_home (title, image, ranking) VALUES ('$title', '$image', '$ranking')";

    if ($conn->query($sql) === TRUE) {
        echo "submitted successfully";
        header("location:clients_home_display.php");
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
  <title>clients_home</title>
  <link rel="stylesheet" href="admin.css">
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
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required>

    <label for="image">Image</label>
    <input type="file" name="image" id="image" required>

    <label for="ranking">Ranking:</label>
    <input type="number" name="ranking" id="ranking" required>

    <button type="submit" id="submit">Submit</button>
  </form>

</body>
</html>