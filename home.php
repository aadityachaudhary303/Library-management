


<?php
session_start();

// Redirect to login page if the user is not logged in
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Poppins, Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      width: 80%;
      margin: 50px auto;
    }

    .image-container {
      overflow: hidden;
      position: relative;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .transition-image {
      width: 100%;
      height: auto;
      transition: transform 0.4s ease, opacity 0.4s ease;
      border-radius: 8px;
    }

    .transition-image:hover {
      transform: scale(1.1);
      opacity: 0.8;
    }

    .gallery h2 {
      text-align: center;
      margin-top: 50px;
      font-size: 2rem;
      color: #333;
    }

    .hero-content {
      text-align: center;
      padding: 100px 20px;
      background-color: #ff7f50;
      color: white;
      border-radius: 10px;
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }

    .btn {
      background-color: #fff;
      color: #ff7f50;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
    }

    .btn:hover {
      background-color: #ff6347;
      color: white;
    }

    @media screen and (max-width: 768px) {
      .gallery {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media screen and (max-width: 480px) {
      .gallery {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <header>
    <div class="logo">Library<span>Manager</span></div>
    <nav>
      <ul>
        <li><a href="index.php">Student Details</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="hero-content">
      <h1>Welcome to Our Library</h1>
      <p>Manage your books, members, and transactions seamlessly.</p>
      <a href="book.php" class="btn">Explore Services</a>
    </div>
  </section>

  <!-- Background Section (optional) -->
  <section id="background-section">
    <!-- Can add additional content or background styles if needed -->
  </section>

  <!-- Image Transition Gallery -->
  <section id="gallery">
    <h2>Explore Our Library Collection</h2>
    <div class="gallery">
      <div class="image-container">
        <img src="i4.jfif" alt="Image 1" class="transition-image">
      </div>
      <div class="image-container">
        <img src="i1.jpg" alt="Image 2" class="transition-image">
      </div>
      <div class="image-container">
        <img src="i3.jpg" alt="Image 3" class="transition-image">
      </div>
      <div class="image-container">
        <img src="i2.jpg" alt="Image 4" class="transition-image">
      </div>
      <div class="image-container">
        <img src="i5.jfif" alt="Image 5" class="transition-image">
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services">
    <h2>Our Services</h2>
    <div class="service-container">
      <div class="service-box">
        <i class="fas fa-book"></i>
        <h3>Book Management</h3>
        <p>Effortlessly manage and catalog books.</p>
      </div>
      <div class="service-box">
        <i class="fas fa-users"></i>
        <h3>Member Management</h3>
        <p>Track members, their borrowing history, and due dates.</p>
      </div>
      <div class="service-box">
        <i class="fas fa-calendar-check"></i>
        <h3>Transaction Tracking</h3>
        <p>Monitor book issues and returns easily.</p>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section id="about">
    <h2>About Us</h2>
    <p>We provide an efficient and user-friendly library management system that simplifies the process of managing books, members, and transactions.</p>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <h2>Contact Us</h2>
    <p>Email: support@librarymanager.com</p>
    <p>Phone: +123 456 7890</p>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Library Management System. All rights reserved.</p>
  </footer>

</body>
</html>
