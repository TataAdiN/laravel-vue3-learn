<?php

namespace App\Enums;

enum ProgramTypeEnum: int
{
    case PMBS = 0;
    case GENERAL = 1;

    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::PMBS => 'PMBS',
            self::GENERAL => 'General',
        };
    }
}