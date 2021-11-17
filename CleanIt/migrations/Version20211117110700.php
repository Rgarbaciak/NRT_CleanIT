<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211117110700 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseigne ADD type_enseigne_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE enseigne ADD CONSTRAINT FK_37D4778E2733DDE0 FOREIGN KEY (type_enseigne_id) REFERENCES type_enseigne (id)');
        $this->addSql('CREATE INDEX IDX_37D4778E2733DDE0 ON enseigne (type_enseigne_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseigne DROP FOREIGN KEY FK_37D4778E2733DDE0');
        $this->addSql('DROP INDEX IDX_37D4778E2733DDE0 ON enseigne');
        $this->addSql('ALTER TABLE enseigne DROP type_enseigne_id');
    }
}
