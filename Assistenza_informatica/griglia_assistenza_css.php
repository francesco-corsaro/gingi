<?php echo "
[class*=\"col-\"] {
    float: left;
    padding: 15px;
}
/* For mobile phones: */
[class*=\"col-\"] {
    width: 100%;
}

@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}
.sezione{
background-coloro: white;
height:10%;
}
html {
  scroll-behavior: smooth;
}
body{
    font-size: 14px;
}

#section1 {
}

#section2 { 
}
#section3 {
 
}
#section4 {
  
 
}
#section5 {
  
 
}
#section6 {
  
 
}
/* Clear floats after the columns */
.row:after {
    content: \"\";
    display: table;
    clear: none;
    overflow: auto;
};"
?>