

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--

-- --------------------------------------------------------

--
-- Table structure for table `senhas`
--

CREATE TABLE `senhas` (
  `codpass` bigint(20) NOT NULL,
  `servico` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `codusuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `senhas`
--

INSERT INTO `senhas` (`codpass`, `servico`, `email`, `senha`, `codusuario`) VALUES
(8, 'Facebook', 'fulano@cia.com', '3i720N4HJCiN0y1b', 1),
(9, 'Google', 'fulano@gmail.com', 'qgD14)edBO5wqgg1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` bigint(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nome`, `login`, `senha`) VALUES
(1, 'Isabela Baraldi Gandelman', 'isabgandelman', 'e959088c6049f1104c84c9bde5560a13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `senhas`
--
ALTER TABLE `senhas`
  ADD PRIMARY KEY (`codpass`),
  ADD KEY `fk_usuario` (`codusuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `senhas`
--
ALTER TABLE `senhas`
  MODIFY `codpass` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `senhas`
--
ALTER TABLE `senhas`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`codusuario`) REFERENCES `usuario` (`codusuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
