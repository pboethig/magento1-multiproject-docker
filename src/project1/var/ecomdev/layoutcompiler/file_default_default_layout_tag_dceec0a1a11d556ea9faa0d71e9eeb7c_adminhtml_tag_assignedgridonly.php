<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('root'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/tag_assigned_grid', 'name' => 'assigned_grid', 'output' => 'toHtml'), 'assigned_grid', null, array()), false);
$this->addItemRelation($item, 'assigned_grid');
$this->addItemRelation($item, NULL);