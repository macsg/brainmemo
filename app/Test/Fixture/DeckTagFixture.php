<?php
/**
 * DeckTagFixture
 *
 */
class DeckTagFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'primary'),
		'deck_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'unique'),
		'tag_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'unique'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'deck_id' => array('column' => 'deck_id', 'unique' => 1),
			'tag_id' => array('column' => 'tag_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'deck_id' => 1,
			'tag_id' => 1
		),
	);

}
