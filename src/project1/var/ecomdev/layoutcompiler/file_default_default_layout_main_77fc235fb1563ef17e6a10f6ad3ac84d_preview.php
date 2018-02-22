<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'root', 'output' => 'toHtml', 'template' => 'newsletter/template/preview.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/newsletter_template_preview', 'name' => 'content', 'as' => 'content'), 'content', 'root', array()), false);
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'root');