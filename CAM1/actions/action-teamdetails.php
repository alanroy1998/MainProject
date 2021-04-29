<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.col-sm-5, .col-sm-2{
    float:left;
}
.col-sm-5 .card-column{
    text-align:center;
}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$db = mysqli_connect('localhost','root','','mycollege');

$sql="SELECT * FROM team WHERE id = '".$q."'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);


?>

<div class="col-sm-5">
    <div class="card-column">
        <h2><?php echo $row['team_name'];?> </h2>
        <img src="../images/uploads/<?php echo $row['logo'];?>" alt="" style="width:150px; height:150px;">
    <br><br>
    <h5>Manager: <?php echo $row['manager_name'];?></h5>
    <h5>Coach: <?php echo $row['coach_name'];?></h5>
    </div>
</div>

<div class="col-sm-5">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr><th>Player Name</th></tr>
        </thead>
        <tr><td><?php echo $row['player1'];?></td></tr>
        <tr><td><?php echo $row['player2'];?></td></tr>
        <tr><td><?php echo $row['player3'];?></td></tr>
        <tr><td><?php echo $row['player4'];?></td></tr>
        <tr><td><?php echo $row['player5'];?></td></tr>
        <tr><td><?php echo $row['player6'];?></td></tr>
        <tr><td><?php echo $row['player7'];?></td></tr>
        <tr><td><?php echo $row['player8'];?></td></tr>
        <tr><td><?php echo $row['player9'];?></td></tr>
        <tr><td><?php echo $row['player10'];?></td></tr>
        <tr><td><?php echo $row['player11'];?></td></tr>
    </table>
</div>
<div class="col-sm-2" style="text-align:center; background=red; ">
    <a class="btn btn-success" href="../live/live-editteamdetails.php?id=<?php echo $row['id']?>" style="width:100px">Edit</a>
</div>
</body>
</html>