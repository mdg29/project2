

<?php
    $Password = filter_input(INPUT_POST,'Password');
    $Email_name = filter_input(INPUT_POST,'email');



if (empty($Email_name)) {
    echo  'You Must enter a Email Value <br>';
}
 if (strpos($Email_name, '@') !== FALSE) {
    echo 'email Complete <br>';
}
elseif (strpos($Email_name,'@')==False )
{echo 'Error enter @ <br>';}

    if (empty($Password)){
        echo $message = 'Error must Valid Password';
    }

else if (strlen($Password) < 8) {
    echo $message ='Length Error Must Contain at Least 8 values';
}else
echo $message = 'password complete';
?>