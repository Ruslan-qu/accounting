<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231205114154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE original_rooms (id INT AUTO_INCREMENT NOT NULL, original_number VARCHAR(33) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD id_original_number_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DFD91013AA FOREIGN KEY (id_original_number_id) REFERENCES original_rooms (id)');
        $this->addSql('CREATE INDEX IDX_1C9382DFD91013AA ON id_details_manufacturer (id_original_number_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DFD91013AA');
        $this->addSql('DROP TABLE original_rooms');
        $this->addSql('DROP INDEX IDX_1C9382DFD91013AA ON id_details_manufacturer');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP id_original_number_id');
    }
}
