<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230718151207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE invoice (id INT AUTO_INCREMENT NOT NULL, id_counterparty_id INT NOT NULL, id_manufacturer_id INT DEFAULT NULL, id_invoice INT NOT NULL, data_invoice INT NOT NULL, id_id_details INT NOT NULL, name_detail VARCHAR(33) NOT NULL, quantity INT NOT NULL, price INT NOT NULL, unit_price INT NOT NULL, INDEX IDX_9065174432416E8D (id_counterparty_id), INDEX IDX_90651744E37D77A5 (id_manufacturer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_9065174432416E8D FOREIGN KEY (id_counterparty_id) REFERENCES counterparty (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744E37D77A5 FOREIGN KEY (id_manufacturer_id) REFERENCES id_details_manufacturer (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_9065174432416E8D');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744E37D77A5');
        $this->addSql('DROP TABLE invoice');
    }
}
