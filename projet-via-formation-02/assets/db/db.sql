CREATE TABLE `membres` (
    `id` int(30) NOT NULL AUTO_INCREMENT, 
    `username` varchar(255) NOT NULL, 
    `password` varchar(255) NOT NULL, 
    `f_name` varchar(255) NOT NULL, 
    `l_name` varchar(255) NOT NULL, 
    `admin` tinyint(1) NOT NULL, 
    `img` varchar(255) NOT NULL, 
    PRIMARY KEY(`id`)
);

CREATE TABLE `contact` (
    `id` int(30) NOT NULL AUTO_INCREMENT, 
    `nom` varchar(255) NOT NULL, 
    `prenom` varchar(255) NOT NULL, 
    `pays` varchar(255) NOT NULL, 
    `message` varchar(255) NOT NULL, 
    PRIMARY KEY(`id`)
);


CREATE TABLE `artciles` (
    `id` int(30) NOT NULL AUTO_INCREMENT,
    `categorie` varchar(255) NOT NULL,
    `model` varchar(255) NOT NULL,
    `marque` varchar(255) NOT NULL,
    `nom` varchar(255) NOT NULL,
    `prix` int(25) NOT NULL,
    PRIMARY KEY(`id`)

);
INSERT INTO `membres` (`id`, `username`, `password`, `f_name`, `l_name`, `admin`, `img`) VALUES 
(1, 'admin', '$2y$10$WoL.snILlLXRj9VtCsYIjeRz0kT2qkbS09t9GBoZQaBDWV8PpLlge', 'titi', 'dd', '1', 'https://image.noelshack.com/fichiers/2022/19/1/1652084161-mac.jpg');