<?php

class Maze
{
    private $map;
    private $start;
    private $end;

    public function __construct(MazeConfiguration $mazeConfiguration)
    {
        $this->map = $mazeConfiguration->getMap();
        $this->start = $mazeConfiguration->getStart();
        $this->end = $mazeConfiguration->getEnd();
    }

    public function &getMap()
    {
        return $this->map;
    }

    public function setMap($map)
    {
        $this->map = $map;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function tileHasSiblingWithWallOnSide($row, $col, $side)
    {
        if (!in_array($side, Tile::getSides())) {
            throw new RuntimeException('Side does not exist:' . $side);
        }

        $checkSiblingSide = null;

        $siblingCol = $col;
        $siblingRow = $row;

        if ($side == Tile::Top) {
            $checkSiblingSide = Tile::Bottom;
            $siblingRow = $row - 1;
        }

        if ($side == Tile::Bottom) {
            $checkSiblingSide = Tile::Top;
            $siblingRow = $row + 1;
        }

        if ($side == Tile::Right) {
            $checkSiblingSide = Tile::Left;
            $siblingCol = $col + 1;
        }

        if ($side == Tile::Left) {
            $checkSiblingSide = Tile::Right;
            $siblingCol = $col - 1;
        }

        if (!isset($this->map[$siblingRow][$siblingCol])) {

            return false;
        }

        /**
         * @var Tile $siblingTile
         */
        $siblingTile = $this->map[$siblingRow][$siblingCol];

        return $siblingTile->getWallBySide($checkSiblingSide);
    }


} 