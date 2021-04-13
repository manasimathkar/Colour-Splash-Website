<html>

  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/Project/static/css/artists.css">
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

    <h2 style="text-align:center; margin:40px 20px; font-size:30px">Our Artists</h2>
    <div class="artists">
    <div class="row">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="/Project/static/images/arti1.png" width="100%" height="90%">
              <p style="height:10%;margin-top:5px;">Sam Flin</p>
            </div>
            <div class="flip-card-back">
              <h1>Sam Flin</h1>
              <p>Paintngs:</p>
              <p>Working with photography, collage and installation, his work finds its roots in themes of identity, and how these said identities are shaped by economic, geopolitical and social systems</p>
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="/Project/static/images/arti2.png" width="100%" height="90%">
              <p style="height:10%;margin-top:5px;">Lily Smith</p>
            </div>
            <div class="flip-card-back">
              <h1>Lily Smith</h1>
              <p>Paintngs:</p>
              <p>Lily Smith manages to integrate vividness to all her works. Whether she uses unconscious, accidentally movement in her drawings or whether by initiating the visitors to touch her works. She therefore examines the themes of visual perception but also epistemology, isolation, society, family live or parallel presences. </p>
            </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="/Project/static/images/arti3.png" width="100%" height="90%">
              <p style="height:10%; margin-top:5px;">Regina Phalange</p>
            </div>
            <div class="flip-card-back">
              <h1>Regina Phalange</h1>
              <p>Paintngs:</p>
              <p>The paintings by Regina Phalange seem like collages. Individual motifs are connected by means of color and confident strokes. The painterly process allows the artist the freedom to relate motifs in a surrealistic manner.</p>
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="/Project/static/images/arti4.png" width="100%" height="90%">
              <p style="height:10%;margin-top:5px;">Ken Adams</p>
            </div>
            <div class="flip-card-back">
              <h1>Ken Adams</h1>
              <p>Paintngs:</p>
              <p>He aims to capture and express the richness and simplicity of symbols as well as their metaphysical dimension. As a metaphor for social signals, signs allow Diouf to think through human relationships and the presence of the individual in his social context</p>
            </div>
          </div>
        </div>

    </div>



  </div>
    <?php include ('footer.php');?>

  </body>
</html>
