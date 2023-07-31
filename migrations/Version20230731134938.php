<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230731134938 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_90651744A0B85690');
        $this->addSql('DROP INDEX IDX_90651744A0B85690 ON invoice');
        $this->addSql('ALTER TABLE invoice ADD quantity_sold INT NOT NULL, ADD price_sold INT NOT NULL, ADD sales INT NOT NULL, ADD refund INT NOT NULL, CHANGE id_id_details_id id_details_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517441E9087F5 FOREIGN KEY (id_details_id) REFERENCES id_details_manufacturer (id)');
        $this->addSql('CREATE INDEX IDX_906517441E9087F5 ON invoice (id_details_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517441E9087F5');
        $this->addSql('DROP INDEX IDX_906517441E9087F5 ON invoice');
        $this->addSql('ALTER TABLE invoice DROP quantity_sold, DROP price_sold, DROP sales, DROP refund, CHANGE id_details_id id_id_details_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_90651744A0B85690 FOREIGN KEY (id_id_details_id) REFERENCES id_details_manufacturer (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_90651744A0B85690 ON invoice (id_id_details_id)');
    }
}
