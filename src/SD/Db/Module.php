<?php

namespace SD\Db;

class Module
{
	/**
	 * @return array
	 */
	public function getConfig()
	{
		return [
			'service_manager' => [
				'factories' => [
					Factory::class => Factory::class,
				],
			],
		];
	}
}
