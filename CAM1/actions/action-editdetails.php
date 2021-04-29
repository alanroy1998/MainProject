<?php

$id = $_GET['id'];
echo $id;
$db = mysqli_connect("localhost", "root", "", "mycollege");
if(isset($_POST['edit'])){

    $team_name = $_POST['team_name'];
    $manager_name = $_POST['manager_name'];
    $coach_name = $_POST['coach_name'];
    $player1 = $_POST['player1'];
    $player2 = $_POST['player2'];
    $player3 = $_POST['player3'];
    $player4 = $_POST['player4'];
    $player5 = $_POST['player5'];
    $player6 = $_POST['player6'];
    $player7 = $_POST['player7'];
    $player8 = $_POST['player8'];
    $player9 = $_POST['player9'];
    $player10 = $_POST['player10'];
    $player11 = $_POST['player11'];

    $qry = "UPDATE `team` SET `team_name`='$team_name', `manager_name`='$manager_name', `coach_name`='$coach_name', `player1`='$player1',
    `player2`='$player2', `player3`='$player3', `player4`='$player4', `player5`='$player5', `player6`='$player6', `player7`='$player7',
    `player8`='$player8', `player9`='$player9', `player10`='$player10', `player11`='$player11' WHERE id='$id'";
    $result=mysqli_query($db,$qry);

    if($result){
        echo "<script> alert('sucessfully updated'); window.location.href='../live/live-manageteam.php';</script>" ;
    }
    else{
        echo "<script>alert('failed.....!');</script>";
    }
}
?>