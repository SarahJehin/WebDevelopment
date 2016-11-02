
<?php 
session_start(); 

//unset($_SESSION['endOfTimer']);


if (!isset($_SESSION['endOfTimer'])){ 
    $endOfTimer = time() + 10; 
    $_SESSION['endOfTimer'] = $endOfTimer; 
} 

if(($_SESSION['endOfTimer'] - time()) < 0) { 
      $timeTilEnd = 0; 
} 
else { 
      $timeTilEnd = $_SESSION['endOfTimer'] - time(); 
} 

if($timeTilEnd <= 0) {  
session_destroy(); 
} 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    You have <span id="timer"><?php echo $timeTilEnd; ?></span> seconds left 


    <script type="text/javascript"> 
    var TimeLeft = <?php echo $timeTilEnd; ?>; 

    function countdown() 
    { 
          if(TimeLeft > 0) { 
                TimeLeft -= 1; 
                document.getElementById('timer').innerHTML = TimeLeft; 
          } 
    if(TimeLeft < 1) { 
                window.location = "http://www.google.com/" 
          } 
    } 
    CountFunc = setInterval(countdown,1000); 
    </script>
</body>
</html>




