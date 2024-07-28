<?php

declare(strict_types= 1);

foreach ($trips as $trip) {
    foreach ($trip as $key => $value) {
        echo json_encode($key . ": ". $value);
    }
}

