<?php
function all_item($rejim = null, $count = null) {
$item[] = 'sportNews';
$item[] = 'politicsNews';
$item[] = 'bussinessNews';
if($rejim == 'rand') shuffle($item);
$count_arr = !empty($count) ? $count : count($item);
for($a=0; $a < $count_arr; $a++) {
echo '<div>'.$item[$a].'</div>';
} }
?>
<?=all_item();?>