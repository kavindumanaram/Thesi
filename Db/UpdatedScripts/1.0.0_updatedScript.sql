CREATE DATABASE thesidevelopment;

---------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `users` (

`id` int(11) NOT NULL AUTO_INCREMENT,

`name` varchar(50) NOT NULL,

`email` varchar(100) NOT NULL,

`address` varchar(255) NOT NULL,

`mobile` varchar(15) NOT NULL,

PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

---------------------------------------------------------------

INSERT INTO `users` (`id`, `name`, `email`, `address`, `mobile`) VALUES

(1, 'Masud Alam', 'm@sud.com', 'ldsjfla lsdj lsdj flk', '9879879'),

(2, 'Sohel Alam', 'al@m.com', 'Dhaka,Bangladesh,BD', '09080'),

(8, 'Salim', 'salim.hossain@ebizzsol.com', 'test', '01717552181'),

(9, 'Syed Salim', 'salimhossain@gmail.com', 'Gulshan, Dhaka', '01717552181'),

(10, 'Salim Hossain', 'salimhossain@gmail.com', 'Gazipur-1700, Dhaka, Bangladesh.', '01717552181'),

(13, 'Galib', 'g@lib.com', 'Dhaka,Bangladesh', '987979');

---------------------------------------------------------------

