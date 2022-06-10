create table libros (
    Titulo varchar(100) not null,
    Autor varchar(100) not null,
    Genero varchar(100) not null ,
    Editorial varchar(100) not null,
    Cantidad int(100) not null,
    FechaPublicacion date not null,
    Edicion varchar(100) not null,
    primary key (Titulo)
);
insert into libros (Titulo,Autor,Genero, Editorial,Cantidad,FechaPublicacion,Edicion)
values ("prueba","prueba","prueba","prueba","1","2022-03-31","1");