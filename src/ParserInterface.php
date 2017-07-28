<?php

namespace ITS\SphinxSearchQueryLogParser;

/**
 * Interface Parser
 */
interface ParserInterface
{
    /**
     * @param string $line
     * @return Log|null
     */
    public function parse($line);
}