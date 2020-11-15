<?php

/*
 * Palettes for all content elements
 */
foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => &$value) { // reference
    $value = str_replace('cssID', 'cssID,margin_top,margin_left,margin_right,margin_bottom,padding_top,padding_left,padding_right,padding_bottom', $value);
}

/*
 * add fields
 */

// Margin
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_top'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_top'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mt-10px', 'mt-20px', 'mt-30px', 'mt-40px', 'mt-50px', 'mt-60px', 'mt-80px', 'mt-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_top_label'],
    'eval' => ['tl_class' => 'clr w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_left'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_left'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'ml-10px', 'ml-20px', 'ml-30px', 'ml-40px', 'ml-50px', 'ml-60px', 'ml-80px', 'ml-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_left_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_right'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_right'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mr-10px', 'mr-20px', 'mr-30px', 'mr-40px', 'mr-50px', 'mr-60px', 'mr-80px', 'mr-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_right_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['margin_bottom'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['margin_bottom'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'mb-10px', 'mb-20px', 'mb-30px', 'mb-40px', 'mb-50px', 'mb-60px', 'mb-80px', 'mb-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['margin_bottom_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];


// Padding
$GLOBALS['TL_DCA']['tl_content']['fields']['padding_top'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['padding_top'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pt-10px', 'pt-20px', 'pt-30px', 'pt-40px', 'pt-50px', 'pt-60px', 'pt-80px', 'pt-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['padding_top_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['padding_left'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['padding_left'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pl-10px', 'pl-20px', 'pl-30px', 'pl-40px', 'pl-50px', 'pl-60px', 'pl-80px', 'pl-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['padding_left_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['padding_right'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['padding_right'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pr-10px', 'pr-20px', 'pr-30px', 'pr-40px', 'pr-50px', 'pr-60px', 'pr-80px', 'pr-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['padding_right_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_content']['fields']['padding_bottom'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['padding_bottom'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['', 'pb-10px', 'pb-20px', 'pb-30px', 'pb-40px', 'pb-50px', 'pb-60px', 'pb-80px', 'pb-100px'],
    'reference' => $GLOBALS['TL_LANG']['tl_content']['padding_bottom_label'],
    'eval' => ['tl_class' => 'w25', 'includeBlankOption' => true, 'chosen' => true],
    'sql' => "varchar(32) NOT NULL default ''",
];
