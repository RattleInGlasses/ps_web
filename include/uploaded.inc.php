<?php    
    function getUploadedFiles($filterExt, $filterEmail)
    {
         $uploadedList = getFileIdExtEmailList();
         
         $len = count($uploadedList);
         $files = array();
         $goodFilesIndex = 0;
         for ($i = 0; $i < $len; $i++)
         {
             $extension = $uploadedList[$i][FILES_FIELD_FILE_EXT];
             $fileId    = $uploadedList[$i][FILES_FIELD_FILE_ID];
             $name  = $fileId . '.' . $extension;
             $path  = UPLOADS_DIR . "/$name";
             $email = $uploadedList[$i][FIELD_EMAIL];
             
             if   ((($filterExt   == FALSE) || (strcasecmp($filterExt, $extension) == 0))
                 &&(($filterEmail == FALSE) || (strcasecmp($filterEmail, $email)   == 0))) 
             {
                 $files[$goodFilesIndex]['name']  = $name;
                 $files[$goodFilesIndex]['path']  = $path;
                 $files[$goodFilesIndex]['email'] = $email;
                 $goodFilesIndex++;
             }
         }

         return $files;
    }
    
    function getEmailsList()
    {
        $userData = getUsersIdNameEmailList();
        $emails = array('' => '');
        for ($i = 0; $i < count($userData); $i++)
        {
            $email = $userData[$i][FIELD_EMAIL];
            $emails[$email] = $email;
        }
        return $emails;
    }
    
    function getExtensionsList()
    {
        $extensionsDbFormat = getAllExtensions();
        $extensions = array('' => '');
        for ($i = 0; $i < count($extensionsDbFormat); $i++)
        {
            $ext = $extensionsDbFormat[$i][FILES_FIELD_FILE_EXT];
            $extensions[$ext] = $ext;
        }
        return $extensions;
    }
    