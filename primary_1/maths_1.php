<!DOCTYPE html>
<html>
<head>
	<title>Interactive Learning System</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  	<link href="../font-awesome/all.css" rel="stylesheet">
  	<script type="text/javascript" src="../js/jquery.min.js"></script>
  	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../js/sweetalert.js"></script>
    <script src="../dist/theater.min.js"></script>
  	<style type="text/css">
  		body{
  			background-image: radial-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.9)),url('../img/11.jpg');
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			height: 100vh;
  		}
  	</style>
</head>
<body onload="maths_1()">

  <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3><span class="fa fa-user"></span> MATHEMATICS LESSONS</h3>
          </div>
        </div>
      </div>
  </section>
  <section id="sidebar">
     <div class="container-fluid">
        <div class="row content ">
          <div class="col-md-2">
            <center><img src="../img/bookshelf.png" style="width: 50%;margin-top: 10px;"></center>
            <br>
            <ul>
              <li><a href="index.php"><span class="fa fa-atom"></span> Home</a></li>
              <li><a href="maths.php"><span class="fa fa-balance-scale-right"></span> Maths</a></li>
              <li><a href="computer.php"><span class="fa fa-desktop"></span> Computer </a></li>
              <li><a href="english.php"><span class="fa fa-mail-bulk"></span> English</a></li>
               <li><a href="../index.php"><span class="fa fa-sign-out-alt"></span> Logout</a></li>
            </ul>
          </div>
          <div class="col-md-10">
            <div id="main2">
             <h2 id="text" style="display: none;">Welcome Kid, Let's practice some basic arithmetic operations.</h2>
             <div class="row">
              <div class="col-md-2" style="background-color: transparent;">
                <h2 id="prev" style="color: #000;font-size: 35px;margin-top: 250px;background-color: orange;padding: 10px;border-radius: 10px;font-family: Bold;"><a href="maths.php" style="color: #000;text-decoration: none;"><span class="fa fa-chevron-circle-left"></span> Back</a></h2>
              </div>
               <div class="col-md-8">

                <center><div id="board">
                  <h6>ARITHMETIC OPERATION </h6>
                  <br><br>
                    <h1><span id="first"></span> <span id="equal"></span> <span id="result"></span></h1>
                </div></center>
                
                <center>
                  <button class="set1" onclick="number(this.value)" value="1">1</button>
                <button class="set1" onclick="number(this.value)" value="2">2</button>
                <button class="set1" onclick="number(this.value)" value="3">3</button>
                <button class="set1" onclick="number(this.value)" value="4">4</button>
                <br>
                <button class="set1" onclick="number(this.value)" value="5">5</button>
                 <button class="set1" onclick="number(this.value)" value="6">6</button>
                <button class="set1" onclick="number(this.value)" value="7">7</button>
                 <button class="set1" onclick="number(this.value)" value="8">8</button>
                 <br>
                <button class="set1" onclick="number(this.value)" value="9">9</button>
                <button class="set1" onclick="number(this.value)" value="0">0</button>
                <button class="set1" onclick="number(this.value)" value="clear screen">CLS</button>
                <button class="set1" onclick="number1(this.value)" value="equal to">=</button>
                <br>
                <button class="set1" onclick="number(this.value)" value="multiply by">&#215;</button>
                <button class="set1" onclick="number(this.value)" value="minus">&#8722;</button>
                <button class="set1" onclick="number(this.value)" value="divide by">&#247;</button>
                <button class="set1" onclick="number(this.value)" value="+">+</button>
                
                
                </center>

               </div>
                <div class="col-md-2" style="background-color: transparent;">
                  <h2 id="next" style="color: #000;font-size: 35px;margin-top: 250px;background-color: orange;padding: 10px;border-radius: 10px;font-family: Bold;"><a href="math_dynamic.php" style="color: #000;text-decoration: none;"><span class="fa fa-chevron-circle-right"></span> Next</a></h2>
              </div>
             </div> 
               
            </div>
          </div>
        </div>
      </div>
    
  </section>


  <!---<audio src="../voice/intro.m4a" autoplay="true" style="display: none;">!--->



<script src="../js/script.js" async defer></script>
</body>
</html>