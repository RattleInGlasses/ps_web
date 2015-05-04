<?php
    require_once('/include/common.inc.php');
    
    function getUploadedFiles()
    {
         $uploadedList = scandir(UPLOADS_DIR);
         for ($i = 0; $i < count($uploadedList); $i++)
         {
             if (($uploadedList[$i] == '.') || ($uploadedList[$i] == '..'))
             {
                 array_splice($uploadedList, $i--, 1);
             }
         }
         
         $len = count($uploadedList);
         $files = array();
         for ($i = 0; $i < $len; $i++)
         {
             array_push($files, array());
             $files[$i]['name'] = $uploadedList[$i];
             $files[$i]['path'] = UPLOADS_DIR . "/$uploadedList[$i]";
         }
         return $files;
    }
    
    $files = getUploadedFiles();
    echo BuildPage('uploaded.html', array('files' => $files));