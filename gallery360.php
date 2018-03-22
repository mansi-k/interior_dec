<?php 
include 'headlinks.php'; 
include 'navbar.php';
include_once 'dbconnect.php';
$pgtype=$_GET['type'];
$pgname=$_GET['name'];
?>
<script src="impetus.min.js"></script>
<script src="spherical.js"></script>
<div class="fluid_container slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner" role="listbox">
			<?php 
			if($pgname=="Living Room")
			{?>
                <div class="item active">
                    <img src="images/3.jpg" class="img-responsive" width="1500" height="500">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4 shadow123">
                                <div class="img-responsive "><strong>Spacious Living Rooms!</strong>
                                <h3 class="animated4 shadow123">Mark your steps on the path to your own house, through the spacious living room</h3></div>
                            </h2>
                        </div>
                    </div>
                </div>
            <?php
			}?>
            <?php 
			if($pgname=="Kitchen")
			{?>
               	<div class="item active">
                    <img src="images/din1.jpg" class="img-responsive" width="1500" height="500">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4 shadow123">
                                <div class="img-responsive "><strong>Contemporary Style Kitchens!</strong>
                                <h3 class="animated4 shadow123">Make your way to your loved once heart from your contemporary style kitchen</h3></div>
                            </h2>
                        </div>
                    </div>
                </div>
            <?php
			}?>
             <?php 
			if($pgname=="Study Room")
			{?>
               	<div class="item active">
                    <img src="images/5.jpg" class="img-responsive" width="1500" height="500">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4 shadow123">
                                <div class="img-responsive "><strong>Stylish Study Rooms!</strong>
                                <h3 class="animated4 shadow123">Let the stylish study room be the most relished place by your kiddies.</h3></div>
                            </h2>
                        </div>
                    </div>
                </div>
            <?php
			}?>
             <?php 
			if($pgname=="Bedroom")
			{?>
               	<div class="item active">
                    <img src="images/bed1.jpg" class="img-responsive" width="1500" height="500">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4 shadow123">
                                <div class="img-responsive "><strong>Peaceful Bedrooms!</strong>
                                <h3 class="animated4 shadow123">Decorate your bedroom with the best beds and matresses making it a hub for solace and peace</h3></div>
                            </h2>
                        </div>
                    </div>
                </div>
            <?php
			}?>
             <?php 
			if($pgname=="Office")
			{?>
               	<div class="item active">
                    <img src="images/off1.jpg" class="img-responsive" width="1500" height="500">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4 shadow123">
                                <div class="img-responsive "><strong>Modern Style Offices!</strong>
                                <h3 class="animated4 shadow123">A modern and well equipped office for the workholics is a splendid magnet</h3></div>
                            </h2>
                        </div>
                    </div>
                </div>
            <?php
			}?>
        </div>
    </div>
</div>
<center> 
<div class="fluid_container headstrip gallery">
	<h1 class="heads"><?php echo $pgname?> Gallery (360)</h1>
	<div class="photos">
		<?php
		$pid = array();
		$pnm = array();
    	$res=mysqli_query($bd,"SELECT * FROM $pgtype");
		$resno=mysqli_num_rows($res);
		if (!$res) {
			printf("Error: %s\n", mysqli_error($bd));
			exit();
		}
		$i=1;
		while($userrow=mysqli_fetch_array($res))
		{
			$pid[$i]=$userrow['id'];
			$pnm[$i]=$userrow['pic'];
			$path = "images/".$pgtype."/".$userrow['pic'];
			if($i%3==0)
			{?>
				<div class="row">
			<?php
			}?>
			<div class="col-sm-4 col-md-4 col-lg-4 pic">
				<a href="#" title="<?php echo $userrow['name'];?>" onClick="document.getElementById('<?php echo $pid[$i]?>').style.display='block';">
					<img id="eg" class="img-responsive" src="<?php echo $path ?>" height="200px" alt="<?php echo $userrow['name'];?>">
				</a>
                <div id="<?php echo $pid[$i]?>" class="modal pic360">
                    <span onClick="document.getElementById('<?php echo $pid[$i]?>').style.display='none';" class="close" title="Close Modal">&times;</span>
                    <div class="modal-content animate pano" id="<?php echo 'panaroma'.$pid[$i]?>" alt="Dheeeraj Contractors"></div>
                    <div id="caption">Dheeeraj Contractors</div>
        		</div>                
			</div>
			<?php
			if($i%3==0)
			{?>
				</div>
			<?php
			}
			$i++;
		}?>
	</div>
</div>
</center>
<?php include 'footer.php'; ?>

<?php 
$pfr = "images/".$pgtype."/".$pgtype."360/front";
$pbk = "images/".$pgtype."/".$pgtype."360/back";
$plf = "images/".$pgtype."/".$pgtype."360/left";
$prg = "images/".$pgtype."/".$pgtype."360/right";
$ptp = "images/".$pgtype."/".$pgtype."360/top";
$pbt = "images/".$pgtype."/".$pgtype."360/bottom";
?>


<script>
	
	var arpid = <?php echo json_encode(array_values($pid)) ?>;
	var arpnm = <?php echo json_encode(array_values($pnm)) ?>;
	var jfr = <?php echo json_encode($pfr) ?>;
	var jbk = <?php echo json_encode($pbk) ?>;
	var jlf = <?php echo json_encode($plf) ?>;
	var jrg = <?php echo json_encode($prg) ?>;
	var jtp = <?php echo json_encode($ptp) ?>;
	var jbt = <?php echo json_encode($pbt) ?>;
	var i;
	var len = arpid.length;
		for(i=0;i<len;i++)
		{
			var pb = "#panaroma".concat(arpid[i]);
			var pfr = jfr.concat(arpnm[i]);
			var pbk = jbk.concat(arpnm[i]);
			var plf = jlf.concat(arpnm[i]);
			var prg = jrg.concat(arpnm[i]);
			var ptp = jtp.concat(arpnm[i]);
			var pbt = jbt.concat(arpnm[i]);
			var pano = new Spherical({
				container: pb,
				front: pfr,
				back: pbk,
				left: plf,
				right: prg,
				top: ptp,
				bottom: pbt
			});
			console.log(arpid);
			console.log(pfr);
			console.log(pb);
		}
	/*var pano = new Spherical({
	container: '#panaroma2',
	front: 'hh/cubic/front.jpg',
	back: 'hh/cubic/back.jpg',
	left: 'hh/cubic/left.jpg',
	right: 'hh/cubic/right.jpg',
	top: 'hh/cubic/top.jpg',
	bottom: 'hh/cubic/bottom.jpg'
});*/
		
</script>

