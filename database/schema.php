<?php namespace SchemaEnhanced\Database;

use \Laravel\Database;

class Schema extends \Laravel\Database\Schema {

	/**
	 * Create a new database table schema.
	 *
	 * @param  string   $table
	 * @param  Closure  $callback
	 * @return void
	 */
	public static function create($table, $callback)
	{
		$table = new Schema\Table($table);

		// To indicate that the table is new and needs to be created, we'll run
		// the "create" command on the table instance. This tells schema it is
		// not simply a column modification operation.
		$table->create();

		call_user_func($callback, $table);

		return static::execute($table);
	}

	/**
	 * Drop a database table from the schema.
	 *
	 * @param  string  $table
	 * @param  string  $connection
	 * @return void
	 */
	public static function drop($table, $connection = null)
	{
		$table = new Schema\Table($table);

		$table->on($connection);

		// To indicate that the table needs to be dropped, we will run the
		// "drop" command on the table instance and pass the instance to
		// the execute method as calling a Closure isn't needed.
		$table->drop();

		return static::execute($table);
	}


	/**
	 * Create the appropriate schema grammar for the driver.
	 *
	 * @param  Connection  $connection
	 * @return Grammar
	 */
	public static function grammar(\Laravel\Database\Connection $connection)
	{
		$driver = $connection->driver();

		if (isset(\Laravel\Database::$registrar[$driver]))
		{
			return \Laravel\Database::$registrar[$driver]['schema']();
		}

		switch ($driver)
		{
			case 'mysql':
				return new Schema\Grammars\MySQL($connection);

			case 'pgsql':
				return new Schema\Grammars\Postgres($connection);

			case 'sqlsrv':
				return new Schema\Grammars\SQLServer($connection);

			case 'sqlite':
				return new Schema\Grammars\SQLite($connection);
		}

		throw new \Exception("Schema operations not supported for [$driver].");
	}

};
