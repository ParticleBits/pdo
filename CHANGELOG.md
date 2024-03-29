### Changelog

##### v2.1.4
+ Fixes more type hints in some statement classes
  - Where clause hints were not expansive enough

##### v2.1.3
+ Fixes type hints in some statement classes
  - Some parameters only allowed null and needed string|null

##### v2.1.2
+ Reverts change to `DeleteStatement` constructor
  - `$table` argument made nullable again
  - Only calling `setTable()` now if `$table` exists

##### v2.1.1
+ Updated `README` and docs contents
  - Cleaned up the php examples and content

##### v2.1.0
+ Updated internal tools php-cs-fixer and phpstan
  - Cleared all phpstan errors up to level 8 (max)
+ Changed (corrected) some return types for functions
  - These were all from phpstan errors
  - Increased minor version number because of compatibility

##### v2.0.3
+ Fixes bug with having 
  - Removed backticks from `having()` method
  - These were not needed and they caused downstream issues

##### v2.0.2
+ Updated `GroupClause` class with:
  - For backwards compatibility, `groupBy()` accepts both `array` and `string`

##### v2.0.1
+ Updated `GroupClause` class with:
  - `array` type is required in `groupBy()` function
  - Values can still be appended with multiple calls

##### v2.0.0
+ Added `InsertMultiStatement` class with:
  - Support to insert multiple rows at once
  - Support for `ON DUPLICATE KEY UPDATE`
+ Refactored code formatting to PSR-2/Symfony
  - Set up PHP CS Fixer and config file with rules
  - Removed unnecessary PHP doc tags and comments
  - Changed namespaces and updated all documentation
+ Moved code out of `PDO` sub-folder and into `src`

##### v1.10.1
+ Updated `Database` class with:
  - Allow user provided PDO options to overwrite default values
+ Updated `StatementContainer` class with:
  - Added check to stop executing when field value is not expected
+ Updated `LimitClause` class with:
  - Fixed `LIMIT/OFFSET` format
  - Changed default offset value
  - Added check whether offset is null (before checking if is integer)

##### v1.10.0
+ Updated `StatementContainer` class with:
  - Added transactional `commit()` method
  - Added transactional `rollBack()` method
  - Added transactional `beginTransaction()` method
+ Updated `LimitClause` class with:
  - Added validation to check if parameters are casted to expected integers
+ Updated `OffsetClause` class with:
  - Added validation to check if parameter is casted to expected integer

##### v1.9.9
+ Added ability to insert associative arrays (#35)
+ Updated `Database` class with:
  - Renamed `$columns` argument in `insert()` method
+ Updated `StatementContainer` class with:
  - Added `isAssociative()` method
  - Fixed `getPlaceholders()` method

> Proposed by [Raistlfiren](https://github.com/Raistlfiren). Thanks!

##### v1.9.8
+ Updated `SelectStatement` class with:
  - Fixed `getColumns()` method
+ Updated `WhereClause` class with:
  - Reverted `__toString()` method
+ Updated `HavingClause` class with:
  - Reverted `__toString()` method

##### v1.9.7
+ Updated `WhereClause` class with:
  - Fixed some weird bug in `__toString()` method
+ Updated `HavingClause` class with:
  - Fixed the same weird bug in`__toString()` method

> Mentioned by [EliaRigo](https://github.com/EliaRigo). Thanks!

##### v1.9.6
+ Updated `LimitClause` class with:
  - Fixed `limit()` method

##### v1.9.5
+ Updated documentation
+ Added protected override allowed
+ Better parameter naming

##### v1.9.4
+ Revised documentation (WIP)
+ Updated `InsertStatement` class with:
  - Fixed `execute()` method

##### v1.9.3
+ Updated `InsertStatement` class with:
  - Added `$insertId` argument in `execute()` method

##### v1.9.2
+ Updated `Database` class with:
  - Fixed `$options` argument in `__construct()` method

##### v1.9.1
+ Updated `SelectStatement` class with:
  - Fixed all aggregates

##### v1.9.0
+ Added `whereMany()` method
+ Updated `limit()` method

> Contributed by [bmutinda](https://github.com/bmutinda) and [scheras](https://github.com/scheras). Thanks!

##### v1.8.2
+ Updated `Database` class with:
  - Minor change `__construct()` method
  - Minor change `insert()` method
  - Minor change `update()` method
+ Updated `LimitClause` class with:
  - Minor change `__toString()` method
+ Updated `OffsetClause` class with:
  - Minor change `__toString()` method

##### v1.8.1
+ Updated `StatementContainer` class with:
  - Minor fix `setPlaceholders()` method

##### v1.8.0
+ [PSR-2 coding style guide](http://www.php-fig.org/psr/psr-2/) adopted
+ Updated `InsertStatement` class with:
  - Added `columns()` method
+ Updated `UpdateStatement` class with:
  - Added `set()` method
+ Updated `StatementContainer` class with:
  - Added `$table` argument in `delete()` method
+ Updated `WhereClause` class with:
  - Fixed `orWhereLike()` method

##### v1.7.2
+ Updated `SelectStatement` class with:
  - Minor fix `select()` method (working fix)

##### v1.7.1
+ Updated `SelectStatement` class with:
  - Minor fix `select()` method
+ Removed old changelog notes

##### v1.7.0
+ Revised release version
