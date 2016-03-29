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

        $the_film = new Film('1','Batman v. Superman: Dawn of Justice', 2016, new \DateTime('now'), 'https://www.filmaffinity.com/es/film300113.html');
        $manager->persist($the_film);

        $the_film_2 = new Film('2','My Big Fat Greek Wedding 2', 2016, new \DateTime('now'), 'https://www.filmaffinity.com/es/film904175.html');
        $manager->persist($the_film_2);

        $manager->flush();
    }
}