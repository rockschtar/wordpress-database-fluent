# rockschtar/wordpress-database-fluent

Fluent WordPress database ($wpdb) wrapper 

## Installation

You can install the package via composer:

```bash
composer require rockschtar/wordpress-database-fluent
```

## Usage Examples

For more information about WordPress Database `wpdb` visit https://developer.wordpress.org/reference/classes/wpdb/

**$wpdb->insert**

Insert a row into a table.

```php
WPDB::insert()
    ->table('wp_my_table')
    ->data(['column1' => 'hello', 'column2' => 'world', 'column3' => 1])
    ->format(['%s', '%s', '%d'])
    ->execute();
```

**$wpdb->update**

Update a row in the table

```php
WPDB::update()
    ->table('wp_my_table')
    ->data(['column1' => 'hello', 'column2' => 'world', 'column3' => 1])
    ->format(['%s', '%s', '%d'])
    ->where(['column4' => 5])
    ->whereFormat(['%d'])
    ->execute();
```

**$wpdb->delete**

Delete a row in the table

```php
WPDB::delete()
    ->table('wp_my_table')
    ->where(['column4' => 5])
    ->whereFormat(['%d'])
    ->execute();
```

**$wpdb->query**

Perform a MySQL database query, using current database connection and optional prepares the SQL query for safe execution. Uses sprintf()-like syntax.

```php
WPDB::query()
    ->query('SELECT * FROM wp_my_table WHERE column1=%d', [1]);
```


**$wpdb->get_results**

Retrieve an entire SQL result set from the database (i.e., many rows) and optional prepares the SQL query for safe execution. Uses sprintf()-like syntax.

```php
WPDB::results()
    ->query('SELECT * FROM wp_my_table WHERE column1=%s LIMIT 0, 10', ['abc']);
```


**$wpdb->get_var**

Retrieve one variable from the database and optional prepares the SQL query for safe execution. Uses sprintf()-like syntax.

```php
WPDB::getVar()
    ->query('SELECT COUNT(*) FROM wp_my_table WHERE column1=%d', [1]);
```

**$wpdb->get_row**

Retrieve one row from the database and optional prepares the SQL query for safe execution. Uses sprintf()-like syntax.

```php
WPDB::getRow()
    ->query('SELECT column2, column3 FROM wp_my_table WHERE column1=%d', [1]);
```




## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)