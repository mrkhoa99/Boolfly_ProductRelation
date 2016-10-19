<?php

namespace Boolfly\ProductRelation\Ui\DataProvider\Product\Related;

use Magento\Catalog\Ui\DataProvider\Product\Related\AbstractDataProvider;

/**
 * Class CustomTypeDataProvider
 */
class CustomTypeDataProvider extends AbstractDataProvider
{
    /**
     * {@inheritdoc
     */
    protected function getLinkType()
    {
        return 'customtype';
    }
}
