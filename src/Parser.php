<?php

namespace ITS\SphinxSearchQueryLogParser;

/**
 * Class Parser
 */
class Parser implements ParserInterface
{
    /**
     * @var string
     */
    protected $pattern = '/^\[(?P<query_date>.*?)\] '
        . '(?P<real_time>[\d\.]+) sec '
        . '(?P<wall_time>[\d\.]+) sec '
        . '\['
        . '(?P<match_mode>.*?)\/(?P<filters_count>\d+)\/(?P<sort_mode>.*?) '
        . '(?P<total_matches>\d+) '
        . '\((?P<offset>\d+),(?P<limit>\d+)\)'
        . '( (?P<groupby_attr>\@[\S,\s]+))?'
        . '\] '
        . '\[(?P<index_name>.*?)\] '
        . '(?P<query>.*?)$/';

    /**
     * @var string
     */
    protected $queryDateFormat = '??? M* j H:i:s Y';

    /**
     * Parser constructor.
     * @param string $pattern
     * @param string $queryDateFormat
     */
    public function __construct($pattern = null, $queryDateFormat = null)
    {
        if ($pattern) {
            $this->pattern = $pattern;
        }

        if ($queryDateFormat) {
            $this->queryDateFormat = $queryDateFormat;
        }
    }

    /**
     * @param string $line
     * @return Log|null
     */
    public function parse($line)
    {
        $log   = null;
        $match = [];

        if (preg_match($this->pattern, $line, $match)) {
            $log = new Log();
            $log
                ->setQueryDate(\DateTimeImmutable::createFromFormat($this->queryDateFormat, $match['query_date']))
                ->setRealTime((float)$match['real_time'])
                ->setWallTime((float)$match['wall_time'])
                ->setMatchMode($match['match_mode'])
                ->setFiltersCount((int)$match['filters_count'])
                ->setSortMode($match['sort_mode'])
                ->setTotalMatches((int)$match['total_matches'])
                ->setOffset((int)$match['offset'])
                ->setLimit((int)$match['limit'])
                ->setGroupByAttr($match['groupby_attr'] ?: null)
                ->setIndexName($match['index_name'])
                ->setQuery($match['query']);
        }

        return $log;
    }
}