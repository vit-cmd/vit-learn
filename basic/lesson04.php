<?php
    $paymentStatus = 5;

    switch ($paymentStatus) {
        case 0:
            echo 'Pending Payment';
            break;
        
        case 1:
            echo 'Paid';
            break;

        case 2:
            echo 'Payment Declined';
            break;

        default:
            echo 'Unkown Payment Status';
    }

    echo '<hr>';
    echo 'Use match():<br>';

    $paymentStatusDisplay = match($paymentStatus) {
        0 => 'Pending Payment',
        1 => 'Paid',
        2 => 'Payment Declined',
        default => 'Unkown Payment Status'
    };

    echo $paymentStatusDisplay;