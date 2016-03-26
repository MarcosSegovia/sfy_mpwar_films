<?php

namespace FilmApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use FilmApiBundle\Service\AddFilmRequest;

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
        $add_film_service = $this->getContainer()->get('add_film_use_case');

        $name = $input->getArgument('name');
        $year = $input->getArgument('year');
        $date = $input->getArgument('date');
        $url  = $input->getArgument('url');

        $add_film_request = new AddFilmRequest($name, $year, $date, $url);
        $add_film_service->__invoke($add_film_request);

        $output->writeln('OK');
	}

}
