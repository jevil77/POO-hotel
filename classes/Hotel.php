<?php



class Hotel{

    private string $nom;
    private string $adresse;
    private string $CP;
    private string $ville;
    private array $chambres;
    private array $reservations; 


    public function __construct (string $nom,string $adresse,string $CP,string $ville){
     
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->CP = $CP;
        $this->ville = $ville;
        $this->chambres= [];
        $this->reservations = [];


    }







    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of CP
     */ 
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * Set the value of CP
     *
     * @return  self
     */ 
    public function setCP($CP)
    {
        $this->CP = $CP;

        return $this;
    }


    
    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

     

    
    /**
     * Get the value of chambres
     */ 
    public function getChambres()
    {
        return $this->chambre;
    }

    /**
     * Set the value of chambres
     *
     * @return  self
     */ 
    public function setChambres($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function addChambre(Chambre $chambre){
        $this->chambres[] = $chambre;    
}


public function compterChambre(){
    $count= 0;
    
    foreach($this->chambres as $chambre){
       foreach($chambre->getReservations() as $reservation){
            $count++;
        
       }
    }
    if($count <= 0){
        return "Aucune reservation";
    }
    else{
    $nbChambreDispo = (count($this->chambres) - $count);
    return "Nombre de chambres ".count($this->chambres)."<br> Le Nombre de chambres reservées est de ".$count."<br> Le nombre de chambres disponibles est de ".$nbChambreDispo;
    }
}






    public function afficherReservation(){
        $count= 0;
        $result= "<div class='reservations'>";
        foreach($this->chambres as $chambre){
            foreach($chambre->getReservations() as $reservation){
                $count++;
                $result .= $reservation."<br>";
            }
        }
        return "Réservations de l'hotel $this"."<p>".$count." Réservations !</p>".$result."<br></div>";
    }
    
    public function getInfos(){
        return $this->getNom()."<br>".$this->getAdresse()."<br>".$this->compterChambre()."<br><br>";
    }



public function afficherStatut(){

        
            $result = "<div><table class=table>
            <thead>
                <tr>
                    <th>CHAMBRE</th>
                    <th>PRIX</th>
                    <th>WIFI</th>
                    <th>ETAT</th>
                </tr>
            </thead>";
            foreach($this->chambres as $chambre){
                $result .= "<tr>
                <td>".$chambre->afficherNumero()."</td>
                <td>".$chambre->getPrix()." €</td>
                <td>".$chambre->afficherIcone()."</td>
                <td>".$chambre->afficherLibre()."</td></tr></div>";
            }
           $result .= "</table>";
           return $result;
        }
    


    





    




   


    

    public function __toString() {

        return $this->nom." ".$this->ville;
    }



}