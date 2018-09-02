<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\Sudoku;

class Section
{
    private $cells;

    public function __construct(array $cells)
    {
        $this->cells = $cells;
    }

    public function getCells(): \Iterator
    {
        foreach ($this->cells as $cell) {
            yield $cell;
        }
    }
}