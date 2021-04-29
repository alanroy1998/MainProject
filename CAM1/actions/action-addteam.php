<?php
    $db = mysqli_connect("localhost", "root", "", "mycollege");

    $msg = "";

    if(isset($_POST['upload'])){

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

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../images/uploads/".$filename;
        
        $qry = "INSERT INTO `team`(`id`, `team_name`, `manager_name`, `coach_name`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`, `logo`) 
        VALUES ('','$team_name', '$manager_name', '$coach_name', '$player1', '$player2', '$player3', '$player4', '$player5', '$player6', '$player7', '$player8', '$player9', '$player10', '$player11', '$filename')";
        $result=mysqli_query($db,$qry);
    
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Uploaded successfully";
            header("Location:manageteam.php");
        }else{
            $msg = "Something went wrong....!";
            header("Location:live-addteam.php");
         }
    }
?>