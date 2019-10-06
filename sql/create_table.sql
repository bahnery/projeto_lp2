--
-- Base de Dados: `projeto lp2`
--
CREATE DATABASE IF NOT EXISTS `lp2_barbara` 
DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

-- --------------------------------------------------------
--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `ID` int(100) NOT NULL auto_increment,
  `TITULO` varchar(50) NOT NULL,
  `RESUMO` varchar(100) NOT NULL,
  `IMAGEM` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) DEFAULT CHARSET=utf8;

--
-- Usuário BD
-- 

GRANT ALL PRIVILEGES ON `lp2` . * TO 'root'@'localhost';