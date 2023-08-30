<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Blog</title>
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
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM blog";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $number = $row['number'];
        $email = $row['mail'];
        $image = $row['image'];
        $title= $row['title'];
        

        echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$number.'</td>
            <td>'.$email .'</td>
            <td>'.$image .'</td>
            <td>'.$title .'</td>
            
            
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