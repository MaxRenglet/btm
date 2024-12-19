<?php

use Rmax\Btm\Routes;

Routes::is_front_page(function ($post) {
	$context = Timber::context();
	Timber::render('layout/front.twig', $context);
});