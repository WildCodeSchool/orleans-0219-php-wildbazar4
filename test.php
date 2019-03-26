<?php
$tableau=[
   'item1' => ['item A', 'item B', 'item C'],

    'truc1' => ['truc A', 'truc B', 'truc C'],

];

function test (array $tableau){
if (strlen($tableau[0])<22){
    echo 'ça marche';
}
}

$tableaufonctions=['test', $tableau];

call_user_func($tableaufonctions);