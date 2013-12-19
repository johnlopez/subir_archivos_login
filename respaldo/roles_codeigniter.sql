-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2013 a las 13:43:30
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `roles_codeigniter`
--
CREATE DATABASE IF NOT EXISTS `roles_codeigniter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `roles_codeigniter`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `ruta` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`ruta`, `titulo`) VALUES
('Tabla7.pdf', ''),
('Tabla8.pdf', ''),
('Prueba_Ensayo_DSC_-_Ayudantia.pdf', ''),
('89632_tarea_1_ayudantia.pdf', ''),
('Guia_de_Ejercicios_con_Nota.pdf', ''),
('Presentacion_Hashing.pdf', ''),
('89159_Tarea1ING.pdf', ''),
('Tabla.pdf', ''),
('90685_puntosxfuncion.pdf', ''),
('Prueba_Ensayo_DSC_-_Ayudantia.pdf', ''),
('ficha.pdf', ''),
('ficha1.pdf', 'super');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectotitulo`
--

CREATE TABLE IF NOT EXISTS `proyectotitulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `resumen` text NOT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Volcado de datos para la tabla `proyectotitulo`
--

INSERT INTO `proyectotitulo` (`id`, `titulo`, `autor`, `fecha`, `descripcion`, `resumen`, `ruta`, `hora`) VALUES
(75, 'Influencia de las normas de origen en las exportaciones de bienes: el caso de los muebles de madera', 'Soto Aguirre, Daniel Alberto', '2013-12-06', 'Magíster en Estrategia Internacional y Política Comercial No autorizada por el autor para ser publicada a texto completo', 'Una de las ganancias más claras entre países que suscriben un Acuerdo Comercial es el acceso de bienes con tratamiento preferencial, pero para beneficiarse de ellas existe una condicionante que son las normas de origen. Si estas normas de origen no se cumplen, entonces no hay acceso al trato preferencial. En ese contexto, este estudio trata el problema del cumplimiento de la norma de origen establecidas en los Acuerdos Comerciales que ha firmado Chile con seis países, focalizándose en las normas de origen aplicadas a los muebles de madera. Para ello, se realiza un análisis descriptivo, relacionando las condiciones de acceso preferencial que se da con estos países, las características de la regla de origen, la evolución de las exportaciones de Chile y algunos factores que influyen en los flujos de comercio.\r\n Con tres de los seis países, Perú, Colombia y Ecuador, las exportaciones de muebles de madera evolucionaron positivamente con los años y, en ellos, la regla de origen establecida para los muebles se considera que no desfavoreció el flujo comercial, la cual fue identificada como una regla poco restrictiva, correspondiendo al modelo ALADI. Con Argentina, donde las exportaciones chilenas de muebles fueron disminuyendo en el tiempo, la regla de origen pudo jugar un rol negativo, considerando que el tipo de norma existente en ese acuerdo fue identificada como una más restrictiva. Con México y Panamá, la relación es poco clara, ya que la evolución de las exportaciones se contrapone con la existencia de una regla muy restrictiva en el primer país, y una poco restrictiva, en el segundo.\r\nOne of clearest profits among countries that arrange a trade agreement is the market access of goods with preferential treatment, but in order to get benefits from them there is a condition that are the rules of origin. If these rules of origin are not fulfilled, then there is no access to the preferential treatment. In that context, this study deals with the problem of accomplishment of the rules of origin stated in the trade agreements that Chile has signed with six countries, focusing on rules of origin applied to the wooden furniture. To do this, a descriptive analysis is carried out relating the preferential access condition between Chile and these countries, the characteristics of the rule of origin, the evolution of the Chilean exports and some factors that influence on the commercial flows.\r\n With three of the six countries, Peru, Colombia and Ecuador, the exportations of the wooden furniture evolved positively through the years and, in them, the rules of origin established for the furniture is considered it did not disfavored the commercial flow, which was identified as a little restrictive rule, corresponding to the model ALADI. With Argentina, where Chilean exports of furniture were decreasing trough time, the rule of origin could play a negative role, considering that the kind of existing rule in that agreement was identified as a more restrictive one. With Mexico and Panama, the relation is not very clear, since the evolution of exportations is opposed against the existence of a very restrictive rule in the first country and a little restrictive rule in the second one.', 'influencia_tesis.pdf', '16:31:21'),
(76, 'Estudio del mercado del carbono en Chile', 'Greenhill Gálvez, Karen', '2013-12-06', 'Magíster en Estrategia Internacional y Política Comercial No autorizada por el autor para ser publicada a texto completo', 'Actualmente no existen dudas de la existencia del Cambio Climático y que somos los\r\n humanos quienes aceleramos este proceso. Líderes y científicos alrededor del mundo le\r\n reconocieron al Grupo Intergubernamental de Expertos sobre el Cambio Climático (en adelante\r\n IPCC por sus siglas en inglés) en su informe Climate Change 2007:\r\n El calentamiento del sistema climático es inequívoco, como evidencian\r\n ya los aumentos observados del promedio mundial de la temperatura del\r\n aire y del océano, el deshielo generalizado de nieves y hielos, y el\r\n aumento del promedio mundial del nivel del mar.\r\n Este aumento en la temperatura global está relacionado con el PIB de cada país y como lo\r\n indica el Informe Stern (2006) “el coste de las condiciones meteorológicas extremas (…) podrían\r\n alcanzar por sí solo entre el 0,5 y el 1% del PIB anual para mediados de siglo, cifra que está\r\n llamada a aumentar, si el calentamiento mundial sigue su marcha”.\r\n Considerando lo anterior, el Cambio Climático se ha instalado como uno de los\r\n principales puntos de las agendas gubernamentales de los países desarrollados y producto de este\r\n se han modificado políticas y exigencias internacionales. Antecedentes científicos señalan que ya\r\n no es el momento para discutir y que se necesitan acciones en el corto plazo para poder mitigar\r\n las emisiones de gases de efecto invernadero (en adelante GEI), esto si se espera mantener el\r\n Cambio Climático dentro de márgenes razonables para evitar lo que algunos científicos han\r\n declarado como catástrofe. Por lo mismo, los países desarrollados y los en desarrollo deberán\r\n contribuir de manera conjunta para reducir las emisiones de gases efecto invernadero.\r\n En este contexto, se reunieron 195 países en el año 1992 en la Convención Marco de las\r\n Naciones Unidas sobre el Cambio Climático (CMNUCC) a fin de reforzar la conciencia pública\r\n de los problemas que el Cambio Climático trae consigo. La Convención crea una estructura para\r\n mayor acción y cooperación entre los países firmantes, sin embargo no es obligatorio respecto a\r\n las limitaciones de los gases de efecto invernadero.\r\n 5\r\n De la CMNUCC nació el Protocolo de Kyoto, cuyo objetivo principal es la reducción de\r\n los GEI a través de diversos mecanismos propuestos. A diferencia de la Convención, el\r\n Protocolo impone limitaciones vinculantes a las emisiones de GEI y por primera vez los países\r\n desarrollados se comprometen a reducir sus emisiones tomando como base los niveles del año\r\n 1990.\r\n Los países desarrollados que ratificaron el Protocolo se comprometieron a reducir sus\r\n emisiones y los países en desarrollo pueden obtener ventajas económicas mediante los\r\n mecanismos propuestos por el Protocolo. En este aspecto es importante destacar el énfasis que el\r\n Protocolo entrega en la flexibilidad de los mecanismos de reducción de emisiones de gases de\r\n efecto invernadero. El mercado por el cual se transan las emisiones presenta una oportunidad\r\n única para que los países en desarrollo ejecuten proyectos innovadores en materia de captura y\r\n reducción de GEI, proyectos que de otra manera debido a sus altos costos no podrían existir sin\r\n los incentivos que presenta este mercado.\r\n Para Chile, debido a su estabilidad económica y política, el mercado de los bonos de\r\n carbono presenta una oportunidad de desarrollo, tanto en el mercado del Protocolo de Kyoto\r\n como en el mercado voluntario. Asimismo es importante destacar que la variedad de recursos\r\n naturales con que Chile cuenta permite una amplia gama de proyectos con los cuales se puede\r\n participar en el mercado de carbono.\r\n El presente caso de estudio pretende, en primer lugar, mostrar la situación actual de Chile\r\n en el mercado de los bonos de carbono y destacar las ventajas del país y los beneficios de\r\n exportar en este mercado no tradicional. Además, busca entregar ideas para impulsar las ventas y\r\n atraer a los inversionistas al país.\r\n Para lo anterior se comenzará entregando un marco conceptual relacionado a los acuerdos\r\n internacionales que tratan sobre las medidas para la disminución de los gases de efecto\r\n invernadero, destacando el mercado de carbono a nivel regulado y voluntario para luego, en la\r\n segunda parte, adentrarse en el contexto nacional. Así será posible finalizar con recomendaciones\r\n a fin de mejorar la estrategia nacional.\r\nThere is no doubt of the Climate Change existence and that, we humans, are accelerating\r\n the process. Leaders and scientists around the world recognized to the Intergovernmental Panel\r\n on Climate Change (from now on IPCC) in their report Climate Change 2007:\r\n Warming of the climate system is unequivocal, as is now evident from\r\n observations of increases in global average air and ocean temperatures,\r\n widespread meeting of snow and ice rising global average sea level.\r\n The rise of global temperature is related with each country’s GDP as shown in Stern\r\n Report (2006) “costs of extreme weather alone could reach 0.5 - 1% of world GDP per annum by\r\n the middle of the century, and will keep rising if the world continues to warm”.\r\n With the above into consideration, Climate Change has become one of the main subjects\r\n in government agendas in developing countries and due to this issue, politics and international\r\n demands have change. Scientific reports point out that it is no longer time to argue and that there\r\n is a need for short-term actions in order to mitigate greenhouse gases emissions (from now on\r\n GHG). This if the aim is to keep Climate Change within reasonable margins so to avoid what\r\n some scientists have declared as a catastrophe. Therefore, developed and developing countries\r\n will have to contribute all together to reduce their emissions.\r\n In this context, 195 countries met on 1992 at the United Nations Framework Convention\r\n on Climate Change (UNFCCC) in order to reinforce the public awareness on matters brought by\r\n Climate Change. The Convention creates a structure for more action and cooperation among\r\n signatories countries, nevertheless it is not bounding regarding greenhouse gases limits.\r\n 7\r\n UNFCCC gave rise to Kyoto Protocol, which main goal is to reduce GHG through\r\n several proposed mechanisms. Unlike the Convention, the Protocol imposes bounding limitations\r\n to GHG emissions and for the first time developed countries made a commitment in reducing\r\n their emissions considering as a base 1990’s levels.\r\n Developed countries that ratify the Protocol made a commitment to reduce their\r\n emissions and developing countries can take economical advantages through mechanisms\r\n proposed by the Protocol. In this respect, it is important to highlight the emphasis that the\r\n Protocol gives to the flexibility in the greenhouse gases emissions reduction mechanisms. The\r\n market where the emissions are negotiated gives a unique opportunity for developing countries\r\n to execute innovative projects in areas of GHG capture and reduction, projects that otherwise\r\n would not exist without these market incentives due to their height costs.\r\n For Chile, due to its economical and political stability, carbon market gives an\r\n opportunity to develop, both in Kyoto Protocol market and volunteer market. Likewise, it is\r\n important to highlight that the diversity of natural resources that Chile has, allows a large project\r\n spectrum by which the country can participate in the carbon market.\r\n This case of study’s goal is to show Chile’s current situation in carbon market\r\n highlighting the country’s advantages and benefits to export in this untraditional market. Plus, it\r\n aims to give ideas in order to boost sales and bring investors into the country.\r\n To fulfill the above, a conceptual framework related to international agreements\r\n regarding greenhouse gases reduction measurements will be presented and highlight both\r\n regulated and volunteer carbon markets to later study thoroughly in a national context. Thus it\r\n will be possible to finalize with recommendations to improve the national strategy.', 'carbono_tesis.pdf', '16:33:33'),
(77, 'Análisis de la ley 19912, sobre medidas en frontera para la observación de los Derechos de Propiedad', 'Martinez Camilo', '2013-12-06', '', 'Los acuerdos de la OMC, y en especial el acuerdo sobre aspectos de la propiedad intelectual relacionados con el comercio ADPIC, incluyeron una serie de regulaciones inéditas, que trajeron como consecuencia la necesidad de los países signatarios de adecuar sus legislaciones, modificando o incluyendo nuevas disciplinas en su normativa interna. La institución analizada en este informe, nace de esas directrices, y se denomina “Prescripciones especiales relacionadas con las medidas en frontera”, ubicada en la sección cuarta de dicho acuerdo. El presente estudio examina los efectos de la reforma legal chilena, materializada en la ley 19912, y que en su título II, regula las medidas en frontera para la observancia de los Derechos de Propiedad Intelectual (MFPODPI), a 10 años de su entrada en vigencia. Desde el punto de vista Metodológico se busca describir la problemática y analizar el proceso de reformas legales, desde un plano formal y material. El primer aspecto apunta a establecer si existe coherencia entre la disciplina internacional y la legislación chilena, con el objeto de develar que parte del título II de la ley 19912 infringe derechamente los acuerdos OMC, cual cumple con el marco base, y cual ha logrado tener un marco de acción más amplio que el texto internacional. Desde el punto de vista material se establece a través de estadística proporcionada por el Servicio Nacional de Aduanas y por medio de entrevistas a una serie de actores y usuarios del sector público y privado, la efectividad de la reforma en la fiscalización de la piratería y la falsificación, en las zonas de control a cargo del Servicio Nacional de Adunas. El trabajo comienza mediante el planteamiento de la problemática a través de su análisis teórico en base a doctrina científica y al acuerdo ADPIC, luego se analizan las distintas variables operativas entregadas por el SNA y otros estamentos públicos, y se concluye en base a la interpretación de los resultados considerando la opinión de los actores y usuarios del sistema. En general se pudo determinar, que tanto para el Servicio Nacional de Aduana, como para los representantes de las marcas, esta ley constituye un avance, al entregar un marco jurídico adecuado, a situaciones que muchas veces no tenían solución, o que debían ser resueltas por medio de interpretaciones forzadas, en base a normas aduaneras o de propiedad intelectual aisladamente.', 'leyes_tesis.pdf', '16:35:23'),
(78, 'El Impacto de las Certificaciones de Calidad en las Exportaciones de Servicios TI de Chile', 'Lopez Suarez John', '2013-12-06', 'Magíster en Estrategia Internacional y Política Comercial No autorizada por el autor para ser publicada a texto completo', 'Esta investigación tiene por objetivo analizar el impacto de las certificaciones de calidad en el desarrollo exportador de las empresas de tecnologías de la información (TI) en la industria chilena.\r\n Para este objetivo se realiza una descripción general de la dinámica del comercio de servicios en la industria TI a nivel global y en América Latina. Se define el ámbito de los servicios TI, las actividades involucradas, y como se enmarcan dentro del comercio en el Acuerdo General sobre el Comercio de Servicios (AGCS) de la Organización Mundial del Comercio (OMC).\r\n La investigación analiza si las certificaciones de calidad presentan un impacto para el segmento exportador. Se identifican los modelos de certificación más adecuados para los tipos de procesos del sector de servicios TI. Paralelamente, se lleva a cabo una revisión sobre la base de fuentes primarias con un análisis de tipo cualitativo. Se realizó la elaboración propia de un cuestionario, que fue distribuido en la Asociación de Empresas de Tecnologías de la Información (ACTI), principal referente del sector privado en el ámbito TI en Chile, que reúne a las empresas de los rubros de hardware, software, capacitación e integración de sistemas e Internet.\r\n La información obtenida de los cuestionarios fue sintetizada y analizada, determinándose cuál es el estado actual en materia de certificaciones de las empresas proveedoras de servicios TI. Además se define cuál es el impacto atribuible a la obtención de una certificación en el impulso de las exportaciones, y cuáles son los principales obstáculos para acceder a una certificación.\r\n Finalmente se determinó que existe un impacto positivo de las certificaciones de calidad en la exportación de servicios TI en Chile.\r\nThis research aims to analyze the impact of quality certification on export development of business information technology (IT) in the Chilean industry.\r\n For this objective, a general description of the dynamics on trade in services in the IT industry is performed, globally and in Latin America. It defines the scope of IT services, the activities involved, and such are part of the business, in the General Agreement on Trade in Services (GATS) of the World Trade Organization (WTO).\r\n The research examines whether quality certifications have an impact on the export segment. The most appropriate certification models are identified, for the types of processes on IT services industry. In parallel, a review carried out based on primary sources with qualitative analysis. A survey was conducted at the Association of Technology Companies (ACTI), the leading association of the private sector IT companies in Chile, whose members are representatives of companies in the areas of hardware, software, IT training, consulting, systems integration and internet.\r\n The information obtained from the research, was synthesized and analyzed, determining the current status of quality certifications, in the local IT service providers. It also determines the impacts attributable to quality certifications in the export growth and what the main obstacles to obtain a certification are.\r\n Finally it was determined that there is a positive impact of quality certifications in IT services exports in Chile.', 'impacto_tesis.pdf', '16:37:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `perfil`, `username`, `password`) VALUES
(1, 'administrador', 'admin', '57bc5965853d13c30aa1944b1b8644a3096a46da'),
(2, 'editor', 'admin2', 'ab41949825606da179db7c89ddcedcc167b64847'),
(3, 'suscriptor', 'admin3', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
