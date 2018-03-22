<?php 
include 'headlinks.php'; 
include 'navbar.php';
include 'uploadpics.php';
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
?>
<center>
<div class="fluid_container headstrip admin">
	<h1 class="heads">Admin Panel</h1>
	<div class="row"><br>
        <div class="col-sm-6 col-md-4">
            <div class="adminacts">
                <h2>Upload New Image</h2>
                <div class="adminform" >
                    <form method="post" enctype="multipart/form-data">
                    	<label><b>Choose Photo Album</b></label><br />
                        <select class="pgcat" name="pgcat" required="required">
                            <option value="category">Choose</option>
                            <option value="living_room">Living Room</option>
                            <option value="bedroom" >Bedroom</option>
                        </select><br>
                        <label><b>Choose Photo</b></label><br />
                        <input type="file" class="fbtn" name="files[]" multiple="" required /><br>
                        <label><b>Image Caption</b></label><br />
                    	<input type="text" placeholder="Enter Caption" name="icap" required><br />
                        <button type="submit" name="pgupload">Upload Photo</button>
                    </form>
                </div>
            </div><br><br />
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="adminacts">
                <h2>Upload New Panorama</h2>
                <div class="adminform" >
                    <label><b>Click To Create Panorama</b></label><br />
                    <a href="http://gonchar.me/panorama/"><button>Create Panorama</button></a>
                    <form method="post" enctype="multipart/form-data">
                    	<label><b>Choose Photo Album</b></label><br />
                        <select class="ppcat" name="ppcat" required="required">
                            <option value="category">Choose</option>
                            <option value="living_room">Living Room</option>
                            <option value="bedroom" >Bedroom</option>
                        </select><br>
                        <label><b>Choose All 6 Views</b></label><br />
                        <input type="file" class="fbtn"  name="files[]" multiple="" required /><br>
                        <button type="submit" name="ppupload">Upload Panorama</button>
                    </form>
                </div>
            </div><br /><br />
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="adminacts">
                <h2>Post New Review</h2>
                <div class="adminform" >
                    <form method="post" enctype="multipart/form-data">
                        <label><b>Choose Photo</b></label><br />
                        <input type="file" class="fbtn" name="files[]" multiple="" required /><br>
                        <label><b>Image Caption</b></label><br />
                    	<input type="text" placeholder="Enter Caption" name="icap" required><br />
						<label><b>Customer's Review</b></label><br />
                    	<textarea placeholder="Enter Review" name="crev" style="height:90px;"></textarea><br />
                        <button type="submit" name="porev">Post Review</button></
                    </form>
                </div>
            </div><br><br />
        </div>
    </div>
</div>
</center>
<?php 
include 'footer.php'; 
?>