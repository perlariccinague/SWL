<?php
return array(
  'label' => array('Postleitzahlen', ''),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array('headline', 'cssID'),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'zones' => array(
      'inputType' => 'list',
      'label' => array('Tarifzonen', 'Alle Tarifzonen mit dazugehörigen Postleitzahlen'),
      'fields' => array(
        'name' => array(
          'label' => array('Name', ''),
          'inputType' => 'text'
        ),
        'zipcodes' => array(
          'label' => array('Postleitzahlen', ''),
          'inputType' => 'list',
          'fields' => array(
            'zip' => array(
              'label' => array('Postleitzahl', ''),
              'inputType' => 'text'
            )
          )
        )
      )
    )
  )
);
