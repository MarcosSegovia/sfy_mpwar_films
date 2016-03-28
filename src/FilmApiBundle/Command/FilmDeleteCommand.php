<?php

namespace FilmApiBundle\Command;

use FilmApiBundle\Service\DeleteFilmRequest;
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
            );
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    )
    {
        $delete_film_service = $this->getContainer()->get('delete_film_use_case');

        $id = $input->getArgument('id');

        $delete_film_request = new DeleteFilmRequest($id);
        $delete_film_service->__invoke($delete_film_request);

        $output->writeln('OK');
    }

}
