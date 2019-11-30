CREATE TABLE aluno (
    matricula INT(11)  NOT NULL, 
    nome VARCHAR(255) NOT NULL, 
    curso VARCHAR(30) NOT NULL,
    senha INT(10) NOT NULL,
    PRIMARY KEY (matricula)
);

CREATE TABLE admin (
    id_admin INT(11) NOT NULL, 
    nome VARCHAR(255) NOT NULL,
    senha INT(10) NOT NULL,
    PRIMARY KEY (id_admin)
);

CREATE TABLE resposta (
    id_resposta INT(11) NOT NULL AUTO_INCREMENT,
    status INT(1),
    descricao TEXT,
    PRIMARY KEY (id_resposta)
);

CREATE TABLE restaurante (
    id_restaurante INT(11) AUTO_INCREMENT NOT NULL, 
    campus VARCHAR(30) NOT NULL, 
    setor VARCHAR(30) NOT NULL, 
    local VARCHAR(30) NOT NULL,
    PRIMARY KEY (id_restaurante)
);

CREATE TABLE reclamacao (
    id_reclamacao INT(11) AUTO_INCREMENT NOT NULL, 
    data_ocorrencia DATETIME NOT NULL, 
    categoria VARCHAR(50), 
    descricao TEXT NOT NULL,
    PRIMARY KEY (id_reclamacao)
);

CREATE TABLE prato (
    id_prato INT(11) AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL, 
    descricao TEXT, 
    classificacao INT(1), 
    PRIMARY KEY (id_prato)
); 

CREATE TABLE ingrediente (
    id_ingrediente INT(11) AUTO_INCREMENT NOT NULL, 
    nome VARCHAR(255) NOT NULL, 
    descricao TEXT,
    PRIMARY KEY (id_ingrediente)    
);

CREATE TABLE aluno_abre_reclamacao (
    matricula INT(11)  NOT NULL,
    id_reclamacao INT(11) NOT NULL, 
    data DATETIME NOT NULL,
    PRIMARY KEY (matricula, id_reclamacao),
    FOREIGN KEY (matricula) REFERENCES aluno (matricula) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_reclamacao) REFERENCES reclamacao (id_reclamacao) ON UPDATE CASCADE ON UPDATE CASCADE
);

CREATE TABLE admin_elabora_resposta (
    id_admin INT(11) NOT NULL,
    id_resposta INT(11) NOT NULL,
    data DATETIME NOT NULL,
    PRIMARY KEY(id_admin, id_resposta),
    FOREIGN KEY(id_admin) REFERENCES admin(id_admin) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(id_resposta) REFERENCES resposta(id_resposta) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE admin_gerencia_restaurante (
    id_admin INT(11) NOT NULL,
    id_restaurante INT(11) NOT NULL,
    PRIMARY KEY (id_admin, id_restaurante),
    FOREIGN KEY (id_admin) REFERENCES admin(id_admin) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_restaurante) REFERENCES restaurante (id_restaurante) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE resposta_responde_reclamacao (
    id_resposta INT(11) NOT NULL,
    id_reclamacao INT(11) NOT NULL,
    PRIMARY KEY (id_resposta, id_reclamacao),
    FOREIGN KEY(id_resposta) REFERENCES resposta(id_resposta) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_reclamacao) REFERENCES reclamacao (id_reclamacao) ON UPDATE CASCADE ON UPDATE CASCADE
);

CREATE TABLE reclamacao_denuncia_restaurante (
    id_reclamacao INT(11) NOT NULL,
    id_restaurante INT(11) NOT NULL,
    PRIMARY KEY(id_reclamacao, id_restaurante),
    FOREIGN KEY (id_reclamacao) REFERENCES reclamacao (id_reclamacao) ON UPDATE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_restaurante) REFERENCES restaurante (id_restaurante) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE restaurante_serve_prato (
    id_restaurante INT(11) NOT NULL,
    id_prato INT(11) NOT NULL,
    turno TEXT NOT NULL,
    dia_semana TEXT NOT NULL,
    PRIMARY KEY(id_restaurante, id_prato, turno, dia_semana),
    FOREIGN KEY (id_restaurante) REFERENCES restaurante (id_restaurante) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_prato) REFERENCES prato (id_prato) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE reclamacao_cita_prato (
    id_reclamacao INT(11) NOT NULL,
    id_prato INT(11) NOT NULL,
    PRIMARY KEY (id_reclamacao, id_prato),
    FOREIGN KEY (id_reclamacao) REFERENCES reclamacao (id_reclamacao) ON UPDATE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_prato) REFERENCES prato (id_prato) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE prato_contem_ingrediente(
    id_prato INT(11) NOT NULL,
    id_ingrediente INT(11) NOT NULL,
    PRIMARY KEY(id_prato, id_ingrediente),
    FOREIGN KEY (id_prato) REFERENCES prato (id_prato) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_ingrediente) REFERENCES ingrediente (id_ingrediente) ON UPDATE CASCADE ON DELETE CASCADE
);