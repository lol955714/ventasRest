<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211212182216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categoria (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE factura (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE linea_venta (id INT AUTO_INCREMENT NOT NULL, relation_id INT NOT NULL, producto_id INT NOT NULL, cantidad INT NOT NULL, subtotal DOUBLE PRECISION NOT NULL, INDEX IDX_89CD8A7B3256915B (relation_id), INDEX IDX_89CD8A7B7645698E (producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producto (id INT AUTO_INCREMENT NOT NULL, relation_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, cantidad INT NOT NULL, precio_venta DOUBLE PRECISION NOT NULL, precio_compra DOUBLE PRECISION NOT NULL, INDEX IDX_A7BB06153256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE linea_venta ADD CONSTRAINT FK_89CD8A7B3256915B FOREIGN KEY (relation_id) REFERENCES factura (id)');
        $this->addSql('ALTER TABLE linea_venta ADD CONSTRAINT FK_89CD8A7B7645698E FOREIGN KEY (producto_id) REFERENCES producto (id)');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT FK_A7BB06153256915B FOREIGN KEY (relation_id) REFERENCES categoria (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY FK_A7BB06153256915B');
        $this->addSql('ALTER TABLE linea_venta DROP FOREIGN KEY FK_89CD8A7B3256915B');
        $this->addSql('ALTER TABLE linea_venta DROP FOREIGN KEY FK_89CD8A7B7645698E');
        $this->addSql('DROP TABLE categoria');
        $this->addSql('DROP TABLE factura');
        $this->addSql('DROP TABLE linea_venta');
        $this->addSql('DROP TABLE producto');
    }
}
