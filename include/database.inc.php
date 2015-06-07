<?php
    $g_dbLink = null;
    
    function dbConnect()
    {
        global $g_dbLink;
        $g_dbLink = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        mysqli_set_charset($g_dbLink, DB_CONNECTION_CHARSET);
        if (mysqli_connect_errno())
        {
            echo 'Unable to connect to database';
            exit();
        }
    }
    
    /*
    * Выполняет SQL запрос, переданный в параметре $query
    * Возвращает ассоциативный массив, если данные есть
    * Возвращает пустой массив, если данных нет
    * @param string $query
    * @return array()
    */
    function dbQuery($query)
    {
        global $g_dbLink;
        $data = array();
        if ($result = mysqli_query($g_dbLink, $query))
        {
            if (!is_bool($result))
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    array_push($data, $row);
                }
                mysqli_free_result($result);
            }
        }
        return $data;
    }
    
    /*
    * Выполняет SQL запрос, переданный в параметре $query
    * Возвращает ассоциативный массив, если данные есть
    * Возвращает пустой массив, если данных нет
    * Возвращает FALSE если изменений в БД не было
    * @param string $query
    * @return array(), boolean
    */
    function dbQueryFalse($query)
    {              
        $data = dbQuery($query);
        if (isRowsAffected())
        {
            $result = $data;
        }
        else
        {
            $result = FALSE;
        } 
        return $result;
    }
    
    //определяет повлиял ли последний выполненный запрос на данные
    function isRowsAffected()
    {
        global $g_dbLink;
        return (mysqli_affected_rows($g_dbLink) > 0) ? TRUE : FALSE;
    }
    
    function dbClose()
    {
        global $g_dbLink;
        mysqli_close($g_dbLink);
    }
    
    function dbQuote($str)
    {
        global $g_dbLink;
        return mysqli_real_escape_string($g_dbLink, $str);
    }