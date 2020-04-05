<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Mail\Header;

class ReplyTo extends AbstractAddressList
{
    protected $fieldName = 'Reply-To';
    protected static $type = 'reply-to';

    protected static function cleanFieldName($fieldName)
    {
        $allowed = [
            'replyto', 'reply_to'
        ];

        foreach ($allowed as $name) {
            if (strtolower($fieldName) === $name) {
                return static::$type;
            }
        }

        return $fieldName;
    }
}
