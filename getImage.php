<?php
    define ('UPLOADS_DIR', './uploads');
    define ('UPLOAD_PAGE', '/upload.php');
        
    function isImageType($fileType)
    {
        $checkResult = preg_match('#^image/*#', $fileType);
        return ($checkResult == 1) ? TRUE : FALSE;
    }

    header ('Location: ' . UPLOAD_PAGE, true, 303);
    
    if (isImageType($_FILES['fileName']['type']))
    {
        $tmpName = $_FILES['fileName']['tmp_name'];
        $name    = $_FILES['fileName']['name'];
        move_uploaded_file($tmpName, UPLOADS_DIR . "/$name");
    }