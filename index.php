<!-- Developer Ilia Kombarov -->
<!-- http://ilyakombarov.space/ -->
<?php
    include 'user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <img class="v1" src="img/Vector1.svg" alt="">
<div class="container">
    <header>
        <h1>Logo</h1>
        <p>There will be our slogan.</p>
    </header>
    <main>
        <div class="title_img">
            <img src="img/title_img.svg" alt="">
        </div>
        <div class="title_text">
            <h2>We're Launching Soon</h2>
            <p>Be one of the first to experience it by<br> entering your e-mail below</p>
        </div>
        <form action="index.php" method="post" onmousedown="viewDiv()" >
            <input type="email" name="email" id="email" placeholder="Your E-mail" >
            <span class="error"><?php echo $errMsg; ?></span>
            <input type="submit" name="submit" id="submit" value="Notify Me">
        </form>
    </main>
</div>
<footer>
    <div class="photo_r">
        <img class="v2" src="img/Vector2.svg" alt="">
    </div>
    <span style="color: #fff;"><a href="http://ilyakombarov.space/" style="color: #fff; font-size: 5px;">веб-разработчик Илья Комбаров</a></span>
</footer>
<!-- <script>
     function viewDiv(){
        document.getElementById("submit").style.background="rgba(34, 176, 255, 0.75)";    
    } 
</script> -->

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBneOrbehUp7oh3xcNhlQBL_lDc_kVZhTo",
    authDomain: "myfrienty.firebaseapp.com",
    projectId: "myfrienty",
    storageBucket: "myfrienty.appspot.com",
    messagingSenderId: "642091177041",
    appId: "1:642091177041:web:e48b96749ddc07fd659470",
    measurementId: "G-PLSLKEDHJ5"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

</body>
</html>

