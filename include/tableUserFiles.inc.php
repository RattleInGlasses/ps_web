<?php
    define ('FILES_TABLE_NAME',     'user_files');
    define ('FILES_FIELD_FILE_ID',  'file_id');
    define ('FILES_FIELD_FILE_EXT', 'file_extension');
    define ('FILES_FIELD_USER_ID',  'user_id');
    
    function saveFileInfo($fileExt, $userId)
    {
        $safeFileExt = dbQuote($fileExt);
        $query =           
            'INSERT INTO ' . FILES_TABLE_NAME . ' ' .
            'SET ' .
                FILES_FIELD_FILE_EXT . " = '$safeFileExt', " .
                FILES_FIELD_USER_ID  . " = '$userId';";
        $queryResult = dbQueryFalse($query);
        
        return ($queryResult === FALSE) ? FALSE : getMaxId();
    }
    
    function getMaxId()
    {
        $query =           
            'SELECT 
                max(' . FILES_FIELD_FILE_ID . ') AS ' . FILES_FIELD_FILE_ID . ' ' .
            'FROM ' . 
                FILES_TABLE_NAME . ';';
                
        $queryResult = dbQueryFalse($query);
        
        return $queryResult[0]['file_id'];
    }
    
    function getAllExtensions()
    {
        $query =           
            'SELECT DISTINCT ' . 
                FILES_FIELD_FILE_EXT . ' ' .
            'FROM ' . 
                FILES_TABLE_NAME . ';';
                    
        $queryResult = dbQueryFalse($query);
        
        return $queryResult;
    }
    
    function getFileIdExtEmailList()
    {
        $query =           
            'SELECT 
                file_id, file_extension, email
             FROM
                user_files
                LEFT JOIN survey ON (user_files.user_id = survey.survey_id);';
                    
        $queryResult = dbQueryFalse($query);
        
        return $queryResult;
    }