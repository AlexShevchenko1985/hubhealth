<?php
namespace App\Setup;

use App\Base\TaskInterface;
use App\Helpers\Helper;
use App\Theme;

class Assets implements TaskInterface
{
	/**
	 * @return void
	 */
	public function do(): void
	{
		add_action( 'wp_enqueue_scripts', [$this, 'register']);
	}

	/**
	 * Add theme styles and scripts.
	 *
	 * @return void
	 */
	public function register() : void
	{
        $this->enqueueMainStyles();
        $this->enqueueMainScripts();
        $this->deactivateDefaults();

	}

    /**
     * @return void
     */
    private function enqueueMainStyles() : void
    {
        $script_url = get_template_directory_uri() . '/dist/css/style.bundle.css';
        $script_dir = get_template_directory() . '/dist/css/style.bundle.css';
        wp_enqueue_style(Theme::SLUG . '-styles',
            $script_url,
            [],
            self::getFileVersion($script_dir),
        );

    }

    /**
     * @return void
     */
    private function enqueueMainScripts() : void
    {
        $script_url = get_template_directory_uri() . '/dist/js/app.bundle.js';
        $script_dir = get_template_directory() . '/dist/js/app.bundle.js';
        wp_enqueue_script(
            Theme::SLUG .'-scripts',
            $script_url,
            [],
            self::getFileVersion($script_dir),
            true
        );

        wp_localize_script(Theme::SLUG .'-scripts', Theme::SLUG . 'Data',
            [
                'ajaxUrl' => admin_url('admin-ajax.php'),
                'optionPopup' => Helper::optionPopup(),
            ]
        );

    }

    /**
     * @return void
     */
    private function deactivateDefaults() : void
    {
        /**
         * Disable default WP styles
         */
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme');
        wp_dequeue_style( 'wc-blocks-style');
        wp_dequeue_style( 'classic-theme-styles');

        wp_dequeue_script( 'jquery');
        wp_deregister_script( 'jquery');
    }

    private static function getFileVersion($script_dir): string
    {
        return file_exists($script_dir) ? filemtime($script_dir) : '1.0.0';
    }
}