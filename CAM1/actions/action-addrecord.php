<?php
$q = intval($_GET['id']);

$db = mysqli_connect("localhost", "root", "", "mycollege");

$sql="SELECT * FROM `match` WHERE match_id = '".$q."'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$id = $row['match_id'];
$t1 = $row['team1id'];
$t2 = $row['team2id'];

$T1 = "SELECT * FROM `team` WHERE id = '$t1'";
$T1result = mysqli_query($db,$T1);
$T1row = mysqli_fetch_array($T1result);

$T2 = "SELECT * FROM `team` WHERE id = '$t2'";
$T2result = mysqli_query($db,$T2);
$T2row = mysqli_fetch_array($T2result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    .teams{
        text-align:center;
        margin-top:10px;
    }
    .teams h5{
        font-size:25px;
        display:inline-block;
        width:40%;
    }
    .teams img{
        border-radius:50%;
    }
    
    .vs{
        font-size: 50px;
        widht:100px;
        margin:0px 50px;
    }
    .teams form{
        margin-top:20px;
        text-align:left;
        display:inline-block;
        background:red;
        width:50%;
    }

    .teams form label{
        font-weight:600;
    }

    @media only screen and (max-width: 500px) {
        .teams {
            display:block;
        }
        .teams h5{
            width:100%;
        }
        .teams form{
            width:100%;
        }  


    }
    </style>
</head>
<body>

<div class="teams">

        <h5><?php echo $T1row['team_name']; ?> </h5>
        <h5><?php echo $T2row['team_name']; ?> </h5>  
        <div class="aaaa">
            <img src="../images/uploads/<?php echo $T1row['logo'];?>" alt="" style="width:150px; height:150px;">
            <label class="vs"> V/S </label>
            <img src="../images/uploads/<?php echo $T2row['logo'];?>" alt="" style="width:150px; height:150px;">
        </div>
        <form >
            <label for="">Select Batting Team</label>
            <select  class="form-control" name="" id="" >
                <option value="">select batting team</option>
                <option value="<?php echo $T1row['id']; ?>"><?php echo $T1row['team_name']; ?></option>
                <option value="<?php echo $T2row['id']; ?>"><?php echo $T2row['team_name']; ?> </option>
            </select>
        </form>
</div>
</body>
</html>