<?php

// - Creare la macchina di James Bond (seguendo la macchina di batman)
// - Utilizzare i trait per aggiungere quello che volete alla macchina di J.B.
// - utilizzare la dependency injection


abstract class Front{
    public abstract function frontEnd ();
   
}

abstract class Back{
    public abstract function backEnd ();
   
}


    class CarBody extends Front{
        public function frontEnd (){
            echo "La carrozzeria della macchina è antiproiettile \n";
        }
    }

    class MachineGun extends Front{
        public function frontEnd (){
            echo "La mitragliatrice non si inceppa come le altre \n";
        }
    }

    class EjectionSeat extends Back{
        public function backEnd (){
            echo "In caso di pericolo verrai catapultato fuori e volerai! \n";
        }
    }

    class Oil extends Back{
        public function backEnd (){
            echo "Per seminare gli inseguitori spruzzerò un pò di olio così li butterò fuori strada \n";
        }
    }


class BondMachine {
    public $frontEnd;
    public $backEnd;
    public function __construct( Front $frontEnd, Back $backEnd)
    {
        $this->frontEnd=$frontEnd;
        $this->backEnd=$backEnd;
       
    }

    public function frontEnd (){
        $this->frontEnd->frontEnd();
    }

    public function backEnd (){
        $this->backEnd->backEnd();
    }

    use Jet;
}


trait Jet {
    public function vola (){
        echo "La macchina vola \n";
    }
}


$bondMachine1= new BondMachine(new CarBody, new EjectionSeat);

$bondMachine1->frontEnd();

$bondMachine1->backEnd();

$bondMachine1->vola();


$bondMachine2= new BondMachine(new MachineGun, new Oil);

$bondMachine2->frontEnd();

$bondMachine2->backEnd();

$bondMachine2->vola();


