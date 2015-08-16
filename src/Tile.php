<?php

class Tile
{
    const Top = 0;
    const Right = 1;
    const Bottom = 2;
    const Left = 3;

    private $walls = array();
    private $visited = false;

    public function __construct($wallTop, $wallRight, $wallBottom, $wallLeft)
    {
        $this->setWallBySide(self::Top, $wallTop);
        $this->setWallBySide(self::Right, $wallRight);
        $this->setWallBySide(self::Bottom, $wallBottom);
        $this->setWallBySide(self::Left, $wallLeft);
    }

    /**
     * @return mixed
     */
    public function isVisited()
    {
        return $this->visited;
    }

    /**
     * @param mixed $visited
     */
    public function setVisited($visited)
    {
        $this->visited = $visited;
    }

    public function getWallBySide($side)
    {
        $this->validateSide($side);

        return $this->walls[$side];
    }

    public function setWallBySide($side, $value)
    {
        $this->validateSide($side);

        $this->walls[$side] = $value;
    }

    public static function getSides()
    {
        return [
            Tile::Top,
            Tile::Right,
            Tile::Bottom,
            Tile::Left
        ];
    }

    private function validateSide($side)
    {
        if(!in_array($side, self::getSides()))
        {
            throw new RuntimeException('Tile side not exist:'. $side);
        }
    }
} 