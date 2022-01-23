<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220123094535 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bill_log (id INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(100) DEFAULT NULL, product_id INT DEFAULT NULL, number INT DEFAULT NULL, is_active INT DEFAULT NULL, status VARCHAR(100) DEFAULT NULL, created_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) DEFAULT NULL, type VARCHAR(100) DEFAULT NULL, detail VARCHAR(10000) DEFAULT NULL, producer VARCHAR(255) DEFAULT NULL, price INT DEFAULT NULL, giam_gia VARCHAR(255) DEFAULT NULL, img_list VARCHAR(1000) DEFAULT NULL, view INT DEFAULT NULL, buyed INT DEFAULT NULL, size INT DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, number INT DEFAULT NULL, is_active INT DEFAULT NULL, created_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(100) DEFAULT NULL, password VARCHAR(100) DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, full_name VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, role VARCHAR(255) DEFAULT NULL, is_active INT DEFAULT NULL, created_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_cart (id INT AUTO_INCREMENT NOT NULL, product_name VARCHAR(100) DEFAULT NULL, product_id INT DEFAULT NULL, number INT DEFAULT NULL, is_active INT DEFAULT NULL, status VARCHAR(100) DEFAULT NULL, created_at DATETIME DEFAULT NULL, update_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bill_log');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_cart');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
