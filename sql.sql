CREATE TABLE `user` (
 `id_user` INT auto_increment,
 `pseudo` VARCHAR(50) NOT NULL , 
`password` VARCHAR(100) NOT NULL , 
 `admin` BOOLEAN NOT NULL , 
PRIMARY KEY (`id_user`));


CREATE TABLE `playlist` (
 `id_playlist` INT NOT NULL auto_increment ,
 `id_user` INT NOT NULL , 
`nom` VARCHAR(50) NOT NULL , 
`lien_image` VARCHAR(200),
FOREIGN KEY (`id_user`) REFERENCES `user`(`id_user`), 
PRIMARY KEY (`id_playlist`));
 
CREATE TABLE `like` (
 `id_playlist` INT NOT NULL ,
 `id_user` INT NOT NULL , 
FOREIGN KEY (`id_user`) REFERENCES `user`(`id_user`), 
FOREIGN KEY (`id_playlist`) REFERENCES`playlist`(id_playlist));


CREATE TABLE `Commentaire` (
 `ordre` INT auto_increment,
 `id_playlist` INT NOT NULL ,
 `id_user` INT NOT NULL , 
`commentaire` VARCHAR(3000),
FOREIGN KEY (`id_user`) REFERENCES `user`(`id_user`), 
FOREIGN KEY (`id_playlist`) REFERENCES `playlist`(`id_playlist`),
PRIMARY KEY (`ordre`)
)
;


CREATE TABLE `Contenu` (
 `id_playlist` INT NOT NULL,
 `ordre` INT NOT NULL auto_increment , 
 `lien_musique` VARCHAR(200),
FOREIGN KEY (`id_playlist`) REFERENCES `playlist`(`id_playlist`),
PRIMARY KEY (`ordre`));
