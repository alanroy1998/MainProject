
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/add-team.css">
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

  <div class="container" >
      <h1 style="text-align:center;">Create New Team</h1>
      <div class="container" >
        
        <form  action="../actions/action-addteam.php" method="POST" enctype="multipart/form-data" class="form">
          <div class="col-sm-6" style=" float: left;">
            <div class="form-group">
              <label for="tname">Team Name:</label>
              <input type="text" class="form-control" id="team_name" placeholder="Enter team name" name="team_name">
            </div>
  
            <div class="form-group">
              <label for="Manager">Manager Name:</label>
              <input type="text" class="form-control" id="manager_name" placeholder="Enter manager name" name="manager_name">
            </div>
  
            <div class="form-group">
              <label for="Manager">Coach Name:</label>
              <input type="text" class="form-control" id="coach_name" placeholder="Enter coach name" name="coach_name">
            </div>
   
            <!-- <div class="form-group" style="width: auto; border: none; outline:none; padding: 0px;">
              <label for="logo">Team Logo:</label><br>
              <input id="teamlogo" name="teamlogo" type="file" onchange="readURL(this);" class="form-control border-0" style=" border: none; outline:none; padding: auto;">
            </div> -->

            <div class="forn-group">
              <label for="logo">Team Logo:</label>
              <input type="file" name="uploadfile" value="" />
            </div>


          </div>
          <div class="col-sm-6">
            <div class="plyr-nme">
              <label >Players Name:</label>
              <input type="text" class="form-control" id="player1" placeholder="Player 1" name="player1">
              <input type="text" class="form-control" id="player2" placeholder="Player 2" name="player2">
              <input type="text" class="form-control" id="player3" placeholder="Player 3" name="player3">
              <input type="text" class="form-control" id="player4" placeholder="Player 4" name="player4">
              <input type="text" class="form-control" id="player5" placeholder="Player 5" name="player5">
              <input type="text" class="form-control" id="player6" placeholder="Player 6" name="player6">
              <input type="text" class="form-control" id="player7" placeholder="Player 7" name="player7">
              <input type="text" class="form-control" id="player8" placeholder="Player 8" name="player8">
              <input type="text" class="form-control" id="player9" placeholder="Player 9" name="player9">
              <input type="text" class="form-control" id="player10" placeholder="Player 10" name="player10">
              <input type="text" class="form-control" id="player11" placeholder="Player 11" name="player11">
              
            </div>
          </div>
          <div class="button">
            <input value="Add Team" type="submit" name="upload" class="btn btn-primary" >
          </div>
        </form>
      
      </div> 
  </div> 

</body>






<script>
  /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>
</html>