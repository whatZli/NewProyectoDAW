/**
 * Author:  Alex
 */
-- Crear base de datos --
    CREATE DATABASE if NOT EXISTS DAW2051920;
-- Uso de la base de datos. --
    USE DAW2051920;

-- Crear tablas. --
    

    CREATE TABLE IF NOT EXISTS Usuarios(
        cod_usuario varchar(15) PRIMARY KEY,
        tipo_usuario enum('admin', 'registrado') default 'registrado', -- Valor por defecto usuario
        nom_usuario varchar(30) NOT null,
        apell_usuario varchar(60) NOT null,
        email_usuario varchar(50) NOT null,
        pass_usuario varchar(90) NOT null,
        imagen_usuario varchar(100) null
    );

    CREATE TABLE IF NOT EXISTS Articulos(
        cod_articulo varchar(10) PRIMARY KEY,
        titulo_articulo varchar(130) NOT null,
        descripcion_articulo varchar(2000) NOT null,
        imagen_articulo varchar(80) NOT null,
        fecha_articulo date,
        visitas_articulo int default 1,
        cod_usuario varchar(15),
        FOREIGN KEY (cod_usuario) REFERENCES Usuarios(cod_usuario) ON UPDATE CASCADE ON DELETE CASCADE
    );

-- Crear del usuario --
    CREATE USER IF NOT EXISTS 'userDAW2051920'@'%' identified BY 'paso'; 

-- Dar permisos al usuario --
    GRANT ALL PRIVILEGES ON DAW2051920.* TO 'userDAW2051920'@'%'; 

-- Hacer el flush privileges, por si acaso --
    FLUSH PRIVILEGES;
