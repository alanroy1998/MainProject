
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/addrecord.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Live | Add Record</title>

</head>
<body>
  <?php
    include 'header.html';
  ?>

<body>

    <div class="container">
        <div class="innercontainer">
        <h1>Add Record</h1>

        <form class="form" action="">
            <select class="form-control" name="matchid"  onchange="show(this.value)">
                <option value="" disabled selected>Select Match-ID</option>
                <?php 
                    $db = mysqli_connect("localhost", "root", "", "mycollege");
                    $qry = "SELECT * FROM `match`";
                    $result = mysqli_query($db,$qry);
                    while($row = mysqli_fetch_array($result))
                        {
                ?>
                <option value="<?php echo $row['match_id'] ?>"><?php echo $row['match_id'] ?></option>
                <?php
                    }
                ?>
            </select>
        </form>

        </div>

        <div id="addrecord">
            <b>Select  Match..</b>
        </div>

    </div>

</body>



<script>
function show(str) {
  if (str == "") {
    document.getElementById("addrecord").innerHTML = "Select  Match..";
    return;
  } else {
    var xhr = new XMLHttpRequest();
    xhr.open("GET","../actions/action-addrecord.php?id="+str,true);
    xhr.send();

    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("addrecord").innerHTML = this.responseText;
      }
    };
  }
}

</script>
</body>
</html>