<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200322175745 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE achat (id INT AUTO_INCREMENT NOT NULL, id_user_fk_id INT NOT NULL, date DATE NOT NULL, montant INT NOT NULL, INDEX IDX_26A98456E23F625F (id_user_fk_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE achat_detaille (id INT AUTO_INCREMENT NOT NULL, id_achat_fk_id INT NOT NULL, id_produit_fk_id INT NOT NULL, montant INT NOT NULL, INDEX IDX_D4A0BEDBA54FA9DE (id_achat_fk_id), INDEX IDX_D4A0BEDB2BC3AF21 (id_produit_fk_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(60) NOT NULL, title VARCHAR(60) NOT NULL, price INT NOT NULL, description LONGTEXT NOT NULL, image LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, mail VARCHAR(255) NOT NULL, date_naissance DATE DEFAULT NULL, date_inscription DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456E23F625F FOREIGN KEY (id_user_fk_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE achat_detaille ADD CONSTRAINT FK_D4A0BEDBA54FA9DE FOREIGN KEY (id_achat_fk_id) REFERENCES achat (id)');
        $this->addSql('ALTER TABLE achat_detaille ADD CONSTRAINT FK_D4A0BEDB2BC3AF21 FOREIGN KEY (id_produit_fk_id) REFERENCES produit (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE achat_detaille DROP FOREIGN KEY FK_D4A0BEDBA54FA9DE');
        $this->addSql('ALTER TABLE achat_detaille DROP FOREIGN KEY FK_D4A0BEDB2BC3AF21');
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456E23F625F');
        $this->addSql('DROP TABLE achat');
        $this->addSql('DROP TABLE achat_detaille');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE user');
    }
}
