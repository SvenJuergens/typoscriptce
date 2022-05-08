<?php

$GLOBALS['TCA']['tt_content']['types']['typoscriptce_pi1'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
     --palette--;;general,
      header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
       bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
         --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
          --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden,
           --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
             --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
    ,
    'columnsOverrides' => [
        'bodytext' => [
            'defaultExtras' =>  'fixed-font : enable-tab',
            'config' => [
                'renderType' => 't3editor',
                'format' => 'typoscript'
            ]
        ]
    ]
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:typoscriptce/Resources/Private/Language/localang_db.xlf:tt_content.CType_pi1',
        'typoscriptce_pi1',
        'content-text',
    ],
    'textmedia',
    'after'
);

