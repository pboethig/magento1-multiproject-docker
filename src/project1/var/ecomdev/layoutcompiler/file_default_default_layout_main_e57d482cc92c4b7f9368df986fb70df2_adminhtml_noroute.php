<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text', 'name' => 'content.noRoute'), 'content.noRoute', 'content', array()), false);
$this->addItemRelation($item, 'content.noRoute');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setText', 'translate' => 'text', 'module' => 'adminhtml'), 'content.noRoute', function ($block) { return $block->setText(Mage::helper('adminhtml')->__('<h1 class="page-heading">404 Error</h1><p>Page not found.</p>')); }, array(0 => 'content')), false);
$this->addItemRelation($item, 'content.noRoute');
$this->addItemRelation($item, 'content');