<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'paypal/payflow_link_iframe', 'name' => 'payflow.link.iframe', 'template' => 'paypal/payflowlink/form.phtml'), 'payflow.link.iframe', null, array()), false);
$this->addItemRelation($item, 'payflow.link.iframe');
$this->addItemRelation($item, NULL);