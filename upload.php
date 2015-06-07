<?php
    require_once ('/include/common.inc.php');
    
    function getUsers()
    {
        $usersList = getUsersList();
        $users = array();
        for ($i = 0; $i < count($usersList); $i++)
        {
            $userId = $usersList[$i]['survey_id'];
            $userFullName = $usersList[$i]['first_name'] . ' ' . $usersList[$i]['last_name'];
            $users[$userId] = $userFullName;
        }
        
        return $users;
    }
    
    $users = array('users' => getUsers());
    echo BuildPage('upload.html', $users);