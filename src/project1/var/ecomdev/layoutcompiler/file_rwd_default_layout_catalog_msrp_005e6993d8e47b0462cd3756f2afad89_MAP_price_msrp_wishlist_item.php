<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'catalog_product_price_template', function ($block) { return $block->addPriceBlockType('msrp', 'catalog/product_price', 'wishlist/render/item/price_msrp_item.phtml'); }, array()), false);
$this->addItemRelation($item, 'catalog_product_price_template');