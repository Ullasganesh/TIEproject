<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script src="https://kit.fontawesome.com/a6a9382d23.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <br>
<div class="nav-container">
      <div class="wrapper">
        <nav>
          <div class="logo">
            <img src="logo.png" width=90px;>
            
          </div>

          <ul class="nav-items">
            <li>
              <a href="web2.php">Home</a>
            </li>

            
            <li>
              <a href="contact.php">Contact us</a>
            </li>
            <li>
            <a href="logout.php">Logout</a>
            </li>

          </ul>
        </nav>
      </div>
    </div>
    <section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <br>
        <br>


    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon">
                <i class="fa-solid fa-location-pin"></i>
                </div>
                <div class="text">
                    <h3>Address</h3>
                    <p> 14/7 Chikkasandra, Hesaraghatta main road,<br> Bengaluru,<br>560057</p>
                </div>
            </div>
            <div class="box">
            
                <div class="icon"><i class="fa fa-phone"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p> 507-475-6094</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>pptu2023@gmail.com</p>
                </div>
            </div>

    </div>
    <div class="contactForm">
        <form onsubmit="sendEmail(); reset(); return false;">
            <h2>Send Message</h2>
            <div class="inputBox">
                <input type="text" name="" required="required">
                <span>Full Name</span>
                
            </div>
            <div class="inputBox">
                <input type="email" id="email" name="" required="required">
                <span>Email</span>   
            </div>
            <div class="inputBox">
                <input type="text" name="" required="required">
                <span>Type your message....</span>
            </div>
            <div class="inputBox">
                <input type ="submit" name="" required="required">
            </div>
        </form>
    </div>    
        
      
    

    </section>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
    Host : "smtp.elasticemail.com",
    
    Username : "pavangowda2001209@gmail.com",
    Password : "A8D7DD18544DDD93A1FF1CAFD027D7A2B264",
    To : "pavangowda2001209@gmail.com",
    From : document.getElementById("email").value,
    Subject : "New contact form enquiry",
    Body : "And this is the body"
}).then(
  message => alert("message sent Succesfully")
);
        }
    </script>
</body>
</html>