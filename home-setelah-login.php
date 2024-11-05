<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | My Company</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <img src="images.png" alt="Company Logo" class="logo">
            <nav class="navbar">
                <ul>
                    <li class="pad"><a href="home-setelah-login.php">Home</a></li>
                    <li class="pad"><a href="About-Us.php">About</a></li>
                    <li class="pad"><a href="#services">Services</a></li>
                    <li class="pad"><a href="contactus.php">Contact</a></li>
                    <li class="right"><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Welcome to Our Company</h1>
            <p>We provide the best solutions for your business needs.</p>
    </section>

    <!-- Content Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
          <a href="About-Us.php"><p>Our company is dedicated to providing top-notch services to help you achieve your business goals. With years of experience and a passionate team, we ensure the best quality in everything we do.</p></a>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-item">
                <h3>Web Design</h3>
                <p>We create modern and responsive web designs that reflect your brand.</p>
            </div>
            <div class="service-item">
                <h3>Development</h3>
                <p>Our development team builds high-quality applications tailored to your needs.</p>
            </div>
            <div class="service-item">
                <h3>Marketing</h3>
                <p>With our marketing strategies, we help you reach a broader audience effectively.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 My Company. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
    
</body>
</html>
