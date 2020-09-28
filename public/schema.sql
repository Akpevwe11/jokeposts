CREATE TABLE `ijdb`.`joke` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `joketext` TEXT NULL,
  `jokedate` DATE NULL,
  PRIMARY KEY (`id`));

-- INSERT INTO joke SET
-- joketext = "A programmer was found dead in the shower. The
-- instructions read: lather, rinse, repeat.",
-- jokedate = "2017-06-01"

-- INSERT INTO joke
-- (joketext, date) VALUES (
-- '!false - it\'s funny because it\'s true',
-- "2012-04-01");

$sql = 'CREATE TABLE joke (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
joketext TEXT,
jokedate DATE NOT NULL
) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

-- $jokes[2] = 'A programmer\'s wife tells him to go to the
-- store and "get a gallon of milk, and if they have eggs, get a
--  dozen." He returns with 13 gallons of milk.';

--how many programmers does it take to screw in a lightbulb? none, its a hardware problem 
-- why did the programmer quit his job? he didn't get arrays 
-- why was the empty array stuck outside? it didn't have any keys