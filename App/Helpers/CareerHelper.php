<?php

namespace App\Helpers;

class CareerHelper
{
    public static function getArgsAll(): array
    {
        return [
            'post_type'      => 'career',
            'post_status'    => 'publish',
            'orderby'        => [
                'meta_value' => 'DESC',
                'date'       => 'DESC',
            ],
            'meta_key'       => 'hot_vacancy',
            'meta_query'     => [
                'relation' => 'OR',
                [
                    'key'     => 'hot_vacancy',
                    'value'   => '1',
                    'compare' => '=',
                ],
                [
                    'key'     => 'hot_vacancy',
                    'value'   => '0',
                    'compare' => '=',
                ],
                [
                    'key'     => 'hot_vacancy',
                    'compare' => 'NOT EXISTS',
                ],
            ],
        ];



    }

}