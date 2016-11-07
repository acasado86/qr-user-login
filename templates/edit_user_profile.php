<h2>QR Login Image</h2>
<?php
$qr_api_url = 'https://chart.googleapis.com/chart';
$query_params = array(
    'cht' => 'qr',
    'chs' => '200x200'
);

$query_params ['chl'] = get_author_posts_url($profileuser->ID);

$final_url = $qr_api_url . '?' . http_build_query($query_params);
?>
<img src="<?php echo $final_url ?>" />