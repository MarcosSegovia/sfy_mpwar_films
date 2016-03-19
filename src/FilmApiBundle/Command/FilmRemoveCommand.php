<?php

namespace FilmApiBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FilmRemoveCommand extends Command
{

	protected function configure()
	{
		$this
			->setName('film:remove');
	}

	protected function execute(
		InputInterface $input,
		OutputInterface $output
	)
	{
		//$id = $input->getArgument('id');
		//
		//$obj_RemoveFilmUseCase= $this->getContainer()->get('RemoveFilmUsecase');
		//$obj_RemoveFilmUseCase($id);
		//$output->writeln('Fet');
	}

}
