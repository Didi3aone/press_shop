<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.import.sample.file_provider' shared service.

return $this->services['prestashop.core.import.sample.file_provider'] = new \PrestaShop\PrestaShop\Core\Import\Sample\SampleFileProvider(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'});
