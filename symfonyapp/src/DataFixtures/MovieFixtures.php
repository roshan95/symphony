<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The dark knight');
        $movie->setReleaseYear(2009);
        $movie->setDescription('this is a move');
        $movie->setImagePath('https://static.posters.cz/image/1300/art-photo/the-dark-knight-trilogy-joker-i184453.jpg');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));


        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Evengers');
        $movie2->setReleaseYear(2009);
        $movie2->setDescription('this is a move');
        $movie2->setImagePath('https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
