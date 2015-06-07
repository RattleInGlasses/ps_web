<?php
    require_once('/include/common.inc.php');
    
    define ('ERR_NO_INFO', 'Ошибка получения анкеты');
    
    $email  = GetParam('email');
    $userId = GetParam('userid');
    if (($surveyInfo = getSurveyInfoByEmail($email)) 
        || ($surveyInfo = getSurveyInfoById($userId)))
    {
        //var_dump($surveyInfo);
        echo BuildPage('survey_info.html', $surveyInfo);
    }
    else
    {
        $error = array ('description' => ERR_NO_INFO);
        echo BuildPage('error.html', $error);
    }
