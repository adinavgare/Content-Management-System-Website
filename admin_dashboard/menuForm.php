<?php
  require_once('connect.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $menuName = $_POST["menuName"];
    $createdDate = $_POST["createdDate"];
    $ranking = $_POST["ranking"];

    // Insert data into menu table
    $sql = "INSERT INTO menu (Menu_name, Created_date, Ranking) VALUES ('$menuName', '$createdDate', '$ranking')";

    if ($conn->query($sql) === TRUE) {
        //echo "Menu record created successfully";
        header("location:display.php");
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
  <title>Menu Form</title>
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
    <label for="menuName">Menu Name:</label>
    <input type="text" name="menuName" id="menuName" required>

    <label for="createdDate">Created Date:</label>
    <input type="date" name="createdDate" id="createdDate" required>

    <label for="ranking">Ranking:</label>
    <input type="number" name="ranking" id="ranking" required>

    <button type="submit" id="submit"><a class="text-light" required></a>Submit</button>
  </form>

</body>
</html>