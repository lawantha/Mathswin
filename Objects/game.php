<?php

/**
 * This is the game, sum, Subtract, Multiply, mix classes and functions Of them.
 *
 * @category   game
 * @author     Lawantha-Bandara
 * @version    1.0
 * ...
 */
class Game
{
    /**
     * game object properties
     */
    private $a = 0;
    private $b = 0;
    private $c = 0;
    private $d = 0;
    private $op1 = '';
    private $op2 = '';
    private $strategy;
    private $ans1 = 0;
    private $ans2 = 0;
    private $ans3 = 0;
    private $ans4 = 0;

    private $arr = array();

    /**
     * constructer that set values for stratergy and 'a,b,c,d' variables
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
        $this->setValues();
    }

    /**
     * setter for strategy value
     * @param Strategy $strategy
     * 
     * @return [type]
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Call doAlgorithm in strategy object by using returned result
     * initiate valus for ans1,ans2,ans3,ans4,a,b,c
     * push items to array for display on GUI
     * @return void
     */
    public function set_array(): void
    {
        $result = $this->strategy->doAlgorithm($this->a, $this->b, $this->c);
        $this->ans1 = $result[0];
        $this->ans2 = $result[1];
        $this->ans3 = $result[2];
        $this->ans4 = $result[3];
        $this->op1 = $result[4];
        $this->op2 = $result[5];
        array_push($this->arr, '<div class="grid-item"><img class="img" src="assets/images/' . $this->a . '.png"/></div>
		<div class="grid-item">' . $this->op1 . '</div>
		<div class="grid-item"><img class="img" src="assets/images/' . $this->a . '.png"/></div>  
		<div class="grid-item">' . $this->op1 . '</div>
		<div class="grid-item"><img class="img" src="assets/images/' . $this->a . '.png"/></div>
		<div class="grid-item">=</div>  
		<div class="grid-item">' . $this->ans1 . '</div>
		<div class="grid-item"></div>
		<div class="grid-item"></div>', '<div class="grid-item"><img class="img" src="assets/images/' . $this->a . '.png"/></div> 
		<div class="grid-item">' . $this->op2 . '</div>
		<div class="grid-item"><img class="img" src="assets/images/' . $this->b . '.png"/></div>
		<div class="grid-item">' . $this->op1 . '</div>
		<div class="grid-item"><img class="img" src="assets/images/' . $this->b . '.png"/></div>
		<div class="grid-item">=</div>
		<div class="grid-item">' . $this->ans2 . '</div>
		<div class="grid-item"></div>
		<div class="grid-item"></div>', '<div class="grid-item"><img class="img" src="assets/images/' . $this->b . '.png"/></div>
		<div class="grid-item">' . $this->op2 . '</div>
		<div class="grid-item"><img class="img" src="assets/images/' . $this->c . '.png"/></div> 
		<div class="grid-item">' . $this->op1 . '</div>
		<div class="grid-item"><img class="img" src="assets/images/' . $this->c . '.png"/></div>
		<div class="grid-item">=</div>
		<div class="grid-item">' . $this->ans3 . '</div>
		<div class="grid-item"></div>
		<div class="grid-item"></div>');
    }

    /**
     * set values for variables
     * @return void
     */
    private function setValues(): void
    {
        while ($this->a == $this->b || $this->a == $this->c || $this->a == $this->d || $this->b == $this->c || $this->b == $this->d || $this->c == $this->d) {
            $this->a = rand(1, 9);
            $this->b = rand(1, 9);
            $this->c = rand(1, 9);
            $this->d = rand(1, 9);
        }
    }

    /**
     * @return void
     */
    public function printAll(): void
    {
        /**
         * store ans4 in cookie 
         */
        setcookie("ans4", $this->ans4);
        /**
         * shuffle array
         */
        shuffle($this->arr);
        /**
         * print array and remain data to displayon GUI
         */
        foreach ($this->arr as $item) {
            echo $item;
        }
        echo '<div class="grid-item"><img class="img" src="assets/images/' . $this->a . '.png"/></div>
			<div class="grid-item">' . $this->op2 . '</div>
			<div class="grid-item"><img class="img" src="assets/images/' . $this->b . '.png"/></div>
			<div class="grid-item">' . $this->op1 . '</div>
			<div class="grid-item"><img class="img" src="assets/images/' . $this->b . '.png"/></div>
			<div class="grid-item">' . $this->op2 . '</div>
			<div class="grid-item"><img class="img" src="assets/images/' . $this->c . '.png"/></div>
			<div class="grid-item">=</div>
			<div class="grid-item"><input class="img message" name="answer" id="answer" type ="number"></div>';
    }
}

/**
 * Strategy interface declares operations common to all versions doAlgorithm
 */
interface Strategy
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * 
     * @return array
     */
    public function doAlgorithm($a, $b, $c): array;
}

/**
 * Class Sum implements strategy interface
 */
class Sum implements Strategy
{
    /**
     * This is the function that override for strategy interface
     * This is the function set values for ans1.ans2,ans3,ans4,op1,op2
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * 
     * @return array
     */
    public function doAlgorithm($a, $b, $c): array
    {
        $op1 = '+';
        $op2 = '+';
        $ans1 = $a + $a + $a;
        $ans2 = $a + $b + $b;
        $ans3 = $b + $c + $c;
        $ans4 = $a + $b + $b + $c;
        return array($ans1, $ans2, $ans3, $ans4, $op1, $op2);
    }
}

/**
 * Class Subtract implements stratagy interface
 */
class Subtract implements Strategy
{
    /**
     * This is the function that override for strategy interface
     * This is the function set values for ans1.ans2,ans3,ans4,op1,op2
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * 
     * @return array
     */
    public function doAlgorithm($a, $b, $c): array
    {
        $op1 = '-';
        $op2 = '-';
        $ans1 = $a - $a - $a;
        $ans2 = $a - $b - $b;
        $ans3 = $b - $c - $c;
        $ans4 = $a - $b - $b - $c;
        return array($ans1, $ans2, $ans3, $ans4, $op1, $op2);
    }
}

/**
 * Class Multiply implements stratagy interface
 */
class Multiply implements Strategy
{
    /**
     * This is the function that override for strategy interfase
     * This is the function set values for ans1.ans2,ans3,ans4,op1,op2
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * 
     * @return array
     */
    public function doAlgorithm($a, $b, $c): array
    {
        $op1 = '*';
        $op2 = '*';
        $ans1 = $a * $a * $a;
        $ans2 = $a * $b * $b;
        $ans3 = $b * $c * $c;
        $ans4 = $a * $b * $b * $c;
        return array($ans1, $ans2, $ans3, $ans4, $op1, $op2);
    }
}

class Mix implements Strategy
{
    /**
     * This is the function that override for strategy interfase
     * This is the function set values for ans1.ans2,ans3,ans4,op1,op2
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * 
     * @return array
     */
    public function doAlgorithm($a, $b, $c): array
    {
        $op1 = '+';
        $op2 = '*';
        $ans1 = $a + $a + $a;
        $ans2 = $a * $b + $b;
        $ans3 = $b * $c + $c;
        $ans4 = $a * $b + $b * $c;
        return array($ans1, $ans2, $ans3, $ans4, $op1, $op2);
    }
}

/**
 * Create game objects using strategy object according to the 'mod'
 */
