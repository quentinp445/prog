<?php
include('include/twig.php');
$twig = init_twig();

include('include/data1.php');

echo $twig->render('cat1_JV.twig', [
    'article1' => $article1,
]);
?>
