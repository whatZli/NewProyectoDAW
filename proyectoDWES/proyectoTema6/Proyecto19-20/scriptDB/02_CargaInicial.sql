/**
 * Author:  Alex
 */
-- Base de datos a usar
USE DAW2051920;



-- El tipo de usuario es "usuario" como predeterminado, despues añado un admin --
INSERT INTO Usuarios(cod_usuario, tipo_usuario, nom_usuario, apell_usuario, email, password) VALUES
    ('usuario1','registrado','Usuario 1','Apellido 1','ejemplo1@gmail.com',SHA2('usuario1paso',256)),
    ('usuario2','registrado','Usuario 2','Apellido 2','ejemplo2@gmail.com',SHA2('usuario2paso',256));

-- Introduccion de datos dentro de la tabla creada
INSERT INTO `Articulos` (`cod_articulo`, `titulo_articulo`, `descripcion_articulo`, `imagen_articulo`, `cod_usuario`) VALUES
('art1', 'Título artículo 1','Descripcion articulo 1','images/foto1.png','usuario1'),
('art2', 'Título artículo 2','Descripcion articulo 2','images/foto2.png','usuario2');

-- Usuario con el rol admin --
INSERT INTO Usuarios(cod_usuario, tipo_usuario, nom_usuario, apell_usuario, email, password) VALUES ('Administrador','admin','Nombre admin','Apellido admin','email@admin.local',SHA2('adminpaso',256), 'admin');