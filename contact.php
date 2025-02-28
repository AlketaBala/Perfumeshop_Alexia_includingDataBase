<?php
  /**-----Përfshirja e file që përmban funksionin për t'u lidhur me bazën e të dhënave------- */
  include_once 'funksionet.php'; 

  /**--Krijoni një lidhje me bazën e të dhënave---*/
  $conn = lidhu_me_DB(); 

  /**---- Kontrolloni nëse metoda e kërkesës është POST (dorëzimi i formularit)--*/
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /** Ruani të dhënat e formës në një array */
    $data = array(
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "message" => $_POST["message"],
    );

    /**-Futni të dhënat në bazën e të dhënave duke përdorur funksion shto_ne_DB tek funksionet.php*/
    shto_ne_DB($conn, "kontaktii", $data);
    
    /**-------Mbyllim lidhjen me databazë----- */
    mysqli_close($conn);
    
    /**--Konfirmo suksesin e dërgimit të dhënave në DB me mesazhë suksesi në të njëjtën faqe--- */
    header("Location: contact.php?success=1");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="Alketa Bala">
   <meta name="keywords" content="Perfume Shop, Contact Us, Alexia">
   <meta name="description" content="Contact Alexia Perfume Shop.">
   <title>Contact - Alexia</title>
   <!-- Lidhja me file të jashtëm CSS-->
   <link rel="stylesheet" href="style.css">
   <!-- Font Awesome për ikona -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
   <!-- Libraria jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
     // Funksioni që validon fushat e formularit para dorëzimit
     function validateForm(event) {
         event.preventDefault(); // Parandalon që forma të submitting immediately

         // Merrë vlerat e inputave dhe largon hapësirat shtesë
         let name = document.getElementById("name").value.trim();
         let email = document.getElementById("email").value.trim();
         let phone = document.getElementById("phone").value.trim();
         let message = document.getElementById("message").value.trim();

         let errorMessage = document.getElementById("error-message"); // Kontajneri i mesazhit Error

         // Kontrollo nëse ndonjë fushë është e zbrazët
         if (name === "" || email === "" || phone === "" || message === "") {
             errorMessage.innerHTML = "All fields are required!";
             errorMessage.style.color = "red";
             return false;
         } else {
             errorMessage.innerHTML = ""; // Pastro mesazhin error nëse janë plotësuar të gjitha fushat 
             document.getElementById("contactForm").submit(); // Dërgo formularin
         }
      }
   </script>
 </head>
 <body>
 <header style="padding: 22px 20px;">
  <!-- Navigation Bar -->
  <nav style="display: flex; justify-content: space-between; align-items: center;">
    
    <!-- Logo (Fully Left) -->
    <div class="logo">
      <img src="Untitled.png" alt="Alexia Logo" style="width: 100px; height: auto;">
    </div>

    <!-- Centered Navigation Links -->
    <div style="display: flex; gap: 15px;">
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="contact.php">Contact</a>
    </div>

    <!-- User Section (Fully Right) -->
    <div style="display: flex; align-items: center; gap: 10px;">
    </div>
  </nav>

  <!-- Welcome Message & Quote -->
  <div style="text-align: center; margin-top: 15px;">
    <h1 style="color: rgb(0, 0, 0);">Welcome to Alexia</h1>
    <p style="color: rgb(0, 0, 0);">Perfume is the art that makes memory speak</p>
  </div>
</header>

 <main>
   <div class="contact-section">
     <h1>Contact Us</h1>
     <div class="border"></div>

     <!-- Shfaqë një mesazhë suksesi nëse formulari është dorëzuar me sukses -->
     <?php if (isset($_GET['success'])): ?>
       <p style="color: green; text-align: center;">Your message has been sent successfully!</p>
     <?php endif; ?>
    
     <!-- Zona e shfaqjës së Error mesazhit  -->
     <p id="error-message" style="text-align: center;"></p>

     <!-- Formulari i Kontaktit-->
     <form id="contactForm" class="contact-form" action="contact.php" method="POST" onsubmit="return validateForm(event)">
       <input type="text" id="name" name="name" class="contact-form-text" placeholder="Your Name" required>
       <input type="email" id="email" name="email" class="contact-form-text" placeholder="Your Email" required>
       <input type="text" id="phone" name="phone" class="contact-form-text" placeholder="Your Phone" required>
       <textarea id="message" name="message" class="contact-form-text" placeholder="Your Message" required></textarea>
       <input type="submit" id="submitButton" class="contact-form-btn" value="Send">
     </form>
   </div>
 </main>

 <!-- Pjesa e footerit -->
 <div id="Footer">
   <div class="social">
     <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
     <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
     <a href="https://x.com/?lang=en"><i class="fa-brands fa-x-twitter"></i></a>
   </div>
  
   <ul class="list">
     <li><a href="index.php">Home</a></li>
     <li><a href="about.php">About Us</a></li>
     <li><a href="contact.php">Contact</a></li>
     <li><a href="login.php">Sign in</a></li>
   </ul>

   <p class="copyright">
     Alexia @2024
   </p>
 </div>
 </body>
</html>
