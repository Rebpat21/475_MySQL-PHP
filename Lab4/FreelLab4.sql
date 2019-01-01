-- a)
Select Distinct COLORNAME, GROUP_CONCAT(COLORANTNAME) as `Colorants` from Color NATURAL JOIN Colorant group by ColorName order by ColorName ASC;
-- b)
Select COLORANTNAME, count(COLORANTNAME) as `Colorant_Count` from Formula natural join Colorant group by COLORANTNAME order by COLORANTNAME ASC;
-- c)
Select COLORANTNAME from Colorant where COLORANTNAME Like '%Oxide%';
-- d)
Select ColorName from Formula natural join Colorant natural join Color where COLORANTCODE = 'V' and Oz = 0;
-- e)
SELECT ColorantName, SUM(Oz+(shot/48)+(HALFSHOT/96)) as 'Total_Ounces' from Formula natural join Colorant group by ColorantName;
-- f)
select ColorantName, GROUP_CONCAT(ColorName) as 'Paints' FROM Color natural join Colorant natural join Formula group by ColorantName;
