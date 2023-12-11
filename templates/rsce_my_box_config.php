<?php
return array(
    'label' => array('Box', 'Meine Beschreibung...'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'titel' => array(
            'label' => array('Überschrift', 'Beschreibung...'),
            'inputType' => 'text',
        ),

        'description' => array(
            'label' => array('Text', 'Beschreibung...'),
           /* 'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',*/
            'inputType' => 'text',
        ),
        'link' => array(
            'label' => array('Link', 'Auf welche Seite soll diese Box verlinken?'),
            'eval' => array('pageTree' => true),
            'inputType' => 'url',
        ),
       'anchor' => array(
            'label' => array('Anchor', 'Beschreibung...'),
          /*  'eval' => array('rte' => 'tinyMCE'),*/
            'inputType' => 'text'
        ),
    )
);
