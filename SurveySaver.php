<?php
    require_once('/include/common.inc.php');
    
    define ('ERR_DB_WRITE_ERROR',   'Ошибка записи');
    define ('ERR_DB_WRITE_SUCCESS', 'Анкета успешно записана');
    
    $firstName = GetParam('first_name');
    $lastName  = GetParam('last_name');
    $email     = GetParam('email');
    $age       = GetParam('age', 0);
    if (WriteSurveyToDB($email, $firstName, $lastName, $age))
    {    
        $msg = array ('message' => ERR_DB_WRITE_SUCCESS);
        echo BuildPage('add_user_result.html', $msg);
    }
    else
    {
        $error = array ('message' => ERR_DB_WRITE_ERROR);
        echo BuildPage('add_user_result.html', $error);
    }
    