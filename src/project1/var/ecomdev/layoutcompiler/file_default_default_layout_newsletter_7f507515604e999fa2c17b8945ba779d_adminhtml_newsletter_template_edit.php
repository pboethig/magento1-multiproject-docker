<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('editor'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/newsletter_template_edit', 'name' => 'template_edit', 'template' => 'newsletter/template/edit.phtml'), 'template_edit', 'content', array()), false);
$this->addItemRelation($item, 'template_edit');
$this->addItemRelation($item, 'content');