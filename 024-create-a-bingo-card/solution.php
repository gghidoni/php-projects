<?php 

class BingoCard {
    public $b;
    public $i;
    public $n;
    public $g;
    public $o;

    public  function __construct(){
        $this->b = $this->randomFive(1, 15);
        $this->i = $this->randomFive(16, 30);
        $this->n = $this->randomFive(31, 45);
        $this->g = $this->randomFive(46, 60);
        $this->o = $this->randomFive(61, 75);
    }

    public function randomFive($min, $max){
        $count = 5;
        $fiveNum = [];
        while($count > 0){
            array_push($fiveNum, rand($min, $max));
            --$count;
        }
        return $fiveNum;
    }

    public function displayBingoCard(){
        echo 'Bingo Card<br>';
        foreach($this as $key => $arr){
            echo $key . ' => ';
            foreach($arr as $num){
                echo $num . ' ';
            }
            echo '<br>';
        }
    }
}

$card1 = new BingoCard();

$card1->displayBingoCard();