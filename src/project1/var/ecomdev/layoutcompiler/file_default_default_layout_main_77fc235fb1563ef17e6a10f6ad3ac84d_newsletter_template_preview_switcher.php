<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'root', 'output' => 'toHtml', 'template' => 'newsletter/template/preview/iframeswitcher.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/store_switcher', 'name' => 'store_switcher', 'as' => 'store_switcher'), 'store_switcher', 'root', array()), false);
$this->addItemRelation($item, 'store_switcher');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/newsletter_template_preview_form', 'name' => 'preview_form'), 'preview_form', 'root', array()), false);
$this->addItemRelation($item, 'preview_form');
$this->addItemRelation($item, 'root');