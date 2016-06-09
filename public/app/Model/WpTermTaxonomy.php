<?php
App::uses('AppModel', 'Model');
class TermTaxonomy extends AppModel {


    public $useTable = 'term_taxonomy';

    public $primaryKey = 'term_taxonomy_id';

    // belongsTo associations
    public $belongsTo = array(
        'Term' => array(
            'className'  => 'Term',
            'foreignKey' => 'term_id',
        )
    );

    // hasMany associations
    public $hasMany = array(
        'TermRelationship' => array(
            'className'    => 'TermRelationship',
            'foreignKey'   => 'term_taxonomy_id',
            'dependent'    => false,
        )
    );
}