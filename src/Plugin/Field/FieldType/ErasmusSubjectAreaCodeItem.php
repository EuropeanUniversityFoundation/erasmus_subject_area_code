<?php

namespace Drupal\erasmus_subject_area_code\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'erasmus_subject_area_code' field type.
 *
 * @FieldType(
 *   id = "erasmus_subject_area_code",
 *   label = @Translation("Erasmus Subject Area code"),
 *   description = @Translation("Erasmus Subject Area codes as select options"),
 *   category = @Translation("EWP select options"),
 *   default_widget = "erasmus_subject_area_code_default",
 *   default_formatter = "erasmus_subject_area_code_default",
 * )
 */
class ErasmusSubjectAreaCodeItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties['value'] = DataDefinition::create('string')
      ->setLabel(t('Erasmus Subject Area code'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return [
      'columns' => [
        'value' => [
          'type' => 'char',
          'length' => 255,
          'not null' => FALSE,
        ],
      ],
      'indexes' => [
        'value' => ['value'],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value = $this->get('value')->getValue();
    return $value === NULL || $value === '';
  }

}
