# Erasmus Subject Area code

Drupal module providing Erasmus Subject Area codes as select options.

## Installation

Include the repository in your project's `composer.json` file:

    "repositories": [
        ...
        {
            "type": "vcs",
            "url": "https://github.com/EuropeanUniversityFoundation/erasmus_subject_area_code"
        }
    ],

Then you can require the package as usual:

    composer require euf/erasmus_subject_area_code

Finally, install the module:

    drush en erasmus_subject_area_code

## Usage

The **Erasmus Subject Area code** field type becomes available in the Field UI so it can be added to any fieldable entity like any other field type.

The top level codes are used as `optgroup` elements in the select form element, while the lower level codes are used as `option` elements - the user can only select the lower level.
