<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', [
        'tx_neuron_socialnetworks' => array(
            'label'   => 'LLL:EXT:neuron/Resources/Private/Language/locallang_db.xlf:pages.tx_neuron_socialnetworks',
            'exclude' => 0,
            'config'  => array(
                'type'          => 'inline',
                'foreign_table' => 'tx_neuron_domain_model_socialnetwork',
                'foreign_field' => 'page',
                'maxitems'      => 10,
                'appearance'    => [
                    'collapseAll' => 1
                ],
            )
        ),
        'tx_neuron_scroll' => [
            'label'   => 'LLL:EXT:neuron/Resources/Private/Language/locallang_db.xlf:pages.tx_neuron_scroll',
            'exclude' => 0,
            'config' => [
                'type' => 'check',
                'items' => [
                    [ 'einschalten', '' ],
                ],
            ],
        ],
        'tx_neuron_scrollbutton' => [
            'label'   => 'LLL:EXT:neuron/Resources/Private/Language/locallang_db.xlf:pages.tx_neuron_scrollbutton',
            'exclude' => 0,
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,int',
            ],
        ],
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages',
    '--div--;Neuron Configuration, tx_neuron_socialnetworks, tx_neuron_scroll, tx_neuron_scrollbutton, ', '',
    'after:categories');


$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ', tx_neuron_socialnetworks';