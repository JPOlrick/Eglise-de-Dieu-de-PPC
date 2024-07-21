<?php
include('../include/config.php');
?> 


<h2 class="font-weight-bold text-color-dark text-center mb-0">
	Reveil annuel
</h2>


<?php
$sql=mysqli_query($con,"SELECT count(*) as nb_photo_Reveil_annuel  FROM `galerie` WHERE `type`='Reveil annuel' ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>



<p class="text-center text-1"><?php echo $row['nb_photo_Reveil_annuel'];?>     photos</p>

<?php 
$cnt=$cnt+1;
 }?>

<div class="owl-carousel custom-arrows-style-2 custom-nav-inside-center" data-plugin-options="{'items': 1, 'margin': 0, 'loop': true, 'nav': true, 'dots': true}">
	
	<?php
$sql=mysqli_query($con,"SELECT * FROM `galerie` WHERE `type`='Reveil annuel'  order by 	id_photo  desc ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
	
	<div>
		<img src="galerie/<?php echo $row['photo'];?>" alt class="img-fluid" />
	</div>
	
	
	<?php 
$cnt=$cnt+1;
 }?>
	 
</div>