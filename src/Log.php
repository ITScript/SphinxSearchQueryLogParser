<?php

namespace ITS\SphinxSearchQueryLogParser;

/**
 * Class Log
 */
class Log
{
    /**
     * @var \DateTimeInterface
     */
    protected $queryDate;

    /**
     * @var float
     */
    protected $realTime;

    /**
     * @var float
     */
    protected $wallTime;

    /**
     * @var string
     */
    protected $matchMode;

    /**
     * @var int
     */
    protected $filtersCount;

    /**
     * @var string
     */
    protected $sortMode;

    /**
     * @var int
     */
    protected $totalMatches;

    /**
     * @var int
     */
    protected $offset;

    /**
     * @var int
     */
    protected $limit;

    /**
     * @var string|null
     */
    protected $groupByAttr;

    /**
     * @var string
     */
    protected $indexName;

    /**
     * @var string
     */
    protected $query;

    /**
     * @return \DateTimeInterface
     */
    public function getQueryDate()
    {
        return $this->queryDate;
    }

    /**
     * @param \DateTimeInterface $queryDate
     * @return Log
     */
    public function setQueryDate(\DateTimeInterface $queryDate)
    {
        $this->queryDate = $queryDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRealTime()
    {
        return $this->realTime;
    }

    /**
     * @param float $realTime
     * @return Log
     */
    public function setRealTime($realTime)
    {
        $this->realTime = $realTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getWallTime()
    {
        return $this->wallTime;
    }

    /**
     * @param float $wallTime
     * @return Log
     */
    public function setWallTime($wallTime)
    {
        $this->wallTime = $wallTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getMatchMode()
    {
        return $this->matchMode;
    }

    /**
     * @param string $matchMode
     * @return Log
     */
    public function setMatchMode($matchMode)
    {
        $this->matchMode = $matchMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getFiltersCount()
    {
        return $this->filtersCount;
    }

    /**
     * @param int $filtersCount
     * @return Log
     */
    public function setFiltersCount($filtersCount)
    {
        $this->filtersCount = $filtersCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortMode()
    {
        return $this->sortMode;
    }

    /**
     * @param string $sortMode
     * @return Log
     */
    public function setSortMode($sortMode)
    {
        $this->sortMode = $sortMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalMatches()
    {
        return $this->totalMatches;
    }

    /**
     * @param int $totalMatches
     * @return Log
     */
    public function setTotalMatches($totalMatches)
    {
        $this->totalMatches = $totalMatches;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return Log
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return Log
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGroupByAttr()
    {
        return $this->groupByAttr;
    }

    /**
     * @param string $groupByAttr
     * @return Log
     */
    public function setGroupByAttr($groupByAttr)
    {
        $this->groupByAttr = $groupByAttr;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndexName()
    {
        return $this->indexName;
    }

    /**
     * @param string $indexName
     * @return Log
     */
    public function setIndexName($indexName)
    {
        $this->indexName = $indexName;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return Log
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }
}