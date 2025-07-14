<?php
namespace App;

use App\Base\Singleton;
use App\Base\ManagerInterface;
use App\Manager\PostTypesManager;
use App\Manager\AcfManager;
use App\Manager\SecurityManager;
use App\Manager\SetupManager;



class Theme extends Singleton
{
    public const SLUG = 'sigma';

	/**
	 * @var string[]
	 */
	private array $classes;

	public function __construct()
	{
		$this->classes = [
			SetupManager::class,
			AcfManager::class,
			PostTypesManager::class,
            SecurityManager::class,
		];

        $this->init();
	}

	/**
	 * Init classes of theme
	 *
	 * @return void
	 */
	public function init(): void
	{
		foreach ($this->classes as $class) {
    		$this->initInstance(new $class());
		}
	}

    /**
     * @param ManagerInterface $instance
     * @return void
     */
    private function initInstance(ManagerInterface $instance): void
    {
        $instance->execute();
    }
}