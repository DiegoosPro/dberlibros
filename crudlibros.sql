/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     18/7/2023 13:02:52                           */
/*==============================================================*/
CREATE DATABASE crudlibros;

-- Selección de la base de datos
USE crudlibros;

drop table if exists TAB_LIBROS;

drop table if exists TAB_USUARIOS;

/*==============================================================*/
/* Table: TAB_LIBROS                                            */
/*==============================================================*/
create table TAB_LIBROS
(
   ID_LIBRO             integer not null auto_increment,
   TITULO               varchar(50),
   AUTOR                varchar(50),
   GENERO               varchar(50),
   ANIO_PUBLICACION     int,
   DISPONIBILIDAD       tinyint(1),
   primary key (ID_LIBRO)
);

/*==============================================================*/
/* Table: TAB_USUARIOS                                          */
/*==============================================================*/
create table TAB_USUARIOS
(
   ID_USUARIOS          integer not null auto_increment,
   NOMBRE               varchar(50),
   USUARIO              varchar(50),
   PASSWORD             varchar(90),
   PERFIL               varchar(50),
   FECHA                date,
   primary key (ID_USUARIOS)
);

