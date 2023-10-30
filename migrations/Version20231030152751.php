<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231030152751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE axles (id INT AUTO_INCREMENT NOT NULL, axle VARCHAR(13) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD id_axle_id INT DEFAULT NULL, ADD name_detail LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DF407B3FAC FOREIGN KEY (id_axle_id) REFERENCES axles (id)');
        $this->addSql('CREATE INDEX IDX_1C9382DF407B3FAC ON id_details_manufacturer (id_axle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DF407B3FAC');
        $this->addSql('DROP TABLE axles');
        $this->addSql('DROP INDEX IDX_1C9382DF407B3FAC ON id_details_manufacturer');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP id_axle_id, DROP name_detail');
    }
}
