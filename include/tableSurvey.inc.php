<?php    
    define ('SURVEY_TABLE_NAME', 'survey');
    define ('FIELD_SURVEY_ID', 'survey_id');
    define ('FIELD_FIRST_NAME', 'first_name');
    define ('FIELD_LAST_NAME', 'last_name');
    define ('FIELD_EMAIL', 'email');
    define ('FIELD_AGE', 'age');

    //сохраняет анкету в таблицу базы данных
    function saveSurvey($firstName = '', $lastName = '', $email = '', $age = 0)
    {
        $safeFirstName = dbQuote($firstName);
        $safeLastName  = dbQuote($lastName);
        $safeEmail     = dbQuote($email);
        $query =           
            'INSERT INTO ' . SURVEY_TABLE_NAME . ' ' .
            'SET ' .
                FIELD_FIRST_NAME . " = '$safeFirstName', " .
                FIELD_LAST_NAME  . " = '$safeLastName', " .
                FIELD_EMAIL      . " = '$safeEmail', " .
                FIELD_AGE        . " = $age;";
        $queryResult = dbQueryFalse($query);
        
        return ($queryResult === FALSE) ? FALSE : TRUE;
    }
    
    //ищет анкету в БД по указанному email
    function getSurveyByEmail($email = '')
    {
        $safeEmail     = dbQuote($email);
        $query = 
            'SELECT *
            FROM ' . SURVEY_TABLE_NAME . ' ' .
            'WHERE ' . 
                FIELD_EMAIL . " = '$safeEmail'";
        $survey = dbQuery($query);
        
        return $survey[0];
    }
    
    //ищет анкету в БД по указанному id
    function getSurveyById($surveyId)
    {
        $safeSurveyId = dbQuote($surveyId);
        $query = 
            'SELECT *
            FROM ' . SURVEY_TABLE_NAME . ' ' .
            'WHERE ' . 
                FIELD_SURVEY_ID . " = '$safeSurveyId'";
        $survey = dbQuery($query);
        
        return $survey[0];
    }
    
    function getUsersList()
    {
        $query = 
            'SELECT ' . FIELD_SURVEY_ID . ', ' . FIELD_FIRST_NAME . ', ' . FIELD_LAST_NAME . ' ' .
            'FROM ' . SURVEY_TABLE_NAME . ';';
        $survey = dbQuery($query);
        
        return $survey;
    }
    
    function getUsersIdNameEmailList()
    {
        $query = 
            'SELECT ' . FIELD_SURVEY_ID . ', ' . FIELD_EMAIL . ', ' . FIELD_FIRST_NAME . ', ' . FIELD_LAST_NAME . ' ' .
            'FROM ' . SURVEY_TABLE_NAME . ';';
        $survey = dbQuery($query);
        
        return $survey;
    }
    