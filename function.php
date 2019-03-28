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

/**
 * @param $category
 * @return string
 */
    function addButton ($category)
{
    return <<<HTML
        <div class="text-center p-4">
            <a href="add-{$category}.php">
                <button type="button" class="text-center btn btn-secondary btn-lg">
                    ADD NEW
                </button>
           </a>
        </div>
HTML;
}
