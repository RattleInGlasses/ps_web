<?php
    function GetParam($name, $default = '')
    {
        return (isset($_GET[$name])) ? $_GET[$name] : $default;
    }
    
    function GetParamFalse($name)
    {
        GetParam ($name, FALSE);
    }
    
    function PostParam($name, $default = '')
    {
        return (isset($_POST[$name])) ? $_POST[$name] : $default;
    }
    
    function PostParamFalse($name)
    {
        PostParam ($name, FALSE);
    }