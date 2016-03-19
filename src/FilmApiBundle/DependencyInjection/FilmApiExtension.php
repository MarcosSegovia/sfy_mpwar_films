<?php

namespace FilmApiBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class FilmApiExtension extends Extension
{

	public function load(
		array $configs,
		ContainerBuilder $container
	)
	{
		$loader = new YamlFileLoader(
			$container,
			new FileLocator(__DIR__ . '/services')
		);
		$loader->load('services.yml');
	}
}