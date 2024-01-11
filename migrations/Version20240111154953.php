<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240111154953 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ku_dir DROP FOREIGN KEY FK_34478D731655E70D');
        $this->addSql('DROP INDEX IDX_34478D731655E70D ON ku_dir');
        $this->addSql('ALTER TABLE ku_dir DROP id_sold_id');
        $this->addSql('ALTER TABLE sold ADD id_ku_dir_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sold ADD CONSTRAINT FK_98D2DD99D6569D1F FOREIGN KEY (id_ku_dir_id) REFERENCES ku_dir (id)');
        $this->addSql('CREATE INDEX IDX_98D2DD99D6569D1F ON sold (id_ku_dir_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ku_dir ADD id_sold_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ku_dir ADD CONSTRAINT FK_34478D731655E70D FOREIGN KEY (id_sold_id) REFERENCES sold (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_34478D731655E70D ON ku_dir (id_sold_id)');
        $this->addSql('ALTER TABLE sold DROP FOREIGN KEY FK_98D2DD99D6569D1F');
        $this->addSql('DROP INDEX IDX_98D2DD99D6569D1F ON sold');
        $this->addSql('ALTER TABLE sold DROP id_ku_dir_id');
    }
}
