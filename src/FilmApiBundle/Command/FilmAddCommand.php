<?php

namespace FilmApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FilmAddCommand extends ContainerAwareCommand
{

	protected function configure()
	{
        $this
            ->setName('film:add')
            ->setDescription('Add a new film')
            ->addArgument(
                'name',
                InputArgument::REQUIRED,
                'Film name'
            )
            ->addArgument(
                'year',
                InputArgument::REQUIRED,
                'Release year'
            )
            ->addArgument(
                'date',
                InputArgument::REQUIRED,
                'Full release date'
            )
            ->addArgument(
                'url',
                InputArgument::REQUIRED,
                'Film profile url'
            )
        ;
	}

	protected function execute(
		InputInterface $input,
		OutputInterface $output
	)
	{
		//	$name = $input->getArgument('name');
		//	$year = $input->getArgument('year');
		//	$date = $input->getArgument('date');
		//	$url = $input->getArgument('url');
		//
		//	$obj_AddFilmUseCase = $this->getContainer()->get('AddFilmUseCase');
		//	$obj_AddFilmUseCase($name,$year,$date,$url);
		//	$output->writeln('Fet');
	}

}
