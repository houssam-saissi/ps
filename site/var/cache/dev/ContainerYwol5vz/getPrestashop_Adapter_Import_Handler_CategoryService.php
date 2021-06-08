<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.import.handler.category' shared service.

return $this->services['prestashop.adapter.import.handler.category'] = new \PrestaShop\PrestaShop\Adapter\Import\Handler\CategoryImportHandler(${($_ = isset($this->services['prestashop.adapter.import.data_formatter']) ? $this->services['prestashop.adapter.import.data_formatter'] : $this->load('getPrestashop_Adapter_Import_DataFormatterService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}->getAllShopIds(), ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}->getContextListShopID(), ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->id, ${($_ = isset($this->services['prestashop.adapter.feature.multistore']) ? $this->services['prestashop.adapter.feature.multistore'] : $this->load('getPrestashop_Adapter_Feature_MultistoreService.php')) && false ?: '_'}->isUsed(), ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->id, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.logger']) ? $this->services['prestashop.adapter.legacy.logger'] : ($this->services['prestashop.adapter.legacy.logger'] = new \PrestaShop\PrestaShop\Adapter\LegacyLogger())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.employee']) ? $this->services['prestashop.adapter.data_provider.employee'] : $this->load('getPrestashop_Adapter_DataProvider_EmployeeService.php')) && false ?: '_'}->getId(), ${($_ = isset($this->services['prestashop.adapter.database']) ? $this->services['prestashop.adapter.database'] : ($this->services['prestashop.adapter.database'] = new \PrestaShop\PrestaShop\Adapter\Database())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer']) ? $this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] : ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SmartyCacheClearer())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.validate']) ? $this->services['prestashop.adapter.validate'] : ($this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.import.image_copier']) ? $this->services['prestashop.adapter.import.image_copier'] : $this->load('getPrestashop_Adapter_Import_ImageCopierService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'bm_');
