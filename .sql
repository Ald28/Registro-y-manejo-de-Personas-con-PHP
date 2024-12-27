create DATABASE personas;

create table login(
    id int not null primary key auto_increment,
    nombre varchar(50),
    apellido varchar(50),
    numero varchar(9),
    correo varchar(50) unique,
    contrasena varchar(250) unique,
);