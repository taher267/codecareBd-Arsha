
CREATE TABLE IF NOT EXISTS clients (
	id INT(10) NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NULL,
	logo VARCHAR(255) NOT NULL,
	data timestamp NOT NULL DEFAULT current_timestamp(),
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `clients` (`id`, `name`, `client_logo`, `data`) VALUES 
(1, 'myob', 'assets/img/clients/client-1.png', now()),
(2, 'belimo', 'assets/img/clients/client-2.png', now()),
(3, 'liftgroups', 'assets/img/clients/client-3.png', now()),
(4, 'lilly', 'assets/img/clients/client-4.png', now()),
(5, 'citrus', 'assets/img/clients/client-5.png', now()),
(6, 'trustly', 'assets/img/clients/client-5.png', now());


CREATE TABLE IF NOT EXISTS teams(
	id INT(10) NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL ,
	image VARCHAR(255) NOT NULL,
	position VARCHAR(255) NOT NULL,
	description TEXT NULL,
	social VARCHAR(255) NULL,
	PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `teams` (`id`, `name`, `image`, `position`, `description`, `social`) VALUES 
(1, 'Walter White', 'assets/img/team/team-1.jpg', 'Chief Executive Officer', 'Explicabo voluptatem mollitia et repellat qui dolorum quasi','http://fb.com'),
(2, 'Sarah Jhonson', 'assets/img/team/team-2.jpg', 'Product Manager', 'Aut maiores voluptates amet et quis praesentium qui senda para','http://fb.com'),
(3, 'William Anderson', 'assets/img/team/team-3.jpg', 'CTO', 'Quisquam facilis cum velit laborum corrupti fuga rerum quia','http://fb.com'),
(4, 'Amanda Jepson', 'assets/img/team/team-4.jpg', 'Accountant', 'Dolorum tempora officiis odit laborum officiis et et accusamus','http://fb.com');


CREATE TABLE IF NOT EXISTS portfolio(
	id INT(10) NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NULL,
	skills VARCHAR(255) NOT NULL,
	image VARCHAR(255) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `portfolio` (`id`, `title`, `skills`, `image`) VALUES 
(1, 'App 1', 'app', 'assets/img/portfolio/portfolio-1.jpg'),
(2, 'Web 3', 'web', 'assets/img/portfolio/portfolio-2.jpg'),
(3, 'App 2', 'app', 'assets/img/portfolio/portfolio-3.jpg'),
(4, 'Card 2', 'card', 'assets/img/portfolio/portfolio-4.jpg'),
(5, 'Web 2', 'web', 'assets/img/portfolio/portfolio-5.jpg'),
(6, 'App 3', 'app', 'assets/img/portfolio/portfolio-6.jpg'),
(7, 'Card 1', 'card', 'assets/img/portfolio/portfolio-7.jpg'),
(8, 'Card 3', 'card', 'assets/img/portfolio/portfolio-8.jpg'),
(9, 'Web 3', 'web', 'assets/img/portfolio/portfolio-9.jpg');


