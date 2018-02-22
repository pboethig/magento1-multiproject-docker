<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/report_refresh_statistics', 'template' => 'report/refresh/statistics.phtml', 'name' => 'sales.report.refreshstatistics'), 'sales.report.refreshstatistics', 'content', array()), false);
$this->addItemRelation($item, 'sales.report.refreshstatistics');
$this->addItemRelation($item, 'content');