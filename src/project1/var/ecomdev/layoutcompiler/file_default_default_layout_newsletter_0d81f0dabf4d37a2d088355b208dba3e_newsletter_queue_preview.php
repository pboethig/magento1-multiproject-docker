<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/newsletter_queue_preview', 'name' => 'preview_template'), 'preview_template', null, array()), false);
$this->addItemRelation($item, 'preview_template');
$this->addItemRelation($item, NULL);