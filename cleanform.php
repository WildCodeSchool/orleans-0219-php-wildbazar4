<?php
function cleanForm (array $formData): array
{
    foreach ($_POST as $key => $value){
        $data[$key] = trim($value);
    }
    return $data;
}
?>