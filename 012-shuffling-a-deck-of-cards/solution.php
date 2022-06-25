<?php 

function createDeck() {
    define('CARD_SUITS', ['s', 'h', 'd', 'c']);
    define('CARD_VALUES', ['2', '3', '4', '5', '6', '7', '8', '9', 'T', 'J', 'Q', 'K', 'A']);
    $deck = [];
    foreach(CARD_SUITS as $suit){
        foreach(CARD_VALUES as $val){
            array_push($deck, $val . $suit);
        }
    }
    return $deck;
}

define('CARDS_DECK', createDeck());

function cardsShuffle(){
    $deckShuffled = [];
    for($i = 0; $i < 52; $i++){
        $randomIndex = rand(0, 51);
        while(in_array(CARDS_DECK[$randomIndex], $deckShuffled)){
            $randomIndex = rand(0, 51);
        }
        array_push($deckShuffled, CARDS_DECK[$randomIndex]);
    }
    return $deckShuffled;
}

define('DECK_SHUFFLED', cardsShuffle());

echo 'Deck unshuffled:<br> ';
foreach(CARDS_DECK as $card){
    echo $card . ' ';
}

echo '<br><br>Deck shuffled:<br> ';
foreach(DECK_SHUFFLED as $card){
    echo $card . ' ';
}


