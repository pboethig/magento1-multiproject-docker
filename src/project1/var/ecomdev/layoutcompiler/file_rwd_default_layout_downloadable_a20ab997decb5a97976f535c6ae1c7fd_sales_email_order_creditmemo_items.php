<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'items', function ($block) { return $block->addItemRender('downloadable', 'downloadable/sales_order_email_items_downloadable', 'downloadable/email/order/items/creditmemo/downloadable.phtml'); }, array()), false);
$this->addItemRelation($item, 'items');