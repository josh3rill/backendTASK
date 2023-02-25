<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230224115354 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(' ALTER TABLE news ADD COLUMN date_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
       


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(' ALTER TABLE news ADD COLUMN date_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
       

    }
}
