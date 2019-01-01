-- Patrick Freel

INSERT INTO InEmpire VALUES(0, 'No');
INSERT INTO InEmpire VALUES(1, 'Yes');

INSERT INTO GalacticSection VALUES(1, 'Deep Core');
INSERT INTO GalacticSection VALUES(2, 'Core Worlds');
INSERT INTO GalacticSection VALUES(3, 'Colonies');
INSERT INTO GalacticSection VALUES(4, 'Inner Rim');
INSERT INTO GalacticSection VALUES(5, 'Expansion Region');
INSERT INTO GalacticSection VALUES(6, 'Mid Rim');
INSERT INTO GalacticSection VALUES(7, 'Outer Rim Territories');
INSERT INTO GalacticSection VALUES(8, 'Unknow Region(s)');
INSERT INTO GalacticSection VALUES(9, 'Wild Space');

INSERT INTO Permissions VALUES(1, 'Ensign');
INSERT INTO Permissions VALUES(2, 'Junior Lieutenant');
INSERT INTO Permissions VALUES(3, 'Senior Lieutenant');
INSERT INTO Permissions VALUES(4, 'Captain');
INSERT INTO Permissions VALUES(5, 'Lieutenant Commander');
INSERT INTO Permissions VALUES(6, 'Commander');
INSERT INTO Permissions VALUES(7, 'Rear & Vice Admiral');
INSERT INTO Permissions VALUES(8, 'Fleet Admiral & Admiral');
INSERT INTO Permissions VALUES(9, 'Grand Admiral');
INSERT INTO Permissions VALUES(10, 'Moff/Grand Moff');
INSERT INTO Permissions VALUES(11, 'The Emperor');

INSERT INTO Ships VALUES(1, 'Imperial Star Destroyer', 'Capital Warship');
INSERT INTO Ships VALUES(2, 'Victory Star Destroyers', 'Capital Warship');
INSERT INTO Ships VALUES(3, 'Interdictor', 'Cruiser');
INSERT INTO Ships VALUES(4, 'Super Star Destroyer', 'Sector Command Vessel');
INSERT INTO Ships VALUES(5, 'Lambda class T-4a', 'Troop/People Transport');
INSERT INTO Ships VALUES(6, 'Sentinel Landing Craft', 'Heavy Transport');
INSERT INTO Ships VALUES(7, 'Y-85 Titan', 'AT-AT Dropship');
INSERT INTO Ships VALUES(8, 'Imperial Freighter', 'Cargo Ship');
INSERT INTO Ships VALUES(9, 'Tie Fighter', 'Fighter');
INSERT INTO Ships VALUES(10, 'Tie Bomber', 'Bomber');
INSERT INTO Ships VALUES(11, 'Tie Interceptor', 'Interceptor');
INSERT INTO Ships VALUES(12, 'Tie Advanced', 'Fighter/Interceptor');
INSERT INTO Ships VALUES(13, 'Tie Aggressor', 'Fighter');
INSERT INTO Ships VALUES(14, 'Tie Defender', 'Interceptor');
INSERT INTO Ships VALUES(15, 'Tie Hunter', 'Fighter/Interceptor');
INSERT INTO Ships VALUES(16, 'Tie Phantom', 'Scout/Fighter');

INSERT INTO SRank VALUES(1, 'Ensign', 1);
INSERT INTO SRank VALUES(2, 'Junior Lieutenant', 2);
INSERT INTO SRank VALUES(3, 'Senior Lieutenant', 3);
INSERT INTO SRank VALUES(4, 'Captain/Lieutenant Commandant', 4);
INSERT INTO SRank VALUES(5, 'Lieutenant Commander', 5);
INSERT INTO SRank VALUES(6, 'Commander', 6);
INSERT INTO SRank VALUES(7, 'Rear & Vice Admiral', 7);
INSERT INTO SRank VALUES(8, 'Fleet Admiral & Admiral', 8);
INSERT INTO SRank VALUES(9, 'Grand Admiral', 9);
INSERT INTO SRank VALUES(10, 'Moff/Grand Moff', 10);
INSERT INTO SRank VALUES(11, 'Emperior', 11);


INSERT INTO Assignments VALUES(1, 'Patrol', 'Simple patrol around planet, specific instructions upon arrival.');
INSERT INTO Assignments VALUES(2, 'Redacted', 'Redacted');
INSERT INTO Assignments VALUES(3, 'Recon', 'Recon for Rebel activity');
Insert Into Assignments values(4, 'Trade', 'Trade with Hutts for continued good relations');

INSERT INTO StationedShips(ShipTypes, Ammount) VALUES(2, 1);
INSERT INTO StationedShips(ShipTypes, Ammount) VALUES(1, 2);
INSERT INTO StationedShips(ShipTypes, Ammount) VALUES(4, 2);

INSERT INTO Planets (PlanetName, PlanetName, PartofEmpire, OrbitShips, Operations, Location) VALUES('Coruscant', 1, 1, 1, 1);
INSERT INTO Planets (PlanetName, PlanetName, PartofEmpire, OrbitShips, Operations, Location) VALUES('Alderan', 1, NULL, NULL, 2);
INSERT INTO Planets (PlanetName, PlanetName, PartofEmpire, OrbitShips, Operations, Location) VALUES('Sullust', 1, 1, 1, 2);
INSERT INTO Planets (PlanetName, PlanetName, PartofEmpire, OrbitShips, Operations, Location) VALUES('Tatoone', 0, 3, 4, 6);
INSERT INTO Planets (PlanetName, PlanetName, PartofEmpire, OrbitShips, Operations, Location) VALUES('Hoth', 0, NULL, 1, 7);
INSERT INTO Planets (PlanetName, PlanetName, PartofEmpire, OrbitShips, Operations, Location) VALUES('Bonadan', 0, NULL, 2, 9);

INSERT INTO People (LName, FName, SRank, Stationed) VALUES('Tarken', 'Wilhuff', 10, 1);
INSERT INTO People (LName, FName, SRank, Stationed) VALUES('Vanto', 'Eli', 1, 4);
INSERT INTO People (LName, FName, SRank, Stationed) VALUES('Thrawn', "Mitth'raw'nuruodo", 4, 4);
Insert INTO People (LName, FName, SRank, Stationed) VALUES('Parack', 'Voss', 4, 3);
INSERT INTO People (LName, FName, SRank, Stationed) VALUES('Barris', 'Mosh', 7, 5);
INSERT INTO People (LName, FName, SRank, Stationed) VALUES('Freel', 'Patrick', 1, 6);
