<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="spherical.css" />
<link href="css/gallerystyle.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
</head>


<?php
$pgtype=$_GET['type'];
$pgname=$_GET['name'];
$photo=$_GET['pic'];
$pcap=$_GET['cap'];
?>

<?php 
$pfr = "images/".$pgtype."/".$pgtype."360/front".$photo;
$pbk = "images/".$pgtype."/".$pgtype."360/back".$photo;
$plf = "images/".$pgtype."/".$pgtype."360/left".$photo;
$prg = "images/".$pgtype."/".$pgtype."360/right".$photo;
$ptp = "images/".$pgtype."/".$pgtype."360/top".$photo;
$pbt = "images/".$pgtype."/".$pgtype."360/bottom".$photo;
?>
<body>
<div class="pic360">
<div class="pano" id="panaroma" style="width:600px;height:450px;"></div>
<div id="caption"><?php echo $pcap ?></div>
</div>

<script src="impetus.min.js"></script>
<script src="spherical.js"></script>
<script>
	
	<?php /*?>var arpid = <?php echo json_encode(array_values($pid)) ?>;
	var arpnm = <?php echo json_encode(array_values($pnm)) ?>;<?php */?>
	var jfr = <?php echo json_encode($pfr) ?>;
	var jbk = <?php echo json_encode($pbk) ?>;
	var jlf = <?php echo json_encode($plf) ?>;
	var jrg = <?php echo json_encode($prg) ?>;
	var jtp = <?php echo json_encode($ptp) ?>;
	var jbt = <?php echo json_encode($pbt) ?>;
	
			
			var pano = new Spherical({
				container: '#panaroma',
				front: jfr,
				back: jbk,
				left: jlf,
				right: jrg,
				top: jtp,
				bottom: jbt
			});
		
</script>

</body>