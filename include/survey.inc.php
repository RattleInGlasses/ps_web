<?php    
    require_once ('survey.const.php');
    
    define ('SURVEY_INFO_FIRST_NAME', 'firstName');
    define ('SURVEY_INFO_LAST_NAME',  'lastName');
    define ('SURVEY_INFO_AGE',        'age');
    define ('SURVEY_INFO_EMAIL',      'email');
  
    function WriteSurveyToDB($email, $firstName = '', $lastName = '', $age = 0)
    {
        $result = TRUE;
        if ($email != '')
        {
            $saveResult = saveSurvey($firstName, $lastName, $email, $age);
        }      
        if (($email == '') || (!$saveResult))
        {
            $result = FALSE;
        }
        
        return $result;
    }

    function getSurveyInfoByEmail($email)
    {
        $result = array();
        if ($survey = getSurveyByEmail($email))
        {
            $result[SURVEY_INFO_FIRST_NAME] = $survey[FIELD_FIRST_NAME];
            $result[SURVEY_INFO_LAST_NAME]  = $survey[FIELD_LAST_NAME];
            $result[SURVEY_INFO_AGE]        = $survey[FIELD_AGE];
            $result[SURVEY_INFO_EMAIL]      = $survey[FIELD_EMAIL];
        }

        return $result;
    }
    
    function getSurveyInfoById($id)
    {
        $result = array();
        if ($survey = getSurveyById($id))
        {
            $result[SURVEY_INFO_FIRST_NAME] = $survey[FIELD_FIRST_NAME];
            $result[SURVEY_INFO_LAST_NAME]  = $survey[FIELD_LAST_NAME];
            $result[SURVEY_INFO_AGE]        = $survey[FIELD_AGE];
            $result[SURVEY_INFO_EMAIL]      = $survey[FIELD_EMAIL];
        }
        
        return $result;
    }