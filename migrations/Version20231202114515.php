<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231202114515 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE refund_activity (id INT AUTO_INCREMENT NOT NULL, activity VARCHAR(33) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE invoice ADD id_refund_activity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744DD61C789 FOREIGN KEY (id_refund_activity_id) REFERENCES refund_activity (id)');
        $this->addSql('CREATE INDEX IDX_90651744DD61C789 ON invoice (id_refund_activity_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744DD61C789');
        $this->addSql('DROP TABLE refund_activity');
        $this->addSql('DROP INDEX IDX_90651744DD61C789 ON invoice');
        $this->addSql('ALTER TABLE invoice DROP id_refund_activity_id');
    }
}
