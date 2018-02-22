<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_print_creditmemo', 'name' => 'sales.order.print.creditmemo', 'template' => 'sales/order/print/creditmemo.phtml'), 'sales.order.print.creditmemo', 'content', array()), false);
$this->addItemRelation($item, 'sales.order.print.creditmemo');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'sales.order.print.creditmemo', function ($block) { return $block->addItemRender('default', 'sales/order_item_renderer_default', 'sales/order/creditmemo/items/renderer/default.phtml'); }, array(0 => 'content')), false);
$this->addItemRelation($item, 'sales.order.print.creditmemo');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'sales.order.print.creditmemo', function ($block) { return $block->addItemRender('grouped', 'sales/order_item_renderer_grouped', 'sales/order/creditmemo/items/renderer/default.phtml'); }, array(0 => 'content')), false);
$this->addItemRelation($item, 'sales.order.print.creditmemo');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_creditmemo_totals', 'name' => 'creditmemo_totals', 'template' => 'sales/order/totals.phtml'), 'creditmemo_totals', 'sales.order.print.creditmemo', array(0 => 'content')), false);
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'sales.order.print.creditmemo');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setLabelProperties'), 'creditmemo_totals', function ($block) { return $block->setLabelProperties('colspan="6" class="a-right"'); }, array(0 => 'content', 1 => 'sales.order.print.creditmemo')), false);
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales.order.print.creditmemo');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setValueProperties'), 'creditmemo_totals', function ($block) { return $block->setValueProperties('class="a-right"'); }, array(0 => 'content', 1 => 'sales.order.print.creditmemo')), false);
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales.order.print.creditmemo');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tax/sales_order_tax', 'name' => 'tax', 'template' => 'tax/order/tax.phtml'), 'tax', 'creditmemo_totals', array(0 => 'content', 1 => 'sales.order.print.creditmemo')), false);
$this->addItemRelation($item, 'tax');
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales.order.print.creditmemo');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setIsPlaneMode'), 'tax', function ($block) { return $block->setIsPlaneMode('1'); }, array(0 => 'content', 1 => 'sales.order.print.creditmemo', 2 => 'creditmemo_totals')), false);
$this->addItemRelation($item, 'tax');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales.order.print.creditmemo');
$this->addItemRelation($item, 'creditmemo_totals');