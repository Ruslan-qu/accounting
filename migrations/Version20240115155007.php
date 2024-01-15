<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240115155007 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sold DROP FOREIGN KEY FK_98D2DD99D6569D1F');
        $this->addSql('DROP INDEX IDX_98D2DD99D6569D1F ON sold');
        $this->addSql('ALTER TABLE sold DROP id_ku_dir_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sold ADD id_ku_dir_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sold ADD CONSTRAINT FK_98D2DD99D6569D1F FOREIGN KEY (id_ku_dir_id) REFERENCES ku_dir (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_98D2DD99D6569D1F ON sold (id_ku_dir_id)');
    }
}
