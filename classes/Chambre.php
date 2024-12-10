<?php



class Chambre {
    private string $numero;
    private float $prix;
    private string $lits;
    private bool $wifi;
    private Hotel $hotel;
    private bool $libre;
    private array $reservations;
    


    public function __construct(string $numero, float $prix, string $lits, bool $wifi, Hotel $hotel){
        $this->numero=$numero;
        $this->prix=$prix;
        $this->lits=$lits;
        $this->wifi=$wifi;
        $this->hotel=$hotel;
        $this->hotel->addChambre($this);
        $this->libre = true;
        $this->reservations = [];
    }




    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */ 
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }



    /**
     * Get the value of lits
     */ 
    public function getLits()
    {
        return $this->lits;
    }

    /**
     * Set the value of lits
     *
     * @return  self
     */ 
    public function setLits($lits)
    {
        $this->lits = $lits;

        return $this;
    }

    /**
     * Get the value of wifi
     */ 
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set the value of wifi
     *
     * @return  self
     */ 
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }



    /**
     * Get the value of hotel
     */ 
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set the value of hotel
     *
     * @return  self
     */ 
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }


    /**
     * Get the value of libre
     */ 
    public function getLibre()
    {
        return $this->libre;
    }

    /**
     * Set the value of libre
     *
     * @return  self
     */ 
    public function setLibre($libre)
    {
        $this->libre = $libre;

        return $this;
    }

    
   

     /**
     * Get the value of reservation
     */ 
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set the value of reservation
     *
     * @return  self
     */ 
    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function addReservation(Reservation $reservation){
        $this->reservations[]=$reservation;
    }

    public function reservationChambre(){
        $this->setEtat(false);
    }


    public function compterReservation(){
        return count($this->reservation);
    }







    public function afficherNumero()
    {
        return " $this->numero";
    }

    public function getInfos()
    {
        if ($this->wifi) {
            $hasWifi = "Oui";
        } else {
            $hasWifi = "Non";
        }
        return "$this->nbLits lits - $this->prix € - Wifi : hasWifi";
    }

    public function afficherIcone()
    {
        if ($this->getWifi()) {
            $hasWifi = "<i  fa-wifi'>Actif</i>";
        } else {
            $hasWifi = "";
        }
        return $hasWifi;
    }

    public function afficherlibre()
    {
        if ($this->libre === true) {
            return "<p>Disponible</p>";
        } else {
            return "<p>Réservée</p>";
        }
    }





    public function __toString(){

           return $this->hotel->getNom()."   ".$this->numero."   ".$this->prix."   ".$this->wifi."   ".$this->libre;

    }


       


    

    
}