<?php
    require_once('/include/common.inc.php');

    define ('MSG_ERR', 'Ошибка. Файл не сохранён');
    define ('MSG_NO_ERR', 'Файл успешно загружен');
       
    $error = TRUE;
    if (isImageType($_FILES['fileName']['type']))
    {
        $tmpName = $_FILES['fileName']['tmp_name'];
        $userId = PostParam('user_id');
        $fileExt  = substr($_FILES['fileName']['name'], strrpos($_FILES['fileName']['name'], '.') + 1);
        $fileId = saveFileInfo($fileExt, $userId);
        $error = ($fileId === FALSE) ? TRUE : FALSE;
        $fileName = $fileId . '.' . $fileExt;
        move_uploaded_file($tmpName, UPLOADS_DIR . "/$fileName");
    }
    
    $msg = ($error) ? MSG_ERR : MSG_NO_ERR;
    $message = array ('message' => $msg);
    echo BuildPage('upload_result.html', $message);