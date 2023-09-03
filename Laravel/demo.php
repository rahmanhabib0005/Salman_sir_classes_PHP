<?php
session_start();
if($_SESSION['email']){
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
    <?php 
            // $string = file_get_contents("https://jsonplaceholder.typicode.com/posts");
            $string = file_get_contents("person.json");
            $json_a = json_decode($string, true);
    ?>
    <div class="container">
    <?php
        if($_SESSION['email']){
            echo '<button class="btn btn-danger mb-3"><a class="text-light" href="logout.php">Logout</a></button>';
        }
    ?>
    <table id="example" class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>SI</th>
                <th>User Name</th>
                <th>User E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($json_a as $key=>$value){ ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['email'] ?></td>
            </tr>
            <?php }?>
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
<?php }
else{
    header('location: login.php');
} ?>