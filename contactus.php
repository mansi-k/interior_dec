<!--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBh0H8FRiuJit0131p-RvpyDsaOeKYZi8o&callback=initMap"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(19.047806, 72.889912),
    zoom:40,
    mapTypeId:google.maps.MapTypeId.HYBRID
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script> 
<script>$(window).on('resize', function() {
    var currCenter = map.getCenter();
    google.maps.event.trigger(map, 'resize');
    map.setCenter(currCenter);
})</script>-->




<div class="fluid_container headstrip contact" id="contact-us">
	<center>
	<h1 class="heads">Contact Us</h1>
    <div class="row">
        <div class="col-sm-4">
            <div class="cinfo">
                <h2>Dheeraj Contractors</h2>
                <h3>Basant Society, Bldg-3, 1st floor<br>
                Behind Shanti Park, MD Marg, Vashi<br>
                Mumbai - 400077</h3><br>
                <h4><b>E-mail : </b><br /><span style="overflow-y:scroll;">dheerajconst@gmail.com <br /><br>
                <b>Phone : </b><br />+919323456711<br />+9122523478</h4>
            </div><br />
            <!--<div class="cinfo">
                <h2>Get In Touch</h2>
                <button onclick="document.getElementById('help').style.display='block'" data-toggle="modal" data-target="#login-modal">
                Need Help?</button>
                
                <div id="help" class="modal login">
  
  <form class="modal-content animate" action="action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('help').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label><br />
      <input type="text" placeholder="Enter Username" name="uname" required><br />

      <label><b>Password</b></label><br />
      <input type="password" placeholder="Enter Password" name="psw" required><br />
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('help').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>-->

                
                <!--<button>Newsletter</button><br />
                <img src="images/f.png" width="50px" height="50px" vspace="10px" />
                <img src="images/gp.png" width="50px" height="50px" vspace="10px"/>
                <img src="images/t.png" width="50px" height="50px" vspace="10px"/>
            </div>-->
        </div>
        <div class="col-sm-8">
        	<center>
        	<div id="googleMap" class="image-responsive"></div>
            <br />
            </center>
        </div>
    </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBh0H8FRiuJit0131p-RvpyDsaOeKYZi8o&callback=initMap"></script>
<script>
var myCenter=new google.maps.LatLng(19.047806, 72.889912);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:19,
  mapTypeId:google.maps.MapTypeId.HYBRID
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script> 
<script>$(window).on('resize', function() {
    var currCenter = map.getCenter();
    google.maps.event.trigger(map, 'resize');
    map.setCenter(currCenter);
</script>
