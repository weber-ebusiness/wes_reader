<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'WES.' . $_EXTKEY,
    'Pi1',
    array(
        'Reader' => 'index',
    ),
    // non-cacheable actions
    array(
//        'Reader' => 'index',
    )
);
