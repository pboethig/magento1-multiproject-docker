<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html', 'name' => 'root', 'output' => 'toHtml', 'template' => 'page/3columns.phtml'), 'root', null, array()), false);
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, NULL);
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_head', 'name' => 'head', 'as' => 'head'), 'head', 'root', array()), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('prototype/prototype.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('lib/jquery/jquery-1.10.2.min.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('lib/jquery/noconflict.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('lib/ccard.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('prototype/validation.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('scriptaculous/builder.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('scriptaculous/effects.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('scriptaculous/dragdrop.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('scriptaculous/controls.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('scriptaculous/slider.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('varien/js.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('varien/form.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('mage/translate.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addJs'), 'head', function ($block) { return $block->addJs('mage/cookies.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/js_cookie', 'name' => 'js_cookies', 'template' => 'page/js/cookie.phtml'), 'js_cookies', 'head', array(0 => 'root')), false);
$this->addItemRelation($item, 'js_cookies');
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'removeItem'), 'head', function ($block) { return $block->removeItem('skin_js', 'js/ie6.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/lib/modernizr.custom.min.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/lib/selectivizr.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/lib/matchMedia.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/lib/matchMedia.addListener.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/lib/enquire.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/app.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/lib/jquery.cycle2.min.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/lib/jquery.cycle2.swipe.min.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/slideshow.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/lib/imagesloaded.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLinkRel'), 'head', function ($block) { return $block->addLinkRel('stylesheet', '//fonts.googleapis.com/css?family=Raleway:300,400,500,700,600'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_js', 'js/minicart.js'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_css', 'css/styles-ie8.css', '', ' (lte IE 8) & (!IEMobile)'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_css', 'css/madisonisland-ie8.css', '', ' (lte IE 8) & (!IEMobile)'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_css', 'css/styles.css', '', '<!--[if (gte IE 9) | (IEMobile)]><!-->'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addItem'), 'head', function ($block) { return $block->addItem('skin_css', 'css/madisonisland.css', '', '<!--[if (gte IE 9) | (IEMobile)]><!-->'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text', 'name' => 'head.viewport'), 'head.viewport', 'head', array(0 => 'root')), false);
$this->addItemRelation($item, 'head.viewport');
$this->addItemRelation($item, 'head');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setText'), 'head.viewport', function ($block) { return $block->setText('<meta name="viewport" content="initial-scale=1.0, width=device-width" />
'); }, array(0 => 'root', 1 => 'head')), false);
$this->addItemRelation($item, 'head.viewport');
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, 'head');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'after_body_start', 'as' => 'after_body_start', 'translate' => 'label'), 'after_body_start', 'root', array()), false);
$this->addItemRelation($item, 'after_body_start');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_notices', 'name' => 'global_notices', 'as' => 'global_notices', 'template' => 'page/html/notices.phtml'), 'global_notices', 'root', array()), false);
$this->addItemRelation($item, 'global_notices');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_header', 'name' => 'header', 'as' => 'header'), 'header', 'root', array()), false);
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/template_links', 'name' => 'top.links', 'as' => 'topLinks'), 'top.links', 'header', array(0 => 'root')), false);
$this->addItemRelation($item, 'top.links');
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/switch', 'name' => 'store_language', 'as' => 'store_language', 'template' => 'page/switch/languages.phtml'), 'store_language', 'header', array(0 => 'root')), false);
$this->addItemRelation($item, 'store_language');
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'top.menu', 'as' => 'topMenu', 'translate' => 'label'), 'top.menu', 'header', array(0 => 'root')), false);
$this->addItemRelation($item, 'top.menu');
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_topmenu', 'name' => 'catalog.topnav', 'template' => 'page/html/topmenu.phtml'), 'catalog.topnav', 'top.menu', array(0 => 'root', 1 => 'header')), false);
$this->addItemRelation($item, 'catalog.topnav');
$this->addItemRelation($item, 'top.menu');
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, 'header');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_topmenu_renderer', 'name' => 'catalog.topnav.renderer', 'template' => 'page/html/topmenu/renderer.phtml'), 'catalog.topnav.renderer', 'catalog.topnav', array(0 => 'root', 1 => 'header', 2 => 'top.menu')), false);
$this->addItemRelation($item, 'catalog.topnav.renderer');
$this->addItemRelation($item, 'catalog.topnav');
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'top.menu');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_wrapper', 'name' => 'top.container', 'as' => 'topContainer', 'translate' => 'label'), 'top.container', 'header', array(0 => 'root')), false);
$this->addItemRelation($item, 'top.container');
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setElementClass'), 'top.container', function ($block) { return $block->setElementClass('top-container'); }, array(0 => 'root', 1 => 'header')), false);
$this->addItemRelation($item, 'top.container');
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, 'header');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_welcome', 'name' => 'welcome', 'as' => 'welcome'), 'welcome', 'header', array(0 => 'root')), false);
$this->addItemRelation($item, 'welcome');
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_breadcrumbs', 'name' => 'breadcrumbs', 'as' => 'breadcrumbs'), 'breadcrumbs', 'root', array()), false);
$this->addItemRelation($item, 'breadcrumbs');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'left_first', 'as' => 'left_first', 'translate' => 'label'), 'left_first', 'root', array()), false);
$this->addItemRelation($item, 'left_first');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'left', 'as' => 'left', 'translate' => 'label'), 'left', 'root', array()), false);
$this->addItemRelation($item, 'left');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/messages', 'name' => 'global_messages', 'as' => 'global_messages'), 'global_messages', 'root', array()), false);
$this->addItemRelation($item, 'global_messages');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/messages', 'name' => 'messages', 'as' => 'messages'), 'messages', 'root', array()), false);
$this->addItemRelation($item, 'messages');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'content', 'as' => 'content', 'translate' => 'label'), 'content', 'root', array()), false);
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'right', 'as' => 'right', 'translate' => 'label'), 'right', 'root', array()), false);
$this->addItemRelation($item, 'right');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_wrapper', 'name' => 'footer.before', 'as' => 'footer_before', 'translate' => 'label'), 'footer.before', 'root', array()), false);
$this->addItemRelation($item, 'footer.before');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setElementClass'), 'footer.before', function ($block) { return $block->setElementClass('footer-before-container'); }, array(0 => 'root')), false);
$this->addItemRelation($item, 'footer.before');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_footer', 'name' => 'footer', 'as' => 'footer', 'template' => 'page/html/footer.phtml'), 'footer', 'root', array()), false);
$this->addItemRelation($item, 'footer');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_wrapper', 'name' => 'bottom.container', 'as' => 'bottomContainer', 'translate' => 'label'), 'bottom.container', 'footer', array(0 => 'root')), false);
$this->addItemRelation($item, 'bottom.container');
$this->addItemRelation($item, 'footer');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setElementClass'), 'bottom.container', function ($block) { return $block->setElementClass('bottom-container'); }, array(0 => 'root', 1 => 'footer')), false);
$this->addItemRelation($item, 'bottom.container');
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, 'footer');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/switch', 'name' => 'store_switcher', 'as' => 'store_switcher', 'after' => '*', 'template' => 'page/switch/stores.phtml'), 'store_switcher', 'footer', array(0 => 'root')), false);
$this->addItemRelation($item, 'store_switcher');
$this->addItemRelation($item, 'footer');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/template_links', 'name' => 'footer_links', 'as' => 'footer_links', 'template' => 'page/template/links.phtml'), 'footer_links', 'footer', array(0 => 'root')), false);
$this->addItemRelation($item, 'footer_links');
$this->addItemRelation($item, 'footer');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTitle'), 'footer_links', function ($block) { return $block->setTitle('Quick Links'); }, array(0 => 'root', 1 => 'footer')), false);
$this->addItemRelation($item, 'footer_links');
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, 'footer');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/template_links', 'name' => 'footer_links2', 'as' => 'footer_links2', 'template' => 'page/template/links.phtml'), 'footer_links2', 'footer', array(0 => 'root')), false);
$this->addItemRelation($item, 'footer_links2');
$this->addItemRelation($item, 'footer');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTitle'), 'footer_links2', function ($block) { return $block->setTitle('Account'); }, array(0 => 'root', 1 => 'footer')), false);
$this->addItemRelation($item, 'footer_links2');
$this->addItemRelation($item, 'root');
$this->addItemRelation($item, 'footer');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'before_body_end', 'as' => 'before_body_end', 'translate' => 'label'), 'before_body_end', 'root', array()), false);
$this->addItemRelation($item, 'before_body_end');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'page/html_cookieNotice', 'name' => 'global_cookie_notice', 'as' => 'global_cookie_notice', 'template' => 'page/html/cookienotice.phtml', 'before' => '-'), 'global_cookie_notice', 'before_body_end', array(0 => 'root')), false);
$this->addItemRelation($item, 'global_cookie_notice');
$this->addItemRelation($item, 'before_body_end');
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/profiler', 'output' => 'toHtml', 'name' => 'core_profiler'), 'core_profiler', null, array()), false);
$this->addItemRelation($item, 'core_profiler');
$this->addItemRelation($item, NULL);