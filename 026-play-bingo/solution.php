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

    public function checkRowCard(){
        $tmp = 0;
        foreach($this as $key => $arr){
            if(array_sum($arr) == 0){
                $tmp++;
            }
        }
        if($tmp > 0){return true;} else {return false;} 
    }

    public function checkColumnCard(){
        $tmpIndex = 0;
        $check = 0;
        $zeroArr = array_keys($this->b, 0);
        if(count($zeroArr) > 0){
            for($i = 0; $i < count($zeroArr); $i++){
                $tmpIndex = $zeroArr[$i];
                if($this->i[$tmpIndex] == 0 && $this->n[$tmpIndex] == 0 && $this->g[$tmpIndex] == 0 && $this->o[$tmpIndex] == 0){
                    $check++;
                    break;
                }
            }
            if($check > 0){return true;} else {return false;}
        } else {
            return false;
        }
    }

    public function checkDiagonalCard(){
        if(($this->b[0] == 0 && $this->i[1] == 0 && $this->n[2] == 0 && $this->g[3] == 0 && $this->o[4] == 0) || 
        ($this->b[4] == 0 && $this->i[3] == 0 && $this->n[2] == 0 && $this->g[1] == 0 && $this->o[0] == 0)){
            return true;
        } else { return false; }
    }

    public function checkCard(){
        if($this->checkRowCard() || $this->checkColumnCard() || $this->checkDiagonalCard()){
            return true;
        } else { return false; }
    }
}

function extraction($card){
        $countExtraction = 0;
        $numbersExtracted = [];
        while(count($numbersExtracted) < 75){
            $numExtract = rand(1, 75);
            if(!in_array($numExtract, $numbersExtracted)){
                array_push($numbersExtracted, $numExtract);
                foreach($card as $key => $arr){
                    if(in_array($numExtract, $arr)){
                        $index = array_search($numExtract, $arr);
                        $card->$key[$index] = 0;
                        $countExtraction++;
                    }
                }
                if($card->checkCard()){
                    return $countExtraction;
                    break;
                }
            }
        }
}

$statisticsArr = [];
for($i = 0; $i < 1000; $i++){
    $newCard = new BingoCard();
    $countExtraction = extraction($newCard);
    array_push($statisticsArr, $countExtraction);
}

echo 'Statistics of Bingo Play<br>';
echo 'Min. extraction for win: ' . min($statisticsArr) . '<br>';
echo 'Max. extraction for win: ' . max($statisticsArr) . '<br>';
echo 'Average extraction for win: ' . (array_sum($statisticsArr) / 1000);

