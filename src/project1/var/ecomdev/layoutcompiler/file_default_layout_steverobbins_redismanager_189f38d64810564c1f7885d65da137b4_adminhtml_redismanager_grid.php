<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'redismanager/adminhtml_manager', 'name' => 'root', 'output' => 'toHtml', 'template' => 'steverobbins/redismanager/grid.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);