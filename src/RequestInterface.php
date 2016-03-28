<?php

/**
 * RequestInterface.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */

namespace Jepi\IO;

use Jepi\Router\RouterInterface;

interface RequestInterface {

    /**
     * @return mixed
     */
    public function getRequest();

    /**
     * @param $key
     * @return \stdClass
     */
    public function getHeader($key);

    /**
     * @return RouterInterface
     */
    public function validateRequest();
}
