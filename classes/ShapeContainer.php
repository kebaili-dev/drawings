<?php

class ShapeContainer 
{
    // Propriété-----------------------------------------
    protected int $width;
    protected int $height;
    protected array $shapes;
    
    public function __construct(int $width, int $height, array $shapes = [])
    {
        
        $this->width = $width;
        $this->height = $height;
        $this->shapes = $shapes;
    }
    
    //GETTER / SETTER
    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $x
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $y
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getShapes(): string
    {
        return $this->shapes;
    }

    /**
     * @param string $shapes
     */
    public function setShapes(string $shapes): void
    {
        $this->shapes = $shapes;
    }
    
    public function addShape(Shape $shape): ShapeContainer
    {
        $this->shapes[] = $shape;
        
        // On renvoie la classe ShapeContainer pour pouvoir chaîner les appels de la fonction addShape
        return $this;
    }
    
    public function render(): string
    {
        // Ouverture de la balise SVG
        $svg = sprintf('<svg width="%s" height="%s">', $this->width, $this->height);
        
        // Ajout du texte de chacune des formes dans le svg
        foreach ($this->shapes as $shape) {
            $svg .= $shape->draw();
        }
        
        // Fermeture de la balise
        $svg .= '</svg>';
         
        return $svg;
    }
         
}