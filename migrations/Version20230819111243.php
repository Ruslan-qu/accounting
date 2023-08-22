<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230819111243 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DF2989F1FD');
        $this->addSql('DROP INDEX IDX_1C9382DF2989F1FD ON id_details_manufacturer');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP invoice_id, DROP part_number, DROP manufacturer');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer ADD invoice_id INT DEFAULT NULL, ADD part_number VARCHAR(33) NOT NULL, ADD manufacturer VARCHAR(33) NOT NULL');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DF2989F1FD FOREIGN KEY (invoice_id) REFERENCES invoice (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_1C9382DF2989F1FD ON id_details_manufacturer (invoice_id)');
    }
}
