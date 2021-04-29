<?php
$db = mysqli_connect("localhost", "root", "", "mycollege");

if(isset($_POST['creatematch'])){
    $team1 = $_POST['team1'];
    $team2 = $_POST['team2'];
    $type = $_POST['type'];

    $qry = "INSERT INTO `match`(`match_id`, `match_type`, `team1id`, `team2id`) VALUES ('', '$type', '$team1', '$team2' )";
    $result = mysqli_query($db,$qry);
    if($result){
        echo "<script> alert('Match Created Sucessfully.'); window.location.href='../live/live-manageteam.php';</script>" ;
    }
    else{
        echo "<script> alert('Something went wrong....!'); window.location.href='../live/live-manageteam.php';</script>" ;
    }
}
?>