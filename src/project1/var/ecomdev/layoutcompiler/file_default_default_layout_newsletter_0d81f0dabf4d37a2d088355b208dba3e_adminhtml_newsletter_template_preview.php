<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('newsletter/preview/iframeswitcher.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/newsletter_template_preview_form', 'name' => 'preview_form'), 'preview_form', 'root', array()), false);
$this->addItemRelation($item, 'preview_form');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/store_switcher', 'name' => 'store_switcher', 'template' => 'newsletter/preview/store.phtml'), 'store_switcher', 'root', array()), false);
$this->addItemRelation($item, 'store_switcher');
$this->addItemRelation($item, 'root');