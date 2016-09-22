<?php

namespace Boolfly\ProductRelation\Model\Product\Initialization\Helper;

class ProductLinks
{
    /**
     * @var \Magento\Backend\Helper\Js
     */
    protected $jsHelper;

    public function __construct(
        \Magento\Backend\Helper\Js $jsHelper
    )
    {
        $this->jsHelper = $jsHelper;
    }

    public function aroundInitializeLinks(
        $subject,
        \Closure $proceed,
        $product,
        array $links
    )
    {
        if (isset($links['customtype']) && !$product->getCustomtypeReadonly()) {
            //Need to decode the value from grid.
            $product->setCustomtypeData($this->jsHelper->decodeGridSerializedInput($links['customtype']));
        }
        return $proceed($product, $links);
    }
}