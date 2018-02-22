<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'importexport/adminhtml_export_filter', 'name' => 'export.filter'), 'export.filter', 'root', array()), false);
$this->addItemRelation($item, 'export.filter');
$this->addItemRelation($item, 'root');