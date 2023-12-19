<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231219134128 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE refund_date (id INT AUTO_INCREMENT NOT NULL, id_invoice_refund_date_id INT DEFAULT NULL, refund_date DATE DEFAULT NULL, INDEX IDX_48BB38B867335D4 (id_invoice_refund_date_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE refund_date ADD CONSTRAINT FK_48BB38B867335D4 FOREIGN KEY (id_invoice_refund_date_id) REFERENCES invoice (id)');
        $this->addSql('ALTER TABLE sold CHANGE date_sold date_sold DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE refund_date DROP FOREIGN KEY FK_48BB38B867335D4');
        $this->addSql('DROP TABLE refund_date');
        $this->addSql('ALTER TABLE sold CHANGE date_sold date_sold DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\'');
    }
}
