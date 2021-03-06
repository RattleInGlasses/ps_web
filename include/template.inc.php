<?php        
    function GetView($template, $vars)
    {
        $smarty = new Smarty();
        $smarty -> setTemplateDir(TEMPLATE_DIR);
        $smarty -> setCompileDir(TEMPLATE_C_DIR);
        $smarty -> assign($vars);
        return $smarty -> fetch($template);
    }
    
    function BuildPage($template, $vars)
    {
        $header = GetView('header.html', $vars);
        $sideMenu = GetView('side_menu.html', $vars);
        $content = GetView($template, $vars);
        $footer = GetView('footer.html', $vars);
        
        return $header . $sideMenu . $content . $footer;
    }