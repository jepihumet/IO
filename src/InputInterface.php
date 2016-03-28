<?php
/**
 * InputInterface.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */

namespace Jepi\IO;

interface InputInterface
{
    public function get($key, $xssPrevent = true);
}