<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'sales.order.print.creditmemo', function ($block) { return $block->addItemRender('bundle', 'bundle/sales_order_items_renderer', 'bundle/sales/order/creditmemo/items/renderer.phtml'); }, array()), false);
$this->addItemRelation($item, 'sales.order.print.creditmemo');