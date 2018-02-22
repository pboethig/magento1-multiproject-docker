<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'sales'), 'customer_account_navigation', function ($block) { return $block->addLink('orders', 'sales/order/history/', Mage::helper('sales')->__('My Orders')); }, array()), false);
$this->addItemRelation($item, 'customer_account_navigation');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/reorder_sidebar', 'name' => 'sale.reorder.sidebar', 'as' => 'reorder', 'template' => 'sales/reorder/sidebar.phtml'), 'sale.reorder.sidebar', 'left', array()), false);
$this->addItemRelation($item, 'sale.reorder.sidebar');
$this->addItemRelation($item, 'left');