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
			->setName('film:list')
			->setDescription('Greet someone')
			->addArgument(
				'first_number',
				InputArgument::REQUIRED,
				'Enter the first number'
			)
			->addArgument(
				'second_number',
				InputArgument::REQUIRED,
				'Enter the second number'
			)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$firs_number = $input->getArgument('first_number');
		$second_number = $input->getArgument('second_number');

		$obj_calculadora = $this->getContainer()->get('calculadora');
		$result = $obj_calculadora->mult($firs_number,$second_number);
		$output->writeln($result);
	}
}