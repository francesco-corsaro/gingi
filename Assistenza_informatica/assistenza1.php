<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assistenza Informatica</title>
	<script src="https://kit.fontawesome.com/30f6f166d3.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
	<style type="text/css">
        <?php include 'capullo_css.php'; ?>
        <?php include 'space_cssf2.php'; ?>
        <?php include 'griglia_assistenza_css.php'; ?> 
        <?php include 'body_assistenza_css.php'; ?>
        <?php include 'bottone_css.php' ?>
        #nascosto{}
        @media (min-width: 48em){
        #nascosto{
        display: none;
        }
      }
      #visibile{}
        @media (max-width: 48em){
        #visibile{
        display: none;
        }
      }
       img{
    max-width:100%;
    height:auto;
}
        .did{
          text-align: center;
          position: absolute;
          top: 50%;
          left: 70%;
          transform: translate(-50%, -50%);
          color: white;
          font-family: 'Manjari', sans-serif;
          text-align: center; 
          font-size:4em;
}
    </style>
</head>
<body>
	<?php include 'capullo_html.php'; ?>
<div class="col-12">

	<img src="imag/solution3.jpg" alt="Benessere">


	<div class="row">

		<div class="did" id="visibile">Ti servono soluzioni per il tuo PC o smartphone?<br />Sei nel posto giusto!!<br />
						<button class="button buttonsh">Listino prezzi</button>
		</div>

	</div>
</div>

</body>
</html>