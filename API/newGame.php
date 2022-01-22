<?php 

/**
* This is the Game API.
*
* @category   game
* @author     Lawantha-Bandara
* @version    1.0
* ...
*/

// instantiate  object
include('Objects/game.php');


if($mod=='sum'){
    $game = new Game(new Sum());
}
else if($mod=='min'){
    $game = new Game(new Subtract());
}
else if($mod=='mul'){
    $game = new Game(new Multiply());
}
else if($mod=='mix'){
	$game = new Game(new Mix());
}

$game->set_array();
$game->printAll();

?>