<?php

declare(strict_types=1);

namespace StorePulse\StoreGrowth\ThirdParty\Packages\League\Container\Argument;

interface DefaultValueInterface extends ArgumentInterface
{
    /**
     * @return mixed
     */
    public function getDefaultValue();
}
