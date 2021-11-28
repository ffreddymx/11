-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 03:23:28
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aprende`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `Correctas` int(5) NOT NULL,
  `Incorrectas` int(5) NOT NULL,
  `idt2` int(5) NOT NULL,
  `iduser` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `Correctas`, `Incorrectas`, `idt2`, `iduser`) VALUES
(8, 3, 7, 1, 1),
(9, 8, 2, 1, 3),
(10, 9, 1, 4, 1),
(12, 8, 2, 4, 1),
(17, 8, 2, 3, 1),
(18, 4, 6, 3, 1),
(19, 6, 4, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `inicio` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`inicio`, `id`, `avatar`) VALUES
('Aprender', 1, 'Imagen1.png'),
('Evaluacion', 2, 'Imagen2.png'),
('Resultados', 3, 'Imagen3.png'),
('reporte', 4, 'Imagen4.png'),
('otro', 5, 'Imagen4.png'),
('otro mas', 6, 'Imagen4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `id` int(11) NOT NULL,
  `Correctas` int(5) NOT NULL,
  `Incorrectas` int(5) NOT NULL,
  `idt2` int(5) NOT NULL,
  `iduser` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`id`, `Correctas`, `Incorrectas`, `idt2`, `iduser`) VALUES
(13, 3, 7, 1, 1),
(14, 8, 2, 1, 3),
(17, 8, 2, 4, 1),
(23, 4, 6, 32, 1),
(24, 6, 4, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla1`
--

