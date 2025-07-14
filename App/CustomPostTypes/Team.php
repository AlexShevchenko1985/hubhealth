<?php
namespace App\CustomPostTypes;

use App\Base\TaskInterface;

class Team implements TaskInterface
{
    /**
     * Post type constants
     */
    const POST_TYPE = 'team';
    const SINGLE_NAME = 'Team';
    const PLURAL_NAME = 'Teams';

    /**
     * Tax constants
     */
    const TAXONOMY = 'team-category';
    const TAXONOMY_SINGLE_NAME = 'Category';
    const TAXONOMY_PLURAL_NAME = 'Categories';



    /**
     * @return void
     */
    public function do(): void
    {
        $this->registerPostTypes();
        $this->registerTaxonomies();
    }

    /**
     * @return void
     */
    private function registerPostTypes(): void
    {
        register_post_type(static::POST_TYPE, [
            'label'  => null,
            'labels' => [
                'name'               => esc_html__(self::SINGLE_NAME, SSW_TD),
                'singular_name'      => esc_html__(self::SINGLE_NAME, SSW_TD),
                'menu_name'          => esc_html__(self::SINGLE_NAME, SSW_TD),
                'name_admin_bar'     => esc_html__(self::SINGLE_NAME, SSW_TD),
                'add_new'            => esc_html__('Add New', SSW_TD),
                'add_new_item'       => esc_html__('Add New '. self::SINGLE_NAME, SSW_TD),
                'new_item'           => esc_html__('New ' . self::SINGLE_NAME, SSW_TD),
                'edit_item'          => esc_html__('Edit ' . self::SINGLE_NAME, SSW_TD),
                'view_item'          => esc_html__('View ' . self::SINGLE_NAME, SSW_TD),
                'all_items'          => esc_html__('All ' . self::PLURAL_NAME, SSW_TD),
                'search_items'       => esc_html__('Search ' . self::PLURAL_NAME, SSW_TD),
                'not_found'          => esc_html__('No ' .self::PLURAL_NAME. ' found', SSW_TD),
                'not_found_in_trash' => esc_html__('No ' .self::PLURAL_NAME. ' found in Trash', SSW_TD),
            ],
            'description'   => '',
            'public'        => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-groups', //https://developer.wordpress.org/resource/dashicons/
            'rewrite'       => ['slug' => static::POST_TYPE],
            'supports'      => ['title'],
            // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'has_archive'   => true,
            'show_in_rest'  => true,
        ]);
    }

    /**
     * @return void
     */
    private function registerTaxonomies(): void
    {
        register_taxonomy(static::TAXONOMY, [static::POST_TYPE], [
            'label'        => esc_html__(self::SINGLE_NAME . ' Categories', SSW_TD),
            'labels'       => [
                'name'              => esc_html__(self::TAXONOMY_PLURAL_NAME, SSW_TD),
                'singular_name'     => esc_html__(self::TAXONOMY_SINGLE_NAME, SSW_TD),
                'search_items'      => esc_html__('Search ' . self::TAXONOMY_PLURAL_NAME, SSW_TD),
                'all_items'         => esc_html__('All ' . self::TAXONOMY_PLURAL_NAME, SSW_TD),
                'edit_item'         => esc_html__('Edit ' . self::TAXONOMY_SINGLE_NAME, SSW_TD),
                'update_item'       => esc_html__('Update ' . self::TAXONOMY_SINGLE_NAME, SSW_TD),
                'add_new_item'      => esc_html__('Add New ' . self::TAXONOMY_SINGLE_NAME, SSW_TD),
                'new_item_name'     => esc_html__('New ' . self::TAXONOMY_SINGLE_NAME . ' Name', SSW_TD),
                'menu_name'         => esc_html__(self::TAXONOMY_PLURAL_NAME, SSW_TD),
            ],
            'public'       => true,
            'hierarchical' => true,
            'show_ui'      => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'rewrite'      => ['slug' => static::TAXONOMY],
        ]);
    }
}
