<?php

/**
 * Taxonomy filter form base class.
 *
 * @package    projectname
 * @subpackage filter
 * @author     Joseph Persie
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaxonomyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'taxonomytype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Taxonomytype'), 'add_empty' => true)),
      'name'            => new sfWidgetFormFilterInput(),
      'imageurl'        => new sfWidgetFormFilterInput(),
      'about'           => new sfWidgetFormFilterInput(),
      'drupalinfo'      => new sfWidgetFormFilterInput(),
      'described'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'taxonomytype_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Taxonomytype'), 'column' => 'id')),
      'name'            => new sfValidatorPass(array('required' => false)),
      'imageurl'        => new sfValidatorPass(array('required' => false)),
      'about'           => new sfValidatorPass(array('required' => false)),
      'drupalinfo'      => new sfValidatorPass(array('required' => false)),
      'described'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('taxonomy_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Taxonomy';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'taxonomytype_id' => 'ForeignKey',
      'name'            => 'Text',
      'imageurl'        => 'Text',
      'about'           => 'Text',
      'drupalinfo'      => 'Text',
      'described'       => 'Boolean',
    );
  }
}
