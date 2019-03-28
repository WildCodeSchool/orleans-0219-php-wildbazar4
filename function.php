<?php
    function cleanArray(array $inputArray) {
        foreach ($inputArray as $key => $value){
            $data[$key] = trim($value);
            $data[$key] = stripslashes($value);
            $data[$key] = htmlspecialchars($value);
        }
        return $data;
    }

    function addButton ($category)
    {
        return <<<HTML
            <div class="text-center p-4">
                    <a class="text-center btn btn-secondary btn-lg " role="button" href="add-{$category}.php">
                        ADD NEW
                    </a>
               </a>
            </div>
HTML;
    }
?>