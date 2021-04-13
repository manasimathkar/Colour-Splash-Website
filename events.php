<html>

  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/Project/static/css/events.css">
  <title>About Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <style>
      html {
  scroll-behavior: smooth;
}

  </style>
  </head>

  <body>

    <?php include('nav.php'); ?>

    <h2 style="text-align:center; font-size: 30px;margin:50px 0px; font-weight:lighter;">Upcoming Events</h2>
    <div class="events">
      <?php
            $servername = "sql300.ezyro.com";
            $username = "ezyro_27461360";
            $password = "s5i9vrsgd051o";
            $dbname = "ezyro_27461360_artgallery";

            $conn = new mysqli($servername, $username, $password, $dbname);

            $query = "SELECT * FROM events";
            $result =  $conn-> query($query);

            if($result-> num_rows > 0){
              while($row = $result-> fetch_assoc())
              {
      ?>
                <div class="event">
                  <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'">'; ?>
                  <div class="evdetails">
                  <h4><?php echo $row['title']?></h4>
                  <p>Location: <?php echo $row['location']?></p>
                  <p>Date: <?php echo $row['date']?></p><p>Time: <?php echo $row['time']?></p>
                  <p>Description:<br><?php echo $row['description']?></p>
                  </div>
                </div>
      <?php
          }
        }
      ?>
    </div>
    <?php include ('footer.php');?>

  </body>
</html>
