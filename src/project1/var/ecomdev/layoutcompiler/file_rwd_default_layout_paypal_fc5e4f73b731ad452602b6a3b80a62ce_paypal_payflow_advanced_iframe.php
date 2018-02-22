<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/payflow_advanced_iframe', 'name' => 'payflow.advanced.iframe', 'template' => 'paypal/payflowadvanced/form.phtml'), 'payflow.advanced.iframe', null, array()), false);
$this->addItemRelation($item, 'payflow.advanced.iframe');
$this->addItemRelation($item, NULL);