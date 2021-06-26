<?php

    // REQUIRED
    // Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
    date_default_timezone_set('Europe/Athens');
    
    
    // Define daily open hours
    // Must be in 24-hour format, separated by dash
    // If closed for the day, leave blank (ex. sunday)
    // If open multiple times in one day, enter time ranges separated by a comma
    $hours = array(
        'mon' => array('00:00-00:00'),
        'tue' => array('13:00-21:00'),
        'wed' => array('13:00-21:00'),
        'thu' => array('13:00-21:00'), // Open late
        'fri' => array('16:00-23:30'),
        'sat' => array('16:00-23:00'),
        'sun' => array('00:00-00:00')
    );

    // OPTIONAL
    // Add exceptions (great for holidays etc.)
    // MUST be in a format month/day[/year] or [year-]month-day
    // Do not include the year if the exception repeats annually
    $exceptions = array (
        'Christmas'  => '12/25',
        'New years Day'  => '1/1'
    );


$open_now = "<strong class='open'>Yes, we're open! Today's hours are %open% until %closed%.</strong>";
$closed_now = "<strong class='closed'>Sorry, we're closed. Today's hours are %open% until %closed%.</strong>";
$closed_all_day = "<strong class='closed'>Sorry, we're closed on %day%.</strong>";
$exception = "<strong class='closed'>Sorry, we're closed for %exception%.</strong>";


$time_format = 'g:ia';

$days = array (
        'mon'  => 'Δευτέρα' ,
        'tue'  => 'Τρίτη',
        'wed'  => 'Τετάρτη' ,
        'thu'  => 'Πέμπτη',
        'fri'  => 'Παρασκευή' ,
        'sat'  => 'Σάββατο',
        'sun'  => 'Κυριακή' ,
    );

?>
    
