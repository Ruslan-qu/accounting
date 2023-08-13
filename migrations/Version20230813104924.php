<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230813104924 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice ADD id_counterparty_id INT NOT NULL, ADD id_manufacturer_id INT DEFAULT NULL, DROP id_counterparty, DROP id_details, DROP id_manufacturer, CHANGE unit_price id_details_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_9065174432416E8D FOREIGN KEY (id_counterparty_id) REFERENCES counterparty (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517441E9087F5 FOREIGN KEY (id_details_id) REFERENCES id_details_manufacturer (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744E37D77A5 FOREIGN KEY (id_manufacturer_id) REFERENCES id_details_manufacturer (id)');
        $this->addSql('CREATE INDEX IDX_9065174432416E8D ON invoice (id_counterparty_id)');
        $this->addSql('CREATE INDEX IDX_906517441E9087F5 ON invoice (id_details_id)');
        $this->addSql('CREATE INDEX IDX_90651744E37D77A5 ON invoice (id_manufacturer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_9065174432416E8D');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517441E9087F5');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744E37D77A5');
        $this->addSql('DROP INDEX IDX_9065174432416E8D ON invoice');
        $this->addSql('DROP INDEX IDX_906517441E9087F5 ON invoice');
        $this->addSql('DROP INDEX IDX_90651744E37D77A5 ON invoice');
        $this->addSql('ALTER TABLE invoice ADD unit_price INT DEFAULT NULL, ADD id_counterparty VARCHAR(255) DEFAULT NULL, ADD id_details VARCHAR(255) DEFAULT NULL, ADD id_manufacturer VARCHAR(255) DEFAULT NULL, DROP id_counterparty_id, DROP id_details_id, DROP id_manufacturer_id');
    }
}
