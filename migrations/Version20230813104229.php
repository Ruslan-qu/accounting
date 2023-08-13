<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230813104229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer CHANGE id_details id_details VARCHAR(33) DEFAULT NULL, CHANGE manufacturer manufacturer VARCHAR(33) DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517441E9087F5');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_9065174432416E8D');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744E37D77A5');
        $this->addSql('DROP INDEX IDX_906517441E9087F5 ON invoice');
        $this->addSql('DROP INDEX IDX_9065174432416E8D ON invoice');
        $this->addSql('DROP INDEX IDX_90651744E37D77A5 ON invoice');
        $this->addSql('ALTER TABLE invoice ADD id_counterparty VARCHAR(255) DEFAULT NULL, ADD id_details VARCHAR(255) DEFAULT NULL, ADD id_manufacturer VARCHAR(255) DEFAULT NULL, DROP id_counterparty_id, DROP id_manufacturer_id, DROP id_details_id, CHANGE id_invoice id_invoice INT DEFAULT NULL, CHANGE data_invoice data_invoice DATE DEFAULT NULL, CHANGE name_detail name_detail VARCHAR(33) DEFAULT NULL, CHANGE quantity quantity INT DEFAULT NULL, CHANGE price price INT DEFAULT NULL, CHANGE unit_price unit_price INT DEFAULT NULL, CHANGE quantity_sold quantity_sold INT DEFAULT NULL, CHANGE price_sold price_sold INT DEFAULT NULL, CHANGE sales sales INT DEFAULT NULL, CHANGE refund refund INT DEFAULT NULL, CHANGE today_date today_date DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer CHANGE id_details id_details VARCHAR(33) NOT NULL, CHANGE manufacturer manufacturer VARCHAR(33) NOT NULL');
        $this->addSql('ALTER TABLE invoice ADD id_counterparty_id INT NOT NULL, ADD id_manufacturer_id INT DEFAULT NULL, ADD id_details_id INT DEFAULT NULL, DROP id_counterparty, DROP id_details, DROP id_manufacturer, CHANGE id_invoice id_invoice INT NOT NULL, CHANGE data_invoice data_invoice DATE NOT NULL, CHANGE name_detail name_detail VARCHAR(33) NOT NULL, CHANGE quantity quantity INT NOT NULL, CHANGE price price INT NOT NULL, CHANGE unit_price unit_price INT NOT NULL, CHANGE quantity_sold quantity_sold INT NOT NULL, CHANGE price_sold price_sold INT NOT NULL, CHANGE sales sales INT NOT NULL, CHANGE refund refund INT NOT NULL, CHANGE today_date today_date DATE NOT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517441E9087F5 FOREIGN KEY (id_details_id) REFERENCES id_details_manufacturer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_9065174432416E8D FOREIGN KEY (id_counterparty_id) REFERENCES counterparty (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744E37D77A5 FOREIGN KEY (id_manufacturer_id) REFERENCES id_details_manufacturer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_906517441E9087F5 ON invoice (id_details_id)');
        $this->addSql('CREATE INDEX IDX_9065174432416E8D ON invoice (id_counterparty_id)');
        $this->addSql('CREATE INDEX IDX_90651744E37D77A5 ON invoice (id_manufacturer_id)');
    }
}
