<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250505133622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE app_user ADD username VARCHAR(255) NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SCHEMA timescaledb_information
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SCHEMA timescaledb_experimental
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SCHEMA _timescaledb_internal
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SCHEMA _timescaledb_functions
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SCHEMA _timescaledb_debug
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SCHEMA _timescaledb_config
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SCHEMA _timescaledb_catalog
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SCHEMA _timescaledb_cache
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE app_user DROP username
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE humidity_id_seq
        SQL);
        $this->addSql(<<<'SQL'
            SELECT setval('humidity_id_seq', (SELECT MAX(id) FROM humidity))
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE humidity ALTER id SET DEFAULT nextval('humidity_id_seq')
        SQL);
        $this->addSql(<<<'SQL'
            CREATE SEQUENCE temperature_id_seq
        SQL);
        $this->addSql(<<<'SQL'
            SELECT setval('temperature_id_seq', (SELECT MAX(id) FROM temperature))
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE temperature ALTER id SET DEFAULT nextval('temperature_id_seq')
        SQL);
    }
}
