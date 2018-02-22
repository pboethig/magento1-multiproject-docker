<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'index/adminhtml_process', 'name' => 'process'), 'process', 'content', array()), false);
$this->addItemRelation($item, 'process');
$this->addItemRelation($item, 'content');