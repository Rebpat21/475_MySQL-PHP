-- Patrick Freel

-- 2a)
-- Displays all information from user rmajor, including magazine subscription info.

SELECT lname, fname, address, city, st, zip, title, price, DATEDIFF(endDate, startDate) AS days FROM magazine NATURAL JOIN magazineCustomer NATURAL JOIN subscription WHERE username = 'rmajor';

-- 2b)
-- Displays user information as well as magazine title, price and subscription amount left.

SELECT lname, fname, address, city, st, zip, title, price, DATEDIFF(endDate, startDate) AS days FROM magazine NATURAL JOIN magazineCustomer NATURAL JOIN subscription ORDER BY lname ASC;

-- 2c)
-- Displays all categorys.

SELECT category FROM magazine GROUP BY category ORDER BY category ASC;

-- 2d)
-- Displays the titles of each magazine in a particular category.

SELECT category, GROUP_CONCAT(title) AS titles FROM magazine GROUP BY category ORDER BY category, title ASC;
