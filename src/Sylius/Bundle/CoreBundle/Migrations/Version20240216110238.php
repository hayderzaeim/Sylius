<?php

declare(strict_types=1);

namespace Sylius\Bundle\CoreBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Sylius\Bundle\CoreBundle\Doctrine\Migrations\AbstractMigration;

final class Version20240216110238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add archived_at field to promotion table.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_promotion ADD archived_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_promotion DROP archived_at');
    }
}
