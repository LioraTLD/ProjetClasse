<?php

class SportRelais extends Sport
{
private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomSport, int $nbJoueurs, int$distance)
    {
        parent:: __construct($nomSport, $nbJoueurs);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance():int
    {
        return $this->distance;
    }
public function getDescription(): string
{
    return 'Description Nom du sport:' . $this->getNomSport().
        'Nb deb joueur:' . $this->nbJoueurs.
        'personnes Distance:' . $this->distance. '<br>';
}


}