<?php

declare(strict_types=1);

namespace StorePulse\StoreGrowth\ThirdParty\Packages\League\Container\Exception;

use StorePulse\StoreGrowth\ThirdParty\Packages\Psr\Container\ContainerExceptionInterface;
use RuntimeException;

class ContainerException extends RuntimeException implements ContainerExceptionInterface
{
}
