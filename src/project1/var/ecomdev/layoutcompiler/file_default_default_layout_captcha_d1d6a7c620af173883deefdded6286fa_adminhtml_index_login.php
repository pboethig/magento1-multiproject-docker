<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'captcha/captcha', 'name' => 'captcha'), 'captcha', 'form.additional.info', array()), false);
$this->addItemRelation($item, 'captcha');
$this->addItemRelation($item, 'form.additional.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setFormId'), 'captcha', function ($block) { return $block->setFormId('backend_login'); }, array(0 => 'form.additional.info')), false);
$this->addItemRelation($item, 'captcha');
$this->addItemRelation($item, 'form.additional.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setImgWidth'), 'captcha', function ($block) { return $block->setImgWidth('226'); }, array(0 => 'form.additional.info')), false);
$this->addItemRelation($item, 'captcha');
$this->addItemRelation($item, 'form.additional.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setImgHeight'), 'captcha', function ($block) { return $block->setImgHeight('50'); }, array(0 => 'form.additional.info')), false);
$this->addItemRelation($item, 'captcha');
$this->addItemRelation($item, 'form.additional.info');