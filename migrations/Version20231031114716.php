<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231031114716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DF48C028B4');
        $this->addSql('DROP TABLE sides');
        $this->addSql('DROP INDEX IDX_1C9382DF48C028B4 ON id_details_manufacturer');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP id_side_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sides (id INT AUTO_INCREMENT NOT NULL, side VARCHAR(17) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD id_side_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DF48C028B4 FOREIGN KEY (id_side_id) REFERENCES sides (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_1C9382DF48C028B4 ON id_details_manufacturer (id_side_id)');
    }
}
