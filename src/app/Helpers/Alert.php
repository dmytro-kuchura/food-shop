<?php

namespace App\Helpers;

use App\Exceptions\WrongParametersException;

class Alert
{
    static $types = ['info', 'success', 'danger', 'warning'];

    static $sessionKey = 'alert';

    public function __construct($text, $type = 'info', $title = null, $icon = null)
    {
        if (in_array($type, static::$types) === false) {
            throw new WrongParametersException('Wrong alert type!');
        }

        if (!$text) {
            throw new WrongParametersException('Text can not be empty!');
        }

        request()->session()->flash(static::$sessionKey, [
            'type' => $type,
            'title' => $title,
            'text' => $text,
            'icon' => $icon,
        ]);
    }

    public static function create($text, $type = 'info', $title = null, $icon = null)
    {
        return new Alert(trim($text), $type, trim($title) ?: null, trim($icon) ?: null);
    }

    public static function danger($text, $title = null)
    {
        return new Alert(trim($text), 'danger', trim($title) ?: null, 'error');
    }

    public static function success($text, $title = null)
    {
        return new Alert(trim($text), 'success', trim($title) ?: null, 'success');
    }

    public static function info($text, $title = null)
    {
        return new Alert(trim($text), 'info', trim($title) ?: null, 'info');
    }

    public static function warning($text, $title = null)
    {
        return new Alert(trim($text), 'warning', trim($title) ?: null, 'warning');
    }

    public static function afterCreating($success = true)
    {
        if ($success === true) {
            return static::success('Запись успешно создана');
        }
        return static::danger('Запись не была создана. Пожалуйста, повторите попытку');
    }

    public static function afterUpdating($success = true)
    {
        if ($success === true) {
            return static::success('Запись успешно обновлена');
        }
        return static::danger('Запись не была обновлена. Пожалуйста, повторите попытку');
    }

    public static function afterDeleting($success = true)
    {
        if ($success === true) {
            return static::success('Запись была успешно удалена');
        }
        return static::danger('Запись не была удалена. Пожалуйста, повторите попытку');
    }

    public static function afterRestoring($success = true)
    {
        if ($success === true) {
            return static::success('Запись была успешно восстановлена');
        }
        return static::danger('Запись не была восстановлена. Пожалуйста, повторите попытку');
    }

    public static function afterImageDeleting($success = true)
    {
        if ($success === true) {
            return static::success('Изображение было успешно удалено');
        }
        return static::danger('Изображение не было удалено. Пожалуйста, повторите попытку');
    }

    public static function get()
    {
        return session(static::$sessionKey);
    }

    public static function forget(): void
    {
        session()->forget(static::$sessionKey);
    }
}
