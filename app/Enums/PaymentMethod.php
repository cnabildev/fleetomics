<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case CARD = 'card';
    case CHECK = 'check';
    case CASH = 'cash';
    case BANK_TRANSFER = 'bank_transfer';
    case VACATION_CHECK = 'vacation_check';
}