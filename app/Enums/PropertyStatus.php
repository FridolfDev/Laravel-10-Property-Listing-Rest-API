<?php


namespace App\Enums;

enum PropertyStatus : string {

    case SOLD = 'Sold';

    case SALE = 'On Sale';

    case HOLD = 'On Hold';
}
