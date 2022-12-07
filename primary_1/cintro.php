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
<body onload="cintro()">

  <section id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3><span class="fa fa-user"></span> COMPUTER LESSONS</h3>
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
             <h2 id="text" style="display: none;">Welcome Kid, Let's learn how to identify the various part and components of a computer. Click on any part of to identify it.</h2>
             <div class="row">
              <div class="col-md-2" style="background-color: transparent;">
                <h2 style="color: #000;font-size: 20px;margin-top: 250px;background-color: orange;padding: 10px;border-radius: 10px;font-family: Bold; width: 60%"><a href="computer.php" style="color: #000;text-decoration: none;"><span class="fa fa-chevron-circle-left"></span> Back</a></h2>
              </div>
               <div class="col-md-8">

                <center><div id="boardc">
                  <h6>PARTS OF A COMPUTER </h6>
                  <br>
                  <img src="../img/left.png" style="width: 13%;" onclick="left()">
                  <img src="../img/desktop.png" style="width: 30%;" onclick="desktop()">
                   <img src="../img/left.png" style="width: 13%;" onclick="left()">
                  <img src="../img/cpu.png" style="width: 20%;" onclick="cpu()">
                  <br>
                  <img src="../img/keyboard.png" style="width: 30%;" onclick="keyboard()">
                  <img src="../img/mouse.png" style="width: 20%;" onclick="mouse()">
                </div></center>
                <center>
                  <div id=cdetails>
                    <h6 id="chead">EXPLANATION </h6>
                    <div id="example">
                      
                    </div>
                  </div>
                </center>
                  

               </div>
                <div class="col-md-2" style="background-color: transparent;">
                  <h2 style="color: #000;font-size: 20px;margin-top: 250px;background-color: orange;padding: 10px;border-radius: 10px;font-family: Bold; width: 60%"><a href="com_dynamic.php" style="color: #000;text-decoration: none;"><span class="fa fa-chevron-circle-right"></span> Next</a></h2>
              </div>
             </div> 
               
            </div>
          </div>
        </div>
      </div>
    
  </section>


  <!---<audio src="../voice/intro.m4a" autoplay="true" style="display: none;">!--->

 <script>
  var theater = theaterJS();
  theater.
on('type:start, erase:start', function () {
  theater.getCurrentActor().$element.classList.add('actor__content--typing');
}).
on('type:end, erase:end', function () {
  theater.getCurrentActor().$element.classList.remove('actor__content--typing');
});

  theater.
addActor('example', { speed: 0.9, accuracy: 1.5 }).
addScene('example:<p id="explain"></p> ', 600);
</script>


<script src="../js/script.js" async defer></script>
</body>
</html>