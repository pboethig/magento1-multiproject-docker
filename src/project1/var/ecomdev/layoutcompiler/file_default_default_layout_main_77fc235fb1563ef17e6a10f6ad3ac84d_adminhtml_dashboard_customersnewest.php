<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/dashboard_tab_customers_newest', 'name' => 'adminhtml.dashboard.tab.customers.newest'), 'adminhtml.dashboard.tab.customers.newest', 'root', array()), false);
$this->addItemRelation($item, 'adminhtml.dashboard.tab.customers.newest');
$this->addItemRelation($item, 'root');