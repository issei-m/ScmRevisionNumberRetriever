<?php

namespace Issei;

/**
 * @author Issei Murasawa <issei.m7@gmail.com>
 */
class ScmRevisionNumberRetriever
{
    private $storedPath;

    public function __construct($storedPath)
    {
        $this->storedPath = $storedPath;
    }

    /**
     * Retrieves the current deployed revision number.
     */
    public function getCurrentRevisionNumber()
    {
        if (!file_exists($this->storedPath)) {
            throw new \RuntimeException(sprintf('The file "%s" does not exist.', $this->storedPath));
        }

        if (!is_readable($this->storedPath)) {
            throw new \RuntimeException(sprintf('The file "%s" is not readable.', $this->storedPath));
        }

        return trim(file_get_contents($this->storedPath));
    }
}
