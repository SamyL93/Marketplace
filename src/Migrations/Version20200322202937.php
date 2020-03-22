<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200322202937 extends AbstractMigration
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
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) DEFAULT NULL, last_name VARCHAR(60) DEFAULT NULL, mail VARCHAR(60) DEFAULT NULL, subject LONGTEXT DEFAULT NULL, message LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456E23F625F FOREIGN KEY (id_user_fk_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE achat_detaille ADD CONSTRAINT FK_D4A0BEDBA54FA9DE FOREIGN KEY (id_achat_fk_id) REFERENCES achat (id)');
        $this->addSql('ALTER TABLE achat_detaille ADD CONSTRAINT FK_D4A0BEDB2BC3AF21 FOREIGN KEY (id_produit_fk_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE produit ADD categorie_fk_id VARCHAR(60) NOT NULL, ADD nom VARCHAR(60) NOT NULL, ADD lien_image LONGTEXT DEFAULT NULL, DROP categorie, DROP title, DROP image, CHANGE price prix INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_29A5EC27500FF400 ON produit (categorie_fk_id)');
        $this->addSql('ALTER TABLE user CHANGE password password VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE achat_detaille DROP FOREIGN KEY FK_D4A0BEDBA54FA9DE');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27500FF400');
        $this->addSql('DROP TABLE achat');
        $this->addSql('DROP TABLE achat_detaille');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP INDEX IDX_29A5EC27500FF400 ON produit');
        $this->addSql('ALTER TABLE produit ADD categorie VARCHAR(60) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, ADD title VARCHAR(60) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, ADD image VARCHAR(60) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, DROP categorie_fk_id, DROP nom, DROP lien_image, CHANGE prix price INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE password password VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
