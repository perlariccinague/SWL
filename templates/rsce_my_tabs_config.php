<?php
return array(
    'label' => array('Tabs', 'Meine Beschreibung...'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'tabs' => array(
            'inputType' => 'list',
            'label' => array('Tabs', 'Rechts auf "Neues Element" klicken'),
            'fields' => array(
                'titel' => array(
                    'label' => array('Überschrift', 'Beschreibung...'),
                    'inputType' => 'text',
                ),
                'image' => array(
                    'label' => array('Bild', 'Beschreibung...'),
                    'eval' => array('filesOnly' => true),
                    'inputType' => 'fileTree'
                ),
                'description' => array(
                    'label' => array('Text', 'Beschreibung...'),
                    'eval' => array('rte' => 'tinyMCE'),
                    'inputType' => 'textarea',
                )
            )
        )
    )
);
