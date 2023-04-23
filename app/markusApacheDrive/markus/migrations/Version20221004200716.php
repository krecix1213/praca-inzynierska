<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221004200716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE absence_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE hours_of_classes_and_breaks_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE marks_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE school_class_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE school_subject_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE student_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE teacher_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE absence (id INT NOT NULL, fk_id_school_lesson_id INT NOT NULL, fk_teacher_id_id INT NOT NULL, students TEXT NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, ts TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_765AE0C989589C5F ON absence (fk_id_school_lesson_id)');
        $this->addSql('CREATE INDEX IDX_765AE0C94AF157C8 ON absence (fk_teacher_id_id)');
        $this->addSql('COMMENT ON COLUMN absence.students IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE hours_of_classes_and_breaks (id INT NOT NULL, times_json JSON NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE marks (id INT NOT NULL, fk_id_user_teacher_id INT NOT NULL, fk_id_user_student_id INT NOT NULL, fk_id_school_subject_id INT NOT NULL, mark DOUBLE PRECISION NOT NULL, weight INT NOT NULL, ts TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_3C6AFA53BC1136D9 ON marks (fk_id_user_teacher_id)');
        $this->addSql('CREATE INDEX IDX_3C6AFA53360507DE ON marks (fk_id_user_student_id)');
        $this->addSql('CREATE INDEX IDX_3C6AFA53E0C2060E ON marks (fk_id_school_subject_id)');
        $this->addSql('CREATE TABLE school_class (id INT NOT NULL, head_teacher_id INT NOT NULL, head_student_id INT NOT NULL, level INT NOT NULL, symbol VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_33B1AF85E36700E2 ON school_class (head_teacher_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_33B1AF85697331E5 ON school_class (head_student_id)');
        $this->addSql('CREATE TABLE school_subject (id INT NOT NULL, name VARCHAR(255) NOT NULL, shortcut VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE student (id INT NOT NULL, fk_id_user_id INT NOT NULL, name VARCHAR(32) NOT NULL, surname VARCHAR(32) NOT NULL, telephone VARCHAR(15) DEFAULT NULL, email VARCHAR(255) NOT NULL, number_ident_goverment VARCHAR(32) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF33899DB076 ON student (fk_id_user_id)');
        $this->addSql('CREATE TABLE teacher (id INT NOT NULL, fk_id_user_id INT NOT NULL, name VARCHAR(32) NOT NULL, surname VARCHAR(32) NOT NULL, telephone VARCHAR(15) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B0F6A6D5899DB076 ON teacher (fk_id_user_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C989589C5F FOREIGN KEY (fk_id_school_lesson_id) REFERENCES school_subject (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT FK_765AE0C94AF157C8 FOREIGN KEY (fk_teacher_id_id) REFERENCES teacher (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE marks ADD CONSTRAINT FK_3C6AFA53BC1136D9 FOREIGN KEY (fk_id_user_teacher_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE marks ADD CONSTRAINT FK_3C6AFA53360507DE FOREIGN KEY (fk_id_user_student_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE marks ADD CONSTRAINT FK_3C6AFA53E0C2060E FOREIGN KEY (fk_id_school_subject_id) REFERENCES school_subject (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE school_class ADD CONSTRAINT FK_33B1AF85E36700E2 FOREIGN KEY (head_teacher_id) REFERENCES teacher (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE school_class ADD CONSTRAINT FK_33B1AF85697331E5 FOREIGN KEY (head_student_id) REFERENCES student (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33899DB076 FOREIGN KEY (fk_id_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE teacher ADD CONSTRAINT FK_B0F6A6D5899DB076 FOREIGN KEY (fk_id_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE absence DROP CONSTRAINT FK_765AE0C989589C5F');
        $this->addSql('ALTER TABLE marks DROP CONSTRAINT FK_3C6AFA53E0C2060E');
        $this->addSql('ALTER TABLE school_class DROP CONSTRAINT FK_33B1AF85697331E5');
        $this->addSql('ALTER TABLE absence DROP CONSTRAINT FK_765AE0C94AF157C8');
        $this->addSql('ALTER TABLE school_class DROP CONSTRAINT FK_33B1AF85E36700E2');
        $this->addSql('ALTER TABLE marks DROP CONSTRAINT FK_3C6AFA53BC1136D9');
        $this->addSql('ALTER TABLE marks DROP CONSTRAINT FK_3C6AFA53360507DE');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT FK_B723AF33899DB076');
        $this->addSql('ALTER TABLE teacher DROP CONSTRAINT FK_B0F6A6D5899DB076');
        $this->addSql('DROP SEQUENCE absence_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE hours_of_classes_and_breaks_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE marks_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE school_class_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE school_subject_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE student_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE teacher_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE absence');
        $this->addSql('DROP TABLE hours_of_classes_and_breaks');
        $this->addSql('DROP TABLE marks');
        $this->addSql('DROP TABLE school_class');
        $this->addSql('DROP TABLE school_subject');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE teacher');
        $this->addSql('DROP TABLE "user"');
    }
}
