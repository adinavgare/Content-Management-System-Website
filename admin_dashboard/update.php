<?php
include 'connect.php';

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    $sql = "SELECT * FROM `menu` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $Menu_name = $row['Menu_name'];
        $Created_date = $row['Created_date'];
        $Ranking = $row['Ranking'];
    } else {
        die(mysqli_error($conn));
    }
}

if (isset($_POST['submit'])) {
    $menuName = $_POST["menuName"];
    $createdDate = $_POST["createdDate"];
    $ranking = $_POST["ranking"];

    $sql = "UPDATE `menu` SET Menu_name = '$menuName', Created_date = '$createdDate', Ranking = '$ranking' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Updated successfully";
        header("location:display.php");
    } else {
        die(mysqli_error($conn));
    }
}
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
  <form method="POST">
    <label for="menuName">Menu Name:</label>
    <input type="text" name="menuName" id="menuName" value="<?php echo $Menu_name; ?>">

    <label for="createdDate">Created Date:</label>
    <input type="date" name="createdDate" id="createdDate" value="<?php echo $Created_date; ?>">

    <label for="ranking">Ranking:</label>
    <input type="number" name="ranking" id="ranking" value="<?php echo $Ranking; ?>">

    <button type="submit" name="submit" id="submit">Update</button>
  </form>
</body>
</html>
