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
        echo "Nel mojito metti del Rum bianco \n";
    }
}

class Gin extends Alchoolic{
    public function liquidIngredients(){
        echo "Nel mojito se ci metti il Gin non viene bene \n";
    }
}

class Mint extends NoAlchoolic{
    public function solidIngredients(){
        echo "Il mojito con la menta così è fresco \n";
    }
}

class Ice extends NoAlchoolic{
    public function solidIngredients(){
        echo "Non metter troppo ghiaccio altrimenti diventa acquoso \n";
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

    use Lime;

}

trait Lime {
    public function limone (){
        echo "Metti anche un pò di limone \n";
    }
}


$mojito1= new Mojito (new Rum, new Ice);

$mojito1->liquidIngredients();

$mojito1->solidIngredients();


$mojito2= new Mojito (new Gin, new Mint);

$mojito2->liquidIngredients();

$mojito2->solidIngredients();

$mojito2->limone();