<?php
include 'connect.php';

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    $sql = "SELECT * FROM `submenu` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $menu_id = $row['menu_id'];
        $submenu_name = $row['submenu_name'];
        $created_date = $row['created_date'];
        $ranking = $row['ranking'];
    } else {
        die(mysqli_error($conn));
    }
}


if (isset($_POST['submit'])) {
    $menuId = $_POST["menuId"];
    $submenuName = $_POST["submenuName"];
    $createdDate = $_POST["createdDate"];
    $ranking = $_POST["ranking"];

    $sql = "UPDATE `submenu` SET  menu_id = '$menuId',submenu_name = '$submenuName', created_date = '$createdDate', ranking = '$ranking' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Updated successfully";
        header("location:submenu_display.php");
    } else {
        die(mysqli_error($conn));
    }
}
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
            <input type="text" name="menuId" id="menuId" value="<?php echo $menu_id; ?>">
          </td>
        </tr>
        <tr>
          <td class="form-group">
            <label for="submenuName">Submenu Name:</label>
            <input type="text" name="submenuName" id="submenuName" value="<?php echo $submenu_name; ?>">
          </td>
        </tr>
        <tr>
          <td class="form-group">
            <label for="createdDate">Created Date:</label>
            <input type="date" name="createdDate" id="createdDate" value="<?php echo $created_date; ?>">
          </td>
        </tr>
        <tr>
          <td class="form-group">
            <label for="ranking">Ranking:</label>
            <input type="number" name="ranking" id="ranking" value="<?php echo $ranking; ?>">
          </td>
        </tr>
      </tbody>
    </table>

    <button type="submit" name="submit" id="submitBtn">Update</button>
  </form>

</body>
</html>