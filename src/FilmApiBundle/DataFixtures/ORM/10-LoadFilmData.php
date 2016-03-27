<?php

namespace FilmApiBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FilmApiBundle\Entity\Film;

class LoadFilmData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        //$a = new \DateTime('now',null);

        $the_film = Film::register('Batman v. Superman: Dawn of Justice',2016,null,'https://www.filmaffinity.com/es/film300113.html');
        $manager->persist($the_film);

        $the_film_2 = Film::register('My Big Fat Greek Wedding 2',2016,null,'https://www.filmaffinity.com/es/film904175.html');
        $manager->persist($the_film_2);

        $manager->flush();
    }
}