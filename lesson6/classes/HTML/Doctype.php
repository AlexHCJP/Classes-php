<?php


namespace HTML;

use HTML\Tag;
include_once ('autoload.php');

class Doctype
{
    private const TYPE = [
        'SH', 'TH', 'FH', 'A', 'SX', 'TX', 'FX', 'X'
        ];

    static function get($type)
    {
        $str = '<!DOCTYPE HTML ';
        switch ($type)
        {
            case self::TYPE[0]:
            {
                return $str . 'PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
                break;
            }
            case self::TYPE[1]:
            {
                return $str . 'PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
                break;
            }
            case self::TYPE[2]:
            {
                return $str . 'PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">';
                break;
            }
            case self::TYPE[3]:
            {
                return $str . '>';
                break;
            }
            case self::TYPE[4]:
            {
                return $str . 'PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
                break;
            }
            case self::TYPE[5]:
            {
                return $str . 'PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
                break;
            }
            case self::TYPE[6]:
            {
                return $str . 'PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">';
                break;
            }
            case self::TYPE[7]:
            {
                return $str . 'PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
                break;
            }
        }
    }
}