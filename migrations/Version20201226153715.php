<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201226153715 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, skill VARCHAR(255) NOT NULL, date_of_entry DATE DEFAULT NULL, candidate_name VARCHAR(255) NOT NULL, mobile VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, total_exp NUMERIC(10, 0) NOT NULL, calculate_total_exp NUMERIC(10, 0) NOT NULL, relevant_exp NUMERIC(10, 0) NOT NULL, current_company VARCHAR(255) NOT NULL, current_ctc NUMERIC(10, 0) NOT NULL, expected_ctc NUMERIC(10, 0) NOT NULL, current_location VARCHAR(255) NOT NULL, expected_location VARCHAR(255) NOT NULL, notice_period NUMERIC(10, 0) NOT NULL, career_join_date DATE NOT NULL, reminder VARCHAR(2000) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE candidate');
    }
}
