<?php
namespace App\Enums;


enum StatusEnum: string
{
    case ACTIVE = 'active';
    case PROCESSING = 'PROCESSING';
    case CACNCELED = 'CACNCELED';
}
