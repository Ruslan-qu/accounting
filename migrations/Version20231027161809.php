<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231027161809 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE availability (id INT AUTO_INCREMENT NOT NULL, in_stock VARCHAR(4) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bodies (id INT AUTO_INCREMENT NOT NULL, body VARCHAR(13) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE car_brands (id INT AUTO_INCREMENT NOT NULL, car_brand VARCHAR(33) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE details_list (id INT AUTO_INCREMENT NOT NULL, part_name VARCHAR(33) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sides (id INT AUTO_INCREMENT NOT NULL, side VARCHAR(17) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD id_part_name_id INT DEFAULT NULL, ADD id_car_brand_id INT DEFAULT NULL, ADD id_side_id INT DEFAULT NULL, ADD id_body_id INT DEFAULT NULL, ADD id_in_stock_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DFD28A1EAF FOREIGN KEY (id_part_name_id) REFERENCES details_list (id)');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DFE802907E FOREIGN KEY (id_car_brand_id) REFERENCES car_brands (id)');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DF48C028B4 FOREIGN KEY (id_side_id) REFERENCES sides (id)');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DF45FFB4F4 FOREIGN KEY (id_body_id) REFERENCES bodies (id)');
        $this->addSql('ALTER TABLE id_details_manufacturer ADD CONSTRAINT FK_1C9382DF5226D0BB FOREIGN KEY (id_in_stock_id) REFERENCES availability (id)');
        $this->addSql('CREATE INDEX IDX_1C9382DFD28A1EAF ON id_details_manufacturer (id_part_name_id)');
        $this->addSql('CREATE INDEX IDX_1C9382DFE802907E ON id_details_manufacturer (id_car_brand_id)');
        $this->addSql('CREATE INDEX IDX_1C9382DF48C028B4 ON id_details_manufacturer (id_side_id)');
        $this->addSql('CREATE INDEX IDX_1C9382DF45FFB4F4 ON id_details_manufacturer (id_body_id)');
        $this->addSql('CREATE INDEX IDX_1C9382DF5226D0BB ON id_details_manufacturer (id_in_stock_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DF5226D0BB');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DF45FFB4F4');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DFE802907E');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DFD28A1EAF');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP FOREIGN KEY FK_1C9382DF48C028B4');
        $this->addSql('DROP TABLE availability');
        $this->addSql('DROP TABLE bodies');
        $this->addSql('DROP TABLE car_brands');
        $this->addSql('DROP TABLE details_list');
        $this->addSql('DROP TABLE sides');
        $this->addSql('DROP INDEX IDX_1C9382DFD28A1EAF ON id_details_manufacturer');
        $this->addSql('DROP INDEX IDX_1C9382DFE802907E ON id_details_manufacturer');
        $this->addSql('DROP INDEX IDX_1C9382DF48C028B4 ON id_details_manufacturer');
        $this->addSql('DROP INDEX IDX_1C9382DF45FFB4F4 ON id_details_manufacturer');
        $this->addSql('DROP INDEX IDX_1C9382DF5226D0BB ON id_details_manufacturer');
        $this->addSql('ALTER TABLE id_details_manufacturer DROP id_part_name_id, DROP id_car_brand_id, DROP id_side_id, DROP id_body_id, DROP id_in_stock_id');
    }
}
