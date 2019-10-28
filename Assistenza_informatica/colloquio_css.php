<?php echo "
input[type=text], textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #2B79FF;
  border-radius: 25px;
   -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  resize: vertical;
  font-size: 6vw;
  font-family: 'Manjari', sans-serif;
  background-color: color: rgba(32,119,206,0.09);
  box-shadow: 2px 2px 7px 1px #2A77FA;
}

input[type=text]:focus {
  border: 3px solid #6060ff;
}
textarea:focus {
  border: 3px solid #6060ff;
}
input[type=submit] {
  background-color: #6060ff;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  float: right;
  font-family: 'Manjari', sans-serif;
  font-size: 6vw;

}

input[type=submit]:hover {
  background-color: #0000FF;
  border-radius: 30px;
}
.container{
background-color: rgba(206,200,197,0.17);
    }
 @media screen and (min-device-width: 780px){
 input[type=text], textarea {
   font-size:1.5vw;
    }    
}
@media screen and (min-device-width: 1500px){
 input[type=text], textarea {
    font-size:1.5vw;
    } 
}
@media screen and (min-device-width: 780px){
 input[type=submit] {
   font-size:1.5vw;
    }    
}
@media screen and (min-device-width: 1500px){
 input[type=submit], textarea {
    font-size:1.5vw;
    } 
}";
?>
    








