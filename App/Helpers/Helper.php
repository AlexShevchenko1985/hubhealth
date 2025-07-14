<?php

namespace App\Helpers;

class Helper
{
    public static function getPageIDByPageTemplate(string $template_name): ?string
    {
        global $wpdb;
        return $wpdb->get_var("SELECT post_id FROM $wpdb->postmeta WHERE meta_value = '$template_name' AND meta_key = '_wp_page_template'");
    }

    public static function getSvg(string $url): ?string
    {
        if (empty($url)) {
            return null;
        }

        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ]);

        return file_get_contents($url, false, $context);

    }

    public static function doExcerpt(string $string, int $limit): string
    {
        $string = strip_tags($string, '<br>');
        $count = strlen($string);
        $string = substr($string, 0, $limit);

        if ($count > $limit) {
            $string .= '...';
        }
        return $string;
    }

    public static function optionPopup(): array
    {
        $option_popup = get_field('option_popup', 'options');

        if (empty($option_popup)){
            return [];
        }

        return array_column($option_popup, null, 'form_id');
    }
}

