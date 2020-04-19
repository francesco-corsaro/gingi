<?php echo "
<header class=\"header\">
  <a href=\"assistenza10.php\" class=\"logo\"><h1>Gingi PcAssistance</h1></a>
  <input class=\"menu-btn\" type=\"checkbox\" id=\"menu-btn\" />
  <label class=\"menu-icon\" for=\"menu-btn\"><span class=\"navicon\"></span></label>
  <ul class=\"menu\">
   <input class=\"menu-btn\" type=\"checkbox\" id=\"menu-btn\" />
  <label class=\"menu-icon\" for=\"menu-btn\"></label>
    <li><a href=\"#section2\">Chi sono</a></li>
    <li><a href=\"#section3\">Servizi</a></li>
    <li><a href=\"#section4\">Contatti</a></li>
  </ul>
</header>

<div class=\"space\" id=\"section1\">
    <p></p>
</div>

   
    <div class=\"col-12 space\" id=\"nascosto\">
       <div class=\"row\">
       
            <div class=\"social space1 margin2\">
                <a href=\"https://wa.me/393485686702?text=Ciao,%20vorrei%20essere%20ricontattato\" id=\"a1\"><i class=\"fab fa-whatsapp\" style=\"font-size:2em;color:green;\"></i></a>
            </div>
            <div class=\"social space1\">      
                <a href=\"tel:+393485686702\" id=\"a6\" style=\"font-size:6vw;\" ><img src=\"data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4wMDYgNTEyLjAwNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyLjAwNiA1MTIuMDA2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzQ2QjI5RDsiIGQ9Ik0xNDMuNzU2LDY4LjI3MWwzMi42LDQ4LjkwNWM2LjQ3OSw5LjczOCw0LjM1NSwyMi44MjUtNC44NzMsMzAuMDE0bC00MC4xMzksMzEuMjIzICAgYy04LjcxLDYuNzA3LTExLjIxMywxOC43NzItNS44ODgsMjguMzljMTEuNzg1LDIxLjE4NiwyMi45NTIsNDYuMTY4LDc4LjIzLDEwMS41MTdzODAuMzMxLDY2LjQ0NSwxMDEuNTE3LDc4LjIzICAgYzkuNjE4LDUuMzI1LDIxLjY4MywyLjgyMiwyOC4zOS01Ljg4OGwzMS4yMjMtNDAuMTM5YzcuMTg4LTkuMjI3LDIwLjI3NS0xMS4zNTIsMzAuMDE0LTQuODczbDUwLjQ1OCwzMy42MzNsNTYuNzYxLDM3Ljg0NCAgIGM5LjkyNiw2LjYxNywxMi45MDYsMTkuODYzLDYuNzcxLDMwLjA5M2wtMjYuODk4LDQ0LjgzNWMtNy4xNCwxMi4xMTgtMTguNjY3LDIxLjAyNS0zMi4xOTQsMjQuODc2ICAgYy00NC43MDMsMTIuMjYyLTE0My4zMDcsMTQuNzQyLTMwMS4zNDctMTQzLjI5OFMtNy4xODcsMTA2Ljk4LDUuMDc0LDYyLjI3N0M4LjkyNiw0OC43NSwxNy44MzMsMzcuMjIzLDI5Ljk1LDMwLjA4M0w3NC43ODYsMy4xODUgICBDODUuMDE2LTIuOTUsOTguMjYyLDAuMDMsMTA0Ljg3OSw5Ljk1NkwxNDMuNzU2LDY4LjI3MXoiLz4KCTxnPgoJCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjUzNjQ7IiBkPSJNMjkxLjMwOSw2MS43OTJjLTQuODc1LDAtOC44MjgsMy45NTItOC44MjgsOC44MjhzMy45NTIsOC44MjgsOC44MjgsOC44MjggICAgYzgyLjg0MiwwLjA5MiwxNDkuOTc3LDY3LjIyNiwxNTAuMDY5LDE1MC4wNjljMCw0Ljg3NSwzLjk1Miw4LjgyOCw4LjgyOCw4LjgyOHM4LjgyOC0zLjk1Miw4LjgyOC04LjgyOCAgICBDNDU4LjkzMSwxMzYuOTI3LDM4My44OTgsNjEuODk0LDI5MS4zMDksNjEuNzkyeiIvPgoJCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjUzNjQ7IiBkPSJNMjkxLjMwOSwxMTQuNzU3Yy00Ljg3NSwwLTguODI4LDMuOTUyLTguODI4LDguODI4czMuOTUyLDguODI4LDguODI4LDguODI4ICAgIGM1My42MDMsMC4wNjMsOTcuMDQsNDMuNTAxLDk3LjEwMyw5Ny4xMDNjMCw0Ljg3NSwzLjk1Miw4LjgyOCw4LjgyOCw4LjgyOHM4LjgyOC0zLjk1Miw4LjgyOC04LjgyOCAgICBDNDA1Ljk5NCwxNjYuMTY2LDM1NC42NTgsMTE0LjgzLDI5MS4zMDksMTE0Ljc1N3oiLz4KCQk8cGF0aCBzdHlsZT0iZmlsbDojRkY1MzY0OyIgZD0iTTI5MS4zMDksMTY3LjcyM2MtNC44NzUsMC04LjgyOCwzLjk1Mi04LjgyOCw4LjgyOHMzLjk1Miw4LjgyOCw4LjgyOCw4LjgyOCAgICBjMjQuMzY1LDAuMDI5LDQ0LjEwOSwxOS43NzMsNDQuMTM4LDQ0LjEzOGMwLDQuODc1LDMuOTUyLDguODI4LDguODI4LDguODI4czguODI4LTMuOTUyLDguODI4LTguODI4ICAgIEMzNTMuMDYzLDE5NS40MDQsMzI1LjQyLDE2Ny43NjEsMjkxLjMwOSwxNjcuNzIzeiIvPgoJPC9nPgoJPGc+CgkJPHBhdGggc3R5bGU9ImZpbGw6IzY1RERCOTsiIGQ9Ik0yNDcuMTcxLDQyMy43MjNjLTEuOTExLDAuMDA0LTMuNzctMC42MTYtNS4yOTctMS43NjYgICAgQzE3MS4wNTksMzY4Ljg1LDkzLjMxNSwyNjUuNzA5LDkwLjA0LDI2MS4yOTVjLTEuODkyLTIuNTIzLTIuMjk1LTUuODY0LTEuMDU2LTguNzY0YzEuMjM5LTIuOSwzLjkzMS00LjkxOSw3LjA2Mi01LjI5NyAgICBjMy4xMzEtMC4zNzcsNi4yMjYsMC45NDUsOC4xMTgsMy40NjhjMC43ODYsMS4wNSw3OS41MjgsMTA1LjU0MywxNDguMzAzLDE1Ny4xMzFjMy4wNCwyLjI4LDQuMjgsNi4yNDksMy4wNzgsOS44NTQgICAgQzI1NC4zNDQsNDIxLjI5MSwyNTAuOTcxLDQyMy43MjMsMjQ3LjE3MSw0MjMuNzIzeiIvPgoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzY1RERCOTsiIGN4PSIyNzMuNjU0IiBjeT0iNDMyLjU1IiByPSI4LjgyOCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=\" /></a>
            </div>
            
             <div class=\"social space1\">      
                <a href=\"#section6\" id=\"a1\"><i class=\"far fa-envelope\" style=\"font-size:2em;color:red;\"></i></a>
            </div>

       </div>    
    </div>";
?>