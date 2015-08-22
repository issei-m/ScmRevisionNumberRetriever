<?php

namespace Issei\Tests;

use Issei\ScmRevisionNumberRetriever;

/**
 * @author Issei Murasawa <issei.m7@gmail.com>
 */
class ScmRevisionNumberRetrieverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @expectedException        \RuntimeException
     * @expectedExceptionMessage The file "invalid" does not exist.
     */
    public function getCurrentRevisionNumber_should_throw_a_RuntimeException_if_stored_path_is_invalid()
    {
        $retriever = new ScmRevisionNumberRetriever('invalid');
        $retriever->getCurrentRevisionNumber();
    }
    /**
     * @test
     */
    public function getCurrentRevisionNumber_should_read_stored_path_and_return_its_contents()
    {
        $retriever = new ScmRevisionNumberRetriever(__DIR__ . '/mock/revision');
        $this->assertEquals('asdf0123', $retriever->getCurrentRevisionNumber());
    }
}
