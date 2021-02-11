<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210211102459 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book CHANGE release_date release_date DATE NOT NULL');
        $this->addSql('ALTER TABLE users ADD password VARCHAR(255) NOT NULL, CHANGE date_of_birth date_of_birth DATE NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book CHANGE release_date release_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE users DROP password, CHANGE date_of_birth date_of_birth DATETIME NOT NULL');
    }
}
