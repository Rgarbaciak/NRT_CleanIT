<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211203124041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fidelite (id INT AUTO_INCREMENT NOT NULL, carte_id INT NOT NULL, magasin_id INT NOT NULL, avantage DOUBLE PRECISION NOT NULL, montant_achat DOUBLE PRECISION NOT NULL, date_passage DATETIME NOT NULL, INDEX IDX_EF425B23C9C7CEB6 (carte_id), INDEX IDX_EF425B2320096AE3 (magasin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fidelite ADD CONSTRAINT FK_EF425B23C9C7CEB6 FOREIGN KEY (carte_id) REFERENCES carte (id)');
        $this->addSql('ALTER TABLE fidelite ADD CONSTRAINT FK_EF425B2320096AE3 FOREIGN KEY (magasin_id) REFERENCES magasin (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE fidelite');
    }
}
