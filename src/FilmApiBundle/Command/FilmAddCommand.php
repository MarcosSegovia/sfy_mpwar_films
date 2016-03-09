<?php

namespace FilmApiBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FilmAddCommand extends Command
{

	protected function configure()
	{
		$this
			->setName('film:add')
			->setDescription('Greet someone')
			->addArgument(
				'name',
				InputArgument::REQUIRED,
				'Enter the first number'
			)
			->addArgument(
				'year',
				InputArgument::REQUIRED,
				'Enter the second number'
			)
			->addArgument(
				'date',
				InputArgument::REQUIRED,
				'Enter the second number'
			)
			->addArgument(
				'url',
				InputArgument::REQUIRED,
				'Enter the second number'
			)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$name = $input->getArgument('name');
		$year = $input->getArgument('year');
		$date = $input->getArgument('date');
		$url = $input->getArgument('url');

		$obj_AddFilmUseCase = $this->getContainer()->get('AddFilmUseCase');
		$obj_AddFilmUseCase($name,$year,$date,$url);
		$output->writeln('Fet');
	}
}