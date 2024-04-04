<?php
abstract class Produit {

    protected $nom;
    protected $prix ;
    protected $quantity;

    public function __construct($nom,$prix,$quantity)
    {
        $this->nom =$nom;
        $this->prix =$prix;
        $this->quantity =$quantity;

        abstract public function aficherDetails();

    }
}
    class Vetement extends Produit
    {



    }


?>
