<?php


// ESERCIZIO COCKTAIL

abstract class Alchoolic{
    public abstract function liquidIngredients();
}

abstract class NoAlchoolic{
    public abstract function solidIngredients();
}



class Rum extends Alchoolic{
    public function liquidIngredients(){
        echo "Nel mojito mettici un bel rum bianco \n";
    }
}

class Gin extends Alchoolic{
    public function liquidIngredients(){
        echo "Nel mojito se ci metti il gin viene una ciofeca \n";
    }
}

class Mint extends NoAlchoolic{
    public function solidIngredients(){
        echo "Il mojito lo fai pieno di menta così è fresco \n";
    }
}

class Ice extends NoAlchoolic{
    public function solidIngredients(){
        echo "Nen metterci troppo ghiaccio altrimenti diventa acqua \n";
    }
}

class Mojito{
    public $liquidIngredients;
    public $solidIngredients;
    public function __construct( Alchoolic $liquidIngredients, NoAlchoolic $solidIngredients)
    {
        $this->liquidIngredients=$liquidIngredients;
        $this->solidIngredients=$solidIngredients;
    }

    public function liquidIngredients(){
        $this->liquidIngredients->liquidIngredients();
    }

    public function solidIngredients(){
        $this->solidIngredients->solidIngredients();
    }

    use Drug;

}

trait Drug {
    public function droga (){
        echo "Mettici anche un pò di polverina magica \n";
    }
}


$mojito1= new Mojito (new Rum, new Ice);

$mojito1->liquidIngredients();

$mojito1->solidIngredients();


$mojito2= new Mojito (new Gin, new Mint);

$mojito2->liquidIngredients();

$mojito2->solidIngredients();

$mojito2->droga();