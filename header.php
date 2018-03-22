<body data-spy="scroll" data-target=".navbar">
<div class="upbg container-fluid">
<div class="upstrip container-fluid">
Dheeraj Constructors
</div>
<nav class="navbar navbar-default"  data-spy="affix" data-offset-top="20">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <div class="logo">
			<a href="index.html"><img src="images/hs2.png" /></a>	  </div>
 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="index.php" class="active">Home</a></li>
        <li><a href="#about-us">About Us</a></li>
        <li><a href="#our-services">Services</a></li>
        <li><a href="#our-designs">Designs</a></li>
        <li><a href="#contact-us">Contact Us</a></li>
        <li><a href="#" onClick="document.getElementById('alog').style.display='block'">
        Login</a></li>
        	
        <div id="alog" class="modal login">
            <form class="modal-content animate" action="action_page.php">
                <div class="imgcontainer">
                    <h2>Admin Login</h2>
                    <span onClick="document.getElementById('alog').style.display='none'" class="close" title="Close Modal">
                    &times;</span>
                    <img src="images/y.jpg" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <label><b>Your Name</b></label><br />
                    <input type="text" placeholder="Enter Username" name="uname" required><br />
                    <label><b>Password</b></label><br />
                    <input type="password" placeholder="Enter Password" name="cno" required><br />
                    <button type="submit">Submit</button><br>
                </div>
                <!--<div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('alog').style.display='none'" class="cancelbtn">
                    Cancel</button>
                </div>-->
            </form>
        </div>
     	</ul>
    </div>
  </div>
</nav>
</div>

<div class="fluid_container slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
		<div class="item active">
        	<img src="images/1.jpg" class="img-responsive" width="1500" height="500">
        	<div class="slider-content">
            	<div class="col-md-12 text-center">
                	<h2 class="animated4 shadow123">
                    	<div class="img-responsive "><strong>Welcome To Dhiraj Contractors!</strong>
                        <h3 class="animated4 shadow123">Interior Work Undertaken</h3> </div>
                    </h2>
                </div>
            </div>
      	</div>
        <div class="item">
        	<img src="images/2.jpg" class="img-responsive" width="1500" height="500">
        	<div class="slider-content">
            	<div class="col-md-12 text-center">
                	<h2 class="animated4 shadow123">
                    	<div class="img-responsive "><strong>IC - Innovation & Challenges</strong></div>
                    </h2>
                </div>
            </div>
      	</div>

      <div class="item">
        	<img src="images/3.jpg" class="img-responsive" width="1500" height="500">
        	<div class="slider-content">
            	<div class="col-md-12 text-center">
                	<h2 class="animated4 shadow123">
                    	<div class="img-responsive "><strong>C - Computers</strong></div>
                    </h2>
                </div>
            </div>
      	</div>
    
      <div class="item">
        	<img src="images/4.jpg" class="img-responsive" width="1500" height="500">
        	<div class="slider-content">
            	<div class="col-md-12 text-center">
                	<h2 class="animated4 shadow123">
                    	<div class="img-responsive "><strong>I - Instrumentation</strong></div>
                    </h2>
                </div>
            </div>
      	</div>

      <div class="item">
        	<img src="images/5.jpg" class="img-responsive" width="1500" height="500">
        	<div class="slider-content">
            	<div class="col-md-12 text-center">
                	<h2 class="animated4 shadow123">
                    	<div class="img-responsive "><strong>T - Telecommunication</strong></div>
                    </h2>
                </div>
            </div>
      	</div>
      
      <div class="item">
        	<img src="images/6.jpg" class="img-responsive" width="1500" height="500">
        	<div class="slider-content">
            	<div class="col-md-12 text-center">
                	<h2 class="animated4 shadow123">
                    	<div class="img-responsive "><strong>E - Electronics</strong></div>
                    </h2>
                </div>
            </div>
      	</div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
