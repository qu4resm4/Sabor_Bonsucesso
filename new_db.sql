DROP  DATABASE restaurante;
CREATE DATABASE restaurante;
USE restaurante;

CREATE TABLE acesso (
  id_acesso int NOT NULL AUTO_INCREMENT,
  acesso varchar(50) DEFAULT NULL,
  PRIMARY KEY (id_acesso)
);

INSERT INTO acesso (acesso)
VALUES 
    ("adm"),
    ("funcionario"),
    ("cliente");

CREATE TABLE usuario (
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(80) NOT NULL,
  dataNascimento date NOT NULL,
  sexo varchar(50) NOT NULL,
  nomeMae varchar(80) NOT NULL,
  CPF varchar(14) NOT NULL,
  email varchar(80) NOT NULL,
  telefone varchar(21) DEFAULT NULL,
  celular varchar(21) NOT NULL,
  usuario varchar(6) NOT NULL,
  senha_usuario varchar(225) NOT NULL,
  id_acesso int DEFAULT '3',
  chave varchar(225) DEFAULT NULL,
  situacao varchar(225) DEFAULT 'inativo',
  codigo_autenticacao int DEFAULT NULL,
  data_codigo_autenticacao datetime DEFAULT NULL,
  ultimo_acesso datetime DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY CPF (CPF),
  UNIQUE KEY email (email),
  UNIQUE KEY login (usuario),
  KEY id_acesso (id_acesso),
  CONSTRAINT id_acesso FOREIGN KEY (id_acesso) REFERENCES acesso (id_acesso)
);

CREATE TABLE endereco (
  id INT NOT NULL AUTO_INCREMENT,
  idUsuario INT NOT NULL,
  CEP varchar(10) NOT NULL,
  rua varchar(80) NOT NULL,
  numero varchar(30) NOT NULL,
  complemento varchar(80) DEFAULT NULL,
  cidade varchar(80) NOT NULL,
  estado varchar(80) NOT NULL,
  bairro varchar(80) NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT idUsuario_endereco FOREIGN KEY (idUsuario) REFERENCES usuario (id)
);
  
CREATE TABLE log (
	idLog INT NOT NULL AUTO_INCREMENT,
	idUsuario INT NOT NULL,
	datahora DATETIME NOT NULL,
	codigo_autenticacao INT NOT NULL,
	PRIMARY KEY (idLog),
	CONSTRAINT idUsuario_log FOREIGN KEY (idUsuario) REFERENCES usuario (id)
);

CREATE TABLE cardapio (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  descricao text NOT NULL,
  preco decimal(10,2) NOT NULL,
  status tinyint(1) NOT NULL DEFAULT 0,
  imagem varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
);

-- Despejando dados para a tabela `cardapio`
--

INSERT INTO cardapio (id, nome, descricao, preco, status, imagem) VALUES
(23, 'Lasanha', 'Lasanha sanha', 25.00, 1, 'lasanha.jpg'),
(24, 'Feijoada', 'Feijão, carne, bacon, calabresa e tudo que é de gordura', 25.00, 0, 'feijoada-1.jpg');

CREATE TABLE carrinho (
  idCarrinho int NOT NULL AUTO_INCREMENT,
  idUsuario int DEFAULT NULL,
  idCardapio int DEFAULT NULL,
  quantidade int DEFAULT NULL,
  PRIMARY KEY (idCarrinho),
  KEY idUsuarioCarrinho (idUsuario),
  KEY idCardapio (idCardapio),
  CONSTRAINT idCardapio FOREIGN KEY (idCardapio) REFERENCES cardapio (id),
  CONSTRAINT idUsuarioCarrinho FOREIGN KEY (idUsuario) REFERENCES usuario (id)
)