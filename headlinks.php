<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0" charset=utf-8">
<link rel="stylesheet" href="styles/bootstrap.min.css" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<!--<link rel="stylesheet" href="https://cdn.pannellum.org/2.2/pannellum.css"/>
<script type="text/javascript" src="https://cdn.pannellum.org/2.2/pannellum.js"></script>-->
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Raleway:100,300' rel='stylesheet' type='text/css'>
<link href="css/navbarstyle.css" rel="stylesheet" type="text/css" />
<link href="css/contentstyle.css" rel="stylesheet" type="text/css" />
<link href="css/footerstyle.css" rel="stylesheet" type="text/css" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
<link href="css/gallerystyle.css" rel="stylesheet" type="text/css" />
<link href="css/adminpanel.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="spherical.css" />
<link rel="stylesheet" type="text/css" href="spg/css/component.css" />
<script src="spg/js/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type='text/javascript'>
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>
<?php include 'headfancylinks.php'; ?>
<title>Untitled Document</title>
</head>