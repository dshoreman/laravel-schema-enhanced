<?php namespace SchemaEnhanced\Database\Schema;

class Table extends \Laravel\Database\Schema\Table {

	/**
	 * Add a datetime column to the table
	 * 
	 * @param  string 	$name
	 * @param  array 	$options
	 * @return Fluent
	 */
	public function datetime($name)
	{
		return $this->column(__FUNCTION__, compact('name'));
	}

	/**
	 * Add a time column to the table
	 * 
	 * @param  string 	$name
	 * @param  array 	$options
	 * @return Fluent
	 */
	public function time($name)
	{
		return $this->column(__FUNCTION__, compact('name'));
	}

	/**
	 * Create date-time columns for creation and update timestamps.
	 *
	 * @return void
	 */
	public function timestamps()
	{
		$this->datetime('created_at');

		$this->datetime('updated_at');
	}

    /**
     * Create enum field, give up the name and the options
     * 
     * @param mixed $name    Description.
     * @param mixed $options Description.
     *
     * @access public
     * @return mixed Value.
     */
	public function enum($name, $options)
	{
		return $this->column(__FUNCTION__, compact('name', 'options'));
	}

}
