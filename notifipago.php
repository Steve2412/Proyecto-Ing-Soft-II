<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>video playlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/styles/css/style.css">

   <link rel="stylesheet" href="assets/styles/css/notipago.css">
</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">Educa.</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">shaikh anas</h3>
         <p class="role">studen</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">shaikh anas</h3>
      <p class="role">studen</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<div class="menu-cont">
  </div>
  <div class="body">
    <form action="#">
        <h2 class="encabezado2">Notificación de pago</h2>
    <span class="line"></span>
    <p>Ingresa cada uno de los campos</p>
    <div class="input-group">


        <label for="monto">Monto en bs</label>
        <input type="text" placeholder="2500" id="monto">

        <label class="radio-label-title" for="banco">Banco</label>

        <input class="radio-input" type="radio" id="venezuela" name="banco" value="venezuela">
        <label class="radio-label" for="venezuela">Banco de Venezuela</label><br>
        <input class="radio-input" type="radio" id="banesco" name="banco" value="banesco">
        <label class="radio-label" for="banesco">Banesco</label><br>
        <input class="radio-input" type="radio" id="provincial" name="banco" value="provincial">
        <label class="radio-label" for="provincial">Banco Provincial</label>
        <input class="radio-input" type="radio" id="bnc" name="banco" value="bnc">
        <label class="radio-label" for="bnc">Banco Nacional de crédito</label>
        <input class="radio-input" type="radio" id="bancrecer" name="banco" value="bancrecer">
        <label class="radio-label" for="bancrecer">Bancrecer</label> 

        <label for="cedula">Cédula</label>
        <input type="number" name="cedula" placeholder="cédula" id="cedula">

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" placeholder="2023/02/04" id="fecha">
        <label for="motivo">Motivo de pago</label>
        <input type="text">

        <input type="submit" value="enviar" class="btn">
    </div>
    </form>
  </div>
  <script src="noti-radio.js"></script>








<footer class="footer">

   &copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>