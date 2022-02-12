<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Onu Shilon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
<h1>Onu Shilon</h1>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="logo/icon.html.png" alt="LOGO LOADING...">
        </div>
    </div>

    <nav id="sideNav">
        <ul>
                <li> <a href="about.html">ABOUT</a> </li>
                <li>  <a href="services.html">SERVICES</a> </li>
        </ul>
    </nav>
    <img src="logo/icon.html.png" id="menuBtn">
    <p id="clickhere">CLICK HERE</p>
   
    <div class="welcome-text"
     <p><em>Onu Shilon</em></p>
    <p>Welcome to the "Onu Shilon" official website.Don't forget to suscribe our youtube channel.
        We have a facebook page too.</p>
    <a href="https://youtube.com/channel/UCHj21W4XtVA8djLWARBwdEA">Youtube Channel</a>
    <a href="https://www.facebook.com/%E0%A6%85%E0%A6%A8%E0%A7%81-%E0%A6%B6%E0%A7%80%E0%A6%B2%E0%A6%A8-Onu-Shilon-103170642111146/">Facebook Page</a>
</div>

<script>
    var menuBtn = document.getElementById("menuBtn");
    var sideNav = document.getElementById("sideNav");

    sideNav.style.right ="-250px";
    menuBtn.onclick = function(){
     if (sideNav.style.right=="-250px"){
           sideNav.style.right ="0";
     } 
     else{
         sideNav.style.right ="-250px";
     }
    }
   
 </script>

</body>
</html>