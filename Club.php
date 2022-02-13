<?php

class Club implements Comparable
{
    private $idClub;
    private $nomClub;
    private $nbPoints;
    private $lesSports = array();

    /**
     * @param $idClub
     * @param $nomClub
     * @param $nbPoints
     * @param array $lesSports
     */
    public function __construct(int $idClub, string $nomClub, int $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }


    /**
     * @return mixed
     */
    public function getidClub()
    {
        return $this->idClub;
    }

    /**
     * @return mixed
     */
    public function getnomClub()
    {
        return $this->nomClub;
    }

    public function getlesSports()
    {
        return $this->lesSports;
    }

    /**
     * @return mixed
     */
    public function getNbPoints()
    {
        return $this->nbPoints;
    }

    /**
     * @return array
     */


    public function AjouterSport(Sport $Unsport)
    {
        $this->Sport = $Unsport;
    }

  public function compareTo(Club $club)
    {
        // TODO: Implement compareTo() method.
    }
}

