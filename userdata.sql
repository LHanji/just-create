CREATE TABLE `users`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstname` varchar(20) NOT NULL,
    `lastname` varchar(20) NOT NULL,
    `username` varchar(20) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(20) NOT NULL
)