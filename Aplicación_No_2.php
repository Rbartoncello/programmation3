<?php
    date_default_timezone_set('UTC');

    $now = date('Y-m-d');
    print ( $now  );
    
    $currentMonth = date('m');
    $currentDay = date('d');



    if ($currentMonth <= 3) {
        if($currentMonth == 3)
            $station = ($currentDay < 21) ? 'Summer' : 'Fall';
        else
        $station = 'Winter';
    } else if ($currentMonth <= 6) {
        if($currentMonth == 6)
            $station = ($currentDay < 21) ? 'Fall' : 'Winter';
        else
        $station = 'Winter';
    } else if ($currentMonth <= 9) {
        if($currentMonth == 9)
            $station = ($currentDay < 21) ? 'Winter' : 'Sprint';
        else
        $station = 'Winter';
    } else {
        if($currentMonth == 11)
        $station = ($currentDay < 21) ? 'Sprint' : 'Summer';
    else
    $station = 'Winter';
    }

    print($station)
?>

/*
    Aplicación No 2
    Bartoncello Ricardo
*/