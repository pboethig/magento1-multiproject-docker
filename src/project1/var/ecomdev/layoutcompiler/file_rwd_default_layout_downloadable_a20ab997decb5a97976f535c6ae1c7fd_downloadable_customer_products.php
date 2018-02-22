<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'downloadable/customer_products_list', 'name' => 'downloadable_customer_products_list', 'template' => 'downloadable/customer/products/list.phtml'), 'downloadable_customer_products_list', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'downloadable_customer_products_list');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setHeaderTitle', 'translate' => 'title', 'module' => 'downloadable'), 'root', function ($block) { return $block->setHeaderTitle(Mage::helper('downloadable')->__('My Downloadable Products')); }, array()), false);
$this->addItemRelation($item, 'root');