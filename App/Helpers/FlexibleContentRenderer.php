<?php
namespace App\Helpers;

use App\Base\Singleton;

class FlexibleContentRenderer extends Singleton {

    /**
     * Flexible Content ACF rendering by post ID
     */
    public function render($post_id, $selector = 'flexible_content', $folder = 'flexible_content'): void
    {
        if (!function_exists('get_field')) {
            return;
        }

        $flexible_content = get_field($selector, $post_id);

        if ($flexible_content) {
            foreach ($flexible_content as $block) {
                $layout = $block['acf_fc_layout'];
                $template_path = locate_template("template-parts/{$folder}/{$layout}.php");

                if ($template_path) {
                    extract($block);
                    include $template_path;
                } else {
                    echo "<!-- Template {$layout}.php not found -->";
                }
            }
        }
    }
}
