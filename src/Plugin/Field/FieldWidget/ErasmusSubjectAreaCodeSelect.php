<?php

namespace Drupal\erasmus_subject_area_code\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldWidget\OptionsSelectWidget;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'erasmus_subject_area_code_select' widget.
 *
 * @FieldWidget(
 *   id = "erasmus_subject_area_code_select",
 *   module = "erasmus_subject_area_code",
 *   label = @Translation("Erasmus Subject Area code select"),
 *   field_types = {
 *     "erasmus_subject_area_code"
 *   }
 * )
 */
class ErasmusSubjectAreaCodeSelect extends OptionsSelectWidget {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $elements = parent::settingsForm($form, $form_state);

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = parent::settingsSummary();

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element['value'] = $element;

    return $element;
  }

}
