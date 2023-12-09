<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version20231208103954 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE events (id INT AUTO_INCREMENT NOT NULL, event_name VARCHAR(255) NOT NULL, event_time_date DATETIME NOT NULL, event_description VARCHAR(255) NOT NULL, event_img VARCHAR(255) NOT NULL, event_capacity INT NOT NULL, event_email VARCHAR(255) NOT NULL, event_phone_number VARCHAR(255) NOT NULL, event_adress VARCHAR(255) NOT NULL, event_url VARCHAR(255) NOT NULL, event_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE events');
    }
}
