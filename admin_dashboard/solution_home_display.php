<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>CRUD Operation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 20px;
            text-align: center;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            color: white;
            float: left;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table tbody tr:hover {
            background-color: #f9f9f9;
        }

        .text-light {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class ="container">
    <button class="btn btn-primary my-5"><a href="solution_home.php" class="text-light">Add Solution On Home</a>
        </button>
        
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">Title</th>
      <th scope="col">Subtitle</th>
      <th scope="col">Description</th>
      <th scope="col">Logo</th>
      <th scope="col">Ranking</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM solution_home";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $subtitle = $row['subtitle'];
        $description= $row['description'];
        $logo = $row['logo'];
        $ranking = $row['ranking'];
        $date = $row['date'];

        echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$title.'</td>
            <td>'.$subtitle.'</td>
            <td>'.$description.'</td>
            <td>'.$logo.'</td>
            <td>'.$ranking.'</td>
            <td>'.$date.'</td>
            <td>
    <button class="btn btn-primary"><a href="solution_home_up.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="solution_home_del.php?deleteid='.$id.'"class="text-light">Delete</a></button>
</td>
</tr>';
    }
}
?>
 </tbody>
</table>
</div>
</body>
</html>