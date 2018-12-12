CREATE DATABASE CEP;

CREATE TABLE CEP 
( 
    ID_CEP INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    CEP INT NOT NULL, 
    LOGRADOURO VARCHAR(100), 
    BAIRRO VARCHAR(100), 
    LOCALIDADE VARCHAR(100), 
    UF VARCHAR(2) 
);

INSERT INTO CEP 
(
    CEP,
    LOGRADOURO,
    BAIRRO,
    LOCALIDADE,
    UF
) VALUES (
    89210055,
    'Rua das Palmas',
    'Itaum',
    'Joinville',
    'SC'
);

INSERT INTO CEP 
(
    CEP,
    LOGRADOURO,
    BAIRRO,
    LOCALIDADE,
    UF
) VALUES (
    89202310,
    'Rua Inacio Bastos',
    'Bucarein',
    'Joinville',
    'SC'
);

INSERT INTO CEP 
(
    CEP,
    LOGRADOURO,
    BAIRRO,
    LOCALIDADE,
    UF
) VALUES (
    89203570,
    'Rua Rio Grande do Sul',
    'Anita Garibaldi',
    'Joinville',
    'SC'
);