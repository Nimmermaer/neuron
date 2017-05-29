<?php
defined('TYPO3_MODE') || die( 'Access denied.' );

call_user_func(
    function () {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MB.Neuron',
            'Impressum',
            [
                'SocialNetwork' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'SocialNetwork' => 'create, update, delete'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    impressum {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('neuron') . 'Resources/Public/Icons/user_plugin_impressum.svg
                        title = LLL:EXT:neuron/Resources/Private/Language/locallang_db.xlf:tx_neuron_domain_model_impressum
                        description = LLL:EXT:neuron/Resources/Private/Language/locallang_db.xlf:tx_neuron_domain_model_impressum.description
                        tt_content_defValues {
                            CType = list
                            list_type = neuron_impressum
                        }
                    }
                }
                show = *
            }
       }'
        );

        // auto Backendlayout include
        $backendLayoutFileProviderDirectory = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
            'EXT:neuron/Configuration/TypoScript/Setup/Backendlayouts'
        );
        $beFiles                            = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir($backendLayoutFileProviderDirectory,
            'ts');
        foreach ($beFiles as $beLayoutFileName) {
            $beLayoutPath = $backendLayoutFileProviderDirectory . DIRECTORY_SEPARATOR . $beLayoutFileName;
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(file_get_contents($beLayoutPath));
        }

        /// auto PageTs include
        $pageTsFileProviderDirectory = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
            'EXT:neuron/Configuration/TypoScript/PageTs'
        );
        $pageTsFiles                            = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir($pageTsFileProviderDirectory,
            'ts');
        foreach ($pageTsFiles as $pageTsFile) {
            $pageTsLayoutPath = $pageTsFileProviderDirectory . DIRECTORY_SEPARATOR . $pageTsFile;
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(file_get_contents($pageTsLayoutPath));
        }

    }
);
