<?php

namespace Drupal\erasmus_subject_area_code\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'erasmus_subject_area_code_select' widget.
 *
 * @FieldWidget(
 *   id = "erasmus_subject_area_code_default",
 *   module = "erasmus_subject_area_code",
 *   label = @Translation("Select list"),
 *   field_types = {
 *     "erasmus_subject_area_code"
 *   }
 * )
 */
class ErasmusSubjectAreaCodeDefaultWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $erasmus_subject_area_codes = \erasmus_subject_area_code_get_values();
    $element['value'] = $element + [
        '#type' => 'select',
        '#options' => $erasmus_subject_area_codes,
        '#empty_value' => '',
        '#default_value' => isset($items[$delta]->value) ? $items[$delta]->value : NULL,
        '#description' => t('Select the Erasmus Subject Area code'),
      ];

    return $element;
  }

}
