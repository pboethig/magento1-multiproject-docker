<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'root', function ($block) { return $block->addItemRender('downloadable', 'downloadable/checkout_cart_item_renderer', 'downloadable/checkout/onepage/review/item.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');