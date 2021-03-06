<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Mtf\Data\Argument\Interpreter;

use Magento\Mtf\Data\Argument\InterpreterInterface;

/**
 * Interpreter of numeric data, such as integer, float, or numeric string
 */
class Number implements InterpreterInterface
{
    /**
     * {@inheritdoc}
     * @return string|int|float
     * @throws \InvalidArgumentException
     */
    public function evaluate(array $data)
    {
        if (!isset($data['value']) || !is_numeric($data['value'])) {
            throw new \InvalidArgumentException('Numeric value is expected.');
        }
        $result = $data['value'];
        return $result;
    }
}
