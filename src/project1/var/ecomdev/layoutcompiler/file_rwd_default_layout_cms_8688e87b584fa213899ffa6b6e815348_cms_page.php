<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left.permanent.callout'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('cms_menu'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'page_content_heading', 'template' => 'cms/content_heading.phtml'), 'page_content_heading', 'content', array()), false);
$this->addItemRelation($item, 'page_content_heading');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_wrapper', 'name' => 'cms.wrapper', 'translate' => 'label'), 'cms.wrapper', 'content', array()), false);
$this->addItemRelation($item, 'cms.wrapper');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setElementClass'), 'cms.wrapper', function ($block) { return $block->setElementClass('std'); }, array(0 => 'content')), false);
$this->addItemRelation($item, 'cms.wrapper');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'cms/page', 'name' => 'cms_page'), 'cms_page', 'cms.wrapper', array(0 => 'content')), false);
$this->addItemRelation($item, 'cms_page');
$this->addItemRelation($item, 'cms.wrapper');
$this->addItemRelation($item, 'content');