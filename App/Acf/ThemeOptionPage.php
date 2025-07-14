<?php

namespace App\Acf;

use App\Base\TaskInterface;

class ThemeOptionPage implements TaskInterface
{
	/**
	 * @return void
	 */
	public function do(): void
	{

        if (function_exists('acf_add_options_page')) {
            $parent = acf_add_options_page([
                'page_title' => __('Theme General Settings', SSW_TD),
                'menu_title' => __('Theme Settings', SSW_TD),
                'redirect'   => false
            ]);

//            acf_add_options_page([
//                'page_title'  => __('Search page settings', SSW_TD),
//                'menu_title'  => __('Search page settings', SSW_TD),
//                'parent_slug' => $parent['menu_slug'],
//            ]);
        }
	}
}