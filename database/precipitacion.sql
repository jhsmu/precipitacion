CREATE DATABASE precipitacion;

CREATE TABLE administrador(
    id_administrador INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(60) NOT NULL UNIQUE,
    contrasenia VARCHAR(50) NOT NULL
);


INSERT INTO administrador (nombre, apellido, email, contrasenia) VALUES
('Melisa', 'Palomeque', 'administrador@gmail.com', 'Administrador12345');