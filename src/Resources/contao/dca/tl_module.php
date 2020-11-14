<?php

/*
 * Palettes for all content elements
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['subscribe'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['subscribe']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterlist'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterlist']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterreader'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterreader']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['unsubscribe'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['unsubscribe']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['calendar'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['calendar']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqlist'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['faqlist']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqpage'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['faqpage']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['search'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['search']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['sitemap'] = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $GLOBALS['TL_DCA']['tl_module']['palettes']['sitemap']);

/*
 * add fields
 */

// Margin
$GLOBALS['TL_DCA']['tl_module']['fields']['margin_top'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_module']['margin_top'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgt-20px', 'mgt-40px', 'mgt-60px', 'mgt-80px', 'mgt-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_module']['margin_top_label'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['margin_left'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_module']['margin_left'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgl-20px', 'mgl-40px', 'mgl-60px', 'mgl-80px', 'mgl-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_module']['margin_left_label'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['margin_right'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_module']['margin_right'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgr-20px', 'mgr-40px', 'mgr-60px', 'mgr-80px', 'mgr-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_module']['margin_right_label'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['margin_bottom'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_module']['margin_bottom'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgb-20px', 'mgb-40px', 'mgb-60px', 'mgb-80px', 'mgb-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_module']['margin_bottom_label'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];

// Padding
$GLOBALS['TL_DCA']['tl_module']['fields']['padding_top'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_module']['padding_top'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pt-20px', 'pt-40px', 'pt-60px', 'pt-80px', 'pt-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_module']['padding_top_label'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['padding_left'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_module']['padding_left'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pl-20px', 'pl-40px', 'pl-60px', 'pl-80px', 'pl-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_module']['padding_left_label'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['padding_right'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_module']['padding_right'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pr-20px', 'pr-40px', 'pr-60px', 'pr-80px', 'pr-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_module']['padding_right_label'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['padding_bottom'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_module']['padding_bottom'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pb-20px', 'pb-40px', 'pb-60px', 'pb-80px', 'pb-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_module']['padding_bottom_label'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
