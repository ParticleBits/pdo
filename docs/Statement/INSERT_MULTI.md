# INSERT statement for multiple inserts

### Methods

##### `into($table)`

Parameter | Type | Default | Description
--- | --- | --- | ---
`$table` | *string* | required | Table name

##### `columns(array $columns)`

Parameter | Type | Default | Description
--- | --- | --- | ---
`$columns` | *array* | required | Array containing column names

##### `values(array $values)`

Parameter | Type | Default | Description
--- | --- | --- | ---
`$values` | *array* | required | Array containing all rows to insert

##### `addRow(array $row)`

Parameter | Type | Default | Description
--- | --- | --- | ---
`$values` | *array* | required | Array containing individual row to append

##### `onDuplicateKeyUpdate(array $keys)`

Parameter | Type | Default | Description
--- | --- | --- | ---
`$keys` | *array* | required | Array containing keys to update on duplicate key

##### `execute()`

### Examples

#### Inserting multiple rows at once

```php
// INSERT INTO users (usr, pwd) VALUES (? , ?)
// ON DUPLICATE KEY UPDATE pwd = VALUES (pwd)
$stmt = $db
    ->insertMulti(['usr', 'pwd'])
    ->into('users')
    ->values(
        ['usr_1', 'pwd_1'],
        ['usr_2', 'pwd_2'],
        ['usr_3', 'pwd_3']
    )->addRow(['usr_4', 'pwd_4'])
    ->onDuplicateKeyUpdate(['pwd']);

$affectedRows = $stmt->execute(); // returns int
```