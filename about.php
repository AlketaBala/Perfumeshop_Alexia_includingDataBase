<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Alketa Bala">
  <meta name="keywords" content="Perfume Shop, About Us, Alexia">
  <meta name="description" content="Learn more about Alexia Perfume Shop.">
  <title>About Us - Alexia</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

  <!-- Adding jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    // jQuery smooth scroll functionality
    $(document).ready(function () {
      $("#scrollButton").click(function () {
        $("html, body").animate({
          scrollTop: $(".about-box").offset().top
        }, 1000); // 
      });
    });
  </script>
    <style>
      /* Center the button and make it visually appealing */
        #scrollButton {
          display: inline-block;
          padding: 15px 30px;
          font-size: 16px;
          font-weight: bold;
          color: white;
          background-color: rgb(201, 0, 0);  /* Red background */
          border: 2px solid rgb(201, 0, 0);  /* Red border */
          border-radius: 8px;  /* Rounded corners */
          text-align: center;
          text-decoration: none;
          cursor: pointer;
          transition: all 0.3s ease;  /* Smooth transition for hover effect */
        }
        
        /* Hover effect to change the button color */
        #scrollButton:hover {
          background-color: darkred;
          border-color: darkred;
          transform: scale(1.1);  /* Slightly enlarge the button on hover */
        }
        .about-box {
        background: #f7f5f2; /* Soft beige background */
        border: 2px solid #c8b9a6; /* Elegant border color */
        border-radius: 15px; /* Rounded corners */
        padding: 20px 30px;
        margin: 20px auto;
        max-width: 800px; /* Center and limit the width */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        font-family: 'Georgia', serif; /* Serif font for an elegant look */
        color: #333; /* Dark text for contrast */
      }
      
      .about-box h2 {
        font-size: 24px;
        color: #741414; /* Accent color */
        margin-bottom: 15px;
      }
      
      .about-box h3 {
        font-size: 20px;
        margin-top: 20px;
        color: #5c4c3c; /* Secondary accent color */
      }
      
      .about-box ul {
        padding-left: 20px;
        margin: 10px 0;
      }
      
      .about-box ul li {
        margin-bottom: 10px;
      }
      
      .about-box p {
        line-height: 1.8;
        margin-bottom: 15px;
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
    <br>
    <center>
    <!-- Scroll Button -->
    <button id="scrollButton">Scroll to About Us</button>
    </center>
    <div class="about-box">
      <h2>Alexia: Your Ultimate Destination for Perfume and Fragrance Enthusiasts</h2>
      <p>
        Welcome to Alexia, your go-to online platform for everything related to perfumes and fragrances. Our mission is to bring the enchanting world of scents closer to you by offering an engaging resource, interactive community, and comprehensive database for perfume lovers. From iconic classics to niche discoveries, we cover it all, ensuring you stay updated on the latest releases and timeless favorites.
      </p>
      <p>
        Dive into the art of perfumery and explore the stories behind your favorite scents. Learn about the craftsmanship, history, and inspiration that go into creating each masterpiece. Whether you're a seasoned collector or new to the world of fragrance, Alexia is here to ignite your passion and expand your knowledge.
      </p>
  
      <h3>A Global Community of Fragrance Enthusiasts</h3>
      <p>
        Our platform transcends borders, bringing together fragrance lovers from around the globe. With contributors and readers from diverse backgrounds, we celebrate the universal language of scent and the unique experiences it evokes. Share your reviews, engage in discussions, and connect with fellow perfume aficionados in a welcoming, inclusive space.
      </p>
  
      <h3>Our Mission</h3>
      <ul>
        <li>To inspire and educate through detailed articles, reviews, and curated content about the fascinating world of fragrances.</li>
        <li>To build a vibrant and respectful community where everyone can share their scent journeys.</li>
        <li>To serve as a trusted resource for discovering and exploring perfumes, from everyday essentials to rare treasures.</li>
      </ul>
  
      <h3>Collaborate with Us</h3>
      <p>
        We invite brands, perfumers, and enthusiasts to join us on this fragrant journey. If you're a perfume brand looking to showcase your creations, we’d love to hear from you. Share your latest releases, insights, and stories with us to reach a global audience of fragrance lovers.
      </p>
      <p>
        For press inquiries, collaborations, or to send samples and materials for inclusion in our reviews or database, feel free to contact us:
      </p>
      <p><strong>Email:</strong> alexia@gmail.com</p>
      <p><strong>Postal Address:</strong> Alexia, 5480 7th Ave, San Francisco, CA 94112</p>
    </div>
  </main>

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
    <p class="copyright">Alexia @2024</p>
  </div>
</body>
</html>
