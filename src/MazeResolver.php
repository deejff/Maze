<?php

class MazeResolver
{
    private $maze;
    private $map;
    private $start;
    private $end;

    public function __construct(Maze $maze)
    {
        $this->maze = $maze;
        $this->map = $maze->getMap();
        $this->start = $maze->getStart();
        $this->end = $maze->getEnd();
    }

    public function solveMaze($x, $y)
    {
        /**
         * @var $currentTile Tile
         */
        $currentTile = $this->map[$y][$x];

        if ($this->end == [$x, $y]) {
            $currentTile->setVisited(true);
            return true;
        }

        if ($currentTile->isVisited()) {
            return false;
        }

        $currentTile->setVisited(true);

        if ($currentTile->getWallBySide(Tile::Bottom) == 0) {
            if ($this->solveMaze($x, $y + 1)) return true;
        }

        if ($currentTile->getWallBySide(Tile::Top) == 0) {
            if ($this->solveMaze($x, $y - 1)) return true;
        }

        if ($currentTile->getWallBySide(Tile::Left) == 0) {
            if ($this->solveMaze($x - 1, $y)) return true;
        }

        if ($currentTile->getWallBySide(Tile::Right) == 0) {
            if ($this->solveMaze($x + 1, $y)) return true;
        }

        $currentTile->setVisited(false);

        return false;
    }

    public function resolve()
    {
        $this->solveMaze($this->start[0], $this->start[1]);

        return $this->maze;
    }
}