<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>

<?php
$id = intval($_GET['id']);

$db = mysqli_connect('localhost','root','','mycollege');

$sql="SELECT * FROM team WHERE id = '".$id."'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);

?>


        <img class="rounded-circle" src="../images/uploads/<?php echo $row['logo'];?>" alt="" style="width:150px; height:150px;">
        <div><h4><?php echo $row['team_name'];?></h4></div>

</body>
</html>