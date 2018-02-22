<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/template_links', 'name' => 'account.links', 'as' => 'accountLinks', 'template' => 'persistent/header/links.phtml'), 'account.links', 'header', array()), false);
$this->addItemRelation($item, 'account.links');
$this->addItemRelation($item, 'header');