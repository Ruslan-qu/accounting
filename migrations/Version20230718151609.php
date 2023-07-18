<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718151609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice ADD id_id_details_id INT DEFAULT NULL, DROP id_id_details');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744A0B85690 FOREIGN KEY (id_id_details_id) REFERENCES id_details_manufacturer (id)');
        $this->addSql('CREATE INDEX IDX_90651744A0B85690 ON invoice (id_id_details_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744A0B85690');
        $this->addSql('DROP INDEX IDX_90651744A0B85690 ON invoice');
        $this->addSql('ALTER TABLE invoice ADD id_id_details INT NOT NULL, DROP id_id_details_id');
    }
}
