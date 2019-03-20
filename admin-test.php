<?php
$mysqli = new mysqli('HOST', 'ID', 'PASSWORD', 'ID');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resultat Online-Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Resultat Test</h2>
  <p>Les resultats des tests sont :</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date-Create</th>
        <th>Date-Begin</th>
        <th>Date-End</th>
        <th>Score</th>
        <th>Link</th>
      </tr>
    </thead>
    <tbody>
      <?php

$sql = "SELECT * FROM admission_test ORDER BY date_end DESC, date_create DESC ";
$results = $mysqli->query($sql);
//$today = date("Y-m-d");
//$datecreate = mktime($row['date_create']);
//$interval = date_diff($date, $now);
$datejour = date('d/m/Y');
$djour = explode("/", $datejour);
$auj = $djour[2].$djour[1].$djour[0];


      while($row = $results->fetch_assoc()) {
      //  $interval = date_diff($today, $row['date_create']);
      //  echo $row['date_create'];
      //$datecreate = mktime($row['date_create']);
      //echo $datecreate;
      $datefin= $row['date_create'];
      $dfin = explode("-", $datefin);
      $finab = $dfin[0].$dfin[1].$dfin[2];


      //  echo $today;
      ?>
      <tr <?php if ($finab < $auj + 3 && $row['score'] == NULL) { $color = "background-color: #fab1a0"; } ?> style="<?php echo $color ?>">
        <td><?php echo $row['first_name'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['date_create'];?></td>
        <td><?php echo $row['date_begin'];?></td>
        <td><?php echo $row['date_end'];?></td>
        <td><?php echo $row['score'];?></td>

        <td>
          <?php if ($row['score'] != NULL) { ?>
             <a target="_blank" href="https://dev.lacapsule.academy/onlinetest/index.php?token=<?php echo $row['token'];?>&onload=true">preview</a>
             <?php }?>
           </td>

      </tr>


      <?php
       }
       ?>

    </tbody>
  </table>
</div>

</body>
</html>
