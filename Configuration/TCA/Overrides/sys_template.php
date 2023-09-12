<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'jesterthenarr_sitepackage';

    /**
     * Default TypoScript for JesterthenarrSitepackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'jesterthenarr-sitepackage'
    );
});
