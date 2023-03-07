<?php

// - creare una classe Animale generica 
// - Creare N classi (Almeno 5) di animali reali che specializzano la classe animale, utilizzando anche i metodi self per il conteggio


// CREO CLASSE ZOO PER CONTARE GLI ANIMALI ALL'INTERNO
class Zoo{
    public $animalsInZoo;

    public function __construct(...$animals){
        $this->animalsInZoo=$animals;
    }

    public function howManyAnimals(){
        $countAnimals = count($this->animalsInZoo);
        echo "In questo zoo ci sono $countAnimals animali! \n";
    }

}

// CREO CLASSE ANIMAL

class Animal {

    public $name;
    public $breed;
    public $origin;
    public $aggression;

    public function __construct($name, $breed, $origin, $aggression)

    {
    $this->name=$name;
    $this->breed=$breed;
    $this->origin=$origin;
    $this->aggression=$aggression;
    }

// PRESENTAZIONE GENERALE DI ANIMAL
    public function presentazione (){
        echo "Ciao $this->name sei il $this->breed più forte d' $this->origin con un grado di aggressività $this->aggression \n";
    }
}

// LEONE
    class Lion extends Animal {
        public $roar;

        public function __construct($name, $breed, $origin, $aggression, $roar){
            Animal::__construct($name, $breed, $origin, $aggression);
            $this->roar=$roar;
        }
        public function presentazioneLion(){
            echo "Ciao $this->name sei il $this->breed più forte d'$this->origin con un grado di aggressività $this->aggression e il tuo verso è il $this->roar\n";
        }
    }

// COCCODRILLO
    class Crocodile extends Animal {
        public $teeth;

        public function __construct($name, $breed, $origin, $aggression, $teeth){
            parent::__construct($name, $breed, $origin, $aggression);
            $this->teeth=$teeth;
        }
        public function presentazioneCrocodile(){
            echo "Ciao $this->name sei il $this->breed più forte d'$this->origin con un grado di aggressività $this->aggression e hai $this->teeth denti \n";
        }
    }

// SQUALO
    class Shark extends Animal {
        public $fin;

        public function __construct($name, $breed, $origin, $aggression, $fin){
            parent::__construct($name, $breed, $origin, $aggression);
            $this->fin=$fin;
        }
        public function presentazioneShark(){
            echo "Ciao $this->name sei lo $this->breed più forte degli $this->origin con un grado di aggressività $this->aggression e hai $this->fin pinne \n";
        }
    }

// ELEFANTE
    class Elephant extends Animal {
        public $ears;

        public function __construct($name, $breed, $origin, $aggression, $ears){
            parent::__construct($name, $breed, $origin, $aggression);
            $this->ears=$ears;
        }
        public function presentazioneElephant(){
            echo "Ciao $this->name sei l' $this->breed più dolce dell' $this->origin con un grado di aggressività $this->aggression e hai le orecchie $this->ears \n";
        }
    }

// TIGRE
    class Tiger extends Animal {
        public $claws;

        public function __construct($name, $breed, $origin, $aggression, $claws){
            parent::__construct($name, $breed, $origin, $aggression);
            $this->claws=$claws;
        }
        public function presentazioneTiger(){
            echo "Ciao $this->name sei la $this->breed più feroce della $this->origin con un grado di aggressività $this->aggression e hai degli artigli $this->claws \n";
        }
    }

$simba = new Lion('Simba', 'leone', 'africa', '10', 'ruggito');
$crocco = new Crocodile('Crocco', 'coccodrillo', 'america', '10', '60');
$shark = new Shark('Shark', 'squalo', 'oceani', '10','4');
$dumbo = new Elephant('Dumbo', 'elefante', 'africa', '7','lunghe');
$shereKan = new Tiger('Sherekan', 'tigre', 'malesya', '10', 'affilati');

$simba->presentazioneLion();
print_r($simba);


$crocco->presentazioneCrocodile();
print_r($crocco);

$shark->presentazioneShark();
print_r($shark);

$dumbo->presentazioneElephant();
print_r($dumbo);

$shereKan->presentazioneTiger();
print_r($shereKan);


// CONTATORE ANIMALI IN ZOO
$zoo = new Zoo($simba,$crocco,$shark,$dumbo,$shereKan);
$zoo->howManyAnimals();

?>