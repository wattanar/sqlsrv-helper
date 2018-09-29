# Install

Edit composer.json or use `composer require wattanar/sqlsrv-helper`

```json
{
  "require": {
    "wattanar/sqlsrv-helper": "dev-master"
  }
}
```

# Usage

```php
require_once "./vender/autoload.php";

use Wattanar\SqlsrvHelper;

$conn = sqlsrv_connect(/* your connection here */);

// get single row from query
$row = (new SqlsrvHelper)->getRow(sqlsrv_query(
  $conn,
  "SELECT * FROM Users"
));

// print result
echo "</pre>" . print_r($row, true) . "</pre>";

// get rows from query
$rows = (new SqlsrvHelper)->getRows(sqlsrv_query(
  $conn,
  "SELECT * FROM Users"
));

// print result
echo "</pre>" . print_r($rows, true) . "</pre>";
```
