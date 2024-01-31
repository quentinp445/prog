<?php
include('include/twig.php');
$twig = init_twig();

echo $twig->render('base.twig', [
	'titre' => 'Page d\'accueil',
	'message' => 'Un message de bienvenu sur ma page d\'accueil. Attention les guillements doivent être échappées (avec un anti-slash)'
]);
