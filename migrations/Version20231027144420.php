<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231027144420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer DROP name_details');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744994680FF');
        $this->addSql('DROP INDEX IDX_90651744994680FF ON invoice');
        $this->addSql('ALTER TABLE invoice DROP id_name_detail_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice ADD id_name_detail_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744994680FF FOREIGN KEY (id_name_detail_id) REFERENCES id_details_manufacturer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_90651744994680FF ON invoice (id_name_detail_id)');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD name_details VARCHAR(33) DEFAULT NULL');
    }
}
