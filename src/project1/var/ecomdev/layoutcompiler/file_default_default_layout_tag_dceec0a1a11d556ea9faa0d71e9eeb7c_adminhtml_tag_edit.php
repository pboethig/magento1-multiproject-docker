<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/tag_edit', 'name' => 'tag_edit', 'template' => 'tag/edit/container.phtml'), 'tag_edit', 'content', array()), false);
$this->addItemRelation($item, 'tag_edit');
$this->addItemRelation($item, 'content');