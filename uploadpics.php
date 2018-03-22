<?php
include_once 'dbconnect.php';
$success = 0;
if(isset($_POST['pgupload'])){
    $errors= array();
	$pgtable = $_POST['pgcat'];
	$pcap = $_POST['icap'];
	$dir = "images/".$_POST['pgcat']."/";
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        		
        $query="INSERT into $pgtable (`id`,`name`,`pic`) VALUES('','$pcap','$file_name'); ";
        
        if(empty($errors)==true){
            if(is_dir($dir."".$file_name)==false){
                move_uploaded_file($file_tmp,$dir."".$file_name);
            }
            mysqli_query($bd,$query);			
        }
		else{
			?>
			<script>alert('<?php print_r($errors) ?>');</script> 
            <?php
        }
    }
	if(empty($error)){
		?>
		<script>alert('Successfully updated!');</script> 
        <?php
	}
}
?>

<?php
$success = 0;
if(isset($_POST['ppupload'])){
    $errors= array();
	$dir = "images/".$_POST['ppcat']."/".$_POST['ppcat']."360/";
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
       
        if(empty($errors)==true){
            if(is_dir($dir."".$file_name)==false){
                move_uploaded_file($file_tmp,$dir."".$file_name);
            }			
        }
		else{
			?>
			<script>alert('<?php print_r($errors) ?>');</script> 
            <?php
        }
    }
	if(empty($error)){
		?>
		<script>alert('Successfully updloaded!');</script> 
        <?php
	}
}
?>


<?php
$success = 0;
if(isset($_POST['porev'])){
    $errors= array();
	$pcap = $_POST['icap'];
	$rev = $_POST['crev'];
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        		
        $query="INSERT into popular (`id`,`title`,`review`,`photo`) VALUES('','$pcap','$rev','$file_name'); ";
        
        if(empty($errors)==true){
            if(is_dir("images/popular/".$file_name)==false){
                move_uploaded_file($file_tmp,"images/popular/".$file_name);
            }
            mysqli_query($bd,$query);			
        }
		else{
			?>
			<script>alert('<?php print_r($errors) ?>');</script> 
            <?php
        }
    }
	if(empty($error)){
		?>
		<script>alert('Successfully updated!');</script> 
        <?php
	}
}
?>