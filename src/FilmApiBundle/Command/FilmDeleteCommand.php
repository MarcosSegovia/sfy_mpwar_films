<?php

namespace FilmApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FilmDeleteCommand extends ContainerAwareCommand
{

	protected function configure()
	{
        $this
            ->setName('film:delete')
            ->setDescription('Delete a registered film')
            ->addArgument(
                'id',
                InputArgument::REQUIRED,
                'Film unique id'
            )
        ;
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
