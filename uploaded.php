<?php
    require_once('/include/common.inc.php');
     
    $filterEmail = PostParam('email', FALSE);
    $filterExt   = PostParam('extension', FALSE);
    $files = getUploadedFiles($filterExt, $filterEmail);
    
    $emails     = getEmailsList();
    $extensions = getExtensionsList();
    
    $pageVars = array
    (
        'files' => $files,
        'extensions' => $extensions,
        'emails' => $emails
    );
    echo BuildPage('uploaded.html', $pageVars);