<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('editor'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/newsletter_queue_edit', 'name' => 'queue_edit', 'template' => 'newsletter/queue/edit.phtml'), 'queue_edit', 'content', array()), false);
$this->addItemRelation($item, 'queue_edit');
$this->addItemRelation($item, 'content');