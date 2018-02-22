<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_creditmemo_create', 'name' => 'sales_creditmemo_create'), 'sales_creditmemo_create', 'content', array()), false);
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_creditmemo_create_form', 'name' => 'form', 'template' => 'sales/order/creditmemo/create/form.phtml'), 'form', 'sales_creditmemo_create', array(0 => 'content')), false);
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_view_info', 'name' => 'order_info', 'template' => 'sales/order/view/info.phtml'), 'order_info', 'form', array(0 => 'content', 1 => 'sales_creditmemo_create')), false);
$this->addItemRelation($item, 'order_info');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_payment', 'name' => 'order_payment'), 'order_payment', 'form', array(0 => 'content', 1 => 'sales_creditmemo_create')), false);
$this->addItemRelation($item, 'order_payment');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_creditmemo_create_items', 'name' => 'order_items', 'template' => 'sales/order/creditmemo/create/items.phtml'), 'order_items', 'form', array(0 => 'content', 1 => 'sales_creditmemo_create')), false);
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'order_items', function ($block) { return $block->addItemRender('default', 'adminhtml/sales_items_renderer_default', 'sales/order/creditmemo/create/items/renderer/default.phtml'); }, array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnRender'), 'order_items', function ($block) { return $block->addColumnRender('qty', 'adminhtml/sales_items_column_qty', 'sales/items/column/qty.phtml'); }, array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnRender'), 'order_items', function ($block) { return $block->addColumnRender('name', 'adminhtml/sales_items_column_name', 'sales/items/column/name.phtml'); }, array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnRender'), 'order_items', function ($block) { return $block->addColumnRender('name', 'adminhtml/sales_items_column_name_grouped', 'sales/items/column/name.phtml', 'grouped'); }, array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'order_item_extra_info'), 'order_item_extra_info', 'order_items', array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'order_item_extra_info');
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_totalbar', 'name' => 'order_totalbar', 'template' => 'sales/order/totalbar.phtml'), 'order_totalbar', 'order_items', array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'order_totalbar');
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_creditmemo_totals', 'name' => 'creditmemo_totals', 'template' => 'sales/order/totals.phtml'), 'creditmemo_totals', 'order_items', array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_creditmemo_create_adjustments', 'name' => 'adjustments', 'template' => 'sales/order/creditmemo/create/totals/adjustments.phtml'), 'adjustments', 'creditmemo_totals', array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form', 3 => 'order_items')), false);
$this->addItemRelation($item, 'adjustments');
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'order_items');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_totals_tax', 'name' => 'tax', 'template' => 'sales/order/totals/tax.phtml'), 'tax', 'creditmemo_totals', array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form', 3 => 'order_items')), false);
$this->addItemRelation($item, 'tax');
$this->addItemRelation($item, 'creditmemo_totals');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'order_items');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'submit_before'), 'submit_before', 'order_items', array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'submit_before');
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'submit_after'), 'submit_after', 'order_items', array(0 => 'content', 1 => 'sales_creditmemo_create', 2 => 'form')), false);
$this->addItemRelation($item, 'submit_after');
$this->addItemRelation($item, 'order_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_creditmemo_create');
$this->addItemRelation($item, 'form');