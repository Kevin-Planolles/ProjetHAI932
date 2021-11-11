<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211111130313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
/*        $this->addSql('CREATE TABLE tournoi (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, INDEX IDX_18AFD9DF71F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DF71F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id)');*/
        $this->addSql('ALTER TABLE evenement CHANGE date_deb date_deb DATETIME DEFAULT NULL, CHANGE date_fin date_fin DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tournoi');
        $this->addSql('ALTER TABLE evenement CHANGE date_deb date_deb DATETIME NOT NULL, CHANGE date_fin date_fin DATETIME NOT NULL');
    }
}
