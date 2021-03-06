<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_invoice_view', 'name' => 'sales_invoice_view'), 'sales_invoice_view', 'content', array()), false);
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_invoice_view_form', 'name' => 'form', 'template' => 'sales/order/invoice/view/form.phtml'), 'form', 'sales_invoice_view', array(0 => 'content')), false);
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_view_info', 'name' => 'order_info', 'template' => 'sales/order/view/info.phtml'), 'order_info', 'form', array(0 => 'content', 1 => 'sales_invoice_view')), false);
$this->addItemRelation($item, 'order_info');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_payment', 'name' => 'order_payment'), 'order_payment', 'form', array(0 => 'content', 1 => 'sales_invoice_view')), false);
$this->addItemRelation($item, 'order_payment');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_invoice_view_items', 'name' => 'invoice_items', 'template' => 'sales/order/invoice/view/items.phtml'), 'invoice_items', 'form', array(0 => 'content', 1 => 'sales_invoice_view')), false);
$this->addItemRelation($item, 'invoice_items');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItemRender'), 'invoice_items', function ($block) { return $block->addItemRender('default', 'adminhtml/sales_items_renderer_default', 'sales/order/invoice/view/items/renderer/default.phtml'); }, array(0 => 'content', 1 => 'sales_invoice_view', 2 => 'form')), false);
$this->addItemRelation($item, 'invoice_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnRender'), 'invoice_items', function ($block) { return $block->addColumnRender('qty', 'adminhtml/sales_items_column_qty', 'sales/items/column/qty.phtml'); }, array(0 => 'content', 1 => 'sales_invoice_view', 2 => 'form')), false);
$this->addItemRelation($item, 'invoice_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnRender'), 'invoice_items', function ($block) { return $block->addColumnRender('name', 'adminhtml/sales_items_column_name', 'sales/items/column/name.phtml'); }, array(0 => 'content', 1 => 'sales_invoice_view', 2 => 'form')), false);
$this->addItemRelation($item, 'invoice_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addColumnRender'), 'invoice_items', function ($block) { return $block->addColumnRender('name', 'adminhtml/sales_items_column_name_grouped', 'sales/items/column/name.phtml', 'grouped'); }, array(0 => 'content', 1 => 'sales_invoice_view', 2 => 'form')), false);
$this->addItemRelation($item, 'invoice_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'order_item_extra_info'), 'order_item_extra_info', 'invoice_items', array(0 => 'content', 1 => 'sales_invoice_view', 2 => 'form')), false);
$this->addItemRelation($item, 'order_item_extra_info');
$this->addItemRelation($item, 'invoice_items');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_comments_view', 'name' => 'order_comments', 'template' => 'sales/order/comments/view.phtml'), 'order_comments', 'form', array(0 => 'content', 1 => 'sales_invoice_view')), false);
$this->addItemRelation($item, 'order_comments');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setParentType'), 'order_comments', function ($block) { return $block->setParentType('invoice'); }, array(0 => 'content', 1 => 'sales_invoice_view', 2 => 'form')), false);
$this->addItemRelation($item, 'order_comments');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'form');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_invoice_totals', 'name' => 'invoice_totals', 'template' => 'sales/order/totals.phtml'), 'invoice_totals', 'form', array(0 => 'content', 1 => 'sales_invoice_view')), false);
$this->addItemRelation($item, 'invoice_totals');
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_totals_tax', 'name' => 'tax', 'template' => 'sales/order/totals/tax.phtml'), 'tax', 'invoice_totals', array(0 => 'content', 1 => 'sales_invoice_view', 2 => 'form')), false);
$this->addItemRelation($item, 'tax');
$this->addItemRelation($item, 'invoice_totals');
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'sales_invoice_view');
$this->addItemRelation($item, 'form');