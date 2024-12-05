<?php

namespace App\Enums;

enum PaymentType: string
{
    case PAYMENT = 'payment';
    case DOWN_PAYMENT = 'down_payment';
    case DEPOSIT = 'deposit';
}