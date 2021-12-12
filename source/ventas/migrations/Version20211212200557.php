<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211212200557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE linea_venta DROP FOREIGN KEY FK_89CD8A7B3256915B');
        $this->addSql('DROP INDEX IDX_89CD8A7B3256915B ON linea_venta');
        $this->addSql('ALTER TABLE linea_venta CHANGE relation_id factura_id INT NOT NULL');
        $this->addSql('ALTER TABLE linea_venta ADD CONSTRAINT FK_89CD8A7BF04F795F FOREIGN KEY (factura_id) REFERENCES factura (id)');
        $this->addSql('CREATE INDEX IDX_89CD8A7BF04F795F ON linea_venta (factura_id)');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY FK_A7BB06153256915B');
        $this->addSql('DROP INDEX IDX_A7BB06153256915B ON producto');
        $this->addSql('ALTER TABLE producto CHANGE relation_id categoria_id INT NOT NULL');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT FK_A7BB06153397707A FOREIGN KEY (categoria_id) REFERENCES categoria (id)');
        $this->addSql('CREATE INDEX IDX_A7BB06153397707A ON producto (categoria_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE linea_venta DROP FOREIGN KEY FK_89CD8A7BF04F795F');
        $this->addSql('DROP INDEX IDX_89CD8A7BF04F795F ON linea_venta');
        $this->addSql('ALTER TABLE linea_venta CHANGE factura_id relation_id INT NOT NULL');
        $this->addSql('ALTER TABLE linea_venta ADD CONSTRAINT FK_89CD8A7B3256915B FOREIGN KEY (relation_id) REFERENCES factura (id)');
        $this->addSql('CREATE INDEX IDX_89CD8A7B3256915B ON linea_venta (relation_id)');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY FK_A7BB06153397707A');
        $this->addSql('DROP INDEX IDX_A7BB06153397707A ON producto');
        $this->addSql('ALTER TABLE producto CHANGE categoria_id relation_id INT NOT NULL');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT FK_A7BB06153256915B FOREIGN KEY (relation_id) REFERENCES categoria (id)');
        $this->addSql('CREATE INDEX IDX_A7BB06153256915B ON producto (relation_id)');
    }
}
