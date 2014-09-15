<?php
		$perm_array = array('707','757','777','747');
		$perm = fileperms($_POST['_SSHOW_DIR_'].'data/');
		$permi = $perm - 16384;
		$permiss = decoct($permi);
		echo $permiss;
?>