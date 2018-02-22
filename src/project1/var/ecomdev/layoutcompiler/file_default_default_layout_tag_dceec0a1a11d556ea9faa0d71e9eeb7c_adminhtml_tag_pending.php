<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/tag_pending', 'name' => 'adminhtml.tag.pending'), 'adminhtml.tag.pending', 'content', array()), false);
$this->addItemRelation($item, 'adminhtml.tag.pending');
$this->addItemRelation($item, 'content');