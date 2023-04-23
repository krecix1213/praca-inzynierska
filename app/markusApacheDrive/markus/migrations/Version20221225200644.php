<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221225200644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE marks DROP CONSTRAINT FK_3C6AFA53BC1136D9');
        $this->addSql('ALTER TABLE marks DROP CONSTRAINT FK_3C6AFA53360507DE');
        $this->addSql('ALTER TABLE marks ADD CONSTRAINT FK_3C6AFA53BC1136D9 FOREIGN KEY (fk_id_user_teacher_id) REFERENCES teacher (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE marks ADD CONSTRAINT FK_3C6AFA53360507DE FOREIGN KEY (fk_id_user_student_id) REFERENCES student (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student ADD class_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33EA000B10 FOREIGN KEY (class_id) REFERENCES school_class (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_B723AF33EA000B10 ON student (class_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE marks DROP CONSTRAINT fk_3c6afa53bc1136d9');
        $this->addSql('ALTER TABLE marks DROP CONSTRAINT fk_3c6afa53360507de');
        $this->addSql('ALTER TABLE marks ADD CONSTRAINT fk_3c6afa53bc1136d9 FOREIGN KEY (fk_id_user_teacher_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE marks ADD CONSTRAINT fk_3c6afa53360507de FOREIGN KEY (fk_id_user_student_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT FK_B723AF33EA000B10');
        $this->addSql('DROP INDEX IDX_B723AF33EA000B10');
        $this->addSql('ALTER TABLE student DROP class_id');
    }
}
