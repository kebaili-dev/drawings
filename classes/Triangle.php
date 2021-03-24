<?php

class Triangle extends Shape
{ // Proprietés-----------------------------------------
    
    protected int $x1;
    protected int $y1;
    protected int $x2;
    protected int $y2;
    
    //Constructor-------------------------------------
    public function __construct(int $x, int $y, int $x1, int $y1,int $x2, int $y2, string $color, float $opacity )
    {
        // Appel du parent ----------------------
        parent::__construct($x, $y, $color, $opacity);
        
        
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;
    }
    
    // Getter / Setter--------------------------------------
    
    
    public function getX1(): int
    {
        return $this->x1;
    }
    
    public function setX1(int $x1): void
    {
        $this->x1 = $x1;
    }
    
    public function getY1(): int
    {
        return $this->y1;
    }
    
    public function setY1(int $y1): void
    {
        $this->y1 = $y1;
    }
    public function getX2(): int
    {
        return $this->x2;
    }
    
    public function setX2(int $x2): void
    {
        $this->x2 = $x2;
    }
    
    public function getY2(): int
    {
        return $this->y2;
    }
    
    public function setY2(int $y2): void
    {
        $this->y2 = $y2;
    }
    // Methode 
    public function draw(): string
    {   //sprintf — Retourne une chaîne formatée
        // % :Un caractère de pourcentage littéral. Aucun argument n'est nécessaire.
        //s:L'argument est traité et présenté comme une chaîne de caractères.
        //f:L'argument est traité comme un nombre à virgule flottante
        return sprintf('<polygon points= "%s %s %s %s %s %s" fill="%s" opacity="%f"></polygon>',
            $this->x,
            $this->y,
            $this->x1,
            $this->y1,
            $this->x2,
            $this->y2,
            $this->color,
            $this->opacity
        );
          // Version alternative sans concaténation (attention il faut utiliser les "" pour délimiter la chaîne)
        // return "<rect x='{$this->x}' ...";
    }
}