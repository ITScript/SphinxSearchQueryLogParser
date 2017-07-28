<?php

namespace ITS\SphinxSearchQueryLogParser;

use PHPUnit\Framework\TestCase;

/**
 * Class ParserTest
 * @covers Parser
 */
class ParserTest extends TestCase
{
    /**
     * @var ParserInterface
     */
    protected $parser;

    /**
     * @dataProvider dataLogs
     * @covers Parser::parse
     * @param string $log
     * @param Log    $expected
     */
    public function testParse($log, Log $expected)
    {
        $actual = $this->parser->parse($log);

        $this->assertNotNull($actual);
        $this->assertEquals($expected->getQueryDate(), $actual->getQueryDate(), 'query-date');
        $this->assertSame($expected->getRealTime(), $actual->getRealTime(), 'real-time');
        $this->assertSame($expected->getWallTime(), $actual->getWallTime(), 'wall-time');
        $this->assertSame($expected->getMatchMode(), $actual->getMatchMode(), 'match-mode');
        $this->assertSame($expected->getFiltersCount(), $actual->getFiltersCount(), 'filters-count');
        $this->assertSame($expected->getSortMode(), $actual->getSortMode(), 'sort-mode');
        $this->assertSame($expected->getTotalMatches(), $actual->getTotalMatches(), 'total-matches');
        $this->assertSame($expected->getOffset(), $actual->getOffset(), 'offset');
        $this->assertSame($expected->getLimit(), $actual->getLimit(), 'limit');
        $this->assertSame($expected->getIndexName(), $actual->getIndexName(), 'index-name');
        $this->assertSame($expected->getGroupByAttr(), $actual->getGroupByAttr(), 'groupby-attr');
        $this->assertSame($expected->getQuery(), $actual->getQuery(), 'query');
    }

    public function setUp()
    {
        $this->parser = new Parser();
    }

    public function tearDown()
    {
        $this->parser = null;
    }

    public function dataLogs()
    {
        yield [
            '[Fri Jun 29 21:17:58 2007] 0.004 sec 0.004 sec [all/0/rel 35254 (0,20)] [lj] test',
            (new Log())
                ->setQueryDate(new \DateTimeImmutable('2007-06-29 21:17:58'))
                ->setRealTime(0.004)
                ->setWallTime(0.004)
                ->setMatchMode('all')
                ->setFiltersCount(0)
                ->setSortMode('rel')
                ->setTotalMatches(35254)
                ->setOffset(0)
                ->setLimit(20)
                ->setIndexName('lj')
                ->setQuery('test'),
        ];

        yield [
            '[Fri Jun 29 21:20:34 2007] 0.024 sec 0.024 sec [all/0/rel 19886 (0,20) @channel_id] [lj] test',
            (new Log())
                ->setQueryDate(new \DateTimeImmutable('2007-06-29 21:20:34'))
                ->setRealTime(0.024)
                ->setWallTime(0.024)
                ->setMatchMode('all')
                ->setFiltersCount(0)
                ->setSortMode('rel')
                ->setTotalMatches(19886)
                ->setOffset(0)
                ->setLimit(20)
                ->setGroupByAttr('@channel_id')
                ->setIndexName('lj')
                ->setQuery('test')
        ];
    }
}
