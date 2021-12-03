<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211203123004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carte (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, enseinge_id INT NOT NULL, magasin_id INT NOT NULL, numero VARCHAR(255) NOT NULL, qr_code VARCHAR(255) NOT NULL, INDEX IDX_BAD4FFFD19EB6921 (client_id), INDEX IDX_BAD4FFFD463539C8 (enseinge_id), INDEX IDX_BAD4FFFD20096AE3 (magasin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFD19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFD463539C8 FOREIGN KEY (enseinge_id) REFERENCES enseigne (id)');
        $this->addSql('ALTER TABLE carte ADD CONSTRAINT FK_BAD4FFFD20096AE3 FOREIGN KEY (magasin_id) REFERENCES magasin (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE carte');
    }
}
