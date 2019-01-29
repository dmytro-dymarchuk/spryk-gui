<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdk\Zed\SprykGui\Business\Finder\Organization;

use Generated\Shared\Transfer\OrganizationCollectionTransfer;

interface OrganizationFinderInterface
{
    /**
     * @return \Generated\Shared\Transfer\OrganizationCollectionTransfer
     */
    public function findOrganizations(): OrganizationCollectionTransfer;

    /**
     * @param string $mode
     *
     * @return \Generated\Shared\Transfer\OrganizationCollectionTransfer
     */
    public function findOrganizationsByMode(string $mode): OrganizationCollectionTransfer;
}
