<?php
function cleanArray(array $inputArray): array
{
    foreach ($inputArray as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
    }
    return $data ;
}
