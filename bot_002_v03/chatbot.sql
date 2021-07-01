-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2021 a las 23:16:12
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL,
  `sus` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`, `sus`) VALUES
(1, 'Hola|Buenos dias|hello!|holaaaa|hola|buenos dias', 'Hola Humano', 0),
(2, 'Cual es tu nombre| ¿Cual es tu nombre?', 'My nombre es Doki.', 0),
(3, 'De donde eres| Donde vives? | De que departamento eres?', 'Soy de Arequipa. ', 0),
(4, 'Cuidate| adios| chauuu', 'Bueno cuidate. Te veo pronto', 0),
(5, 'Como estas| Como andas| Como vas|', 'Bien y tu ?', 0),
(6, 'Tengo una consulta| Tengo una duda| Quisiera saber algo| Necesito informacion|  ', 'Cual es tu consulta.', 0),
(7, 'Quisiera saber el cronograma de matriculas de la Unsa| Quisiera saber sobre las matriculas de la unsa| Necesito informacion de las matriculas', '\'https://cutt.ly/Dn4GwUh\'', 1),
(8, 'Quisiera saber descargar la ficha de matricula| Qusiera donde puedo obtener la ficha de matriculas| Ficha de matricula', '\'https://cutt.ly/un4GxwU\'', 1),
(9, 'Quisiera saber descargar la ficha de matricula| Qusiera donde puedo obtener la ficha de matriculas| Ficha de matricula', '\'https://cutt.ly/un4GxwU\'', 1),
(10, 'Quisiera saber como puedo consultar mis notas parciales| Como puedo ver mis notas parciales| como puedo obtener mis notas parciales', '\'http://extranet.unsa.edu.pe/sisacad/parciales18/\'', 1),
(11, 'Quisiera saber como puedo descargar mi libreta de notas| Libreta de notas| Donde puedo descargar mi libreta de notas', '\'http://extranet.unsa.edu.pe/sisacad/libretas/\'', 1),
(12, 'Quisera saber como puedo hacer mi matricula por excepcion| Matricula por excepcion | Como puedo matricularme por excepcion', '\'https://cutt.ly/sn4Kc0k\'', 1),
(13, 'Quisiera saber como puedo trasladarme de carrera| Traslado de carrera| Como puedo trasladarme de carrera.', 'Quieres un traslado interno o externo', 0),
(14, 'Quisera un traslado externo| traslado externo| un traslado externo| Trasladarme externamente', '\'https://cutt.ly/Bn4Zy7x\'', 1),
(15, 'Quisiera traslado interno| Traslado interno| Un traslado interno | traslado por interno', '\'https://cutt.ly/nn4L2IF\'', 1),
(16, 'Quisiera traslado interno| Traslado interno| Un traslado interno | traslado por interno', '\'https://cutt.ly/nn4L2IF\'', 1),
(17, 'Quisiera traslado interno| Traslado interno| Un traslado interno | traslado por interno', '\'https://cutt.ly/nn4L2IF\'', 1),
(18, 'Gracias|Muchas Gracias| Te lo agradezco', 'No tienes por que, si tienes otra duda puedes volver a consultar.', 0),
(19, 'negligencia|deseo reportar una negligencia|Deseo reportar una negligencia|Negligencia', 'Sirvase a contactarnos para entrar en contacto:\r\nSanta Catalina Nro. 117. Arequipa\r\nEmail: rectorado@unsa.edu.pe\r\nTelf. 51-54-237808', 0),
(20, 'Horario?|Cual es el horario|cual es el horario|horario|horario?|Cual es el horario?|cual es el horario?', '\'https://docs.google.com/spreadsheets/d/1u3CFTHM7nbfwa-Nvw3XbCaQQvCDtk5odEq8_kkuwMcE/edit#gid=239035407\'', 1),
(21, 'salaverga un sus|amogus', '\'https://www.youtube.com/watch?v=5DlROhT8NgU\'', 1),
(22, 'mikel', 'mikel gaming', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
