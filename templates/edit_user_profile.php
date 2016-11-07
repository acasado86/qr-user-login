<?php 
$qr_image_src = $this->get_user_qr_image($profileuser->ID);
?>
<h2>QR Login Image</h2>
<img src="<?php echo $qr_image_src ?>" />