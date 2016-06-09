<?php
App::uses('TermTaxonomy', 'Model');

/**
 * TermTaxonomy Test Case
 *
 */
class TermTaxonomyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.term_taxonomy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TermTaxonomy = ClassRegistry::init('TermTaxonomy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TermTaxonomy);

		parent::tearDown();
	}

}
