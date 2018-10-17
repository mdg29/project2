<?php
    $first_name = filter_input(INPUT_POST, 'first');
    $Last_name = filter_input(INPUT_POST, 'Last');
    $Birthday_name = filter_input(INPUT_POST, 'Birthday');
    $Email_name = filter_input(INPUT_POST, 'Email');
    $Password_name = filter_input(INPUT_POST, 'Password');
    if(empty($first_name)) {
        echo 'You Must Enter a Name<br>';
    }
    if(empty($Last_name)) {
    echo 'You Must Enter a Last Name<br>';
}
    if(empty($Birthday_name)) {
    echo 'You Must Enter a DOB<br>';
}
    if(empty($Email_name)) {
    echo 'You Must Enter an Email<br>';
}
    elseif (strpos($Email_name,'@')==False )
    {echo 'Error enter @ <br>';}

    if(empty($Password_name)) {
    echo 'You Must Enter a Password<br>';
}
    else echo 'Complete';

?>






