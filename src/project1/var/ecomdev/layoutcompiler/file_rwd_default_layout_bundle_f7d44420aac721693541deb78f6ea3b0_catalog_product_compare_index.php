<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addPriceBlockType'), 'catalog.compare.list', function ($block) { return $block->addPriceBlockType('bundle', 'bundle/catalog_product_price', 'bundle/catalog/product/price.phtml'); }, array()), false);
$this->addItemRelation($item, 'catalog.compare.list');