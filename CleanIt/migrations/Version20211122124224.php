<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211122124224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE enseigne (id INT AUTO_INCREMENT NOT NULL, type_enseigne_id INT DEFAULT NULL, libelle VARCHAR(50) NOT NULL, logo VARCHAR(255) DEFAULT NULL, ville VARCHAR(50) NOT NULL, copos VARCHAR(5) NOT NULL, pays VARCHAR(50) NOT NULL, rue VARCHAR(50) DEFAULT NULL, INDEX IDX_37D4778E2733DDE0 (type_enseigne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_enseigne (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE enseigne ADD CONSTRAINT FK_37D4778E2733DDE0 FOREIGN KEY (type_enseigne_id) REFERENCES type_enseigne (id)');
        $this->addSql('ALTER TABLE magasin ADD CONSTRAINT FK_54AF5F276C2A0A71 FOREIGN KEY (enseigne_id) REFERENCES enseigne (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE magasin DROP FOREIGN KEY FK_54AF5F276C2A0A71');
        $this->addSql('ALTER TABLE enseigne DROP FOREIGN KEY FK_37D4778E2733DDE0');
        $this->addSql('DROP TABLE enseigne');
        $this->addSql('DROP TABLE type_enseigne');
    }
}
