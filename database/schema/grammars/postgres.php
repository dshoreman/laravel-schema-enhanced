<?php namespace BetterDates\Database\Schema\Grammars;

class PostgreSQL extends \Laravel\Database\Schema\Grammars\PostgreSQL {

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
	 * Generate the data-type definition for a time
	 *
	 * @param  Fluent	$column
	 * @return string
	 */
	protected function type_time(\Laravel\Fluent $column)
	{
		return 'TIME(0) WITHOUT TIME ZONE';
	}

	/**
	 * Generate the data-type definition for a date-time
	 *
	 * @param  Fluent	$column
	 * @return string
	 */
	protected function type_datetime(\Laravel\Fluent $column)
	{
		return 'TIMESTAMP(0) WITHOUT TIME ZONE';
	}
}