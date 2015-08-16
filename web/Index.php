<?php

//todo autoloader

require_once '../src/MazeConfigurationInterface.php';
require_once '../src/Tile.php';
require_once '../src/Resources/config/MazeConfiguration.php';
require_once '../src/Maze.php';
require_once '../src/MazeResolver.php';
require_once '../src/MazeToRenderConverter.php';
require_once '../src/MazeRender.php';


$mazeConfiguration = new MazeConfiguration();
$maze = new Maze($mazeConfiguration);

$mazeResolver = new MazeResolver($maze);
$resolvedMaze = $mazeResolver->resolve();

$mazeToRenderConverter = new MazeToRenderConverter($resolvedMaze);
$mazeConvertedToRender = $mazeToRenderConverter->convert();

$mazeRender = new MazeRender($mazeConvertedToRender);
$mazeRender->render();