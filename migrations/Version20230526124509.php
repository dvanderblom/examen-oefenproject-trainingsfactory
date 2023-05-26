<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230526124509 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE registration (id INT AUTO_INCREMENT NOT NULL, person_id INT NOT NULL, lesson_id INT NOT NULL, payment VARCHAR(255) DEFAULT NULL, INDEX IDX_62A8A7A7217BBB47 (person_id), INDEX IDX_62A8A7A7CDF80196 (lesson_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7217BBB47 FOREIGN KEY (person_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7CDF80196 FOREIGN KEY (lesson_id) REFERENCES lesson (id)');
        $this->addSql('ALTER TABLE lesson ADD instructor_id INT NOT NULL');
        $this->addSql('ALTER TABLE lesson ADD CONSTRAINT FK_F87474F38C4FC193 FOREIGN KEY (instructor_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_F87474F38C4FC193 ON lesson (instructor_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7217BBB47');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7CDF80196');
        $this->addSql('DROP TABLE registration');
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY FK_F87474F38C4FC193');
        $this->addSql('DROP INDEX IDX_F87474F38C4FC193 ON lesson');
        $this->addSql('ALTER TABLE lesson DROP instructor_id');
    }
}
