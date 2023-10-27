<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231027154303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE payment_method (id INT AUTO_INCREMENT NOT NULL, cash VARCHAR(17) DEFAULT NULL, non_cash VARCHAR(17) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE invoice ADD id_payment_method_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744AB967E58 FOREIGN KEY (id_payment_method_id) REFERENCES payment_method (id)');
        $this->addSql('CREATE INDEX IDX_90651744AB967E58 ON invoice (id_payment_method_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744AB967E58');
        $this->addSql('DROP TABLE payment_method');
        $this->addSql('DROP INDEX IDX_90651744AB967E58 ON invoice');
        $this->addSql('ALTER TABLE invoice DROP id_payment_method_id');
    }
}
