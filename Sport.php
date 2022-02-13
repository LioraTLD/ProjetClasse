<?php

class Sport implements ISport
{
    protected $nomSport;
    protected $nbJoueurs;

    /**
     * @param $nomSport
     * @param $nbJoueurs
     */
    public function __construct(string $nomSport, int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    /**
     * @return string
     */
    public function getNomSport(): string
    {
        return $this->nomSport;
    }

    /**
     * @return int
     */
    public function getnbJoueurs(): int
    {
        return $this->nbJoueurs;
    }

    // Pour créer une méthode public get
    public function getDescription(): string
    {
        return 'Description Nom du sport     ' . $this->nomSport . 'Nb de joueurs:' . $this->nbJoueurs . '<br>';
    }
}
