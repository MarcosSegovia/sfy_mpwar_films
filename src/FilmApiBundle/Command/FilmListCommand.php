<?php

namespace FilmApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;

class FilmListCommand extends ContainerAwareCommand
{

	protected function configure()
	{
        $this
            ->setName('film:list')
            ->setDescription('List all registered films')
        ;
	}

	protected function execute(
		InputInterface $input,
		OutputInterface $output
	)
	{
        $list_films_service = $this->getContainer()->get('list_films_use_case');
        $result = $list_films_service->__invoke();

        $table = new Table($output);
        $table->setHeaders(array('id', 'name', 'year', 'date', 'url'));

        $prepared_table_rows = $this->prepareFilmList($result);
        $table->addRows($prepared_table_rows);

        $table->render();
	}

    protected function prepareFilmList(
        array $a_film_list
    )
    {
        $prepared_list = array();

        foreach ($a_film_list as $film) {
            array_push(
                $prepared_list,
                array(
                    $film->id(),
                    $film->name(),
                    $film->year(),
                    $film->date()->format('Y-m-d H:i:s'),
                    $film->url()
                )
            );
        }

        return $prepared_list;
    }

}
