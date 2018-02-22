<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'compiler/process', 'name' => 'compiler_process', 'template' => 'compiler/process.phtml'), 'compiler_process', 'content', array()), false);
$this->addItemRelation($item, 'compiler_process');
$this->addItemRelation($item, 'content');