<?php include 'action.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Scary Places | Contact us</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
  </head>
  <body>
    <div id="header">
      <div class="container">
        <a href="index.html"><img id="logo" src="img/scary-places-logo.png" alt="Scary Places"></a>
        <div class="nav">
          <a href="index.html" class="nav-link hover-effect text">Home</a>
          <a href="blog.html" class="nav-link hover-effect text">Blog</a>
          <a href="contact.php" class="nav-link hover-effect text">Contact</a>
          <a href="scary.html" class="nav-link hover-effect text">Near Me</a>
        </div>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </div>
    </div>
    <section id="contact-page">
      <div class="contact-wrapper">
        <h1 class="heading">Contact Us</h1>
        <p class="text margin-bottom">We will get back to you as soon as possible.</p>
        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" name="name" placeholder="Name" autofocus value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : ''; ?>">
            <?php echo $nameAlert; ?>
            <input type="text" name="email" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>">
            <?php echo $emailAlert; ?>
            <textarea name="message" placeholder="How may we help?"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES) : ''; ?></textarea>
            <?php echo $error; ?>
            <input type="submit" name="submit" class="submit-form-button" value="Send Message">
        </form>
      </div>
    </section>
    <footer id="footer">
      <div class="container">
        <div class="flex-column">
          <p class="text bold">Quick links</p>
          <ul class="footer-nav">
            <li><a href="index.html" class="text">FAQs</a></li>
            <li><a href="blog.html" class="text">Blog</a></li>
            <li><a href="contact.php" class="text">Contact</a></li>
            <li><a href="index.html" class="text">Disclaimer</a></li>
          </ul>
        </div>
        <div class="flex-form">
          <p class="text bold">Newsletter</p>
          <div class="flex-row">
            <input class="email-input" type="email" name="email" placeholder="Enter email">
            <div class="submit-button">Subscribe</div>
          </div>
        </div>
        <hr class="footer-hr">
        <div class="back-to-top">
          <a href="#contact-page" class="text">Back to top<i class="fas fa-chevron-up"></i></a>
        </div>
        <div class="social-links">
          <ul class="footer-links">
            <li><a href="https://www.instagram.com/scaryplaces_/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-tiktok"></i></a></li>
          </ul>
        </div>
        <div class="copyright">
          <p class="text">© 2022 <a href="index.html">Scary Places.</a> All rights reserved.</p>
        </div>
      </div>
    </footer>
    <script src="scripts/navbar.js"></script>
  </body>
</html>