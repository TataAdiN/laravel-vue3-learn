<?php

namespace App\Enums;

enum SchoolLevelEnum: string
{
    case KB = '11';
    case TK = '22';
    case KBTK = '12';
    case SD = '33';
    case SMP = '44';
    case SMA = '55';

    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::KBTK => 'KBTK',
            self::KB => 'Kelompok Bermain',
            self::TK => 'Taman Kanak - kanak',
            self::SD => 'Sekolah Dasar',
            self::SMP => 'Sekolah Menengah Pertama',
            self::SMA => 'Sekolah Menengah Atas',
        };
    }
}