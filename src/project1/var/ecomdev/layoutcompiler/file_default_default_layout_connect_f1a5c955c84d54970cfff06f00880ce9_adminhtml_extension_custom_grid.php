<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'connect/adminhtml_extension_custom_edit_tab_grid', 'name' => 'connect_extension_edit_local_package_grid'), 'connect_extension_edit_local_package_grid', 'root', array()), false);
$this->addItemRelation($item, 'connect_extension_edit_local_package_grid');
$this->addItemRelation($item, 'root');