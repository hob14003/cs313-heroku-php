-- Clients

INSERT INTO CLIENTS (username,phone,about)
VALUES ('Jesse','2083603811','Boss');


INSERT INTO CLIENTS (username,phone,about)
VALUES ('John','2083603811','Boss');



-- employees
INSERT INTO Employees (username,phone,position,email,startdate,enddate)
VALUES ('Monica','2083608987','Accountant','accountant@gmail.com','1/1/2019','1/1/2020');


-- calls
(SELECT id from clients
WHERE username = "Jesse")

(SELECT id from employees WHERE username ="Monica")


INSERT INTO calls (client_id,employee_id,calldate,summary)
VALUES ((SELECT id from clients
WHERE username = 'Jesse'),(SELECT id from employees WHERE username ='Monica')
,'1/1/1','short but good');



-- choose the calls for the clients
SELECT clients.username,employees.username,calls.client_id,calls.employee_id,calldate,summary 
FROM calls JOIN clients ON calls.client_id = clients.id JOIN employees ON calls.employee_id = employees.id
WHERE calls.client_id = clients.id;



