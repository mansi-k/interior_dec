<?php
include_once 'dbconnect.php';

if((isset($_POST['btn_login'])))
{
	$login_id = $_POST['uname'];
	$password = $_POST['upasw'];
	$res=mysqli_query($bd,"SELECT * FROM logins WHERE full_name='$login_id' and password='$password'");
	$row=mysqli_fetch_array($res);
	if($row['password'] == $password)
	{
		$_SESSION['user'] = $row['id'];
		header("Location: adminpanel.php");
	}
}
if(isset($_POST['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: index.php");
}
?>

<body data-spy="scroll" data-target=".navbar" data-offset="0">
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<div class="upbg container-fluid">
<div class="upstrip container-fluid">
Dheeraj Constructors
</div>
<nav class="navbar navbar-default"  data-spy="affix" data-offset-top="50">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <div class="logo">
			<a href="index.html"><img src="images/hs2.png" /></a>	  
     </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="index.php" class="active">Home</a></li>
        <li><a href="<?php if(strchr($_SERVER['REQUEST_URI'],'index.php')==false){ echo 'index.php#about-us'; } else{ echo '#about-us'; }?>">About Us</a></li>
        <li><a href="<?php if(strchr($_SERVER['REQUEST_URI'],'index.php')==false){ echo 'index.php#our-services'; } else{ echo '#our-services'; }?>">Services</a></li>
        <li><a href="<?php if(strchr($_SERVER['REQUEST_URI'],'index.php')==false){ echo 'index.php#our-designs'; } else{ echo '#our-designs'; }?>">Designs</a></li>
        <li><a href="<?php if(strchr($_SERVER['REQUEST_URI'],'index.php')==false){ echo 'index.php#contact-us'; } else{ echo '#contact-us'; }?>">Contact Us</a></li>
        <?php
        if(isset($_SESSION['user'])!="")
        {?> 
        	<li class="dropdown">
            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
            	<ul class="dropdown-menu">
                	<li><a href="adminpanel.php" style="font-size:18px">Admin Panel</a></li>
                    <li><form  style="padding:5px" class="adminform" method="post">
                    <center><button type="submit" name="logout" style="font-size:18px; padding:5px;">Logout</button></center></form></li>
                </ul>
            </li>
		<?php }
		else
		{?> <li><a href="#" onClick="document.getElementById('alog').style.display='block'">Login</a></li> <?php }?>
        <div id="alog" class="modal login">
            <form class="modal-content animate" method="post">
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
                    <input type="password" placeholder="Enter Password" name="upasw" required><br />
                    <button type="submit" name="btn_login">Submit</button><br>
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