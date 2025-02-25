<?php

/**
 * BaseTaxonomySource
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $taxonomy_id
 * @property integer $source_id
 * @property Taxonomy $Taxonomy
 * @property Source $Source
 * 
 * @method integer        getId()          Returns the current record's "id" value
 * @method integer        getTaxonomyId()  Returns the current record's "taxonomy_id" value
 * @method integer        getSourceId()    Returns the current record's "source_id" value
 * @method Taxonomy       getTaxonomy()    Returns the current record's "Taxonomy" value
 * @method Source         getSource()      Returns the current record's "Source" value
 * @method TaxonomySource setId()          Sets the current record's "id" value
 * @method TaxonomySource setTaxonomyId()  Sets the current record's "taxonomy_id" value
 * @method TaxonomySource setSourceId()    Sets the current record's "source_id" value
 * @method TaxonomySource setTaxonomy()    Sets the current record's "Taxonomy" value
 * @method TaxonomySource setSource()      Sets the current record's "Source" value
 * 
 * @package    projectname
 * @subpackage model
 * @author     Joseph Persie
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTaxonomySource extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('taxonomy_source');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('taxonomy_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('source_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Taxonomy', array(
             'local' => 'taxonomy_id',
             'foreign' => 'id'));

        $this->hasOne('Source', array(
             'local' => 'source_id',
             'foreign' => 'id'));
    }
}