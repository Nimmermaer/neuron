<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MB.Neuron',
            'Impressum',
            'Impressum'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('neuron', 'Configuration/TypoScript', 'Neuron Template');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_neuron_domain_model_socialnetwork', 'EXT:neuron/Resources/Private/Language/locallang_csh_tx_neuron_domain_model_socialnetwork.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_neuron_domain_model_socialnetwork');

    }
);
