<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace OutputDataConfigToolkitBundle\Event;

use Pimcore\Model\DataObject;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class GroupClassificationStoreEvent.
 */
class GroupClassificationStoreEvent extends Event
{
    public function __construct(
        protected ?DataObject\AbstractObject $targetObject,
        protected DataObject\AbstractObject $destinationObject,
        protected DataObject\ClassDefinition\Data\Classificationstore $classificationstoreDefinition,
        protected array $activeGroups = [],
        protected int $storeId = 0,
    ) {
    }

    public function setTargetObject(?DataObject\AbstractObject $targetObject): void
    {
        $this->targetObject = $targetObject;
    }

    public function getTargetObject(): ?DataObject\AbstractObject
    {
        return $this->targetObject;
    }

    public function setDestinationObject(DataObject\AbstractObject $destinationObject): void
    {
        $this->destinationObject = $destinationObject;
    }

    public function getDestinationObject(): DataObject\AbstractObject
    {
        return $this->destinationObject;
    }

    public function setClassificationstoreDefinition(
        DataObject\ClassDefinition\Data\Classificationstore $classificationstoreDefinition
    ): void {
        $this->classificationstoreDefinition = $classificationstoreDefinition;
    }

    public function getClassificationstoreDefinition(): DataObject\ClassDefinition\Data\Classificationstore
    {
        return $this->classificationstoreDefinition;
    }

    public function getActiveGroups(): array
    {
        return $this->activeGroups;
    }

    public function setActiveGroups(array $activeGroups): void
    {
        $this->activeGroups = $activeGroups;
    }

    public function setStoreId(int $storeId): void
    {
        $this->storeId = $storeId;
    }

    public function getStoreId(): int
    {
        return $this->storeId;
    }
}
