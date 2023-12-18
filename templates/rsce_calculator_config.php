<?php
return array(
  'label' => array('Tarifauswahl', 'Meine Beschreibung...'),
  'types' => array('content', 'module'),
  'contentCategory' => 'texts',
  'moduleCategory' => 'miscellaneous',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array('headline', 'cssID'),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    'tarife' => array(
      'inputType' => 'list',
      'label' => array('Tarife', 'Alle Tarife'),
      'fields' => array(
        'aktiv' => array(
          'label' => array('Aktiv', ''),
          'inputType' => 'checkbox'
        ),
        'name' => array(
          'label' => array('Name', ''),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'tagline' => array(
          'label' => array('Werbespruch', '(z.B.: "Für Umweltbewusste", oder "Unser Kundenliebling")'),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50')
        ),
        'energieart' => array(
          'label' => array('Energieart', ''),
          'inputType' => 'select',
          'eval' => array('tl_class' => 'w50'),
          'options' => array('Strom', 'Heizen und Laden')
        ),
        'zielgruppe' => array(
          'label' => array('Zielgruppe', ''),
          'inputType' => 'select',
          'eval' => array('tl_class' => 'w50'),
          'options' => array('Privatkunde', 'Geschäftskunde')
        ),
        'bio' => array(
          'label' => array('Öko-Strom', ''),
          'inputType' => 'select',
          'eval' => array('tl_class' => 'w50'),
          'options' => array('Nein', 'Ja')
        ),
        'region' => array(
          'label' => array('Region', ''),
          'inputType' => 'select',
          'options' => array('Leinefelde-Worbis','Eichsfeld'),
          'eval' => array('tl_class' => 'w50')
        ),
        'preisstufen' => array(
          'label' => array('Preisstufen', ''),
          'inputType' => 'list',
          'fields' => array(
            'stufeVon' => array(
              'label' => array('Stufe ab', 'kWh/Jahr'),
              'inputType' => 'text',
              'eval' => array('tl_class' => 'w50')
            ),
            'stufeBis' => array(
              'label' => array('Stufe bis', 'kWh/Jahr'),
              'inputType' => 'text',
              'eval' => array('tl_class' => 'w50')
            ),
            'grundpreis' => array(
              'label' => array('Grundpreis', '€/Jahr'),
              'inputType' => 'text',
              'eval' => array('tl_class' => 'w50')
            ),
            'arbeitspreis' => array(
              'label' => array('Arbeitspreis', 'ct/kWh'),
              'inputType' => 'text',
              'eval' => array('tl_class' => 'w50')
            )
          )
        )
      )
    )
  )
);
