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
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
       /* 'link' => array(
            'label' => array('Link', 'Auf welche Seite soll diese Box verlinken?'),
            'inputType' => 'pageTree'
        ),*/
       /* 'anchor' => array(
            'label' => array('Link1', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea'
        ),
        'anchor1' => array(
            'label' => array('Link2', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea'
        ),*/
    )
);
