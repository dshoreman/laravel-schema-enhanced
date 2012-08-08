Laravel BetterDates Library
===========================

Adds support to Laravel's Schema Builder for date, time and datetime fields as opposed to date being a datetime field.


Installation
============

Clone this repo into application/libraries/betterdates:
```bash
cd /path/to/your/laravel/root
git clone git://github.com/dshoreman/laravel-betterdates.git application/libraries/betterdates
```

Find the Schema alias in your config/application.php. Replace with:
```php
		'Schema'     	=> 'BetterDates\\Database\\Schema',
```