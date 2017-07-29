<div align="center">沪ICP备B2-20100004-1 
<?php
	$fileName = "/sys/class/thermal/thermal_zone0/temp";
	$temperature = file_get_contents($fileName);
	print("DGideas的树莓派：".(string)((int)$temperature/1000)."℃");
?>
</div>
