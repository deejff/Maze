<?php

class MazeConfiguration implements MazeConfigurationInterface
{
    public function getMap()
    {
        $config = [
            [
                new Tile(1, 0, 0, 1),
                new Tile(1, 0, 1, 0),
                new Tile(1, 0, 0, 0),
                new Tile(1, 0, 0, 0),
                new Tile(1, 0, 0, 0),
                new Tile(1, 0, 1, 0),
                new Tile(1, 1, 0, 0),
                new Tile(1, 1, 0, 1)
            ],
            [
                new Tile(0, 1, 0, 1),
                new Tile(1, 0, 1, 1),
                new Tile(0, 1, 0, 0),
                new Tile(0, 1, 1, 1),
                new Tile(0, 1, 0, 1),
                new Tile(1, 1, 0, 1),
                new Tile(0, 0, 0, 1),
                new Tile(0, 1, 1, 0)
            ],
            [
                new Tile(0, 1, 0, 1),
                new Tile(1, 1, 0, 1),
                new Tile(0, 1, 1, 1),
                new Tile(1, 1, 0, 1),
                new Tile(0, 1, 0, 1),
                new Tile(0, 1, 0, 1),
                new Tile(0, 1, 1, 1),
                new Tile(1, 1, 0, 1)
            ],
            [
                new Tile(0, 1, 0, 1),
                new Tile(0, 1, 0, 1),
                new Tile(1, 0, 0, 1),
                new Tile(0, 1, 1, 0),
                new Tile(0, 1, 1, 1),
                new Tile(0, 0, 0, 1),
                new Tile(1, 0, 0, 0),
                new Tile(0, 1, 0, 0)
            ],
            [
                new Tile(0, 1, 0, 1),
                new Tile(0, 1, 0, 1),
                new Tile(0, 0, 1, 1),
                new Tile(1, 0, 0, 0),
                new Tile(1, 0, 0, 0),
                new Tile(0, 1, 1, 0),
                new Tile(0, 1, 0, 1),
                new Tile(0, 1, 1, 1)
            ],
            [
                new Tile(0, 1, 0, 1),
                new Tile(0, 0, 1, 1),
                new Tile(1, 0, 1, 0),
                new Tile(0, 1, 0, 0),
                new Tile(0, 1, 0, 1),
                new Tile(1, 1, 0, 1),
                new Tile(0, 0, 1, 1),
                new Tile(1, 1, 0, 0)
            ],
            [
                new Tile(0, 1, 0, 1),
                new Tile(1, 0, 0, 1),
                new Tile(1, 0, 1, 0),
                new Tile(0, 1, 1, 0),
                new Tile(0, 1, 1, 1),
                new Tile(0, 0, 0, 1),
                new Tile(1, 1, 0, 0),
                new Tile(0, 1, 0, 1)
            ],
            [
                new Tile(0, 0, 1, 1),
                new Tile(0, 0, 1, 0),
                new Tile(1, 0, 1, 0),
                new Tile(1, 0, 1, 0),
                new Tile(1, 0, 1, 0),
                new Tile(0, 1, 1, 0),
                new Tile(0, 1, 1, 1),
                new Tile(0, 1, 1, 1)
            ],
        ];

        return $config;
    }

    public function getStart()
    {
        return [0, 0];
    }

    public function getEnd()
    {
        return [7, 7];
    }

} 