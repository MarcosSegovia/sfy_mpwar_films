<?php

namespace FilmApiBundle\Command;

use FilmApiBundle\Service\EditFilmRequest;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FilmEditCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('film:edit')
            ->setDescription('Edit a registered film')
            ->addArgument(
                'id',
                InputArgument::REQUIRED,
                'Film unique id'
            )
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
            );
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    )
    {
        $edit_film_service = $this->getContainer()->get('edit_film_use_case');

        $id = $input->getArgument('id');
        $name = $input->getArgument('name');
        $year = $input->getArgument('year');
        $date = $input->getArgument('date');
        $url = $input->getArgument('url');

        $edit_film_request = new EditFilmRequest($id, $name, $year, $date, $url);
        $edit_film_service->__invoke($edit_film_request);

        $output->writeln('OK');
    }

}
