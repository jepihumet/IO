<?php

namespace Jepi\IO;
use Jepi\Test\FwTestBase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-07 at 22:07:27.
 */
class RequestTest extends FwTestBase {

    /**
     * @var Request
     */
    protected static $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();
        self::$object = self::$container->get('\Jepi\IO\Request');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Jepi\IO\Request::getRequest
     */
    public function testGetRequest() {
        $request = self::$object->getRequest();

        /**
         * Check if keys of requests are not false because Request() has default non value as a false, but
         * RequestData() is defined to null
         */
        $this->assertFalse($request->getRemoteAddr());
        $this->assertFalse($request->getRemoteHost());
        $this->assertFalse($request->getRemotePort());
        $this->assertFalse($request->getMethod());
        $this->assertNotFalse($request->getScriptFilename());
        $this->assertTrue(is_numeric($request->getTime()));
        $this->assertTrue(is_numeric($request->getTimeFloat()));
        $this->assertFalse($request->getQueryString());
        $this->assertFalse($request->getUri());
        $this->assertFalse($request->getUserAgent());
    }

    /**
     * @covers Jepi\IO\Request::getHeader
     */
    public function testGetHeader() {
        $header = self::$object->getHeader('cache');

        $this->assertFalse($header);
    }

    /**
     * @covers Jepi\IO\Request::validateRequest
     */
    public function testValidateRequest(){
        try{
            $validated = self::$object->validateRequest();
            $this->assertTrue(true);
        }catch(Exception $e){
            $this->assertTrue(false);
        }

    }

}
