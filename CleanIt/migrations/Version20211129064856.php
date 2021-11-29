<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211129064856 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE interlocuteur (id INT AUTO_INCREMENT NOT NULL, magasin_id INT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, tel VARCHAR(50) NOT NULL, mail VARCHAR(50) NOT NULL, INDEX IDX_E3FB142420096AE3 (magasin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsable (id INT AUTO_INCREMENT NOT NULL, enseigne_id INT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, tel VARCHAR(50) NOT NULL, mail VARCHAR(50) NOT NULL, INDEX IDX_52520D076C2A0A71 (enseigne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE interlocuteur ADD CONSTRAINT FK_E3FB142420096AE3 FOREIGN KEY (magasin_id) REFERENCES magasin (id)');
        $this->addSql('ALTER TABLE responsable ADD CONSTRAINT FK_52520D076C2A0A71 FOREIGN KEY (enseigne_id) REFERENCES enseigne (id)');
        $this->addSql('ALTER TABLE magasin ADD libelle VARCHAR(120) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE interlocuteur');
        $this->addSql('DROP TABLE responsable');
        $this->addSql('ALTER TABLE magasin DROP libelle');
    }
}
