<?php include('contact.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="master.css">
    <title></title>
  </head>
  <body>
    <div class="full">
      <div id="containerEmail">
        <h1>Contact Me</h1>
        <form id="contactForm" action="" method="POST">
          <label for="name">Name</label><br>
          <input type="text" name="name" placeholder="Jon Doe" required><br>
          <label for="email">Email:</label><br>
          <input type="email" name="email" placeholder="YourEmail@domain.com" required><br>
          <label for="subject">Subject:</label><br>
          <input type="text" name="subject" placeholder="I want a blog site" required><br>
          <label for="website">Website:</label><br>
          <input type="url" name="website" placeholder="www.legend-gary.com"><br>
          <p>If you don't have a website yet, leave this blank</p>
          <label for="message">Content:</label><br>
          <textarea name="message" rows="8" cols="80" required></textarea><br>
          <button type="submit" name="submit">Send</button>
        </form>
      </div>
    </div>
  </body>
</html>
