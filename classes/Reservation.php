<?php



class reservation{
    
    private Chambre $chambre;
    private DateTime $startDate;
    private DateTime $endDate;
    private Client $client;




    public function __construct(Chambre $chambre, string $startDate, string $endDate, Client $client ){
    
        $this->chambre = $chambre;
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
        $this->client = $client;
        $this->client->addReservation($this);
        $this->chambre->addReservation($this);
        $this->chambre->setLibre(false);





    }






    

    /**
     * Get the value of chambre
     */ 
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set the value of chambre
     *
     * @return  self
     */ 
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * Get the value of startDate
     */ 
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the value of startDate
     *
     * @return  self
     */ 
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the value of endDate
     */ 
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */ 
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function __toString(){

        return $this->getClient()." ".$this->getChambre()." ".$this->chambre->getLits()." du ".$this->startDate->format("d-m-Y")." au ".$this->endDate->format("d-m-Y");

             

    }

    public function afficherDates(){

        $date = "du" .$this->dateDebut->format("d-m-Y"). "au" .$thiS->dateFin->format(d-m-Y)."";

        return $date;



    }


    
}