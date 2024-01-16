<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240116121943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice ADD id_ku_dir_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744D6569D1F FOREIGN KEY (id_ku_dir_id) REFERENCES ku_dir (id)');
        $this->addSql('CREATE INDEX IDX_90651744D6569D1F ON invoice (id_ku_dir_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744D6569D1F');
        $this->addSql('DROP INDEX IDX_90651744D6569D1F ON invoice');
        $this->addSql('ALTER TABLE invoice DROP id_ku_dir_id');
    }
}
