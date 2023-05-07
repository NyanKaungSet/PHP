<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="styesheet">
    <link rel="stylesheet" href="style.css">
    <title>Contact Form</title>
</head>
<body>
    <main>
      <h1>SEND E-MAIL</h1>
      <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="mail" placeholder="Email Address">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message" rows="8" cols="80"></textarea>
        <button type="submit" name="submit">SEND MAIL</buttom>
      </form>  
    </main>
</body>
</html>
