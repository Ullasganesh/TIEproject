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
    <title>Document</title>
</head>
<link rel="stylesheet" href="donate1.css">
</head>
<body id="body">
    <br>
    
    <div id="main_wrapper">
        <nav>
            <div id = "menu">
                
            <img src="tree3.png">
                <ul>
                    <li> <a href ="web2.php">Home</a></li>
                    <li> <a href ="contact1.html">Contact</a></li>
                    
                   
                </ul>
        
            </div>
        </nav>
        <div id="content">
            <div class="text">
                <h1>Thank You  <i><?php echo $_SESSION['username']; ?>

</i></h1>
                <p id="data">
                 for your generous gift to <b><i>Leaf Now
                 </i></b>. We are thrilled to have your support. Through your donation we have been able to accomplish our goal and continue working towards planting more trees. You truly make the difference for us, and we are extremely grateful!
</p>
                    <button onclick="printPage()">print</button>
            </div>
            <div class="image">
                <img src="thankyou.png" alt="">
            </div>
            
    
</body>
<script type="text/javascript">
    function printPage(){
        var body= document.getElementById('body').innerHTML;
        var data= document.getElementById('data').innerHTML;
        document.getElementById('body').innerHTML=body;
        window.print();
    }
</script>
</html>