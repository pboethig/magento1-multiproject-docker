<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'creditmemo_items', function ($block) { return $block->addItemRender('downloadable', 'downloadable/sales_order_item_renderer_downloadable', 'downloadable/sales/order/creditmemo/items/renderer/downloadable.phtml'); }, array()), false);
$this->addItemRelation($item, 'creditmemo_items');