<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.inner-container{
text-align:center;
margin-top:10px
}
form{
    display:inline-block; 
    text-align:left; 
    width:60%;
}
</style>
</head>
<body>

<?php
 $id = $_GET['id'];

$db = mysqli_connect('localhost','root','','mycollege');
$sql="SELECT * FROM team WHERE id = '$id'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);

?>
<div class="container">
<div class="inner-container">
<form action="../actions/action-editdetails.php?id=<?php echo $row['id']?>" method="POST">
    <div class="form-group">
      <label for="team_name">Team Name:</label>
      <input type="text"   class="form-control" id="team_name" placeholder="Enter team name" name="team_name" value="<?php echo $row['team_name'];?>">
    </div>
    <div class="form-group">
      <label for="team_name">Manager Name:</label>
      <input type="text"   class="form-control" id="manager_name" placeholder="Enter manager name" name="manager_name" value="<?php echo $row['manager_name'];?>">
    </div>
    <div class="form-group">
      <label for="team_name">Coach Name:</label>
      <input type="text"   class="form-control" id="coach_name" placeholder="Enter coach name" name="coach_name" value="<?php echo $row['coach_name'];?>">
    </div>

    <div class="form-group">
    <label for="playersname">Players Name:</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control"  id="player1" placeholder="Player 1" name="player1" value="<?php echo $row['player1'];?>">
                    <input type="text" class="form-control"  id="player2" placeholder="Player 2" name="player2" value="<?php echo $row['player2'];?>">
                    <input type="text" class="form-control"  id="player3" placeholder="Player 3" name="player3" value="<?php echo $row['player3'];?>">
                    <input type="text" class="form-control" id="player4" placeholder="Player 4" name="player4" value="<?php echo $row['player4'];?>">
                    <input type="text" class="form-control"  id="player5" placeholder="Player 5" name="player5" value="<?php echo $row['player5'];?>">
                    <input type="text" class="form-control"  id="player6" placeholder="Player 6" name="player6" value="<?php echo $row['player6'];?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="player7" placeholder="Player 7" name="player7" value="<?php echo $row['player7'];?>">
                    <input type="text" class="form-control"  id="player8" placeholder="Player 8" name="player8" value="<?php echo $row['player8'];?>">
                    <input type="text" class="form-control" id="player9" placeholder="Player 9" name="player9" value="<?php echo $row['player9'];?>">
                    <input type="text" class="form-control"  id="player10" placeholder="Player 10" name="player10" value="<?php echo $row['player10'];?>">
                    <input type="text" class="form-control"  id="player11" placeholder="Player 11" name="player11" value="<?php echo $row['player11'];?>">
                </div>
            </div>
    </div>
    <div style="text-align:center;">
        <input type="reset" style="width:150px;" class="btn btn-warning" value="Clear">
        <button type="submit" name="edit" style="width:150px;" class="btn btn-primary">Update</button>
    </form>
</div>
    
</div>

</div>

</body>
</html>