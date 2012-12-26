Laravel Schema Enhanced
=======================

Adds support to Laravel's Schema Builder for date, time and datetime fields as opposed to date being a datetime field.
If you want to add a field type and it works across all 4 grammars, feel free to submit a pull request.


Installation
============

Clone this repo into application/libraries/schemaenhanced:
```bash
cd /path/to/your/laravel/root
git clone git://github.com/dshoreman/laravel-schema-enhanced.git application/libraries/schemaenhanced
```

Find the Schema alias in your config/application.php. Replace with:
```php
		'Schema'     	=> 'SchemaEnhanced\\Database\\Schema',
```
