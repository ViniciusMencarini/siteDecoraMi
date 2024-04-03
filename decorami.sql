-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Maio-2022 às 02:30
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `decorami`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` enum('unread','read','deleted') NOT NULL DEFAULT 'unread',
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `type`, `name`, `photo`, `price`, `amount`, `description`, `link`) VALUES
(1, 'Bolsa', 'Carteira Deauville', '../images/products/Carteira-Deauville.webp', '96', 3, 'Sofisticada e versátil a Carteira Deauville e forrada e possui alça removível. Ela é o complemento perfeito para a sua produção.', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3133470'),
(2, 'Porta-vinho', 'Porta champanhe', '../images/products/Porta-champanhe.webp', '145', 2, 'Bolsa porta champanhe térmica com alça de couro removível para facilitar a lavagem. Charme e praticidade para transportar a sua bebida preferida.', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3115377'),
(3, 'Pano', 'Pano de prato noir', '../images/products/Pano-prato-noir.webp', '20', 5, 'O elegante pano de prato gourmand noir. E feito em atoalhado preto, seca super rápido, disfarça as manchas e é confortável ao toque.', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3115362'),
(4, 'Avental', 'Avental', '../images/products/avental.png', '165', 2, 'Avental em brim de algodão com bolsa frontal, alça de couro e tecido com argola. O cruzamento na parte das costas confere o charme e praticidade .', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3115333'),
(5, 'Bolsa', 'Bolsa saint tropez', '../images/products/Bolsa-saint-tropez.png', '180', 2, 'Bolsa saint tropez em lona de algodão cinza com bolso interno, fecho de imã e alça de couro. Aquela bolsa que cabe tudo e te acompanha sempre.', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3115290'),
(6, 'Bolsa', 'Mini ecobag bonjour', '../images/products/Mini-ecobag-bonjour.png', '70', 2, 'Mini ecobag em tecido cru com alça regulável.', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3115259'),
(13, 'Porta-vinho', 'Porta vinho', '../images/products/Porta-vinho.webp', '145', 3, 'Porta vinho térmico com forro interno, alça removível em couro e estampa vintage.', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3107624'),
(14, 'Avental', 'Avental jeans', '../images/products/Avental-jeans.png', '165', 1, 'Avental em jeans marinho, com alça em cadarco cru 100% algodão, acabamento em couro e estampa vintage.', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3107602'),
(15, 'Bolsa', 'Bolsa Nice', '../images/products/Bolsa-Nice.webp', '150', 1, 'Bolsa em lona de algodão com estampa vintage, um charme.', 'https://decoramiatelier.bagy12.app/decoramiatelier/produto/3107569');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
