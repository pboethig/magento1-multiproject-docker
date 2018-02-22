<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'googleanalytics/ga', 'name' => 'google_analytics', 'as' => 'google_analytics', 'template' => 'googleanalytics/ga.phtml'), 'google_analytics', 'head', array()), false);
$this->addItemRelation($item, 'google_analytics');
$this->addItemRelation($item, 'head');