CREATE TABLE `tabla1` (
  `id` int(10) UNSIGNED NOT NULL,
  `modulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrito` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tabla1`
--

INSERT INTO `tabla1` (`id`, `modulo`, `descrito`) VALUES
(1, 'Uso de las Letras', 'Uso de B y V, C y S, G y J...'),
(2, 'Uso adecuado de las palabras', 'Usos de las palabras correctas'),
(3, 'Acentuación', 'Con tilde o sin tilde'),
(4, 'Mayúscula', 'Mayúscula o minúscula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla2`
--

CREATE TABLE `tabla2` (
  `id` int(10) UNSIGNED NOT NULL,
  `modulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_t1` int(3) NOT NULL,
  `video` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tabla2`
--

INSERT INTO `tabla2` (`id`, `modulo`, `id_t1`, `video`) VALUES
(1, 'Palabras con M o N', 1, 'Mis primeras letras- Las consonantes nasales (M_ N y Ñ)(1080P_HD)_1.mp4'),
(2, 'Palabras con B o V', 1, 'Palabras con B y V.mp4'),
(3, 'Palabras con G o J', 1, 'Palabras con G y J.mp4'),
(4, 'POR y PARA', 2, ''),
(6, 'Localiza la sílaba tónica', 3, 'Silaba tonica.mp4'),
(7, 'Verbos (formas simples)', 5, ''),
(15, 'Palabras con C y CC', 1, 'Palabras con C y CC.mp4'),
(16, 'palabras con C, S y Z', 1, 'Palabras con C, S y Z.mp4'),
(17, 'palabras con ge, gi, gue y gui', 1, 'palabras con ge, gi, gue y gui.mp4'),
(18, 'Palabras con h o sin h', 1, 'Palabras con H y sin H.mp4'),
(19, 'Palabras con Q, k o c', 1, ''),
(20, 'Palabras con r o rr', 1, ''),
(21, 'Palabras con s  o x', 1, 'Palabras con S o X.mp4'),
(22, 'Palabras con y o Ll', 1, ''),
(23, 'A o AL, DE o DEL', 2, ''),
(24, 'Aún y Aun', 2, ''),
(25, 'Cómo o Como, Cuánto o Cuanto', 2, ''),
(26, 'Dónde o Donde, Adónde o Adonde', 2, ''),
(27, 'El o La', 2, ''),
(28, 'Hacia, Hasta, Con y Sin', 2, ''),
(29, 'Quién o Quien, Qué o Que', 2, ''),
(30, 'Si o Sí, Mi o Mí, Te o Té, El o Él ', 2, ''),
(31, 'Tu o Tú, Se o Sé, Mas o Más', 2, ''),
(32, 'Diptongos y triptongos', 3, 'Diptongos y triptongos.mp4'),
(34, 'Palabras agudas', 3, ''),
(35, 'Esdrújulas y sobreesdrújulas', 3, 'Palabras esdrujulas y sobreesdrujulas.mp4'),
(36, 'Palabras llanas', 3, 'Palabras llanas.mp4'),
(37, 'Nombre de ciudades', 4, ''),
(38, 'Nombres propios', 4, 'Mayusculas.mp4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `Text1` varchar(300) NOT NULL,
  `Text2` varchar(300) NOT NULL,
  `Correcta` varchar(50) NOT NULL,
  `Incorrecta` varchar(50) NOT NULL,
  `id_t2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`id`, `Text1`, `Text2`, `Correcta`, `Incorrecta`, `id_t2`) VALUES
(1, 'Por la lluvias tocaron la c', 'pana como señal de alerta', 'am', 'an', 1),
(2, 'Las noticias anunciaron ', 'bio para la inscripción de las becas', 'cam', 'can', 1),
(3, 'A veces siento mucha e', 'vidia.', 'n', 'm', 1),
(4, 'Es momento de ', 'prar los útiles escolares', 'com', 'con', 1),
(6, 'El pa', 'o está listo para navidad', 'v', 'b', 2),
(7, 'El ', 'olcan de chiapas se llama chichonal', 'v', 'b', 2),
(8, 'Las ', 'otas de mi papa están limpias', 'b', 'v', 2),
(9, 'Física ', 'pone una rama de las ciencias', 'com', 'con', 1),
(10, 'Los fantasmas son i', 'visibles.', 'n', 'm', 1),
(11, 'En el ', 'plo debemos comportarnos y estar en silencio', 'tem', 'ten', 1),
(12, '¿Recibiste la i', 'vitación para la fiesta?', 'n', 'm', 1),
(13, 'Los psicólogos deben tener ', 'atía con sus pacientes', 'emp', 'enp', 1),
(14, 'en i', 'vierno hace mucho frio.', 'n', 'm', 1),
(15, 'Me tomó años escribir esa ', '.', 'novela', 'nobela', 2),
(16, 'Ese horno no ca', 'e en mi cocina', 'b', 'v', 2),
(17, 'El amor es la ', ' de la felicidad', 'base', 'vase', 2),
(18, 'De ', 'ez en cuando', 'v', 'b', 2),
(19, 'Yo quiero un ', ' de fútbol', 'balón', 'valón', 2),
(20, 'Tenemos muchos ', ' en la ribera del mar.', 'barcos', 'varcos', 2),
(21, '¿Para que sir', 'e esta herramienta?', 'v', 'b', 2),
(22, 'Hacer cru', 'r los nudillos', 'ji', 'gi', 3),
(23, 'Me ', 'sta mucho el helado de chocolate.', 'gu', 'ju', 3),
(24, 'Las ', 'rafas tienen un cuello muy largo', 'ji', 'gi', 3),
(25, 'Galletas de ', 'ngibre', 'ge', 'je', 3),
(26, 'Puedes in', 'rir alimentos en dos horas', 'ge', 'je', 3),
(27, 'una forma social de organización es la ', ' .', 'jerarquía', 'gerarquía ', 3),
(28, 'Mucho ', 'sto.', 'gu', 'ju', 3),
(29, 'co', 'imos el avión a Nueva York', 'g', 'j', 3),
(30, 'El ', ' Mohamed es el más rico de  Dubái ', 'jeque', 'geque', 3),
(31, 'Tengo que ', ' la basura del suelo', 'recoger', 'recojer', 3),
(32, 'Si te lo presto pero con una condi', 'ión', 'c', 'cc', 15),
(33, 'Enciende el proye', 'tor', 'c', 'cc', 15),
(34, 'Tengo infe', 'ión en la garganta', 'cc', 'c', 15),
(35, 'En la escuela habrá inspe', 'ión de mochilas', 'cc', 'c', 15),
(36, 'Mi tía es una a', 'triz de cine', 'c', 'cc', 15),
(37, 'Necesito la ', ' del chip de mi teléfono', ' activación', 'activacción', 15),
(38, 'Mi tarea tiene una buena defini', 'ión', 'c', 'cc', 15),
(39, 'Mi mamá tiene muchos a', 'esorios', 'cc', 'c', 15),
(40, 'La maestra nos dio las califica', 'iones ', 'c', 'cc', 15),
(41, 'Si hacemos fri', 'ión de una roca con una madera se genera fuego', 'cc', 'c', 15),
(42, 'El documento requiere dos ', 'llos', 'se', 'ce', 16),
(43, 'El ', ' es el árbol nacional del Líbano', 'cedro', 'sedro', 16),
(44, 'Yo te ', 'do mi lugar en la fila', 'ce', 'se', 16),
(45, '¿Dónde está el ', 'tor industrial?', 'sec', 'zec', 16),
(46, 'Me gusta la man', 'na verde', 'za', 'sa', 16),
(47, '¿Dónde está mi ', 'pillo de dientes', 'ce', 'se', 16),
(48, 'Corta el papel en ', ' para colocarlo en el adorno', 'zig zag', 'sig sag', 16),
(49, '1 mes tiene 4 ', 'manas.', 'se', 'ce', 16),
(50, 'El ', ' es muy profundo', 'pozo', 'poso', 16),
(51, 'En el ', ' hay muchas estrellas', 'cielo', 'sielo', 16),
(52, '¡Muchas gracias! eres muy ', 'til', 'gen', 'jen', 17),
(53, 'Todas las ', 'rras son terribles', 'gue', 'ge', 17),
(54, 'el mago diri', 'ó su atención a las cartas', 'gi', 'gui', 17),
(55, 'No me gustan los ', 'santes', 'gui', 'gi', 17),
(56, 'Pablo estudia ', 'metría', 'Geo', 'Gueo', 17),
(57, 'Me ce', ' luego de ver una luz muy potente', 'gué', 'gé', 17),
(58, 'Mi  papá toca la ', 'tarra', 'gui', 'gi', 17),
(59, 'Hoy en día, vivimos en un mundo di', 'tal', 'gi', 'gui', 17),
(60, 'Había mucha ', 'te en la fiesta', 'gen', 'guen', 17),
(61, 'El ', 'neral dio la orden', 'ge', 'gue', 17),
(62, 'En el parque quedaron muchos ', '.', 'deshechos', 'desechos', 18),
(63, '¿Tú conoces ', ' mi hermano?', 'a', 'ah', 18),
(64, 'El abuelo nos ', ' contado muchas anécdotas', 'ha', 'a', 18),
(65, '¿Tienes ', '?', 'hambre', 'ambre', 18),
(66, 'Nunca ', ' visitado el museo', 'he', 'e', 18),
(68, 'La ', ' está caliente', 'olla', 'hoya', 18),
(69, 'Las ', ' de lobo llevaban al bosque', 'huellas', 'uellas', 18),
(70, '¿Cómo ', ' conocido a mi gatito?', 'has', 'as', 18),
(71, 'El agua de ', 'está muy rica', 'horchata', 'orchata', 18),
(72, '¡', ' me duele la cabeza!', 'Ay', 'Hay', 18),
(73, 'Acá está la mante', 'uilla.', 'q', 'k', 19),
(74, 'Fue un a', 'cidente terrible', 'c', 'k', 19),
(75, 'La radio está en fre', 'uencia en distintas horas', 'c', 'q', 19),
(76, 'El sol me ', 'uemó la piel', 'q', 'k', 19),
(77, 'yo voy a clases de ', 'arate', 'k', 'c', 19),
(78, 'El ', 'oala duerme mucho', 'k', 'c', 19),
(79, 'Pedro me golpeó en la ', 'uijada', 'q', 'k', 19),
(80, '¿¡Mi tío es un gran ar', 'uero!', 'q', 'k', 19),
(81, 'Esa persona es muy ', 'ruel', 'c', 'k', 19),
(82, 'El supermercado está hacía el o', 'cidente', 'c', 'q', 19),
(83, 'Hacía mucho calor, y mi helado se de', 'tió', 'rri', 'ri', 20),
(84, 'Hoy es el cumpleaños de En', 'que', 'r', 'rr', 20),
(85, 'Manuel, ', 'cardo y yo vamos a la escuela', 'Ri', 'RRi', 20),
(86, 'En ', 'sia hace mucho frio', 'Ru', 'RRu', 20),
(87, '¡Luis pásame el ', 'mo', 're', 'rre', 20),
(88, 'Se ponchó una ', 'da del auto', 'rue', 'rrue', 20),
(89, 'Compré las galletas en la aba', 'tera de Don Joaquín', 'rro', 'ro', 20),
(90, 'Las ', 'sas son hermosas', 'ro', 'rro', 20),
(91, 'Mi tío cocina un a', 'z muy rico', 'rro', 'ro', 20),
(92, '¡Me da mucha ', 'sa!', 'ri', 'rri', 20),
(93, 'Voy a e', 'primir las naranjas para hacer jugo', 'x', 's', 21),
(94, '¡Juguemos a las e', 'condidas!', 's', 'x', 21),
(95, 'Tengo que e', 'cribir la tarea', 's', 'x', 21),
(96, 'El profesor nos pidió una e', 'plicación', 'x', 's', 21),
(97, 'Necesito subir la e', 'calera', 's', 'x', 21),
(98, 'Me siento mal, tengo e', 'calofríos', 's', 'x', 21),
(99, '¿Dónde está la e', 'coba para barrer el piso', 's', 'x', 21),
(100, 'Esta es una figura hex', 'agonal', 'x', 's', 21),
(101, 'El e', 'corpión es un animal muy peligroso', 's', 'x', 21),
(102, 'El homenaje se hizo en la e ', 'planada de la escuela', 'x', 's', 21),
(103, 'El médico revisó las ', 'gas del enfermo', 'lla', 'ya', 22),
(104, '¡Cuidado! Un auto te puede arro', '.', 'yar', 'llar', 22),
(105, 'Se ponchó una ', 'ta de mi auto', 'llan', 'yan', 22),
(106, 'Se perdió la ', 've de la casa', 'lla', 'ya', 22),
(107, 'Martín se ', ' al suelo', 'cayó', 'calló', 22),
(108, 'Nosotros preparamos el desa', 'no para mamá', 'yu', 'llu', 22),
(109, 'La civilización ', ' practicó la astronomía', 'maya', 'malla', 22),
(110, 'A ella no le gusta comer po', '.', 'llo', 'yo', 22),
(111, '¡Tu dibujo es una maravi', '!', 'lla', 'ya', 22),
(112, 'Ojalá no hu', ' dela justicia', 'ya', 'lla', 1),
(113, '¿Cómo se ', 'ma tu perrito?', 'lla', 'ya', 22),
(114, 'El regalo es ', ' ti', 'para', 'por', 4),
(115, 'Te doy un caramelo ', ' tu helado', 'por', 'para', 4),
(116, 'Envíame tus datos ', ' correo electrónico', 'por', 'para', 4),
(117, 'Tengo que terminar el trabajo ', ' la próxima semana', 'para', 'por', 4),
(118, 'He cambiado un billete de $100 pesos ', ' dos billetes de $50 pesos', 'por', 'para', 4),
(119, 'Yo prefiero ir al parque ', ' las tardes', 'por', 'para', 4),
(120, 'La sopa fue hecha ', ' mi abuelo', 'para', 'por', 4),
(121, 'Las llaves estaban ', ' aquí', 'por', 'para', 4),
(122, 'estas gafas son ', ' ver mejor', 'para', 'por', 4),
(123, 'Yo viajo a casa de mis abuelitos dos veces  ', ' semana', 'por', 'para', 4),
(124, 'El pez está dentro ', ' la pecera', 'de', 'del', 23),
(125, 'Mi tía quiere saber ', ' ti', 'de', 'dé', 23),
(126, 'Tenemos que cuidar ', ' enfermo', 'al', 'a', 23),
(127, '¡Dale comida ', ' gatito!', 'al', 'a', 23),
(128, 'Mañana tengo que ir ', ' la casa de mi tío Toño', 'a', 'al', 23),
(129, 'Yo nací el 14 ', ' septiembre', 'de', 'del', 23),
(130, 'Pon las flores encima ', ' mantel', 'del', 'de', 23),
(131, 'El sombrero está encima ', ' caballo', 'del', 'de', 23),
(132, 'Le ofrecí disculpas ', ' mis amigos', 'a', 'al', 23),
(133, 'Pedro le dio un regalo ', ' la mamá de Juan', 'a', 'al', 23),
(134, 'Ellos no han tenido hijos ', ' .', 'aún', 'aun', 24),
(135, 'Ella ', ' está enferma', 'aún', 'aun', 24),
(136, 'Todos iremos de viaje a México, ', ' mi prima Mónica que dijo que no iría', 'aun', 'aún', 24),
(137, 'Mi hermano mayor ', ' vive conmigo y con mis padres', 'aún', 'aun', 24),
(138, 'Nos mudaremos a ese edificio ', ' cuando sabemos que no está a buen precio', 'aun', 'aún', 24),
(139, 'Asiste poca gente al museo de ciencias naturales, ', ' cuando el costo de la entrada es muy bajo', 'aun', 'aún', 24),
(140, 'Falta un poco más pero', ' no llegamos al parque.', 'aún', 'aun', 24),
(141, 'Todos me compraron galletas,  ', ' los que no me conocían', 'aun', 'aún', 24),
(142, 'Un oso adulto puede pesar cien kilos o ', ' más', 'aun', 'aún', 24),
(143, 'Mi hermano menor ', ' usa pañales', 'aún', 'aun', 24),
(144, 'Puedes pintarlo ', ' quieras', 'como', 'cómo', 25),
(145, '¿', 'piensas viajar a Cancún?', 'Cómo', 'Como', 25),
(146, '¿ ', 'pan quieres comprar?', 'Cuánto', 'Cuanto', 25),
(147, 'Tengo unos ', ' minutos para terminar la tarea', 'cuantos', 'cuántos', 25),
(148, 'Ella se llama Ana, ', ' su abuela', 'como', 'cómo', 25),
(149, 'No entiendo ', ' funciona eso', 'cómo', 'Como', 25),
(150, 'Necesito que vengas ', ' antes', 'cuantos', 'cuánto', 25),
(151, 'No te preocupes por el dinero, puedo prestarte ', ' necesites', 'cuanto', 'cuánto', 25),
(152, 'No sé ', ' tiempo vaya a tardar', 'cuánto', 'cuanto', 25),
(153, 'Mira ', ' te ha costado lograr todo esto', 'cuánto', 'cuanto', 25),
(154, 'No sabía ', ' podía haberse escondido', 'dónde', 'donde', 26),
(155, 'Iremos a un hotel ', '  haya piscina', 'donde', 'dónde', 26),
(156, 'A Luis se le olvidó ir ', ' le habían dicho que iría ', 'adonde', 'adónde', 26),
(157, 'Mi papá no decidía todavía a', ' ir de vacaciones', 'dónde', 'donde', 26),
(158, 'Luego del trabajo, fue ', ' su madre lo esperaba', 'adonde', 'adónde', 26),
(159, 'Ponga ese adorno ', ' se vea mejor', 'donde', 'dónde', 26),
(160, '¿ ', ' estabas? Llevo todo el día buscándote', 'Dónde', 'Donde', 26),
(161, 'Me gustaría mudarme, pero no sé ', ' .', 'adónde', 'adonde', 26),
(162, 'Caminaremos hacia ', 'propongas', 'donde', 'dónde', 26),
(163, 'Aunque había puesto el coche en marcha, no sabía ', ' se dirigía', 'adonde', 'adónde', 26),
(168, 'Dejé mis dientes bajo la almohada para que se lo lleve ', ' hada de los dientes', 'el', 'la', 27),
(169, 'Mi  mamá me compró ', ' helado que me gusta', 'el', 'la', 27),
(170, 'Mi tía se ganó ', ' cafetera que estaba en la rifa', 'la', 'el', 27),
(171, 'A mi hermano le regalaron una paleta en ', ' tienda de don  Paco', 'la', 'el', 27),
(172, 'Los astronautas viajan a ', ' luna', 'la', 'el', 27),
(173, 'Comienza el día cuando sale ', ' sol', 'el', 'la', 27),
(174, 'A mi vecina se le perdió ', ' llave de su auto', 'la', 'el', 27),
(175, 'Mi mamá me pidió que le pasara ', ' salero para su comida', 'el', 'la', 27),
(176, 'Mueve la estufa a ', ' cocina', 'la', 'el', 27),
(177, '¿', 'cuándo vas a estar aquí? ', 'Hasta', 'Hacia', 28),
(178, 'No podemos vivir ', ' oxígeno', 'sin', 'con', 28),
(179, 'No puedes irte ', ' que termines la cena', 'hasta', 'hacia', 28),
(180, 'María se divierte ', ' su abuela', 'con', 'sin', 28),
(181, 'Juan está jugando ', ' su amigos', 'con', 'sin', 28),
(182, 'El tren se dirige  ', ' el sur', 'hacia', 'hasta', 28),
(183, 'No puedo dormir bien ', ' mi cobija', 'sin', 'con', 28),
(184, 'Estaremos en San Cristóbal de las Casas ', 'Navidad', 'hasta', 'hacia', 28),
(185, 'Pablo miró ', ' las montañas', 'hacia', 'hasta', 28),
(186, 'Puedes venir ', ' tus amigos a la fiesta', 'con', 'sin', 28),
(187, 'Quiero ', ' vengas a mi fiesta', 'que', 'qué', 29),
(188, 'Disculpa, no oigo lo ', ' dices', 'que', 'qué', 29),
(189, 'Cada ', ' se ocupa de sus problemas', 'quien', 'quién', 29),
(190, '¿', ' hora es?', 'Qué', 'Que', 29),
(191, '¡', 'juguete tan bonito!', 'Qué', 'Que', 29),
(192, '¿', 'es ese señor?', 'Quién', 'Quien', 29),
(193, '¡', ' día tan bonito!', 'Qué', 'Que', 29),
(194, 'Nos interesa saber ', ' eres', 'quién', 'quien', 29),
(195, 'Este es Juan, el amigo de ', ' te he hablado tanto', 'quien', 'quién', 29),
(196, 'Por favor, no dejen pasar a ', 'llegue tarde', 'quien', 'quién', 29),
(197, 'Por favor, avísame ', ' te quedas', 'si', 'sí', 30),
(198, 'Ese es ', ' libro', 'mi ', 'mí', 30),
(199, 'No vayas a la feria sin ', '.', 'mí', 'mi', 30),
(200, 'Pienso que ', ' podemos lograrlo', 'sí', 'si', 30),
(201, 'María es ', ' hermana y vive en Campeche', 'mi', 'mí', 30),
(202, 'Mi tía se prepara un ', ' de manzanilla', 'té', 'te', 30),
(203, 'Ahora ', ' creo  lo que me habías dicho', 'te', 'té', 30),
(204, 'Sandra compró una camisa para', '.', 'él', 'el', 30),
(205, 'Aquel que gane, se llevará ', 'premio mayor', 'el', 'él', 30),
(206, 'Para ', ' nada estaba perdido', 'él ', 'el', 30),
(207, '¿', ' quieres venir al cine con nosotros?', 'Tú', 'Tu', 31),
(208, 'El autobús pasa por ', ' casa cada media hora', 'tu', 'tú', 31),
(209, 'A Carlos y Tatiana ', 'les hizo un hermoso obsequio', 'se', 'sé', 31),
(210, 'Ángel es el niño ', ' tranquilo de toda la escuela', 'más', 'mas', 31),
(211, 'Mi mamá dice que se siente mejor, ', ' yo la veo cansada', 'mas ', 'más', 31),
(212, 'El jardín de ', ' casa está cada día más bello', 'tu', 'tú', 31),
(213, 'Vamos a la tienda a comprar dulces y ', ' los eliges', 'tú', 'tu', 31),
(214, 'Mañana tengo examen y no ', ' como me vaya', 'sé', 'se', 31),
(215, 'Siempre ', ' honesto contigo y con los demás', 'sé', 'se', 31),
(216, 'Valentina y Tadeo ', ' compraron un helado', 'se', 'sé', 31),
(217, 'Mi gato es b', 'no', 'ue', 'ué', 32),
(218, 'Hub', 'ramos llegado pronto', 'ié', 'íe', 32),
(219, 'Desp', 's regreso', 'ué', 'ue', 32),
(220, 'V', 'je de vacaciones', 'ia', 'ía', 32),
(221, 'sensac', 'n', 'ió', 'ío', 32),
(222, 'Cumple diecis', 's años', 'éi', 'ei', 32),
(223, 'T', 'rra de muchas frutas', 'ie', 'íe', 32),
(224, 'G', 'rdar', 'ua', 'uá', 32),
(225, 'infus', 'n', 'ió', 'io', 32),
(226, 'Helado de v', 'nilla', 'ai', 'ái', 32),
(227, '¡Juguemos ', '!', 'dominó', 'dómino', 34),
(228, 'Es una bonita ', '.', 'edición', 'edicion', 34),
(229, 'Fernando vive en ', '.', 'Panamá', 'Pánama', 34),
(230, 'El ', ' de los juguetes', 'baúl', 'baul', 34),
(231, 'a mi ', ' me gusta mucho el chocolate', 'también', 'tambien', 34),
(232, 'La ', ' fue terrible', 'Explosión', 'explosion', 34),
(233, '¡Cuál ', ' prefieres?', 'opción', 'opcíon', 34),
(234, 'Andrés ', ' una carta al director', 'escribirá', 'escribira', 34),
(235, 'Mi papá le regaló un ', ' a mamá', 'collar', 'collár', 34),
(236, 'Este ', ' está muy sucio', 'pantalón', 'pantalon', 34),
(237, 'No entiendo estas ', ' matemáticas', 'fórmulas', 'formúla', 35),
(238, 'El mundo ', ' tiene una historia fascinante', 'árabe', 'arábe', 35),
(239, 'me duele mucho los ', '.', 'músculos', 'musculos', 35),
(240, 'Visitaremos las ', ' de Egipto', 'pirámides', 'piramides', 35),
(241, 'El auto de papá corre más ', ' que el de mamá', 'rápido', 'rapído', 35),
(242, 'Memo se graduará de ', '.', 'médico', 'medico', 29),
(243, 'Vamos a ver una ', ' esta noche', 'película', 'pelicula', 35),
(244, 'La ', ' está dañada', 'lámpara', 'lampára', 35),
(245, 'Sofía es ', ' a su abuela', 'idéntica', 'identica', 35),
(246, 'Este jugo está muy ', '.', 'ácido', 'acido', 35),
(247, 'Iker se graduará de ', '.', 'médico', 'medico', 35),
(248, '¿Me prestas tu ', ' por favor?', 'libro', 'líbro', 36),
(249, 'El agua llegó hasta el', 'de la casa', 'techo', 'techó', 36),
(250, 'Necesitas comprar un ', ' nuevo', 'cuaderno', 'cuáderno', 36),
(251, 'El río ', ' es el más largo del mundo', 'Amazonas', 'Ámazonas', 36),
(252, 'En el zoológico hay tres ', '.', 'elefantes', 'élefantes', 36),
(253, 'Me voy a sentar en su', '.', 'silla', 'sílla', 36),
(254, 'Este ', ' es muy oscuro', 'tunel', 'túnel', 36),
(255, 'El ladrón se lo llevan a la ', '.', 'cárcel ', 'carcel', 36),
(256, 'Tienen que tomar el ', ' más corto', 'camino', 'camíno', 36),
(257, 'No olvides pasar por el ', '.', 'banco', 'bánco', 36),
(258, 'María estudió en la ciudad de ', '.', 'Nueva York', 'nueva york', 37),
(259, 'Mi tía se fue a vivir a la ciudad de ', '.', 'Monterrey', 'monterrey', 37),
(260, 'Mi mamá le mandó un suéter a mi papá hasta el estado de ', ' porque hace mucho frío', 'Puebla', 'puebla', 37),
(261, 'Mi papá nos llevó a la ciudad de ', ' para visitar el acuario', 'Veracruz', 'VeraCruz', 37),
(262, 'En estas vacaciones viajaré a ', ' porque visitaré a mi abuela', 'Guanajuato', 'guanajuato', 37),
(263, 'Mi tío llegó de ', ' y me trajo cajeta', 'Celaya', 'celaya', 37),
(264, 'Cuando regresé de vacaciones de ', ' le traje un recuerdito a mi maestra', 'Guadalajara', 'guadalajara', 37),
(265, 'Mi maestro se fue de vacaciones a ', ' y visitó las piramides', 'Egipto', 'egipto', 37),
(266, 'En ', ' se encuentra el edificio más grande del mundo', 'Dubai', 'dubai', 37),
(267, 'A ', ' se le conoce como la Ciudad de la Luz', 'París', 'parís', 37),
(268, 'El trabajo que entregó ', ' es excelente', 'Karla', 'karla', 38),
(269, 'Ese regalo se lo dieron a ', ' por su cumpleaños', 'David', 'david', 38),
(270, 'El papá de ', ' se compró un auto color rojo', 'Raúl', 'raúl', 38),
(271, 'Fui al supermercado y me encontré a mi amigo ', ' justo en el departamento de juguetes', 'Eduardo', 'eduardo', 38),
(272, 'Me invitaron a la fiesta de ', '.', 'Andrés ', 'andrés', 38),
(273, 'a mí y a ', ' nos regalaron un helafo', 'Manuel', 'manuel', 38),
(274, 'La mascota de ', ' es una tortuga', 'Rodolfo', 'rodolfo', 38),
(275, 'A mi amigo ', ' le gustan los caballos', 'Alonso', 'alonso', 38),
(276, 'El color favorito de ', ' es el amarillo', 'Arturo', 'arturo', 38),
(277, 'A ', ' le gusta mucho el fútbol', 'Lucas', 'lucas', 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userxwz`
--

CREATE TABLE `userxwz` (
  `Id` int(11) NOT NULL,
  `usuario` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `Tipo` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `Nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `userxwz`
--

INSERT INTO `userxwz` (`Id`, `usuario`, `password`, `Tipo`, `Nombre`) VALUES
(1, 'admin', 'admin', 'Administrador', 'Mtra. María José Cabrera Estrada'),
(2, 'local', 'local', 'Profesor', 'Profesor Oscarx'),
(3, 'alumno', 'alumno', 'Alumno', 'Fernando Díaz');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla1`
--
ALTER TABLE `tabla1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla2`
--
ALTER TABLE `tabla2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userxwz`
--
ALTER TABLE `userxwz`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tabla1`
--
ALTER TABLE `tabla1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tabla2`
--
ALTER TABLE `tabla2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT de la tabla `userxwz`
--
ALTER TABLE `userxwz`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id`) REFERENCES `test` (`id`);

--
-- Filtros para la tabla `userxwz`
--
ALTER TABLE `userxwz`
  ADD CONSTRAINT `userxwz_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `inicio` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
