<?php
namespace App\Security;

use App\Base\TaskInterface;

class Security implements TaskInterface
{
	/**
	 * @return void
	 */
	public function do(): void
	{
        //disable Xml Rpc
        add_action('init', [$this, 'disableXmlRpc']);

        //disable XML-RPC methods for authorization
        add_action('init', [$this, 'disableXmlAuthorizationRpc']);

        //configure security headers
        add_action('send_headers', [$this, 'configureSecurityHeaders']);

        //remove header
        add_action('init', [$this, 'removeHeader']);

        //remove the WordPress Generator Meta Tag (WordPress Version)
        remove_action('wp_head', 'wp_generator');

        //remove other headers
        add_filter('wp_headers', [$this, 'removeHeaders']);

        //disable FILE_EDIT
        add_filter('wp_headers', [$this, 'disableFileEdit']);

    }

    public function disableXmlRpc(): void
    {
        add_filter('xmlrpc_enabled', '__return_false');
    }

    public function disableXmlAuthorizationRpc(): void
    {
        add_filter('xmlrpc_methods', function ($methods) {
            unset($methods['pingback.ping']);
            return $methods;
        });
    }

    public function configureSecurityHeaders(): void
    {
        header("Content-Security-Policy: default-src https: data: 'unsafe-inline' 'unsafe-eval';");
        header("X-Frame-Options: SAMEORIGIN");
        header("X-Content-Type-Options: nosniff");
    }

    public function removeHeader(): void
    {
        // Remove the X-Powered-By header
        header_remove('X-Powered-By');

    }

    public function removeHeaders($headers) {
        unset($headers['X-Powered-By']); // Removes PHP header
        unset($headers['Server']);      // Removes the server header (if available)
        return $headers;
    }

    public function disableFileEdit(): void
    {
        if (!defined('DISALLOW_FILE_EDIT')) {
            define('DISALLOW_FILE_EDIT', true);
        }
    }

}