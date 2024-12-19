<?php

namespace Rmax\Btm;

use Timber\Timber;

class Btm
{
	function __construct()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueueAssets']);
		$this->initTimber();
	}

	function enqueueAssets()
	{
		wp_enqueue_style('style', get_stylesheet_directory_uri() . '/dist/theme.min.css');
		wp_enqueue_script('script', get_template_directory_uri() . '/dist/theme.min.js', [], '1.0.0', true);
	}

	function initTimber()
	{
		// apply_filters('timber/cache/mode', [$this, 'cacheSettings']);
		// add_filter('timber/twig/environment/options', [$this, 'envOptions']);
		Timber::$dirname = 'views';
		Timber::init();
	}

	function envOptions()
	{
		$options['cache'] = get_stylesheet_directory() . '/_cache';
		$options['autoescape'] = true;
		return $options;
	}

	function cacheSettings()
	{
		return Timber\Loader::CACHE_OBJECT;
	}
}