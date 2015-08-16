<?php

class MazeToRenderConverter
{
    private $maze;

    public function __construct(Maze $maze)
    {
        $this->maze = $maze;
    }

    public function convert()
    {
        $mazeCopyMap = [];

        foreach ($this->maze->getMap() as $row => $tiles) {
            foreach ($tiles as $col => $tile) {
                $mazeCopyMap[$row][$col] = $this->convertTileToRender($row, $col, $tile);
            }
        }

        $mazeCopy = clone $this->maze;
        $mazeCopy->setMap($mazeCopyMap);

        return $mazeCopy;
    }

    private function convertTileToRender($row, $col, Tile $tile)
    {
        $tileToRender = clone $tile;

        foreach ([Tile::Right, Tile::Bottom] as $side) {
            if ($tile->getWallBySide($side)) {
                if ($this->maze->tileHasSiblingWithWallOnSide($row, $col, $side)) {
                    $tileToRender->setWallBySide($side, 0);
                }
            }
        }

        return $tileToRender;
    }
} 