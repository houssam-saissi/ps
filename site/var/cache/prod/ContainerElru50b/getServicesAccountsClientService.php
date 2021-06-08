<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsAccounts\Api\Client\ServicesAccountsClient' shared service.

return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesAccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\ServicesAccountsClient(['api_url' => 'https://accounts-api.psessentials.net'], ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] : $this->load('getShopProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Service\\ShopTokenService']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Service\\ShopTokenService'] : $this->load('getShopTokenServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] : $this->load('getLinkService.php')) && false ?: '_'});
