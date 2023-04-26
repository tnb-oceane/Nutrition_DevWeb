-- Table pour stocker users 
CREATE TABLE users (
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    maladie VARCHAR(255) NOT NULL
);

-- Table pour stocker data
CREATE TABLE profile_data (
    username VARCHAR(255) NOT NULL,
    sexe CHAR(1) NOT NULL,
    age INT NOT NULL,
    poids INT NOT NULL,
    taille INT NOT NULL,
    niveau_activite VARCHAR(255) NOT NULL,
    FOREIGN KEY (username) REFERENCES users(username)
);



-- Table pour stocker les repas
CREATE TABLE IF NOT EXISTS `meals` (
    `username` VARCHAR(255),
    `date` DATE,
    `time` TIME,
    `meal_type` VARCHAR(30),
    `food` VARCHAR(255),
    `quantity` INT,
    FOREIGN KEY (`username`) REFERENCES users(`username`)
);

-- Table pour stocker les activités
CREATE TABLE IF NOT EXISTS `activities` (
    `username` VARCHAR(255),
    `date` DATE,
    `time` TIME,
    `activity_type` VARCHAR(100),
    `duration` TIME,
    FOREIGN KEY (`username`) REFERENCES users(`username`)
);
