<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <link rel="stylesheet" href="css/styles3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    

  
    <header>

        <div class="menu container">
            <a href="index.php" class="logo">SOSGRÚA</a>
            <input type="checkbox" id="menu">
            <label for="menu">
              <img class="menu-icono" src="assets/menu-btn.png" alt="menu">
            </label>
            <nav class="navbar">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="index.php#Servicios">Servicios</a></li>
              <li><a href="index.php#Beneficio">Beneficios</a></li>
              <li><a href="index.php#Equipo">Nuestro Equipo</a></li>
              <li><a href="contacto.php">Contáctanos</a></li>
            </ul>
            </nav>
      
                 
            <div class="icons">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-x-twitter"></i>
              <i class="fa-brands fa-instagram"></i>
           </div>
      </div>

     
        
        </header>
        <section class="bg-secc">
            <div class="bg-txt container">
              <h2>Contáctanos</h2>
              
            </p>
            </div>
     </section>
    
     




         
<!--FORMULARIO-->
<section class="formulario">
    
  <form id="formulario" method="POST" method="post" autocomplete="off">
 <h2>¿Cómo Podemos Ayudarte?</h2>
  <div class="input-group">
  <div class="input-container">
  <input type="text" name="name" placeholder="Nombre y Apellido">
  <i class="fa-solid fa-user"></i>
 </div>
 <div class="input-container">
  <input type="tel" name="phone" placeholder="Telefono Celular">
  <i class="fa-solid fa-phone"></i>
 </div>
 <div class="input-container">
  <input type="email" name="email" placeholder="Correo">
  <i class="fa-solid fa-envelope"></i>
 </div>
 <div class="input-container">
  <textarea name="message" placeholder="Descripción del problema"></textarea>
 </div>
 
  <input type="submit" name="send" class="btn" onClick="myFuction()">
  </div>

</form>

</section>



         <footer>
    
    
            <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.126786301141!2d-66.7832288251217!3d10.490670289641269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a570b05f20a73%3A0x6176dff286a6afc9!2sUniversidad%20Santa%20Mar%C3%ADa!5e0!3m2!1ses-419!2sve!4v1712216880002!5m2!1ses-419!2sve" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
    
          </div>
    
    
    
         </footer>

         
     <?php
         
         include("php/send.php");
         ?>
    
    
    
</body>
</html>