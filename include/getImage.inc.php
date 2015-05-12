<?php    
    function isImageType($fileType)
    {
        $checkResult = preg_match('#^image/*#', $fileType);
        return ($checkResult == 1) ? TRUE : FALSE;
    }
    
    function getFileList()
    {
        $uploadedList = scandir(UPLOADS_DIR);
        for ($i = 0; $i < count($uploadedList); $i++)
        {
            if (($uploadedList[$i] == '.') || ($uploadedList[$i] == '..'))
            {
                array_splice($uploadedList, $i--, 1);
            }
        }
        return $uploadedList;
    }
    
    function genName($inName)
    {
        $uploadedList = getFileList();
        natsort($uploadedList);
        $lastFile = array_pop($uploadedList);
        $fileName = substr($lastFile, 0, strrpos($lastFile, '.'));
        $fileExt  = substr($inName, strrpos($inName, '.'));

        return $fileName + 1 . $fileExt;
    }