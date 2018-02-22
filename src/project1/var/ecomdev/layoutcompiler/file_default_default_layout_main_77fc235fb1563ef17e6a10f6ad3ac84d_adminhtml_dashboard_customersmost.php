<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'root', 'output' => 'toHtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/dashboard_tab_customers_most', 'name' => 'adminhtml.dashboard.tab.customers.most'), 'adminhtml.dashboard.tab.customers.most', 'root', array()), false);
$this->addItemRelation($item, 'adminhtml.dashboard.tab.customers.most');
$this->addItemRelation($item, 'root');