
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/creatematch.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Live | Create Match</title>

</head>
<body>
  <?php
    include 'header.html';
  ?>

<body>
    <div class="container" style="padding: 0px;">
        <div class="teamnames">
        <h1 style="">Create Match</h1>
            
            <form  action="../actions/action-creatematch.php"  method="POST" class="form">
                <div class="team">
                    <select class="form-control" name="team1" onchange="showteam1(this.value)" >
                        <option value=""  disabled selected >Select Team 1</option>
                        <?php 
                            $db = mysqli_connect("localhost", "root", "", "mycollege");
                            $qry = "select id, team_name from team";
                            $result = mysqli_query($db,$qry);
                            while($row = mysqli_fetch_array($result))
                                {
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['team_name'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <select class="form-control" name="team2" onchange="showteam2(this.value)">
                        <option value=""  disabled selected>Select Team 2</option>
                        <?php 
                            $db = mysqli_connect("localhost", "root", "", "mycollege");
                            $qry = "select id, team_name from team";
                            $result = mysqli_query($db,$qry);
                            while($row = mysqli_fetch_array($result))
                                {
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['team_name'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <br>
                    <div class="col-sm-12">
                        <div class="col-sm-5" >
                            <div id="team1"><b>Team 1</b></div>
                        </div>
                        <div class="col-sm-2">
                            <label class="against">
                                V/S
                            </label>
                        </div>
                        <div class="col-sm-5">
                            <div id="team2"><b>Team 2</b></div>
                        </div>
                    </div>
                </div>


                <div class="matchtype" name="matchtype" style="text-align:center;" >
                    <select  class="form-control" name="type" id="" >
                        <option value="" disabled selected>Select Match Type</option>
                        <option value="twenty20">Twenty20</option>
                        <option value="odi">One Day International Cricket</option>
                        <option value="test">Test Cricket</option>
                    </select>
                    
                    <br><br>
                    <button class="btn btn-success" name="creatematch">Create Match</button>
                </div>      

                       
            </form>  
        </div>
        
        

    </div>

    
    
</body>



<script>
function showteam1(str) {
  if (str == "") {
    document.getElementById("team1").innerHTML = "Select a team..";
    return;
  } else {
    var xhr = new XMLHttpRequest();
    xhr.open("GET","../actions/action-selectteam.php?id="+str,true);
    xhr.send();

    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("team1").innerHTML = this.responseText;
      }
    };
  }
}

function showteam2(str) {
  if (str == "") {
    document.getElementById("team2").innerHTML = "Select a team..";
    return;
  } else {
    var xhr = new XMLHttpRequest();
    xhr.open("GET","../actions/action-selectteam.php?id="+str,true);
    xhr.send();

    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("team2").innerHTML = this.responseText;
      }
    };
  }
}

</script>
</body>
</html>