<?php

namespace Boolfly\ProductRelation\Model\Catalog\Product;

class Link extends \Magento\Catalog\Model\Product\Link
{
    const LINK_TYPE_CUSTOMTYPE = 6;

    /**
     * @return \Magento\Catalog\Model\Product\Link $this
     */
    public function useCustomtypeLinks()
    {
        $this->setLinkTypeId(self::LINK_TYPE_CUSTOMTYPE);
        return $this;
    }

    /**
     * Save data for product relations
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return \Magento\Catalog\Model\Product\Link
     */
    public function saveProductRelations($product)
    {
        parent::saveProductRelations($product);

        $data = $product->getCustomtypeData();
        if(!is_null($data)) {
            $this->_getResource()->saveProductLinks($product, $data, self::LINK_TYPE_CUSTOMTYPE);
        }
    }
}