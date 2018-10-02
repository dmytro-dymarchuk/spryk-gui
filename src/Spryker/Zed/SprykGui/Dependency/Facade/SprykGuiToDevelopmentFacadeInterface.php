<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SprykGui\Dependency\Facade;

interface SprykGuiToDevelopmentFacadeInterface
{
    /**
     * @return array
     */
    public function getModules(): array;
}