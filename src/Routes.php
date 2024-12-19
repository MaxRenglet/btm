<?php

namespace Rmax\Btm;

class Routes
{
	/**
	 * Routes::is_front_page
	 *
	 * @param function $callback
	 * @return boolean
	 */
	public static function is_front_page($callback)
	{
		if (is_front_page()) {
			$post = get_post();
			$callback($post);
		}
	}
}
