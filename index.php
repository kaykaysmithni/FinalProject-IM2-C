
<h1 class="welcome-text">Welcome to GameCord</h1>    
<?php
    include 'views/header.php';
    
    echo 'Home';
    
    include 'views/footer.php';
    
?>
<style>      
 .welcome-text {
            position: fixed;
            width: 100%;
            top: 100;
            left: 0;          
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 60px;
            font-weight: bold;
            z-index: 1050; 
        }
         body {
            margin: 0;
            padding: 0;
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #222;
        }
        .container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: auto;
        
        }
        .sub-text {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 30px;
            width: 50%;
        }
        .controller {
            position: absolute;
            width: 80px;
        }
        .left-controller {
            top: 67%;
            left: 0%;
            width: 500px; 
            height: auto;
            border-radius: 5px; 
            
        }
        .right-controller {
            top: 66%;
            right: 0%;
            width: 340px; 
            border-radius: 5px;
        }
        
</style>
<body>   
    
    <div class="sub-text">
         <h2>Dream of a place</h2>
          <p>I dream of a place where every game world I explore becomes real, and I can live out epic adventures forever.</p>
             </div>
        <img src="res/left.png" class="controller left-controller" alt="Left Controller">
        <img src="res/right.png" class="controller right-controller" alt="Right Controller">
    </div>
    
       
    </div>

           
