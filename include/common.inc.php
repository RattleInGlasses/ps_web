<?php
    require_once ('include/request.inc.php');
    require_once ('include/survey.inc.php');
    require_once ('config.inc.php');
    require_once ('include/template.inc.php');
    require_once (SMARTY_DIR . 'Smarty.class.php');
    require_once ('include/getImage.inc.php');
    require_once ('include/database.inc.php');
    require_once ('include/tableSurvey.inc.php');
    require_once ('include/tableUserFiles.inc.php');
    require_once ('include/uploaded.inc.php');
    
    dbConnect();