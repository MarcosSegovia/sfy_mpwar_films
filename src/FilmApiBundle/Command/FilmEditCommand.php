<?php

namespace FilmApiBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FilmEditCommand extends Command
{

	protected function configure()
	{
		$this
			->setName('film:edit');
	}

	protected function execute(
		InputInterface $input,
		OutputInterface $output
	)
	{
		//$name = $input->getArgument('name');
		//$year = $input->getArgument('year');
		//$date = $input->getArgument('date');
		//$url  = $input->getArgument('url');
		//
		//$obj_EditFilmUseCase = $this->getContainer()->get('EditFilmUseCase');
		//$obj_EditFilmUseCase($name, $year, $date, $url);
		//$output->writeln('Fet');
	}

}
