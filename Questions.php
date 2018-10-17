<?php

$question_name = filter_input(INPUT_POST,'question');
$body_name = filter_input(INPUT_POST,'body');



    if(empty($question_name)) {
     echo 'You Must Enter a Question<br>';
    }
if (strlen($question_name) < 3) {
    echo $message = 'Length Error Must Contain at Least 3 Characters';
}
    if(empty($body_name)) {
    echo 'You Must Enter a Answer<br>';
    }
    if (strlen($body_name) < 500) {
        echo $message = 'Length Error Must Contain at Least 500 Characters';
    }
    else echo 'Complete';
?>