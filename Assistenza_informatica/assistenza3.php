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
        .f2{
        text-align: center;
          color: #2B79FF;
          font-family: 'Manjari', sans-serif;
          text-align: justify; 
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
<div class="col-12">
	<h2>Chi sono</h2>
	<p>Mi chiamo Francesco Corsaro sono un esperto di informatica. La mia passione per i computer è iniziata nei primi anni del liceo quando per la prima volta ho installato linux sul mio computer. Così ho incominciato a creare programmini in VisualBasic e a costruire siti internet e blog.  Con l’avvento dello smartphone  ho iniziato a dedicarmi allo sviluppo di applicazioni android. Da autodidatta ho appreso linguaggi come "latex", "html"  "css" "php" e "java". Adesso ho deciso di fare della mia passione un lavoro.</p> 
</div>
<div class="12">
    
    	<div class="col-6 f2">
    		<h2>Assistenza Computer  Windows & Mac</h2>
    		Posso risolvere tutti problemi del tuo computer, Mac o smartphone.  <br>
    Formattazione computer o Mac  20€<br>
    Pulizia ad aria compressa dell’hardware 5€ (consigliato insieme alla formattazione)<br>
    Recupero file accidentalmente persi o cancellati su Memoria USB 5€ a file per dimensioni inferiori a 5Mb<br>
    Recupero file accidentalmente persi o cancellati su Hard Disk  5€ a file<br>
    Backup e rimozione Virus 15 €<br>
    Installazione Software 8€<br>
    Assemblaggio e installazione  componenti hardware (Contattami per scoprirlo)<br>
    	</div>
    	<div class="col-6 f2">
    	<h2>Assistenza Smartphone</h2>
    	Ripristino sistema operativo 10€<br>
    Rimozione virus 10€<br>
    Recupero file accidentalmente persi o cancellati 10€ a file<br>
    Sostituzione del vetro del display 140€<br>
    Sostituzione del vetro posteriore 140€<br>
    	</div>
    
 </div>   
</body>
</html>