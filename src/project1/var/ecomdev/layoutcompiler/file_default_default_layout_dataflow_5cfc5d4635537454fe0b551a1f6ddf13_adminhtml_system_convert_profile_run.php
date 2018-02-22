<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/page', 'name' => 'convert_root', 'output' => 'toHtml', 'template' => 'page.phtml'), 'convert_root', null, array()), false);
$this->addItemRelation($item, 'convert_root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/page_head', 'name' => 'convert_root_head', 'as' => 'head', 'template' => 'page/head.phtml'), 'convert_root_head', 'convert_root', array()), false);
$this->addItemRelation($item, 'convert_root_head');
$this->addItemRelation($item, 'convert_root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'convert_root_head', function ($block) { return $block->addJs('prototype/prototype.js'); }, array(0 => 'convert_root')), false);
$this->addItemRelation($item, 'convert_root_head');
$this->addItemRelation($item, 'convert_root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'convert_root_head', function ($block) { return $block->addJs('prototype/validation.js'); }, array(0 => 'convert_root')), false);
$this->addItemRelation($item, 'convert_root_head');
$this->addItemRelation($item, 'convert_root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'convert_root_head', function ($block) { return $block->addJs('varien/js.js'); }, array(0 => 'convert_root')), false);
$this->addItemRelation($item, 'convert_root_head');
$this->addItemRelation($item, 'convert_root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'convert_root_head', function ($block) { return $block->addJs('mage/translate.js'); }, array(0 => 'convert_root')), false);
$this->addItemRelation($item, 'convert_root_head');
$this->addItemRelation($item, 'convert_root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'convert_root_head', function ($block) { return $block->addJs('mage/adminhtml/tools.js'); }, array(0 => 'convert_root')), false);
$this->addItemRelation($item, 'convert_root_head');
$this->addItemRelation($item, 'convert_root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/system_convert_profile_run', 'name' => 'system_convert_profile_run', 'template' => 'system/convert/profile/process.phtml', 'output' => 'toHtml'), 'system_convert_profile_run', 'convert_root', array()), false);
$this->addItemRelation($item, 'system_convert_profile_run');
$this->addItemRelation($item, 'convert_root');