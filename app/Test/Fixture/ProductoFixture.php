<?php
/**
 * ProductoFixture
 *
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'marca_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sku' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'precio' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '11,2', 'unsigned' => false),
		'descripcion' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'material_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'color_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'medida' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'activo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'destacado' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'foto1' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'foto2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'foto3' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'categoria_id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'marca_id' => 1,
			'sku' => 'Lorem ipsum dolor sit amet',
			'precio' => '',
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'material_id' => 1,
			'color_id' => 1,
			'medida' => 'Lorem ipsum dolor sit amet',
			'activo' => 1,
			'destacado' => 1,
			'created' => '2014-11-26 18:05:31',
			'modified' => '2014-11-26 18:05:31',
			'foto1' => 'Lorem ipsum dolor sit amet',
			'foto2' => 'Lorem ipsum dolor sit amet',
			'foto3' => 'Lorem ipsum dolor sit amet'
		),
	);

}
