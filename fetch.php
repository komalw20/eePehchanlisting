<?php
	$data = array();
  	$query = mysqli_query($mysqli, "SELECT id,card_id, user_email,d_comp_name, d_about_us FROM digi_card");

  	while($row = mysqli_fetch_array($query)){

?>