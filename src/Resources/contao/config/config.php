<?php

// Register hooks
$GLOBALS['TL_HOOKS']['getContentElement'][] = [Jrockenbauer\ContaoBackendutilities\EventListener\GetContentElementListener::class, 'onGetContentElementListener'];

// Style sheet
if (defined('TL_MODE') && TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/contaobackendutilities/be_utilities.min.css|static';
}
if (defined('TL_MODE') && TL_MODE == 'FE') {
    $GLOBALS['TL_CSS'][] = 'bundles/contaobackendutilities/fe_utilities.min.css|static';
}
