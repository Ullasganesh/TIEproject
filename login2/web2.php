<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="web.css">
    <script src="https://kit.fontawesome.com/a6a9382d23.js" crossorigin="anonymous"></script>

</head>
<body>

    <div class="header-1">
        
        <a href="#" class="logo"> <i class="fas fa-seedling"></i> LEAF NOW</a>
        <p>A platform that can connect the nature enthusiasts</p>
    </div>
      
      


<div class="topnav">
    <a href="web2.php">Home</a>
    <a href="sell.html">Sell</a>
    <a href="buy.html">Buy</a>
    <a href="donate1.html">Donate</a>
    <a href="contact1.html">Contact Us</a>
    <div class="icons" style="float:right">
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-user-circle"></a>
        <a href="#" style="height:10px;padding:0px;padding-bottom:5px;"><?php echo "<p >Hi!  " . $_SESSION['username'] . "</p>"; ?></a>
        <a href="logout.php" class=>Logout</a>
    </div>
</div>
  


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>SELL</h2>
      <h3>Planning To Sell</h3>
      <div class="fakeimg" style="height:500px;background: url(slider1.jpg);"></div>
      
      <a href="sell.html" class="btn">SELL</a>
      <h1>
        Future Where People and Nature Thrive
      </h1>
    <p>Confronting nature's biggest challenges depends on steady, reliable support from committed champions like you</p>
    </div>
    <div class="card">
      <h2>BUY</h2>
      <h3>Plant Today</h3>
      <div class="fakeimg" style="height:500px; background: url(slider2.jpg);"></div>
      
      <a href="buy.html" class="btn">BUY</a>
      <h1>
        Plant Make People Happy
      </h1> 
        <p>You can't buy happiness, but you can buy plants, and that's pretty much the same thing.</p>
    </div>
    <div class="card">
        <h2>DONATE</h2>
        <h3>Do you wish to Donate?</h3>
        <div class="fakeimg" style="height:500px;background: url(slider3.jpg);"></div>
        
        <a href="donate1.html" class="btn">Donate</a>
        <p><h1>
            Donate to Become a Member
        </h1>  

        Donate today and become a member of The Nature Conservancy. Members are the heroes at the heart of our on-the-ground conservation and effective advocacy to protect our natural world. Membership benefits help bring you closer to the impact you make.</p>
      </div>
  </div>
  <div class="rightcolumn">
    
    <div class="card">
      <h2>About Us</h2>
      <div class="fakeimg" style="height:300px;background: url(cat3.jpg);"></div>
      <h2> Nature Enthusiasts</h2>
      <p>The Nature enthusiasts team works to expand the current conservation movement by ensuring that  people from all backgrounds gain necessary skills to become a force for nature.</p>
    </div>
    
  </div>
</div>

<div class="footer1">
  
<section class="footer">

    <div class="box-container">

        
        <div class="box">
            <h3>BRANCH LOCATIONS</h3>
            <a href="#">INDIA</a>
            <a href="#">USA</a>
            <a href="#">SOUTH AFRICA</a>
            <a href="#">JAPAN</a>
        </div>
        <div class="box">
            <h3>QUICK LINKS</h3>
            <a href="web2.php">HOME</a>
            <a href="#">SELL</a>
            <a href="buy.html">BUY</a>
            <a href="donate1.html">DONATE</a>
            <a href="contact1.html">CONTACT US</a>
        </div>
        <div class="box">
            <h3>FOLLOW US</h3>
            <a href="#"><i class="fa-brands fa-facebook"></i>&nbsp;Facebook</a>
            <a href="#"><i class="fa-brands fa-twitter"></i>&nbsp;Twitter</a>
            <a href="#"><i class="fa-brands fa-instagram"></i>&nbsp;Instagram</a>
            <a href="#"><i class="fa-brands fa-linkedin"></i>&nbsp;Linked</a>
        </div>

    </div>

    
    
</section>
</div>




</body>
</html>

