<?php namespace BetterDates\Database\Schema\Grammars;

class MySQL extends \Laravel\Database\Schema\Grammars\MySQL {

	/**
	 * Generate the data-type definition for a date
	 *
	 * @param  Fluent	$column
	 * @return string
	 */
	protected function type_date(\Laravel\Fluent $column)
	{
		return 'DATE';
	}

	/**
	 * Generate the data-type definition for a date
	 *
	 * @param  Fluent	$column
	 * @return string
	 */
	protected function type_time(\Laravel\Fluent $column)
	{
		return 'TIME';
	}

	/**
	 * Generate the data-type definition for a date
	 *
	 * @param  Fluent	$column
	 * @return string
	 */
	protected function type_datetime(\Laravel\Fluent $column)
	{
		return 'DATETIME';
	}
}