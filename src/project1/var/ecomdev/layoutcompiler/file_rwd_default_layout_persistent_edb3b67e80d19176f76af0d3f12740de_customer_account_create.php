<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'customer_form_register', function ($block) { return $block->setTemplate('persistent/customer/form/register.phtml'); }, array()), false);
$this->addItemRelation($item, 'customer_form_register');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'persistent/form_remember', 'name' => 'persistent.remember.me', 'template' => 'persistent/remember_me.phtml'), 'persistent.remember.me', 'customer_form_register', array()), false);
$this->addItemRelation($item, 'persistent.remember.me');
$this->addItemRelation($item, 'customer_form_register');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'persistent.remember.me.tooltip', 'template' => 'persistent/remember_me_tooltip.phtml'), 'persistent.remember.me.tooltip', 'customer_form_register', array()), false);
$this->addItemRelation($item, 'persistent.remember.me.tooltip');
$this->addItemRelation($item, 'customer_form_register');