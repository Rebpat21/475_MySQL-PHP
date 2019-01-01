-- Patrick Freel
-- 1)
select count(idInEmpire) as 'Planets in Empire'
from Planets natural join InEmpire
where PartofEmpire = idInEmpire;

-- 2)
select People.LName as 'Last Name' from People
where People.Location = (select Planets.Stationed from Planets where idPlanet=1);

-- 3)
select PlanetName, group_concat(ShipName) as 'Ships in System'
from Planets natural join StationedShips natural join Ships
where shipTypes = idShips and shipTypes = OrbitShips group by PlanetName;
