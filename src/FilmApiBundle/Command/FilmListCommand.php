<?php

namespace FilmApiBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FilmListCommand extends Command
{

	protected function configure()
	{
		$this
			->setName('film:list');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		//$obj_ListfilmUsecase = $this->getContainer()->get('ListfilmUsecase');
		//$result = $obj_ListfilmUsecase();
		//$output->writeln($result);
	}
}