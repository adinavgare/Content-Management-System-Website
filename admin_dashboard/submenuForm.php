<?php
require_once('connect.php');

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $menuId = $_POST["menuId"];
  $submenuName = $_POST["submenuName"];
  $createdDate = $_POST["createdDate"];
  $ranking = $_POST["ranking"];

  // Insert data into submenu table
  $sql = "INSERT INTO submenu (menu_id, submenu_name, created_date, ranking) VALUES ('$menuId', '$submenuName', '$createdDate', '$ranking')";

  if ($conn->query($sql) === TRUE) {
      //echo "Submenu record created successfully";
      header("location:submenu_display.php");
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
  <title>Add Submenu</title>
  <style>
    form {
  width: 500px;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 4px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 10px;
}

label {
  margin-bottom: 6px;
}

input[type="text"],
input[type="date"],
input[type="number"] {
  width: 100%;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
  <h2>Add Submenu</h2>

  <form action="" method="POST">
    <table>
      <tbody>
        <tr>
          <td class="form-group">
            <label for="menuId">Menu ID:</label>
            <input type="text" name="menuId" id="menuId">
          </td>
        </tr>
        <tr>
          <td class="form-group">
            <label for="submenuName">Submenu Name:</label>
            <input type="text" name="submenuName" id="submenuName">
          </td>
        </tr>
        <tr>
          <td class="form-group">
            <label for="createdDate">Created Date:</label>
            <input type="date" name="createdDate" id="createdDate">
          </td>
        </tr>
        <tr>
          <td class="form-group">
            <label for="ranking">Ranking:</label>
            <input type="number" name="ranking" id="ranking">
          </td>
        </tr>
      </tbody>
    </table>

    <button type="submit" id="submitBtn">Submit</button>
  </form>

</body>
</html>