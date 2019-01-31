-- create the database
CREATE DATABASE pbook;


\c pbook


CREATE TABLE public.clients
(
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    phone INT NOT NULL,
    about VARCHAR(180)
);

CREATE TABLE public.employees
(
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    phone INT NOT NULL,
    position VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    startdate DATE,
    enddate DATE
);

CREATE TABLE public.calls
(
client_id INT NOT NULL REFERENCES public.clients(id),
employee_id INT NOT NULL REFERENCES public.employees(id),
calldate DATE,
summary TEXT
);