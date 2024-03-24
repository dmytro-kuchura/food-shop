<?php namespace App\Traits;

trait Date
{
    static array $months = [
        1 => 'Січень', 2 => 'Лютий', 3 => 'березень', 4 => 'Квітень',
        5 => 'Травень', 6 => 'Червень', 7 => 'Липень', 8 => 'Серпень',
        9 => 'Вересень', 10 => 'Жовтень', 11 => 'Листопад', 12 => 'Грудень',
    ];

    static array $shortMonths = [
        1 => 'Січ', 2 => 'Лют', 3 => 'Бер', 4 => 'Кві',
        5 => 'Тра', 6 => 'Чер', 7 => 'Лип', 8 => 'Сер',
        9 => 'Вер', 10 => 'Жов', 11 => 'Лис', 12 => 'Гру',
    ];

    public static function getUkrainianMonth(string $date): string
    {
        return self::$months[date('n', strtotime($date))];
    }

    public static function getShortUkrainianMonth(string $date): string
    {
        return self::$shortMonths[date('n', strtotime($date))];
    }

    public static function getHumanDate(string $date): string
    {
        return date('d ', strtotime($date)) . ' ' . self::getUkrainianMonth($date) . ', ' . date('Y', strtotime($date));
    }

    public static function getShortHumanDate(string $date): string
    {
        return date('d ', strtotime($date)) . ' ' . self::getShortUkrainianMonth($date) . ', ' . date('Y', strtotime($date));
    }
}
