<?php

include 'dbconnection.php';
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>List from db</title>
  <meta name="description" content="listfromdb">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
  <p>simple table</p>
  <div class="container">
  <table>
        <thead>
          <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Year</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach($movie as $v){ ?>
        
          <tr>
            <td><?php echo $v['name']?></td>
            <td><?php echo $v['description']?></td>
            <td><?php echo $v['year']?></td>
          </tr>
          <?php } ?>
          
          
        </tbody>
      </table>
      </div>
</body>
</html>