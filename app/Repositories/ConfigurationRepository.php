<?php

namespace App\Repositories;

use App\Interfaces\ConfigurationInterface;
use App\Models\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConfigurationRepository implements ConfigurationInterface
{
    public function __construct()
    {
        $this->isAllConfigurationsExists() ?? self::syncConfigurations();
    }

    public function isAllConfigurationsExists(): bool
    {
        return (self::getAllConfigurations()->count() == count(config('default_configurations')));
    }

    public function syncConfigurations(): void
    {
        Artisan::call('db:seed --class=ConfigurationTableSeeder');
    }

    public function getAllConfigurations()
    {
        return Configuration::query()->get();
    }

    public function updateConfigurations(Request $request): bool
    {
        foreach ($request->settings as $key => $value) {
            Configuration::query()->where('key', $key)->update(['value' => $value]);
        }
        return true;
    }

    public function getConfigurationsValues()
    {
        return Configuration::query()->pluck('value', 'key')->toArray();
    }

    public function getConfigurationData()
    {
        $configuration = Configuration::query()->get();
        $result = [];
        foreach ($configuration as $item) {
            $result[$item->identifier] = $item;
        }
        return $result;
    }

    public function getDeliveryCharge()
    {
        return Configuration::query()->firstOrCreate(['key' => 'delivery_charge'], config('default_configurations.delivery_charge'));
    }

    public function getVatCharge()
    {
        return Configuration::query()->firstOrCreate(['key' => 'vat'], config('default_configurations.vat'));
    }

    public function getByIdentifier($identifier)
    {
        return Configuration::query()->where('key', $identifier)->firstOrFail();
    }
}
