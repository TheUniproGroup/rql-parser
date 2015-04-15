<?php
namespace Mrix\Rql\Parser\TokenParser\Query\FiqlOperator;

use Mrix\Rql\Parser\Node\Query\ScalarQuery\LteNode;

/**
 */
class LteTokenParser extends AbstractFiqlTokenParser
{
    /**
     * @inheritdoc
     */
    protected function getOperatorName()
    {
        return 'lte';
    }

    /**
     * @inheritdoc
     */
    protected function createNode($field, $value)
    {
        return new LteNode($field, $value);
    }
}
