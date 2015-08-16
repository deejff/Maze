<?php

class MazeRender
{
    private $maze;

    public function __construct(Maze $maze)
    {
        $this->maze = $maze;
    }

    //todo This should be render by template system i.e Twig
    public function render()
    {
        $mazeHtml = $this->renderMaze($this->maze);

        include "Resources/views/Layout.html";

        die();
    }

    private function renderMaze(Maze $maze)
    {
        $html = '<table id="maze">';

        foreach ($maze->getMap() as $row => $mazeRow) {
            $html .= $this->renderRow($mazeRow);
        }

        $html .= '</table>';

        return $html;
    }

    private function renderRow($mazeRow)
    {
        $html = '<tr>';

        /**
         * Tile[] $mazeRow
         */
        foreach ($mazeRow as $col => $tile) {
            $html .= $this->renderTile($tile);
        }

        $html .= '</tr>';

        return $html;
    }


    private function renderTile(Tile $tile)
    {
        $style = '';

        if ($tile->getWallBySide(Tile::Top)) {
            $style .= 'bt';
        }

        if ($tile->getWallBySide(Tile::Right)) {
            $style .= ' br';
        }

        if ($tile->getWallBySide(Tile::Bottom)) {
            $style .= ' bb';
        }

        if ($tile->getWallBySide(Tile::Left)) {
            $style .= ' bl';
        }

        if ($tile->isVisited()) {
            $style .= ' path';
        }

        return '<td class="' . $style . '"></td>';
    }
} 