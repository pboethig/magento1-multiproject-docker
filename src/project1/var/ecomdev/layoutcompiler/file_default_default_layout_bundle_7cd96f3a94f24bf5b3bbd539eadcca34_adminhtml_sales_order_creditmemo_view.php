<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'creditmemo_items', function ($block) { return $block->addItemRender('bundle', 'bundle/adminhtml_sales_order_items_renderer', 'bundle/sales/creditmemo/view/items/renderer.phtml'); }, array()), false);
$this->addItemRelation($item, 'creditmemo_items');