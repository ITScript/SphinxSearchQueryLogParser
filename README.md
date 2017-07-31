# SphinxSearchQueryLogParser
By default parser supports formats:
```
[Fri Jun 29 21:17:58 2007] 0.004 sec 0.004 sec [all/0/rel 35254 (0,20)] [lj] test
[Fri Jun 29 21:20:34 2007] 0.024 sec 0.024 sec [all/0/rel 19886 (0,20) @channel_id] [lj] test
```
# Installation
You can install directly via Composer:
```bash
$ composer require "itscript/sphinxsearch-query-log-parser":"^1.0"
```

## Basic usage
```php
$log_line = '[Fri Jun 29 21:17:58 2007] 0.004 sec 0.004 sec [all/0/rel 35254 (0,20)] [lj] test';

$parser = new \ITS\SphinxSearchQueryLogParser\Parser();

/** @var \ITS\SphinxSearchQueryLogParser\Log $log */
$log = $parser->parse($log_line);

// it is equal to
$log = (new \ITS\SphinxSearchQueryLogParser\Log())
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
    ->setQuery('test');
```
