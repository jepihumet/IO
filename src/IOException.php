<?php
/**
 * IOException.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */
namespace Jepi\IO;

use Jepi\Exception\Exception;

class IOException extends Exception
{
    protected $exceptionType = "IO Exception";
}