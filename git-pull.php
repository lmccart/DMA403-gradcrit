<?php
// echo system('git reset --hard');
// echo system('git checkout -- .');
// echo system('git pull https://github.com/lmccart/DMA403-gradcrit.git master');

require_once('Git.php');

echo 'pulling latest';
$repo = Git::open('./'); 
$repo->pull('origin', 'master');

?>