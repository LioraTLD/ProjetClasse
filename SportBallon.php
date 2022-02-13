<?php

class SportBallon extends Sport
{
private $largeur;
private $longueur;

public function __construct(string $nomSport, int $nbJoueurs, int $longueur, int $largeur)
{
    parent::__construct($nomSport, $nbJoueurs);
    $this->largeur=$largeur;
    $this->longueur=$longueur;
}

    /**
     * @return int
     */
    public function getlargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @return int
     */
    public function getlongueur(): int
    {
        return $this->longueur;
    }

}
