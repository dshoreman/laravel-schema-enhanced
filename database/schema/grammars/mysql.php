<?php namespace SchemaEnhanced\Database\Schema\Grammars;

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

	/**
	 * Generate the data-type definition for an enum.
	 *
	 * @param  Fluent   $column
	 * @return string
	 */
	protected function type_enum(\Laravel\Fluent $column)
	{
		return 'ENUM(\''.implode("','",$column->options).'\')';
	}
}