<?php

namespace Drupal\erasmus_subject_area_code\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\OptGroup;

/**
 * Plugin implementation of the 'erasmus_subject_area_code_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "erasmus_subject_area_code_default",
 *   label = @Translation("Erasmus Subject Area code formatter"),
 *   field_types = {
 *     "erasmus_subject_area_code"
 *   }
 * )
 */
class ErasmusSubjectAreaCodeDefaultFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $erasmus_subject_area_codes = \erasmus_subject_area_code_get_values();
    $options = OptGroup::flattenOptions($erasmus_subject_area_codes);
    $elements = [];
    foreach ($items as $delta => $item) {
      $value = $item->value;
      $elements[$delta] = ['#markup' => $options[$value]];
    }
    return $elements;
  }

}
