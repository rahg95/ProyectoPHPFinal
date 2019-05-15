use gestoreventos;

select * from empleados;
select * from eventos;
select * from reporte;
select * from categoria;
select * from eventos;

SELECT idEventos as id, Titulo as title, descripcion as descripcion, Fecha_inicio as 'start', Fecha_final as 'end'  FROM eventos;

SELECT EM.Nombres, EM.Apellidos, EV.idEventos as id,  EV.Titulo as title,  EV.descripcion as descripcion,  EV.Fecha_inicio as start,  EV.Fecha_final as end  
FROM eventos as EV INNER JOIN empleados as EM on EV.idEmpleados = EM.idEmpleados;

insert into categoria (Categoria) values ('Social');
insert into categoria (Categoria) values ('Privada');
insert into categoria (Categoria) values ('Gubernamental');
insert into categoria (Categoria) values ('Empresarial');
insert into cargo (Cargo) values ('Administrador');
insert into cargo (Cargo) values ('Empleado');

insert into empleados (Nombres,Apellidos,Usuarios,Password,idCargo) values('Kevin','Rivera','krivera','rivera','1');
insert into empleados (Nombres,Apellidos,Usuarios,Password,idCargo) values('Robert','Henriquez','Rhenriquez','henriquez','2');


insert INTO eventos (idEmpleados,Fecha_publicacion, Titulo, Lugar, Descripcion, Imagen, Fecha_inicio, Fecha_final, idCategoria, Estado) 
values (2,'2019-09-09 08:00:00','Celebracion Navidena','Planes de Renderos','Gran fiesta navidena al aire libre','navidad.jpg','2019-05-05 08:00:00','2019-05-05 13:00:00',1,'En Espera');

insert INTO eventos (idEmpleados,Fecha_publicacion, Titulo, Lugar, Descripcion, Imagen, Fecha_inicio, Fecha_final, idCategoria, Estado) 
values (2,'2019-11-11 07:00:00','Excursion de vacaciones','Playa el Mahahualt','Gran fiesta de verano al aire libre','playa.jpg','2019-12-12 08:00:00','2019-12-12 22:00:00',2,'En Espera');

insert INTO eventos (idEmpleados,Fecha_publicacion, Titulo, Lugar, Descripcion, Imagen, Fecha_inicio, Fecha_final, idCategoria, Estado) 
values (1,'2019-07-07 09:00:00','Caminata el gra renacer','Centro de gobierno','Gran caminata de 10 km al aire libre','caminata.jpg','2019-12-12 10:00:00','2019-12-12 17:00:00',3,'En Espera');


INSERT INTO reporte (idEventos, Descripcion, Fecha_modificacion) VALUES(1,'Se ha cambiado: el estado a activo','2019-09-09 09:00:00');
INSERT INTO reporte (idEventos, Descripcion, Fecha_modificacion) VALUES(1,'Se ha cambiado: la imagen','2019-09-09 10:00:00');
INSERT INTO reporte (idEventos, Descripcion, Fecha_modificacion) VALUES(1,'Se ha cambiado: la categoria, imagen y estado','2019-09-09 10:00:00');
INSERT INTO reporte (idEventos, Descripcion, Fecha_modificacion) VALUES(2,'Se ha cambiado: la categoria','2019-09-09 10:00:00');


select L.NickUser as Usuario, L.Password as Contrasena, E.Nombre, E.Apellido, E.Edad, E.Direccion, AF.Nombre as Area, TE.Cargo
        from logueo as L 
        inner join empleados_de_areas as E on L.idUsuario = E.idUsuario 
        inner join areas_funcionales as AF on E.idAreas_Funcionales =  AF.idAreas_Funcionales 
        inner join tipo_empleados as TE on E.idTipo_Empleado = TE.idTipo_Empleado;