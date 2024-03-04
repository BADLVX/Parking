DROP TABLE IF EXISTS Utilisateur;
DROP TABLE IF EXISTS Reservation;
DROP TABLE IF EXISTS Place;


CREATE TABLE Utilisateur(
    IdUser INT,
    NumPlaceAtt INT,
    MdpUser VARCHAR(50),
    NomUser VARCHAR(50),
    PrenomUser VARCHAR(50),
    StatutUser VARCHAR(20),
    EmailUser VARCHAR(25),
    PRIMARY KEY (IdUser)
)ENGINE =INNODB;

CREATE TABLE Reservation(
    IdReservation INT,
    IdUser INT,
    NumPlace INT,
    DateFin DATE,
    DateAttribution DATE,
    PRIMARY KEY (IdReservation)
)ENGINE = INNODB;

CREATE TABLE Place(
    NumPlace INT,
    StatutPlace VARCHAR(20),
    PRIMARY KEY (NumPlace)
)ENGINE = INNODB;