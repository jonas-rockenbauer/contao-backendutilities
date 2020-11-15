<?php

declare(strict_types=1);

/*
 * This file is part of contao backend utilities.
 *
 * (c) Jrockenbauer
 *
 * @license LGPL-3.0-or-later
 */

namespace Jrockenbauer\ContaoBackendutilities\EventListener;

use Contao\ContentModel;

class GetContentElementListener
{
    public function onGetContentElementListener(ContentModel $contentModel, string $buffer, $element): string
    {
        if (defined('TL_MODE') && TL_MODE == 'FE') {
            $bufferArr = explode(' ', $buffer);
            $flag = 0;
            $tmp = [];
            foreach ($bufferArr as $line) {
                if (strpos($line, 'class') !== false && $flag == 0) {
                    $tmp[] = $line;

                    // Margin
                    $tmp[] = $contentModel->margin_top ?? '';
                    $tmp[] = $contentModel->margin_left ?? '';
                    $tmp[] = $contentModel->margin_right ?? '';
                    $tmp[] = $contentModel->margin_bottom ?? '';

                    // Padding
                    $tmp[] = $contentModel->padding_top ?? '';
                    $tmp[] = $contentModel->padding_left ?? '';
                    $tmp[] = $contentModel->padding_right ?? '';
                    $tmp[] = $contentModel->padding_bottom ?? '';

                    $flag = 1;
                } else {
                    $tmp[] = $line;
                }
            }
            $buffer = implode(' ', $tmp);
        }

        return $buffer;
    }
}
