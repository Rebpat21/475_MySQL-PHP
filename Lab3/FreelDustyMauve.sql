DELETE FROM Paint1NF
WHERE COLORCODE='004' AND VOLUME='96' AND QTY='1';

UPDATE Paint1NF
SET QTY='29'
WHERE COLORCODE='004' AND COLORANTCODE='T' AND VOLUME='48';

UPDATE Paint1NF
SET QTY='10'
WHERE COLORCODE='004' AND COLORANTCODE='V' AND VOLUME='48';

UPDATE Paint1NF
SET QTY='20'
WHERE COLORCODE='004' AND COLORANTCODE='B' AND VOLUME='48';

INSERT INTO Paint1NF
VALUES ('004', 'DustyMauve', 'MediumYellow', 'T', 'g', '48', '1');

INSERT INTO Paint1NF
VALUES ('004', 'DustyMauve', 'Magenta', 'V', 'g', '96', '1');



SELECT * FROM Paint1NF WHERE COLORCODE='004' Order by COLORANTCODE;
