<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240109120915 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add Todo entity';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE todo (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, details CLOB DEFAULT NULL, completed BOOLEAN NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE todo');
    }
}
