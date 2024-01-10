<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240110151536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ku_dir (id INT AUTO_INCREMENT NOT NULL, id_sold_id INT DEFAULT NULL, receipt_change INT DEFAULT NULL, receipt_number INT DEFAULT NULL, receipt_date DATE DEFAULT NULL, INDEX IDX_34478D731655E70D (id_sold_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ku_dir ADD CONSTRAINT FK_34478D731655E70D FOREIGN KEY (id_sold_id) REFERENCES sold (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ku_dir DROP FOREIGN KEY FK_34478D731655E70D');
        $this->addSql('DROP TABLE ku_dir');
    }
}
