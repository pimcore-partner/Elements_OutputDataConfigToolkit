<?php

declare(strict_types=1);

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

namespace OutputDataConfigToolkitBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240823111615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Migrate bundle_outputdataconfigtoolkit_outputdefinition table columns';
    }

    public function up(Schema $schema): void
    {
        $query = "ALTER TABLE `bundle_outputdataconfigtoolkit_outputdefinition` CHANGE COLUMN `configuration` `configuration` LONGTEXT
                    CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_bin' NULL DEFAULT NULL;";

        $this->addSql($query);
    }

    public function down(Schema $schema): void
    {
        $query = "ALTER TABLE `bundle_outputdataconfigtoolkit_outputdefinition` CHANGE COLUMN `configuration` `configuration` LONGTEXT
                    CHARACTER SET 'latin1' NULL DEFAULT NULL;";

        $this->addSql($query);
    }
}
