<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Alketa Bala">
  <meta name="keywords" content="Perfume Shop, Fragrances, Alexia">
  <meta name="description" content="Alexia - Your one-stop shop for luxury perfumes. Explore our collection.">
  <title>Alexia - Perfume Shop</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<style>
    .user-menu {
    position: relative;
    display: inline-block;
  }

  .user-info {
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
  }

  .dropdown {
    display: none;
    position: absolute;
    top: 30px;
    right: 0;
    background: white;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    overflow: hidden;
    min-width: 120px;
    flex-direction: column;
  }

  .dropdown a {
    display: block;
    padding: 10px;
    text-align: center;
    color: black;
    text-decoration: none;
    transition: background 0.3s;
  }

  .dropdown a:hover {
    background: #f0f0f0;
  }

  .user-menu:hover .dropdown {
    display: flex;
  }

</style>
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
    <div style="position: relative;">
      <?php
      if (isset($_GET['emri'])) {
          $id = $_GET['id'];
          $emri = $_GET['emri'];
          echo "<div class='user-menu'>
                  <div class='user-info'>
                    <img src='iconaepare.png' alt='Ikona' width='20px' height='20px'>
                    <span>$emri</span>
                  </div>
                  <div class='dropdown'>
                    <a href='index.php'>Logout</a>
                    <a href='delete_account.php?id=$id' onclick='return confirm(\"Are you sure you want to delete your account? This action cannot be undone.\");'>Delete Account</a>
                  </div>
                </div>";
      } else {
          echo "<a href='login.php'>Sign in</a>";
      }
      ?>
    </div>
  </nav>

  <!-- Welcome Message & Quote -->
  <div style="text-align: center; margin-top: 15px;">
    <h1 style="color: rgb(0, 0, 0);">Welcome to Alexia</h1>
    <p style="color: rgb(0, 0, 0);">Perfume is the art that makes memory speak</p>
  </div>
</header>




    <div class="img" >
            <img src="BestsellingPerfume.jpg" style="width:100%">
           
    </div>
                    
    <br>
<main>
    <center>
    <section id="brands" style="text-align: center;">
    <h2>Explore Our Perfume Brands</h2>
    
<?php 
include 'funksionet.php'; 
$conn=lidhu_me_DB();

