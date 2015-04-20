<?php
    require_once ('/include/common.inc.php');
    
    // $today = date("d");
    // $vars = array('today' => $today);
    // echo BuildPage('index.html', $vars);
    
    $students = array
    (
        array('name' => 'Alex', 'age' => 20),
        array('name' => 'Tanya', 'age' => 21)
    );
    // $list = '';
    // foreach ($students as $student)
    // {
        // $list .= GetView('student_record.html', $student);
    // }
    // $vars = array('list' => $list);
    echo BuildPage('students.html', array('students' => $students));
    