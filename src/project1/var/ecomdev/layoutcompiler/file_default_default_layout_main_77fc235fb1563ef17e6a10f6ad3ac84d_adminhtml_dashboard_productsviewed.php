<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/dashboard_tab_products_viewed', 'name' => 'adminhtml.dashboard.tab.products.viewed'), 'adminhtml.dashboard.tab.products.viewed', 'root', array()), false);
$this->addItemRelation($item, 'adminhtml.dashboard.tab.products.viewed');
$this->addItemRelation($item, 'root');