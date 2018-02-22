<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/tag_grid_pending', 'name' => 'adminhtml.tag.grid.pending'), 'adminhtml.tag.grid.pending', 'root', array()), false);
$this->addItemRelation($item, 'adminhtml.tag.grid.pending');
$this->addItemRelation($item, 'root');