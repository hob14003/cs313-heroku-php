
CREATE TABLE public.user
(
    id  SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(24) NOT NULL,
    Password VARCHAR(24) NOT NULL
);



CREATE TABLE public.conference 
(
    Id SERIAL NOT NULL PRIMARY KEY,
    Is_april BOOLEAN NOT NULL,
    Year INT NOT NULL 
);


CREATE TABLE public.speaker
(
    Id SERIAL NOT NULL PRIMARY KEY,
    Name VARCHAR(24) NOT NULL
);



CREATE TABLE public.note
(
    Id SERIAL NOT NULL PRIMARY KEY,
    Text VARCHAR(160) NOT NULL,
    Conference_Id INT NOT NULL references public.conference(id),
    Speaker_Id INT NOT NULL references public.speaker(id),
    User_Id INT NOT NULL references public.user(id)
);



