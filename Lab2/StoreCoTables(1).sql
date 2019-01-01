ALTER TABLE EMPLOYEE_Lab2 DROP FOREIGN KEY EMPLOYEE_Lab2_CODE;
ALTER TABLE STORE_Lab2 DROP FOREIGN KEY STORE_Lab2_CODE;

DROP TABLE IF EXISTS EMPLOYEE_Lab2, REGION_Lab2, STORE_Lab2;

CREATE TABLE EMPLOYEE_Lab2 (
EMP_CODE int NOT NULL PRIMARY KEY,
EMP_TITLE varchar(4),
EMP_LNAME varchar(15),
EMP_FNAME varchar(15),
EMP_INITIAL varchar(1),
EMP_DOB datetime,
STORE_CODE int
);

CREATE TABLE REGION_Lab2 (
REGION_CODE int NOT NULL PRIMARY KEY,
REGION_DESCRIPT varchar(10)
);

CREATE TABLE STORE_Lab2 (
STORE_CODE int NOT NULL PRIMARY KEY,
STORE_NAME varchar(20),
STORE_YTD_SALES numeric,
REGION_CODE int,
EMP_CODE int
);

ALTER TABLE EMPLOYEE_Lab2 ADD CONSTRAINT EMPLOYEE_Lab2_CODE FOREIGN KEY EMPLOYEE_Lab2_CODE(STORE_CODE) REFERENCES STORE_Lab2(STORE_CODE);
ALTER TABLE STORE_Lab2 ADD CONSTRAINT STORE_Lab2_CODE FOREIGN KEY STORE_Lab2_CODE(REGION_CODE) REFERENCES REGION_Lab2(REGION_CODE);

