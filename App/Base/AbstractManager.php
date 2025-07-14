<?php

namespace App\Base;

abstract class AbstractManager implements ManagerInterface
{
	/**
	 * @var array
	 */
	protected array $items = [];

	/**
	 * @return void
	 */
	abstract public function execute(): void;

	/**
	 * @return void
	 */
	public function register(): void
	{
		foreach ($this->items as $item) {
            $this->doTask(new $item);
		}
	}

    /**
     * @param TaskInterface $task
     * @return void
     */
    private function doTask(TaskInterface $task): void
    {
        $task->do();
    }
}