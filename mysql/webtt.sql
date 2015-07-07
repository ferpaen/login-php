-- Fernando Pablo Enguídanos DAW 2013-2015
--
-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-11-2014 a las 09:23:38
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

drop database if exists webtt;

create database webtt;
use webtt;

DROP TABLE IF EXISTS usuarios;

CREATE TABLE IF NOT EXISTS usuarios (
	  NUM_USUARIO varchar(30),
	  NICK varchar(12) NOT NULL,
	  PASSW varchar(40) NOT NULL,
	  NOMBRE varchar(20) NOT NULL,
	  APELLIDOS varchar(20) NOT NULL,
	  FECHA_NAC date,
	  DIRECCION varchar(20),
	  LOCALIDAD varchar(20),
	  COD_POSTAL int(5),
	  PROVINCIA varchar(20),
	  DNI varchar(10),
	  NUM_INSS varchar(18),
	  constraint PK1 primary key (NUM_USUARIO)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO usuarios (NUM_USUARIO, NICK, PASSW, NOMBRE,APELLIDOS) VALUES
(1,'invitado','084e0343a0486ff05530df6c705c8bb4','Luis','Pérez');
-- constraseña en md5: guest --