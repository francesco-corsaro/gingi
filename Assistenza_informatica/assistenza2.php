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
        .c1{
         text-align: center;
         position: absolute;
         color: #2B79FF;
          font-family: 'Manjari', sans-serif;
          text-align: center; 
          font-size:3em;
          
        }
        
    </style>
</head>
<body>
	<?php include 'capullo_html.php'; ?>
<div class="col-12">
	<picture>
	<source srcset="imag/solutionp.jpg" media="(max-width: 700px)">
	<source srcset="imag/solution3.jpg">
	
	<img src="imag/solution3.jpg" alt="Benessere">
	</picture>

	<div class="row">

		<div class="did" id="visibile">Ti servono soluzioni per il tuo PC o smartphone?<br />Sei nel posto giusto!!<br />
						<button class="button buttonsh">Listino prezzi</button>
		</div>
		<div class=" col-12 c1" id="nascosto">Ti servono soluzioni per il tuo PC o smartphone?<br />Sei nel posto giusto!!<br />
						<button class="button buttonsh">Listino prezzi</button>
		</div>

	</div>
</div>
<div>
	<h2>Chi sono</h2>
	<p>Mi chiamo Francesco Corsaro sono un esperto di informatica. La mia passione per i computer è iniziata nei primi anni del liceo quando per la prima volta ho installato linux sul mio computer. Così ho incominciato a creare programmini in VisualBasic e a costruire siti internet e blog.  Con l’avvento dello smartphone  ho iniziato a dedicarmi allo sviluppo di applicazioni android. Da autodidatta ho appreso linguaggi come "latex", "html"  "css" "php" e "java". Adesso ho deciso di fare della mia passione un lavoro.</p> 
</div>
</body>
</html>