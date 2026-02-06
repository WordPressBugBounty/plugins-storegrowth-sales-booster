<?php

declare(strict_types=1);

namespace StorePulse\StoreGrowth\ThirdParty\Packages\League\Container\ServiceProvider;

use StorePulse\StoreGrowth\ThirdParty\Packages\League\Container\ContainerAwareInterface;

interface ServiceProviderInterface extends ContainerAwareInterface
{
    public function getIdentifier(): string;
    public function provides(string $id): bool;
    public function register(): void;
    public function setIdentifier(string $id): ServiceProviderInterface;
}
