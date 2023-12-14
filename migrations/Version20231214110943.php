<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214110943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice ADD sold_status INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sold DROP FOREIGN KEY FK_98D2DD992989F1FD');
        $this->addSql('DROP INDEX IDX_98D2DD992989F1FD ON sold');
        $this->addSql('ALTER TABLE sold CHANGE invoice_id id_invoice_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sold ADD CONSTRAINT FK_98D2DD998C03712A FOREIGN KEY (id_invoice_id) REFERENCES invoice (id)');
        $this->addSql('CREATE INDEX IDX_98D2DD998C03712A ON sold (id_invoice_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sold DROP FOREIGN KEY FK_98D2DD998C03712A');
        $this->addSql('DROP INDEX IDX_98D2DD998C03712A ON sold');
        $this->addSql('ALTER TABLE sold CHANGE id_invoice_id invoice_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sold ADD CONSTRAINT FK_98D2DD992989F1FD FOREIGN KEY (invoice_id) REFERENCES invoice (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_98D2DD992989F1FD ON sold (invoice_id)');
        $this->addSql('ALTER TABLE invoice DROP sold_status');
    }
}
