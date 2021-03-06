<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html', 'name' => 'root', 'output' => 'toHtml', 'template' => 'page/print.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_header', 'name' => 'header', 'as' => 'header'), 'header', 'root', array()), false);
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_head', 'name' => 'head', 'as' => 'head'), 'head', 'root', array()), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('prototype/prototype.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('mage/translate.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('lib/ccard.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('prototype/validation.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('varien/js.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addCss'), 'head', function ($block) { return $block->addCss('css/styles.css'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_css', 'css/styles-ie.css', '', 'lt IE 8'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addCss'), 'head', function ($block) { return $block->addCss('css/widgets.css'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addCss'), 'head', function ($block) { return $block->addCss('css/print.css', 'media="print"'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('js', 'lib/ds-sleight.js', '', 'lt IE 7'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'content', 'as' => 'content', 'translate' => 'label'), 'content', 'root', array()), false);
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'root');