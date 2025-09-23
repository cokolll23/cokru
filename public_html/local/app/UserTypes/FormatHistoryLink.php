<?php
namespace UserTypes;

use Bitrix\Main\UserField\Types\StringFormattedType;
use CUserTypeManager;

class FormatHistoryLink extends StringFormattedType
{
    public const
        USER_TYPE_ID = 'telegram_string_formatted_link',
        RENDER_COMPONENT = 'lab:main.field.stringformatted'; // компонент который обрабатывает ссылку

    // public const RENDER_COMPONENT = 'otus:main.field.stringformatted';

    public static function getDescription(): array {
        return [
            'DESCRIPTION' => 'Ссылка на историю обращений',
            'BASE_TYPE' => CUserTypeManager::BASE_TYPE_STRING,
        ];
    }

    public static function getDbColumnType(): string
    {
        return 'text';
    }

}