<?php
    require_once ('/include/common.inc.php');
       
    //выбирает пользователей между указанными позициями (выборка части массива)
    function getUsersSample($usersList, $startIndex, $endIndex)
    {        
        $tdata = array('usersList' => array());
        for ($i = $startIndex; $i < $endIndex + 1; $i++)
        {
            $email  = $usersList[$i]['email'];
            $userId = $usersList[$i]['survey_id'];
            $tdata['usersList'][] = "<a href='/SurveyInfo.php?userid=$userId'>$email</a>";
            $tdata['usersList'][] = $usersList[$i]['first_name'];
            $tdata['usersList'][] = $usersList[$i]['last_name'];
        }
        return $tdata;
    }    
    
    //производит выборку пользователей, начиная с указ. позиции
    //и не превосходя максимальный размер
    //добавляет в результат информацию о предыдущей и следующей странице
    function usersListToTableData($usersList, $startRow)
    {
        $maxPageRows = USERS_LIST_ROWS_LIMIT;
        $endRow = min($startRow + $maxPageRows - 1, count($usersList));
        $tdata = getUsersSample($usersList, $startRow - 1, $endRow - 1);
        
        $nextPageStart = ($endRow + 1 > count($usersList)) ? FALSE : $endRow + 1;
        $prevPageStart = max($startRow - $maxPageRows, 1);
        $prevPageStart = ($prevPageStart == $startRow) ? FALSE : $prevPageStart;
        $tdata['prevPageStart'] = $prevPageStart;
        $tdata['nextPageStart'] = $nextPageStart;
        
        return $tdata;
    }
    
    $startRow = GetParam('start', FALSE);
    $startRow = (!$startRow) ? 1 : $startRow;
    $usersListData = usersListToTableData(getUsersIdNameEmailList(), $startRow);
    echo BuildPage('users_list.html', $usersListData);