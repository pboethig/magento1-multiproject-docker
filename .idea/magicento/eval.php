<?php define('PATH_TO_MAGENTO', '../..');require_once PATH_TO_MAGENTO.'/app/Mage.php';Mage::app('');$websiteIds = Mage::getModel('core/website')->getCollection()->getAllIds();$storeIds = Mage::getModel('core/store')->getCollection()->getAllIds();$config = new Mage_Core_Model_Config();$pathTemplateHints = 'dev/debug/template_hints';$pathBlockHints = 'dev/debug/template_hints_blocks';$current = Mage::getStoreConfig($pathTemplateHints);$toggle = 1 - $current;$config->saveConfig($pathTemplateHints, $toggle, 'default', 0);$config->saveConfig($pathBlockHints, $toggle, 'default', 0);foreach($websiteIds as $id){$config->saveConfig($pathTemplateHints, $toggle, 'websites', $id);$config->saveConfig($pathBlockHints, $toggle, 'websites', $id);}foreach($storeIds as $id){$config->saveConfig($pathTemplateHints, $toggle, 'stores', $id);$config->saveConfig($pathBlockHints, $toggle, 'stores', $id);}$cacheTypes = Mage::app()->getCacheInstance()->getTypes();if(isset($cacheTypes['full_page'])){   $fpc = $cacheTypes['full_page'];   if($fpc->getStatus()){       Mage::app()->getCacheInstance()->flush();       Mage::app()->cleanCache();       if(class_exists('Enterprise_PageCache_Model_Cache')){           Enterprise_PageCache_Model_Cache::getCacheInstance()->clean(Enterprise_PageCache_Model_Processor::CACHE_TAG);           Mage::app()->getCacheInstance()->cleanType('full_page');       }   }}echo $toggle;