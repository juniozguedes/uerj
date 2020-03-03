-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.11-MariaDB-1:10.4.11+maria~bionic

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleeng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodyeng` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleesp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bodyesp` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,'Realização de Pós-doutoramento no PPGSS-UERJ','<p>O P&oacute;s-Doutorado comp&otilde;e uma Linha de Pesquisa em desenvolvimento no PPG,<br />\r\npodendo ser realizado por portadores de t&iacute;tulo de doutor, com o objetivo de melhorar o<br />\r\nn&iacute;vel de excel&ecirc;ncia cient&iacute;fica da Universidade.<br />\r\nO candidato dever&aacute; contatar um professor/orientador do PPGSS da sua &aacute;rea de<br />\r\ninteresse que ser&aacute; respons&aacute;vel pelo Programa de P&oacute;s-Doutorado (ver linhas de<br />\r\nPesquisa).</p>\r\n\r\n<p>Al&eacute;m do desenvolvimento do projeto de pesquisa/estudo proposto, o p&oacute;s-<br />\r\ndoutorando dever&aacute; participar de atividades de ensino/pesquisa/extens&atilde;o desenvolvidas</p>\r\n\r\n<p>pelo grupo de pesquisa do orientador/supervisor, a saber: Grupos de Estudos, Mini<br />\r\nCursos, Bancas de Mestrado e Doutorado e/ou M&oacute;dulos/aulas em Disciplinas do<br />\r\norientador no PPG.<br />\r\nComo parte dos resultados do p&oacute;s-doutoramento, o p&oacute;s-doutorando dever&aacute;<br />\r\nelaborar artigos e/ou comunica&ccedil;&otilde;es, palestras sobre a finaliza&ccedil;&atilde;o da pesquisa.<br />\r\nAo t&eacute;rmino do p&oacute;s-doutorado dever&aacute; ser apresentado Relat&oacute;rio Final a partir de<br />\r\nmodelo espec&iacute;fico.<br />\r\nCada solicita&ccedil;&atilde;o de programa de p&oacute;s-doutorado dever&aacute; ser encaminhada ao<br />\r\nColegiado pelo docente respons&aacute;vel pela orienta&ccedil;&atilde;o/supervis&atilde;o, que deve ter<br />\r\nexperi&ecirc;ncia de orienta&ccedil;&atilde;o de doutorado j&aacute; conclu&iacute;da.<br />\r\nA participa&ccedil;&atilde;o no programa ser&aacute; aceita dentro dos seguintes crit&eacute;rios, sendo<br />\r\nvedada a utiliza&ccedil;&atilde;o de recursos or&ccedil;ament&aacute;rios do PPGSS (PNPD &eacute; recurso da CAPES<br />\r\nvia edital UERJ e o orientador deve ser pesquisador s&ecirc;nior):<br />\r\nI &ndash; Financiamento por bolsa de p&oacute;s-doutorado ou bolsa equivalente;<br />\r\nII &ndash; Concess&atilde;o de afastamento remunerado de institui&ccedil;&atilde;o de pesquisa e ensino ou<br />\r\nempresa/institui&ccedil;&atilde;o, ou ainda, se o v&iacute;nculo empregat&iacute;cio for em tempo parcial;<br />\r\nIII &ndash; Sem bolsa, a crit&eacute;rio do supervisor ou, na sua aus&ecirc;ncia, de &oacute;rg&atilde;o Complementar.<br />\r\nObserva&ccedil;&otilde;es:<br />\r\n- Para a situa&ccedil;&atilde;o prevista no inciso II, o p&oacute;s-doutorando dever&aacute; apresentar, no ato de sua<br />\r\naceita&ccedil;&atilde;o, o Termo de Ci&ecirc;ncia firmado pela institui&ccedil;&atilde;o empregadora.<br />\r\n- Para a situa&ccedil;&atilde;o prevista no inciso III, ser&aacute; exigida a assinatura de Termo de<br />\r\nCompromisso de P&oacute;s-Doutorado.<br />\r\n- Bolsista Jovem Pesquisador - FAPERJ tamb&eacute;m pode se inscrever no Programa de<br />\r\nP&oacute;s-Doutorado<br />\r\n► Inscri&ccedil;&atilde;o<br />\r\nSolicita&ccedil;&atilde;o: em qualquer &eacute;poca do ano (fluxo cont&iacute;nuo).<br />\r\nPrazo para an&aacute;lise: o prazo m&eacute;dio para an&aacute;lise &eacute; de at&eacute; 45 dias.<br />\r\n► Prorroga&ccedil;&atilde;o<br />\r\nA prorroga&ccedil;&atilde;o dever&aacute; ser solicitada at&eacute; 40 dias antes da data final de vig&ecirc;ncia.<br />\r\n► Conclus&atilde;o<br />\r\nO relat&oacute;rio final dever&aacute; ser entregue at&eacute;, no m&aacute;ximo, 60 dias ap&oacute;s a data final de<br />\r\nvig&ecirc;ncia. Caso n&atilde;o seja entregue dentro desse prazo, o p&oacute;s-doutorado ser&aacute; encerrado<br />\r\n(desligamento) e o atestado n&atilde;o ser&aacute; emitido.</p>','English PPGSS-UERJ','Corpo em Inglês','Título em Espanhol','Corpo em Espanhol','2019-12-04 00:01:33','2019-12-04 00:01:33',1,'none','doutorado');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-28 15:31:42
