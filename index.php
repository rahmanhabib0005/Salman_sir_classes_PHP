<?php
// // $scores = array('90','90','90','90','90');
// $scores = array('habib' => '90','baki' => '90','tamim' => '90','ramim' => '90','sakil' => '90');
// $sum = array_sum($scores);
// $count = count($scores);

// $avg = $sum / $count;

// echo $avg;

$database = 'myDB';
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
echo "Connected successfully";

$sql = "SELECT * FROM `test`";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <button class="btn btn-primary mb-3"><a class="text-light" href="registration.php">Register</a></button>
    <table id="example" class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>SI</th>
                <th>User Name</th>
                <th>User Address</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['Name']."</td>
                <td>".$row['Address']."</td>
            </tr>";
            }?>
        </tbody>
    </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>





