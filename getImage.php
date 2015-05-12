<?php
    require_once('/include/common.inc.php');

    header ('Location: ' . UPLOAD_PAGE, true, 303);
    
    if (isImageType($_FILES['fileName']['type']))
    {
        $tmpName = $_FILES['fileName']['tmp_name'];
        $name = genName($_FILES['fileName']['name']);
        move_uploaded_file($tmpName, UPLOADS_DIR . "/$name");
    }