<?php

/*
 * Palettes for all content elements
 */
foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => &$value) { // reference
    if ($key !== 'module') {
        $value = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,margin_top_m,margin_left_m,margin_right_m,margin_bottom_m,padding_top,padding_left,padding_right,padding_bottom', $value);
    }
}

/*
 * add fields
 */

// Margin
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_top'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_top'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgt-20px', 'mgt-40px', 'mgt-60px', 'mgt-80px', 'mgt-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_top_label'],
    'eval' => ['tl_class' => 'clr w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_left'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_left'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgl-20px', 'mgl-40px', 'mgl-60px', 'mgl-80px', 'mgl-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_left_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_right'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_right'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgr-20px', 'mgr-40px', 'mgr-60px', 'mgr-80px', 'mgr-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_right_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_bottom'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_bottom'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgb-20px', 'mgb-40px', 'mgb-60px', 'mgb-80px', 'mgb-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_bottom_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['margin_top_m'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_top_m'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgt-20px-m', 'mgt-40px-m', 'mgt-60px-m', 'mgt-80px-m', 'mgt-100px-m'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_top_label'],
    'eval' => ['tl_class' => 'clr w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_left_m'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_left_m'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgl-20px-m', 'mgl-40px-m', 'mgl-60px-m', 'mgl-80px-m', 'mgl-100px-m'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_left_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_right_m'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_right_m'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgr-20px-m', 'mgr-40px-m', 'mgr-60px-m', 'mgr-80px-m', 'mgr-100px-m'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_right_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_bottom_m'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_bottom_m'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mgb-20px-m', 'mgb-40px-m', 'mgb-60px-m', 'mgb-80px-m', 'mgb-100px-m'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_bottom_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];

// Padding
$GLOBALS['TL_DCA']['tl_content']['fields']['padding_top'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['padding_top'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pt-20px', 'pt-40px', 'pt-60px', 'pt-80px', 'pt-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['padding_top_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['padding_left'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['padding_left'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pl-20px', 'pl-40px', 'pl-60px', 'pl-80px', 'pl-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['padding_left_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['padding_right'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['padding_right'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pr-20px', 'pr-40px', 'pr-60px', 'pr-80px', 'pr-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['padding_right_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['padding_bottom'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['padding_bottom'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pb-20px', 'pb-40px', 'pb-60px', 'pb-80px', 'pb-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['padding_bottom_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
