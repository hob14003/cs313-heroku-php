"CREATE TABLE employees 
(
   employeeId INT IDENTITY(1,1) PRIMARY KEY,
   name NVARCHAR(40), phone INT,
   hiredate DATE, firedate DATE,
   wage INT,
   position NVARCHAR(60)
);" +

"CREATE TABLE paystubs (
    paystubId INT PRIMARY KEY,
    clockIn DATETIME,
    clockOut DATETIME,
    employeeId INT
);" +

"CREATE TABLE availability (
    employeeId INT,
    availDate date,
    startTime TIME,
    endTime TIME
);" +

"CREATE TABLE scheduled (
    employeeId INT,
    schedDate date,
    startTime TIME,
    endTime TIME
);";



-- retrieving the availbaility for a employee on a certain day.
SELECT startTime,endTime
FROM availability
WHERE employeeId = ""
AND AVailabilitydate = "";


