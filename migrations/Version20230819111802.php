<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230819111802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice ADD id_details_id INT DEFAULT NULL, ADD id_manufacturer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517441E9087F5 FOREIGN KEY (id_details_id) REFERENCES id_details_manufacturer (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744E37D77A5 FOREIGN KEY (id_manufacturer_id) REFERENCES id_details_manufacturer (id)');
        $this->addSql('CREATE INDEX IDX_906517441E9087F5 ON invoice (id_details_id)');
        $this->addSql('CREATE INDEX IDX_90651744E37D77A5 ON invoice (id_manufacturer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517441E9087F5');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744E37D77A5');
        $this->addSql('DROP INDEX IDX_906517441E9087F5 ON invoice');
        $this->addSql('DROP INDEX IDX_90651744E37D77A5 ON invoice');
        $this->addSql('ALTER TABLE invoice DROP id_details_id, DROP id_manufacturer_id');
    }
}
