<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'external.pagecache.cookie', 'template' => 'pagecache/cookie.phtml'), 'external.pagecache.cookie', 'content', array()), false);
$this->addItemRelation($item, 'external.pagecache.cookie');
$this->addItemRelation($item, 'content');