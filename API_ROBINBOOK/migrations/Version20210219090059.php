<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210219090059 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, age_classification VARCHAR(255) NOT NULL, cover_page VARCHAR(255) NOT NULL, illustrations VARCHAR(255) NOT NULL, pdf VARCHAR(255) NOT NULL, release_date DATE NOT NULL, synopsis VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, public_date VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book_genre (book_id INT NOT NULL, genre_id INT NOT NULL, INDEX IDX_8D92268116A2B381 (book_id), INDEX IDX_8D9226814296D31F (genre_id), PRIMARY KEY(book_id, genre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, surname1 VARCHAR(255) DEFAULT NULL, surname2 VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, message VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, type_genre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE register (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', dni VARCHAR(9) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, surname1 VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, release_date DATETIME DEFAULT NULL, date_of_birth DATETIME DEFAULT NULL, surname2 VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, dni VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, surname1 VARCHAR(255) NOT NULL, surname2 VARCHAR(255) NOT NULL, realese_date DATETIME NOT NULL, rol VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, date_of_birth DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users_book (users_id INT NOT NULL, book_id INT NOT NULL, INDEX IDX_46CED3F67B3B43D (users_id), INDEX IDX_46CED3F16A2B381 (book_id), PRIMARY KEY(users_id, book_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE book_genre ADD CONSTRAINT FK_8D92268116A2B381 FOREIGN KEY (book_id) REFERENCES book (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE book_genre ADD CONSTRAINT FK_8D9226814296D31F FOREIGN KEY (genre_id) REFERENCES genre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_book ADD CONSTRAINT FK_46CED3F67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_book ADD CONSTRAINT FK_46CED3F16A2B381 FOREIGN KEY (book_id) REFERENCES book (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_genre DROP FOREIGN KEY FK_8D92268116A2B381');
        $this->addSql('ALTER TABLE users_book DROP FOREIGN KEY FK_46CED3F16A2B381');
        $this->addSql('ALTER TABLE book_genre DROP FOREIGN KEY FK_8D9226814296D31F');
        $this->addSql('ALTER TABLE users_book DROP FOREIGN KEY FK_46CED3F67B3B43D');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE book_genre');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE register');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE users_book');
    }
}
