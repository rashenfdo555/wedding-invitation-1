<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $attendance = isset($_POST['attendance']) ? strip_tags(trim($_POST['attendance'])) : '';

    if (empty($name) || empty($email)) {
        echo json_encode(['status' => 'error', 'message' => 'කරුණාකර සියලුම විස්තර ඇතුලත් කරන්න.']);
        exit;
    }

    $logString = "[" . date("Y-m-d H:i:s") . "] නම: $name | විද්‍යුත් තැපෑල: $email | සහභාගීත්වය: $attendance\n";
    
    if (file_put_contents('rsvp-data.txt', $logString, FILE_APPEND | LOCK_EX)) {
        echo json_encode(['status' => 'success', 'message' => 'ඔබගේ දත්ත සාර්ථකව සුරැකිණි. ස්තූතියි!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'දත්ත සුරැකීමට නොහැකි විය. නැවත උත්සාහ කරන්න.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'වැරදි පිවිසුමකි.']);
}