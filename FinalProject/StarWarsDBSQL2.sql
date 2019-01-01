-- Patrick Freel
DROP TABLE IF EXISTS People;
DROP TABLE IF EXISTS Planets;
DROP TABLE IF EXISTS Assignments;
DROP TABLE IF EXISTS GalacticSection;
DROP TABLE IF EXISTS InEmpire;
DROP TABLE IF EXISTS StationedShips;
DROP TABLE IF EXISTS Ships;
DROP TABLE IF EXISTS SRank;
DROP TABLE IF EXISTS Permissions;


CREATE TABLE Permissions (
  idPermissions INT NOT NULL,
  PermissionLevel VARCHAR(70) NOT NULL,
  PRIMARY KEY (idPermissions)
)ENGINE = InnoDB;


CREATE TABLE InEmpire(
  idInEmpire INT NOT NULL,
  YesOrNo VARCHAR(45) NOT NULL,
  PRIMARY KEY (idInEmpire)
)ENGINE = InnoDB;


CREATE TABLE GalacticSection (
  idGalacticSection INT NOT NULL,
  SectionName VARCHAR(45) NOT NULL,
  PRIMARY KEY (idGalacticSection)
)ENGINE = InnoDB;


CREATE TABLE Ships (
  idShips INT NOT NULL,
  ShipName VARCHAR(100) NOT NULL,
  ShipType VARCHAR(100) NOT NULL,
  PRIMARY KEY (idShips)
)ENGINE = InnoDB;


CREATE TABLE SRank (
  idSRank INT NOT NULL,
  SRankName VARCHAR(70) NOT NULL,
  Permissions INT NOT NULL,
  PRIMARY KEY (idSRank),
    FOREIGN KEY (Permissions)
    REFERENCES Permissions (idPermissions)
)ENGINE = InnoDB;


CREATE TABLE Assignments (
  idAssignments INT NOT NULL,
  AssignmentCodeName VARCHAR(45) NULL,
  AssignmentInformation VARCHAR(45) NULL,
  PRIMARY KEY (idAssignments)
)ENGINE = InnoDB;


CREATE TABLE StationedShips (
  idStationedShips INT NOT NULL AUTO_INCREMENT,
  ShipTypes INT NOT NULL,
  Ammount INT NOT NULL,
  PRIMARY KEY (idStationedShips),
    FOREIGN KEY (ShipTypes)
    REFERENCES Ships (idShips)
)ENGINE = InnoDB;


CREATE TABLE Planets(
  idPlanet INT NOT NULL AUTO_INCREMENT,
  PlanetName VARCHAR(45) NOT NULL,
  PartofEmpire INT NOT NULL,
  OrbitShips INT,
  Operations INT,
  Location INT NOT NULL,
  PRIMARY KEY (idPlanet),
    FOREIGN KEY (PartofEmpire)
    REFERENCES InEmpire (idInEmpire),
    FOREIGN KEY (OrbitShips)
    REFERENCES StationedShips (idStationedShips),
    FOREIGN KEY (Operations)
    REFERENCES Assignments (idAssignments),
    FOREIGN KEY (Location)
    REFERENCES GalacticSection (idGalacticSection),
    FOREIGN KEY (OrbitShips)
    REFERENCES StationedShips (idStationedShips)
)ENGINE = InnoDB;


CREATE TABLE People(
  idPeople INT NOT NULL AUTO_INCREMENT,
  LName VARCHAR(70) NOT NULL,
  FName VARCHAR(70) NOT NULL,
  sRank INT NOT NULL,
  Stationed INT NOT NULL,
  PRIMARY KEY (idPeople),
    FOREIGN KEY (sRank)
    REFERENCES SRank (idSRank),
    FOREIGN KEY (Stationed)
    REFERENCES Planets (idPlanet)
)ENGINE = InnoDB;
