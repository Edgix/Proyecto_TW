-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2020 a las 08:56:20
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `domingo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `idContenido` int(11) NOT NULL,
  `idPelicula` int(11) NOT NULL,
  `idSerie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `correo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tarjeta` bigint(20) NOT NULL,
  `fechaEx` date NOT NULL,
  `contrasenia` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idCuenta` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `idPelicula` int(11) NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Duracion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Genero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `idGenero` int(11) NOT NULL,
  `Clasificacion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Sinopsis` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idPelicula`, `Titulo`, `Imagen`, `Duracion`, `Genero`, `idGenero`, `Clasificacion`, `Sinopsis`) VALUES
(1, 'El diario de una pasión ', 'diario_pacion.jpg', '124', 'Drama', 3, 'B', 'A Allie Hamilton una chica que proviene de familia adinerada, le importa muy poco que el chico que conoce en Seabrook, durante las vacaciones de verano, se gane la vida de forma humilde como empleado de una fábrica de madera. '),
(2, 'La ouija', 'ouija.jpg', '86', 'Terror', 4, 'B', 'Después de que uno de sus amigos sea brutalmente asesinado por un malvado ente oscuro, un grupo de amigos juega a la ouija para intentar hablar con él desde el más allá. '),
(3, '3 metros sobre el cielo', '3metros.jpg', '120', 'Drama', 3, 'B', 'Babi y H son un chico y una chica que no tienen nada que ver el uno con otro. Ella pertenece a una familia adinerada que quiere para su hija al mejor hombre que pisa la Tierra. Él es un chico de barrio que, montado en su moto, recorre la vida a toda velocidad.'),
(4, 'Avengers end game', 'endgame.jpg', '181', 'Acción', 1, 'A', 'Después de los eventos devastadores de \'Avengers: Infinity War\', el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. '),
(5, 'Infinity war', 'infinity.jpg', '151', 'Acción', 1, 'A', 'El todopoderoso Thanos ha despertado con la promesa de arrasar con todo a su paso, portando el Guantelete del Infinito, que le confiere un poder incalculable. Los únicos capaces de pararle los pies son los Vengadores y el resto de superhéroes de la galaxia, que deberán estar dispuestos a sacrificarlo todo por un bien mayor. '),
(6, 'XOXO', 'xoxo.jpg', '92', 'Drama', 3, 'B', 'XOXO es una película sobre un grupo de veinteañeros que se juntan en el festival de música tecno más importante de Estados Unidos. La película narra las historias de seis desconocidos que persiguen sus sueños y se cruzan en una noche frenética e irremediablemente romántica. '),
(7, 'Atlético san pancho', 'atletico.jpg', '120', 'Comedia', 2, 'A', 'San Francisco del Monte, pueblo cien por ciento minero y cuna del fútbol mexicano, se distinguió durante décadas por ser semillero de estrellas del balompié nacional, sin embargo hace años que la pasión por el futbol ha desaparecido y con ella se fueron los campeonatos y la alegría de este deporte.'),
(8, 'Capitán américa', 'capitan_america.jpg', '125', 'Acción', 1, 'A', 'Nacido durante la Gran Depresión (años 30), Steve Rogers creció como un chico enclenque en una familia pobre. Horrorizado por las noticias que llegaban de Europa sobre los nazis, decidió enrolarse en el ejército; sin embargo, debido a su precaria salud, fue rechazado una y otra vez. '),
(9, 'Thor', 'thor.jpg', '110', 'Acción', 1, 'A', 'Thor es un arrogante y codicioso guerrero cuya imprudencia desata una antigua guerra. Por ese motivo, su padre Odín lo castiga desterrándolo a la Tierra para que viva entre los hombres y descubra así el verdadero sentido de la humildad. '),
(10, 'Iron man', 'ironman.jpg', '126', 'Acción', 1, 'A', 'El multimillonario fabricante de armas Tony Stark debe enfrentarse a su turbio pasado después de sufrir un accidente con una de sus armas. '),
(11, 'Ride', 'ride.jpg', '76', 'Terror', 4, 'B', 'Una noche en Los Ángeles se convierte en una guerra psicológica de supervivencia cuando un conductor de Uber, James y su pasajera, Jessica, recogen a Bruno, que es carismático pero manipulador.'),
(12, 'Golpe bajo', 'Golpe_bajo.jpg', '153', 'Comedia', 2, 'B', 'El ex jugador del fútbol americano Paul Crewe, es enviado a prisión y siente que su vida ha acabado. Pero todo cambia cuando le piden organizar un equipo con los reclusos, quienes deberán enfrentar a los guardias en un alocado juego sin reglas.'),
(13, 'Amigos de armas', 'Amigos_de_armas.jpg', '114', 'Comedia', 2, 'A', 'Dos amigos deciden apostar a un negocio sospechoso: un contrato de gobierno por USD 300 millones para venderles armas a los aliados estadounidenses de Afganistán.'),
(14, 'Vivir dos veces', 'Vivir_dos_veces.jpg', '101', 'Comedia', 2, 'A', 'Emilio descubre que tiene Alzheimer y decide embarcarse con la familia en una ultima aventura: encontrar a su amor de la infancia.'),
(15, 'Ese es mi hijo', 'Ese_es_mi_hijo', '114', 'Comedia', 2, 'A', 'Fue un padre de muy joven llamo a su hijo Han Solo. Ahora quiere no estar solo y unos cuantos billetes.'),
(16, 'Son como niños', 'Son_como_niños.jpg', '102', 'Comedia', 2, 'A', 'Cinco excompañeros de la escuela que nunca crecieron en realidad se encuentran. ¿Habra algo que los pueda cambiar?'),
(17, 'Son como niños 2', 'Son_como_niños_2.jpg', '101', 'Comedia', 2, 'A', 'Ellos dicen que no podras volver a casa. Leny esta por descubrir que “ellos” sabían de lo que estaban hablando.'),
(18, 'Cuando te encuentre', 'te_encuentre.jpg', '120', 'Drama', 3, 'B', 'Gardner Elliot es el primer ser humano nacido en Marte, hijo de una astronauta que se embarcó en una misión espacial. El joven solo ha conocido a catorce personas en sus dieciséis años de vida, y ni siquiera sabe quién es su padre. '),
(19, 'Siete almas', 'Siete_almas.jpg', '123', 'Drama', 3, 'B', 'Todo comienza con una lista de siete nombres. Lo único que todos tienen en común es que cada uno de ellos han llegado a un punto en sus vidas en que necesitan ayuda desesperadamente, financiera, espiritual o médica y que, sin saberlo, han sido elegidos cuidadosamente por Ben Thomas (Will Smith) para formar parte de su plan de redención.'),
(20, '¿No es romantico?', 'No_es_romantico.jpg', '89', 'Drama', 3, 'B', 'La arquitecta Natalie desarrolla un fuerte odio por las comedias románticas a una edad temprana, lo que se ve exacerbado por su baja autoestima y la dificultad para encontrar el amor. '),
(21, 'El stand de los besos', 'El_stand.jpg', '105', 'Drama', 3, 'A', 'lle Evans es una estudiante de preparatoria de 16 años que ha intentado pero nunca ha sido besada, para la recaudación de fondos, Elle y Lee deciden poner un puesto de besos sin imaginar que terminaría besando a Noah  el chico más guapo y popular de su escuela. '),
(22, 'Nuestros amantes', 'Nuestros_amantes.jpg', '88', 'Drama', 3, 'B', 'Carlos es un guionista frustrado profesionalmente al que la vida le parece una carga. Un día conoce a Irene por casualidad y su vida cambia. Irene es una chica alegre, soñadora y divertida que le propone un juego al que Carlos no podrá resistirse. '),
(23, 'Ricos de amor', 'Ricos_de_amor.jpg', '104', 'Drama', 3, 'A', 'Teto trabaja de incógnito en la próspera empresa de su padre para demostrar su valía. Cuando se enamora de Paula, se inventa un pasado y la mentira se le va de las manos.'),
(24, 'Los ultimos dias del crimen', 'Los_ultimos.jpg', '148', 'Acción', 2, 'B', 'En un futuro no muy lejano, el Gobierno de los Estados Unidos planea activar una señal para detener todo comportamiento delictivo. Un ladrón se suma a un plan para dar el último golpe que pasará a la historia.'),
(25, 'Batman vs Superman', 'Batman_superman.jpg', '182', 'Acción', 2, 'A', 'Dieciocho meses después de la batalla entre Superman y el General Zod en Metrópolis, Superman se ha convertido en una figura polémica. El multimillonario Bruce Wayne, que ha operado en Gotham City como el vigilante Batman durante veinte años, ve a Superman como una amenaza extraterrestre para la humanidad.'),
(26, 'Mision maxima seguridad', 'Mision.jpg', '111', 'Acción', 2, 'B', 'El operativo de fuerza del FBI mata a los ladrones y al joven James. Jeffries enfrenta a sus superiores, quienes le dicen que se reporte a Washington.'),
(27, 'Guerra mundial z', 'Guerra_mundial.jpg', '116', 'Acción', 2, 'A', 'Gerry Lane, antiguo trabajador de las Naciones Unidas, está en el coche con su familia, en Filadelfia, cuando de repente se desata el caos en la ciudad. '),
(28, 'Yo antes de ti', 'Yo_antes_de_ti.jpg', '110', 'Drama', 3, 'A', 'Louisa \"Lou\" Clark (Emilia Clarke) es una entusiasta, parlanchina, ingenua y alegre veinteañera que jamás ha salido de su pueblo, y que debe buscar urgentemente un trabajo para mantener a su familia. '),
(29, 'Mision: Seguridad maxima', 'Mision.jpg', '111', 'Acción', 1, 'B', 'La película comienza con una situación de secuestro en Dakota del Sur donde un agente del FBI, Art Jeffries, quien como agente encubierto protege a un joven de 26 años de edad llamado James, intenta conversar con un ladrón de banco llamado Edgar Halstrom en orden a que se rinda.'),
(30, 'Guerra mundial z', 'Guerra_mundial.jpg', '116', 'Acción', 1, 'A', 'Gerry Lane, antiguo trabajador de las Naciones Unidas, está en el coche con su familia, en Filadelfia, cuando de repente se desata el caos en la ciudad. '),
(31, 'Una noche para sobrevivir', 'Una_noche.jpg', '114', 'Acción', 1, 'A', 'Atormentado por los fantasmas de su pasado, el exmafioso irlandés Jimmy \"El Sepulturero\" Conlon se ha convertido en un borracho temperamental, incapaz de relacionarse con su hijo Mike, un boxeador profesional retirado que es mentor de niños en riesgo en el gimnasio local. '),
(32, 'Narnia', 'Narnia.jpg', '150', 'Acción', 1, 'A', 'Cuatro niños viajan a través de un ropero a la tierra de Narnia, donde vivirán increíbles aventuras con la ayuda del león Aslan.'),
(33, 'Mi villano favorito', 'Mi_Villano.jpg', '98', 'Comedia', 2, 'A', 'Un vehículo misterioso usando un enorme imán roba un mutágeno muy potente conocido como PX-41 de un laboratorio secreto en el Círculo Polar Ártico. La Liga Anti-Villain League (abreviado AVL) reclutar al ex supervillano, Gru, para encontrar quien robó el mutágeno.'),
(34, 'Inmensamente', 'Inmensamente.jpg', '98', 'Comedia', 2, 'A', 'Riley Anderson es una niña de 11 años nacida en Minesota que a lo largo de toda su vida ha llevado un crecimiento emocional bastante saludable gracias a que la emoción que más la predomina, Alegría se asegura de que sea una niña optimista casi todo el tiempo. '),
(35, 'Escalofrios', 'Escalofrios.jpg', '103', 'Comedia', 2, 'A', 'Después de la reciente muerte de su padre, Zach Cooper (Dylan Minnette) y su madre Gale (Amy Ryan) se mudan desde la ciudad de Nueva York al pacífico pueblo de Madison, Delaware. '),
(36, 'El cadaver de la novia', 'El_cadaver.jpg', '76', 'Comedia', 2, 'A', 'La película se sitúa en un frío y triste pueblo de la época victoriana. Cuenta la historia de un muchacho virtuoso e inteligente llamado Victor Van Dort, hijo de los pescaderos Nell y William Van Dort, quienes se convirtieron en una familia de nuevos ricos. '),
(37, 'Bee movie', 'Bee_movie.jpg', '90', 'Comedia', 2, 'A', 'Una joven abeja llamado Barry B. Ben son (Jerry Seinfeld) se graduó recientemente de la universidad y está a punto de ingresar a la fuerza de trabajo de la colmena Industrias Honex .'),
(38, 'Kung fu panda', 'Kung_fu_panda.jpg', '95', 'Comedia', 2, 'A', 'El panda Po trabaja en la tienda de fideos de su familia y sueña en convertirse en un maestro del kung-fu. Su sueño se hace una realidad cuando es inesperadamente elegido para cumplir una antigua profecía y debe estudiar artes marciales con sus ídolos, los Cinco Furiosos.'),
(39, 'Bob esponja la pelicula', 'Bob_esponja.jpg', '81', 'Comedia', 2, 'A', 'Esa noche, Bob Esponja ahoga sus penas en un helado con su mejor amigo Patricio Estrella. En otra parte, Plankton roba la corona del Rey Neptuno, dejando pruebas falsas para incriminar a Don Cangrejo por el crimen, y envía la corona a la tierra lejana de Ciudad Almeja. '),
(40, 'Toy story', 'Toy_story.png', '81', 'Comedia', 2, 'A', 'La historia sigue las aventuras de un grupo de juguetes vivientes, en particular del vaquero Woody y el guardián espacial Buzz Lightyear. Si bien al principio rivalizan entre sí, conforme transcurre la trama se van volviendo amigos.  '),
(41, 'Toy_story_2', 'Toy_story_2.jpg', '92', 'Comedia', 2, 'A', 'En el apartamento de Al, Woody descubre que es un artículo valiosísimo de colección de \"El Rodeo de Woody\", un programa infantil popular de los años cuarenta y conoce a otros juguetes de la franquicia: la comisaria Jessie, Tiro al Blanco, su caballo fiel y Capataz, quien se encuentra aún sellado en su caja. '),
(42, 'Madagascar', 'Madagascar.png', '82', 'Comedia', 2, 'A', 'Ya de noche el león, la hipopótamo y la jirafa le hacen una fiesta de cumpleaños sorpresa a Marty. Marty les dice su deseo de cumpleaños a los 3, ya que estaban insistiendo, su verdadero deseo era ir a la jungla, todos le decían que era una locura y Marty se entristeció, luego de la fiesta Alex es obligado a hablar con Marty, Marty le dice que sólo era una broma para no preocupar a Alex, Gloria y Melman. '),
(43, 'Mini espias', 'Mini_espias.jpg', '88', 'Acción', 1, 'A', 'Diez años después, la familia se enfrenta a algunos problemas. A Carmen le divierte atormentar a su hermano menor, quien tras del hecho no tiene muchos amigos. De hecho, la única entretención que Juni tiene en su vida era ver su programa favorito: \"Los Fooglies de Floop\", un programa para niños dirigido por un hombre llamado Fegan Floop '),
(44, 'Mini espias 2', 'Mini_espias_2.jpg', '101', 'Acción', 1, 'A', 'Carmen y Juni han logrado el nivel 2 como agentes de la OSS, y están a punto de afrontar su primera misión en solitario, o al menos así lo creen ellos. Sin embargo, esta vez va a ser necesaria toda la familia —y más tarde algunos más— para salvar al mundo de una misteriosa isla volcánica que habita un científico loco y su imaginativo zoo poblado de increíbles criaturas.'),
(45, 'La casa de cera', 'La_casa_de_cera.jpg', '113', 'Terror', 4, 'B', 'En el campamento de los chicos, Nick y Dalton comienzan a cansarse de esperar a Carly y Wade por lo que se dirigen al pueblo a pie, mientras que Paige y Blake aprovechan la oportunidad para estar solos. '),
(46, 'Silencio', 'Silencio.jpg', '161', 'Terror', 4, 'B', 'Dos sacerdotes jesuitas portugueses que se enfrentan a una persecución violenta cuando viajan al Japón de 1640, a buscar a su mentor para difundir las enseñanzas del cristianismo.'),
(47, 'El conjuro 2', 'El_conjuro_2.jpg', '134', 'Terror', 4, 'C', '6 años después de los terroríficos eventos de The Conjuring La película comienza en Amityville, Nueva York, donde Ed y Lorraine Warren trabajan intentando solucionar un caso. Lorraine se transporta a un plano astral en donde intenta encontrar el motivo de por qué hubo tantos asesinatos en esa morada, pero al seguir a un niño, se encuentra con una extraña entidad en forma de monja dentro de un espejo que anuncia la muerte de Ed.'),
(48, 'El conjuro', 'El_conjuro.jpg', '112', 'Terror', 4, 'B', 'En 1971, Roger y Carolyn Perron son un matrimonio que se traslada con sus cinco hijas a una granja en Harrisville. El primer día como propietarios resulta ser idílico a excepción del extraño comportamiento de su perra Sadie, el cual se niega a entrar y empieza a ladrar; por otro lado, una de las hijas rompe sin querer un tablón de la pared y descubren un sótano y una de las hijas (la menor) encuentra una caja musical extraña.'),
(49, 'Los elegidos', 'Los_elegidos.jpg', '97', 'Terror', 4, 'C', 'Un día, Lacy descubre comida esparcida por el suelo de la cocina y otros objetos dispuestos en un orden específico, Sammy le dice que el Sandman lo hizo antes de llegar a su habitación. Daniel y Lacy limpian el desorden pero su preocupación se incrementa ya que los incidentes se hacen cada vez más frecuentes.'),
(50, 'Actividad paranormal', 'Actividad.jpg', '86', 'Terror', 4, 'B', 'Él dice que el demonio se alimenta de energía negativa y su intención es atormentar a Katie sin importar dónde vaya. Él aconseja ponerse en contacto con el demonólogo Dr. Johann Abrams. Aunque Katie parece interesada en la situación, Micah no lo toma en serio.'),
(51, 'La noche del demonio', 'La_noche.png', '102', 'Terror', 4, 'C', 'Dalton es trasladado a su casa, todavía en estado de coma. Renai cree que la casa está encantada cuando ella comienza a ver y escuchar a gente en la casa. Ella le cuenta a Josh acerca de los acontecimientos y la familia pronto se traslada a casa de la madre de Josh.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idioma` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `idCuenta` int(11) NOT NULL,
  `idContenido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `idSerie` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Temporada` int(11) NOT NULL,
  `Capitulo` int(11) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `Clasificacion` varchar(10) NOT NULL,
  `sinopsis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`idSerie`, `Titulo`, `Imagen`, `Temporada`, `Capitulo`, `Genero`, `idCategoria`, `Clasificacion`, `sinopsis`) VALUES
(1, 'After Life', 'after_life.jpg', 5, 7, 'accion', 1, 'B', 'Después de un terrible accidente, una mujer despierta para descubrir que el director de una funerari'),
(2, 'Mavel: Agents of shield', 'agents_shield.jpg', 6, 11, 'Accion', 1, 'B', 'Después del ataque de los Chitauri a la Tierra, el resucitado agente Phil Coulson forma un equipo de'),
(3, 'Altered Carbon', 'altered_carbon.jpg', 2, 4, 'Drama', 3, 'C', 'Muestra una visión distópica del futuro, en el que grandes avances tecnológicos'),
(4, 'Billions', 'billions.jpg', 5, 8, 'Drama', 3, 'C', 'En el mundo de las altas finanzas, nada es lo que parece.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`idContenido`),
  ADD KEY `fk_contenido_pelicula1_idx` (`idPelicula`),
  ADD KEY `fk_contenido_serie1_idx` (`idSerie`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idCuenta`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idPelicula`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`),
  ADD KEY `fk_perfil_cuenta_idx` (`idCuenta`),
  ADD KEY `fk_perfil_contenido1_idx` (`idContenido`);

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`idSerie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `idContenido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `idCuenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `idSerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD CONSTRAINT `fk_contenido_pelicula1` FOREIGN KEY (`idPelicula`) REFERENCES `pelicula` (`idPelicula`),
  ADD CONSTRAINT `fk_contenido_serie1` FOREIGN KEY (`idSerie`) REFERENCES `serie` (`idSerie`);

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `fk_perfil_contenido1` FOREIGN KEY (`idContenido`) REFERENCES `contenido` (`idContenido`),
  ADD CONSTRAINT `fk_perfil_cuenta` FOREIGN KEY (`idCuenta`) REFERENCES `cuenta` (`idCuenta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
