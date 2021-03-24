<?php

class Ellipse extends Shape
{ // Proprietés-----------------------------------------
    
    protected int $rx;
    protected int $ry;
    
    //Constructor-------------------------------------
    public function __construct(int $x, int $y, int $rx, int $ry, string $color, float $opacity )
    {
        // Appel du parent ----------------------
        parent::__construct($x, $y, $color, $opacity);
        
        
        $this->rx = $rx;
        $this->ry = $ry;
    }
    
    // Getter / Setter--------------------------------------
    
    
    public function getrx(): int
    {
        return $this->rx;
    }
    
    public function setrx(int $rx): void
    {
        $this->rx = $rx;
    }
    
    public function getry(): int
    {
        return $this->ry;
    }
    
    public function setry(int $ry): void
    {
        $this->ry = $ry;
    }
    // Methode 
    public function draw(): string
    {   //sprintf — Retourne une chaîne formatée
        // % :Un caractère de pourcentage littéral. Aucun argument n'est nécessaire.
        //s:L'argument est traité et présenté comme une chaîne de caractères.
        //f:L'argument est traité comme un nombre à virgule flottante
        return sprintf('<ellipse cx="%s" cy="%s" rx="%s" ry="%s" fill="%s" opacity="%f"></ellipse>',
            $this->x,
            $this->y,
            $this->rx,
            $this->ry,
            $this->color,
            $this->opacity
        );
          // Version alternative sans concaténation (attention il faut utiliser les "" pour délimiter la chaîne)
        // return "<rect x='{$this->x}' ...";
    }
}