$sql = "SELECT * FROM produktet";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
      

         $linku=$row["Kodi"].'.jpg';
        echo '<div style="display: inline-block; margin: 10px; text-align: center;">';
        echo '<button style="border: none; background-color: transparent;">'; 
        echo '<img src="' . $linku . '" alt="' . $row["Emri_P"] . '" style="width: 300px; height: 280px;">'; 
        echo '</button>'; 

        echo '<p style="margin: 5px 0; font-weight: bold;">' . $row["Emri_P"] . '</p>'; 
        echo '<p style="margin: 0; color: red;">Price: $' . $row["Qmimi"] . '</p>';  

 if (isset($_GET['id'])) {
  echo '<a href=shporta.php?ida='.$id.'&id='.$row["Kodi"].'>Add to basket</a>';
} else {
  echo '<a href="login.php">Add to basket</a>';
}


        echo '</div>'; 

    }
    echo "</table>";
} else {
    echo "Keine Daten gefunden";
}

    
$conn->close();  
?>


    
        <br><br><br>

    <aside>
      <h2>Why Choose Alexia?</h2>
      <p>At Alexia, we bring you the finest selection of luxury perfumes from top brands. Quality and authenticity are our promises.</p>
      <p>Look at the Feedback people give us to understand better why people choose us.</p>
    </aside>
  
  </main>
      </section>
    
        <br><br><br>

  </center>
  </main>
  <div style="text-align: center; padding: 30px; font-family: Arial, sans-serif;">
    <!-- Feedback Slideshow -->
    <div class="slideshow-container" style="max-width: 800px; margin: auto; position: relative; overflow: hidden;">
  
      <!-- Slide 1 -->
      <div class="mySlides" style="display: block; padding: 20px;">
        <img src="perfume-svgrepo-com (1).svg" alt="Perfume Icon" style="width: 50px; margin-bottom: 20px;">
        <blockquote style="font-style: italic; font-size: 18px;">
          "Alexia is the ONLY place I purchase perfume from. The selection and quality is amazing. I would recommend Alexia to everyone I know!"
        </blockquote>
        <p style="margin-top: 10px; font-weight: bold;">- Misty C.</p>
      </div>
  
      <!-- Slide 2 -->
      <div class="mySlides" style="display: none; padding: 20px;">
        <img src="perfume-svgrepo-com (1).svg" alt="Perfume Icon" style="width: 50px; margin-bottom: 20px;">
        <blockquote style="font-style: italic; font-size: 18px;">
          "Amazing customer service and fast delivery! I’ve found my go-to shop for all my favorite scents."
        </blockquote>
        <p style="margin-top: 10px; font-weight: bold;">- John D.</p>
      </div>
  
      <!-- Slide 3 -->
      <div class="mySlides" style="display: none; padding: 20px;">
        <img src="perfume-svgrepo-com (1).svg" alt="Perfume Icon" style="width: 50px; margin-bottom: 20px;">
        <blockquote style="font-style: italic; font-size: 18px;">
          "I love the variety of perfumes available here! The prices are unbeatable, and I’ll definitely be back for more."
        </blockquote>
        <p style="margin-top: 10px; font-weight: bold;">- Sarah L.</p>
      </div>
  
      <!-- Navigation Arrows -->
      <a class="prev" onclick="plusSlides(-1)" style="cursor: pointer; position: absolute; top: 50%; left: 0; transform: translateY(-50%); font-size: 24px; text-decoration: none;">&#10094;</a>
      <a class="next" onclick="plusSlides(1)" style="cursor: pointer; position: absolute; top: 50%; right: 0; transform: translateY(-50%); font-size: 24px; text-decoration: none;">&#10095;</a>
    </div>
  
    <!-- Dots -->
    <div style="text-align: center; margin-top: 20px;">
      <span class="dot" onclick="currentSlide(1)" style="cursor: pointer; height: 10px; width: 10px; margin: 0 5px; background-color: #bbb; border-radius: 50%; display: inline-block;"></span>
      <span class="dot" onclick="currentSlide(2)" style="cursor: pointer; height: 10px; width: 10px; margin: 0 5px; background-color: #bbb; border-radius: 50%; display: inline-block;"></span>
      <span class="dot" onclick="currentSlide(3)" style="cursor: pointer; height: 10px; width: 10px; margin: 0 5px; background-color: #bbb; border-radius: 50%; display: inline-block;"></span>
    </div>
  </div>
  
<center>
  <h2>Here is the location of our Alexia</h2>
  <!-------------------------------------------------------------- Ifram ------------------------------------------------>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96772.36582084437!2d-74.06624078750613!3d40.71501300319713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27b354c293%3A0x2587a3358961049d!2sYardley%20Photo%20Studio!5e0!3m2!1sen!2s!4v1637706200196!5m2!1sen!2s"
height="450" 
width="700"
style="border:0; margin-top: 2em; margin-bottom: 2em;" 
allowfullscreen="" 
loading="lazy">
</iframe>
</center>
  <!-------------------------------------------------------------- Foter ------------------------------------------------>
  <div id="Footer">
    <div class="social">
  
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
          <a href="https://x.com/?lang=en"><i class="fa-brands fa-x-twitter"></i></a>    
              
    </div>
    <ul class="list">
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>
        <a href="about.php">About Us</a>
      </li>
      <li>
        <a href="contact.php">Contact</a>
      </li>
      <li>
        <a href='login.php'>Sign in</a>
      </li>
    </ul>
    <p class="copyright">
      Alexia @2024
    </p>



</div>
</body>
</html>
