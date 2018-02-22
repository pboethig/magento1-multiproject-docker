<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'firegento/diagnostic_phpinfo', 'name' => 'firegento.diagnostic.phpinfo', 'template' => 'firegento/debug/diagnostic/phpinfo.phtml'), 'firegento.diagnostic.phpinfo', 'content', array()), false);
$this->addItemRelation($item, 'firegento.diagnostic.phpinfo');
$this->addItemRelation($item, 'content');