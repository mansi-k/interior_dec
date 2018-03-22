<div class="fluid_container headstrip shuffler"  id="our-designs" style="padding:0px;">
	<section id="photostack-3" class="photostack fluid_container">
		<div>
    	<?php
    	$res=mysqli_query($bd,"SELECT * FROM popular");
		$resno=mysqli_num_rows($res);
		if (!$res) {
			printf("Error: %s\n", mysqli_error($bd));
			exit();
		}
		$i=1;
		while($userrow=mysqli_fetch_array($res))
		{?>
			<figure <?php if($userrow['review']==""){ echo 'data-dummy'; }?>>
            	<a class="fancybox" href="<?php echo 'images/popular/'.$userrow['photo'];?>" data-fancybox-group="gallery" title="<?php echo $userrow['title'];?>">
					<img class="img-responsive" src="<?php echo 'images/popular/'.$userrow['photo'];?>" alt="<?php echo $userrow['title'];?>">
				</a>
            	<figcaption>
            		<h2 class="photostack-title"><?php echo $userrow['title'] ?></h2>
                    <?php 
					if($userrow['review']!="")
					{?>
						<div class="photostack-back"><p><?php echo $userrow['review'] ?></p></div>
                    <?php
					}?>
                </figcaption>
			</figure>
			<?php
			$i++;
		}?>
    	</div>
    </section>
</div>
<script src="spg/js/classie.js"></script>
		<script src="spg/js/photostack.js"></script>
		<script>
			
			new Photostack( document.getElementById( 'photostack-3' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
		</script>