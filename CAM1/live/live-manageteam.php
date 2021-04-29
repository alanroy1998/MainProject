
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/live-manageteam.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Live</title>

</head>
<body>
  <?php
    include 'header.html';
  ?>
<html>

<body>
    <div class="container">
        <div class="teamnames" style="text-align:center; padding:10px;">
            <form class="form" style="display:inline-block;">
                <select class="form-control" name="users" onchange="showUser(this.value)" style="width:250px">
                    <option value=""  selected>...select a team...</option>
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
            </form>  
        </div>
        
        <br>
        <div id="txtHint"><b>Team info will be listed here...</b></div>

    </div>

    
</body>



<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "Select a team..";
    return;
  } else {
    var xhr = new XMLHttpRequest();
    xhr.open("GET","../actions/action-teamdetails.php?q="+str,true);
    xhr.send();

    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  }
}
</script>
</html>