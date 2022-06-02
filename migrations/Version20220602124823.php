<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220602124823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE semence ADD famille_id INT DEFAULT NULL, ADD stock_id INT DEFAULT NULL, CHANGE img img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE semence ADD CONSTRAINT FK_44CE747597A77B84 FOREIGN KEY (famille_id) REFERENCES famille (id)');
        $this->addSql('ALTER TABLE semence ADD CONSTRAINT FK_44CE7475DCD6110 FOREIGN KEY (stock_id) REFERENCES stock (id)');
        $this->addSql('CREATE INDEX IDX_44CE747597A77B84 ON semence (famille_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_44CE7475DCD6110 ON semence (stock_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE semence DROP FOREIGN KEY FK_44CE747597A77B84');
        $this->addSql('ALTER TABLE semence DROP FOREIGN KEY FK_44CE7475DCD6110');
        $this->addSql('DROP INDEX IDX_44CE747597A77B84 ON semence');
        $this->addSql('DROP INDEX UNIQ_44CE7475DCD6110 ON semence');
        $this->addSql('ALTER TABLE semence DROP famille_id, DROP stock_id, CHANGE img img VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
