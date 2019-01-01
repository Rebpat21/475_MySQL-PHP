SELECT DISTINCT continent from Country;
SELECT Continent, COUNT(Name) AS `Number of Countries` from Country WHERE Name IN (`Name`) GROUP BY Continent;
SELECT Continent, GROUP_CONCAT(Name) AS `Countries` from Country GROUP BY Continent;
SELECT album.title, count(track.id) as `# of Tracks` from album join track on album.id = track.album_id group by album.title;
select album.title, GROUP_CONCAT(track.title order by track.title) as `Track Title` from album join track on album.id = track.album_id group by album.title;
