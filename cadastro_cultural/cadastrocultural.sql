--
-- PostgreSQL database dump
--

-- Dumped from database version 9.0.6
-- Dumped by pg_dump version 9.0.6
-- Started on 2012-02-01 11:14:20

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- TOC entry 603 (class 2612 OID 11574)
-- Name: plpgsql; Type: PROCEDURAL LANGUAGE; Schema: -; Owner: postgres
--

CREATE OR REPLACE PROCEDURAL LANGUAGE plpgsql;


ALTER PROCEDURAL LANGUAGE plpgsql OWNER TO postgres;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 142 (class 1259 OID 16393)
-- Dependencies: 1937 1938 6
-- Name: acos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE acos (
    id integer NOT NULL,
    parent_id integer,
    model character varying(255) DEFAULT ''::character varying,
    foreign_key integer,
    alias character varying(255) DEFAULT ''::character varying,
    lft integer,
    rght integer
);


ALTER TABLE public.acos OWNER TO postgres;

--
-- TOC entry 143 (class 1259 OID 16401)
-- Dependencies: 142 6
-- Name: acos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE acos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.acos_id_seq OWNER TO postgres;

--
-- TOC entry 2055 (class 0 OID 0)
-- Dependencies: 143
-- Name: acos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE acos_id_seq OWNED BY acos.id;


--
-- TOC entry 2056 (class 0 OID 0)
-- Dependencies: 143
-- Name: acos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('acos_id_seq', 33, true);


--
-- TOC entry 144 (class 1259 OID 16403)
-- Dependencies: 1940 1941 6
-- Name: aros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE aros (
    id integer NOT NULL,
    parent_id integer,
    model character varying(255) DEFAULT ''::character varying,
    foreign_key integer,
    alias character varying(255) DEFAULT ''::character varying,
    lft integer,
    rght integer
);


ALTER TABLE public.aros OWNER TO postgres;

--
-- TOC entry 145 (class 1259 OID 16411)
-- Dependencies: 1943 1944 1945 1946 6
-- Name: aros_acos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE aros_acos (
    id integer NOT NULL,
    aro_id integer NOT NULL,
    aco_id integer NOT NULL,
    _create character(2) DEFAULT 0 NOT NULL,
    _read character(2) DEFAULT 0 NOT NULL,
    _update character(2) DEFAULT 0 NOT NULL,
    _delete character(2) DEFAULT 0 NOT NULL
);


ALTER TABLE public.aros_acos OWNER TO postgres;

--
-- TOC entry 146 (class 1259 OID 16418)
-- Dependencies: 6 145
-- Name: aros_acos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE aros_acos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.aros_acos_id_seq OWNER TO postgres;

--
-- TOC entry 2057 (class 0 OID 0)
-- Dependencies: 146
-- Name: aros_acos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE aros_acos_id_seq OWNED BY aros_acos.id;


--
-- TOC entry 2058 (class 0 OID 0)
-- Dependencies: 146
-- Name: aros_acos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('aros_acos_id_seq', 8, true);


--
-- TOC entry 147 (class 1259 OID 16420)
-- Dependencies: 6 144
-- Name: aros_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE aros_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.aros_id_seq OWNER TO postgres;

--
-- TOC entry 2059 (class 0 OID 0)
-- Dependencies: 147
-- Name: aros_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE aros_id_seq OWNED BY aros.id;


--
-- TOC entry 2060 (class 0 OID 0)
-- Dependencies: 147
-- Name: aros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('aros_id_seq', 11, true);


--
-- TOC entry 157 (class 1259 OID 24578)
-- Dependencies: 6
-- Name: cidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cidades (
    id integer NOT NULL,
    uf_id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.cidades OWNER TO postgres;

--
-- TOC entry 156 (class 1259 OID 24576)
-- Dependencies: 157 6
-- Name: cidades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cidades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cidades_id_seq OWNER TO postgres;

--
-- TOC entry 2061 (class 0 OID 0)
-- Dependencies: 156
-- Name: cidades_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cidades_id_seq OWNED BY cidades.id;


--
-- TOC entry 2062 (class 0 OID 0)
-- Dependencies: 156
-- Name: cidades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cidades_id_seq', 1, false);


--
-- TOC entry 180 (class 1259 OID 24671)
-- Dependencies: 6
-- Name: contato_pfs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE contato_pfs (
    id integer NOT NULL,
    telefone_pf_id integer NOT NULL,
    fax character varying(12),
    email character varying(50) NOT NULL,
    site character varying(50)
);


ALTER TABLE public.contato_pfs OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 32912)
-- Dependencies: 6
-- Name: contatos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE contatos (
    id integer NOT NULL,
    descricao character varying(30)
);


ALTER TABLE public.contatos OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 32910)
-- Dependencies: 192 6
-- Name: contatos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE contatos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contatos_id_seq OWNER TO postgres;

--
-- TOC entry 2063 (class 0 OID 0)
-- Dependencies: 191
-- Name: contatos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE contatos_id_seq OWNED BY contatos.id;


--
-- TOC entry 2064 (class 0 OID 0)
-- Dependencies: 191
-- Name: contatos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('contatos_id_seq', 1, false);


--
-- TOC entry 179 (class 1259 OID 24669)
-- Dependencies: 6 180
-- Name: contatos_pessoas_fisicas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE contatos_pessoas_fisicas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contatos_pessoas_fisicas_id_seq OWNER TO postgres;

--
-- TOC entry 2065 (class 0 OID 0)
-- Dependencies: 179
-- Name: contatos_pessoas_fisicas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE contatos_pessoas_fisicas_id_seq OWNED BY contato_pfs.id;


--
-- TOC entry 2066 (class 0 OID 0)
-- Dependencies: 179
-- Name: contatos_pessoas_fisicas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('contatos_pessoas_fisicas_id_seq', 1, false);


--
-- TOC entry 176 (class 1259 OID 24651)
-- Dependencies: 6
-- Name: curriculos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE curriculos (
    id integer NOT NULL,
    multimidia_id integer,
    descricao text NOT NULL,
    funcao_exercida_id character varying(30) NOT NULL,
    organizacao_responsavel character varying(30) NOT NULL,
    data date NOT NULL,
    produto_id integer NOT NULL
);


ALTER TABLE public.curriculos OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 24649)
-- Dependencies: 6 176
-- Name: curriculos_pfs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE curriculos_pfs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.curriculos_pfs_id_seq OWNER TO postgres;

--
-- TOC entry 2067 (class 0 OID 0)
-- Dependencies: 175
-- Name: curriculos_pfs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE curriculos_pfs_id_seq OWNED BY curriculos.id;


--
-- TOC entry 2068 (class 0 OID 0)
-- Dependencies: 175
-- Name: curriculos_pfs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('curriculos_pfs_id_seq', 1, false);


--
-- TOC entry 188 (class 1259 OID 24730)
-- Dependencies: 6
-- Name: escolaridades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE escolaridades (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.escolaridades OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 24728)
-- Dependencies: 188 6
-- Name: escolaridade_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE escolaridade_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.escolaridade_id_seq OWNER TO postgres;

--
-- TOC entry 2069 (class 0 OID 0)
-- Dependencies: 187
-- Name: escolaridade_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE escolaridade_id_seq OWNED BY escolaridades.id;


--
-- TOC entry 2070 (class 0 OID 0)
-- Dependencies: 187
-- Name: escolaridade_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('escolaridade_id_seq', 1, false);


--
-- TOC entry 166 (class 1259 OID 24611)
-- Dependencies: 6
-- Name: expedidor_rgs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE expedidor_rgs (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.expedidor_rgs OWNER TO postgres;

--
-- TOC entry 165 (class 1259 OID 24609)
-- Dependencies: 166 6
-- Name: expedidor_rgs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE expedidor_rgs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.expedidor_rgs_id_seq OWNER TO postgres;

--
-- TOC entry 2071 (class 0 OID 0)
-- Dependencies: 165
-- Name: expedidor_rgs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE expedidor_rgs_id_seq OWNED BY expedidor_rgs.id;


--
-- TOC entry 2072 (class 0 OID 0)
-- Dependencies: 165
-- Name: expedidor_rgs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('expedidor_rgs_id_seq', 1, false);


--
-- TOC entry 184 (class 1259 OID 24704)
-- Dependencies: 6
-- Name: funcao_exercidas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE funcao_exercidas (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.funcao_exercidas OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 24643)
-- Dependencies: 6
-- Name: funcoes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE funcoes (
    id integer NOT NULL,
    ocupacao_id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    tipo character(1) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.funcoes OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 24702)
-- Dependencies: 184 6
-- Name: funcoes_exercidas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE funcoes_exercidas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.funcoes_exercidas_id_seq OWNER TO postgres;

--
-- TOC entry 2073 (class 0 OID 0)
-- Dependencies: 183
-- Name: funcoes_exercidas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE funcoes_exercidas_id_seq OWNED BY funcao_exercidas.id;


--
-- TOC entry 2074 (class 0 OID 0)
-- Dependencies: 183
-- Name: funcoes_exercidas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('funcoes_exercidas_id_seq', 1, false);


--
-- TOC entry 173 (class 1259 OID 24641)
-- Dependencies: 6 174
-- Name: funcoes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE funcoes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.funcoes_id_seq OWNER TO postgres;

--
-- TOC entry 2075 (class 0 OID 0)
-- Dependencies: 173
-- Name: funcoes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE funcoes_id_seq OWNED BY funcoes.id;


--
-- TOC entry 2076 (class 0 OID 0)
-- Dependencies: 173
-- Name: funcoes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('funcoes_id_seq', 1, false);


--
-- TOC entry 148 (class 1259 OID 16422)
-- Dependencies: 6
-- Name: groups; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE groups (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    created date,
    modified date
);


ALTER TABLE public.groups OWNER TO postgres;

--
-- TOC entry 149 (class 1259 OID 16425)
-- Dependencies: 148 6
-- Name: groups_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE groups_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.groups_id_seq OWNER TO postgres;

--
-- TOC entry 2077 (class 0 OID 0)
-- Dependencies: 149
-- Name: groups_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE groups_id_seq OWNED BY groups.id;


--
-- TOC entry 2078 (class 0 OID 0)
-- Dependencies: 149
-- Name: groups_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('groups_id_seq', 7, true);


--
-- TOC entry 178 (class 1259 OID 24663)
-- Dependencies: 6
-- Name: multimidias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE multimidias (
    id integer NOT NULL,
    multimidia character varying(255) NOT NULL
);


ALTER TABLE public.multimidias OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 24661)
-- Dependencies: 178 6
-- Name: multimidia_curriculos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE multimidia_curriculos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.multimidia_curriculos_id_seq OWNER TO postgres;

--
-- TOC entry 2079 (class 0 OID 0)
-- Dependencies: 177
-- Name: multimidia_curriculos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE multimidia_curriculos_id_seq OWNED BY multimidias.id;


--
-- TOC entry 2080 (class 0 OID 0)
-- Dependencies: 177
-- Name: multimidia_curriculos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('multimidia_curriculos_id_seq', 1, false);


--
-- TOC entry 162 (class 1259 OID 24597)
-- Dependencies: 6
-- Name: nacionalidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE nacionalidades (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.nacionalidades OWNER TO postgres;

--
-- TOC entry 161 (class 1259 OID 24595)
-- Dependencies: 162 6
-- Name: nacionalidades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE nacionalidades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.nacionalidades_id_seq OWNER TO postgres;

--
-- TOC entry 2081 (class 0 OID 0)
-- Dependencies: 161
-- Name: nacionalidades_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE nacionalidades_id_seq OWNED BY nacionalidades.id;


--
-- TOC entry 2082 (class 0 OID 0)
-- Dependencies: 161
-- Name: nacionalidades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('nacionalidades_id_seq', 1, false);


--
-- TOC entry 164 (class 1259 OID 24605)
-- Dependencies: 6
-- Name: naturalidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE naturalidades (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.naturalidades OWNER TO postgres;

--
-- TOC entry 163 (class 1259 OID 24603)
-- Dependencies: 164 6
-- Name: naturalidades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE naturalidades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.naturalidades_id_seq OWNER TO postgres;

--
-- TOC entry 2083 (class 0 OID 0)
-- Dependencies: 163
-- Name: naturalidades_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE naturalidades_id_seq OWNED BY naturalidades.id;


--
-- TOC entry 2084 (class 0 OID 0)
-- Dependencies: 163
-- Name: naturalidades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('naturalidades_id_seq', 1, false);


--
-- TOC entry 172 (class 1259 OID 24635)
-- Dependencies: 6
-- Name: ocupacoes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ocupacoes (
    id integer NOT NULL,
    segmento_cultural_id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    tipo character(1) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.ocupacoes OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 24633)
-- Dependencies: 6 172
-- Name: ocupacoes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ocupacoes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ocupacoes_id_seq OWNER TO postgres;

--
-- TOC entry 2085 (class 0 OID 0)
-- Dependencies: 171
-- Name: ocupacoes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE ocupacoes_id_seq OWNED BY ocupacoes.id;


--
-- TOC entry 2086 (class 0 OID 0)
-- Dependencies: 171
-- Name: ocupacoes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ocupacoes_id_seq', 1, false);


--
-- TOC entry 190 (class 1259 OID 32904)
-- Dependencies: 6
-- Name: paises; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE paises (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.paises OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 32902)
-- Dependencies: 190 6
-- Name: paises_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE paises_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.paises_id_seq OWNER TO postgres;

--
-- TOC entry 2087 (class 0 OID 0)
-- Dependencies: 189
-- Name: paises_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE paises_id_seq OWNED BY paises.id;


--
-- TOC entry 2088 (class 0 OID 0)
-- Dependencies: 189
-- Name: paises_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('paises_id_seq', 1, false);


--
-- TOC entry 155 (class 1259 OID 16907)
-- Dependencies: 6
-- Name: pfs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pfs (
    id integer NOT NULL,
    nacionalidade_id integer NOT NULL,
    naturalidade_id integer NOT NULL,
    expedidor_rg_id integer NOT NULL,
    curriculo_id integer,
    cidade_id integer NOT NULL,
    escolaridade_id integer NOT NULL,
    tipologia_id integer NOT NULL,
    pais_id integer NOT NULL,
    nome character varying(50) NOT NULL,
    nome_artistico character varying(50) NOT NULL,
    naturalizado character(1),
    data_naturalizacao date,
    tipo_visto character(1),
    data_validade_visto date,
    data_nascimento date NOT NULL,
    sexo character(1) NOT NULL,
    cpf character varying(14) NOT NULL,
    rg character varying(12) NOT NULL,
    data_rg date,
    ano_graduacao character varying(4),
    curso character varying(20),
    profissao character varying(20) NOT NULL,
    logradouro character varying(50) NOT NULL,
    numero character varying(7) NOT NULL,
    complemento character varying(50) NOT NULL,
    bairro character varying(30) NOT NULL,
    cep character varying(8) NOT NULL,
    comprovante character varying(255) NOT NULL,
    representante_oficial character(1),
    representante_nome character varying(50),
    representante_cpf character varying(14),
    representante_rg character varying(10),
    representante_dataexpedicao_rg character varying(5),
    representante_expedidor_rg character varying(2),
    representante_telefone character varying(20),
    representante_celular character varying(20),
    representante_email character varying(50),
    representante_delegacao character varying(50),
    deletado character(1),
    created timestamp without time zone,
    modified timestamp without time zone
);


ALTER TABLE public.pfs OWNER TO postgres;

--
-- TOC entry 154 (class 1259 OID 16905)
-- Dependencies: 6 155
-- Name: pessoas_fisicas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pessoas_fisicas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pessoas_fisicas_id_seq OWNER TO postgres;

--
-- TOC entry 2089 (class 0 OID 0)
-- Dependencies: 154
-- Name: pessoas_fisicas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE pessoas_fisicas_id_seq OWNED BY pfs.id;


--
-- TOC entry 2090 (class 0 OID 0)
-- Dependencies: 154
-- Name: pessoas_fisicas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pessoas_fisicas_id_seq', 1, false);


--
-- TOC entry 150 (class 1259 OID 16427)
-- Dependencies: 6
-- Name: posts; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE posts (
    id integer NOT NULL,
    title character varying(50),
    body text,
    created date,
    modified date
);


ALTER TABLE public.posts OWNER TO postgres;

--
-- TOC entry 151 (class 1259 OID 16433)
-- Dependencies: 150 6
-- Name: posts_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE posts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.posts_id_seq OWNER TO postgres;

--
-- TOC entry 2091 (class 0 OID 0)
-- Dependencies: 151
-- Name: posts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE posts_id_seq OWNED BY posts.id;


--
-- TOC entry 2092 (class 0 OID 0)
-- Dependencies: 151
-- Name: posts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('posts_id_seq', 8, true);


--
-- TOC entry 186 (class 1259 OID 24720)
-- Dependencies: 6
-- Name: produtos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE produtos (
    id integer NOT NULL,
    descricao character varying(50) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.produtos OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 24718)
-- Dependencies: 6 186
-- Name: produtos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE produtos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.produtos_id_seq OWNER TO postgres;

--
-- TOC entry 2093 (class 0 OID 0)
-- Dependencies: 185
-- Name: produtos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE produtos_id_seq OWNED BY produtos.id;


--
-- TOC entry 2094 (class 0 OID 0)
-- Dependencies: 185
-- Name: produtos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('produtos_id_seq', 1, false);


--
-- TOC entry 170 (class 1259 OID 24627)
-- Dependencies: 6
-- Name: segmento_culturais; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE segmento_culturais (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    tipo character(1) NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.segmento_culturais OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 24625)
-- Dependencies: 170 6
-- Name: segmentos_culturais_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE segmentos_culturais_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.segmentos_culturais_id_seq OWNER TO postgres;

--
-- TOC entry 2095 (class 0 OID 0)
-- Dependencies: 169
-- Name: segmentos_culturais_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE segmentos_culturais_id_seq OWNED BY segmento_culturais.id;


--
-- TOC entry 2096 (class 0 OID 0)
-- Dependencies: 169
-- Name: segmentos_culturais_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('segmentos_culturais_id_seq', 1, false);


--
-- TOC entry 182 (class 1259 OID 24679)
-- Dependencies: 6
-- Name: telefone_pfs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE telefone_pfs (
    id integer NOT NULL,
    telefone character varying(12) NOT NULL
);


ALTER TABLE public.telefone_pfs OWNER TO postgres;

--
-- TOC entry 194 (class 1259 OID 32920)
-- Dependencies: 6
-- Name: telefones; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE telefones (
    id integer NOT NULL,
    descricao character varying(10)
);


ALTER TABLE public.telefones OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 32918)
-- Dependencies: 194 6
-- Name: telefones_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE telefones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.telefones_id_seq OWNER TO postgres;

--
-- TOC entry 2097 (class 0 OID 0)
-- Dependencies: 193
-- Name: telefones_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE telefones_id_seq OWNED BY telefones.id;


--
-- TOC entry 2098 (class 0 OID 0)
-- Dependencies: 193
-- Name: telefones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('telefones_id_seq', 1, false);


--
-- TOC entry 181 (class 1259 OID 24677)
-- Dependencies: 182 6
-- Name: telefones_pfs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE telefones_pfs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.telefones_pfs_id_seq OWNER TO postgres;

--
-- TOC entry 2099 (class 0 OID 0)
-- Dependencies: 181
-- Name: telefones_pfs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE telefones_pfs_id_seq OWNED BY telefone_pfs.id;


--
-- TOC entry 2100 (class 0 OID 0)
-- Dependencies: 181
-- Name: telefones_pfs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('telefones_pfs_id_seq', 1, false);


--
-- TOC entry 168 (class 1259 OID 24619)
-- Dependencies: 6
-- Name: tipologias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipologias (
    id integer NOT NULL,
    segmento_cultural integer NOT NULL,
    ocupacao_id integer NOT NULL,
    funcao_id integer NOT NULL,
    tempo_atuacao date NOT NULL
);


ALTER TABLE public.tipologias OWNER TO postgres;

--
-- TOC entry 167 (class 1259 OID 24617)
-- Dependencies: 6 168
-- Name: tipologias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipologias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipologias_id_seq OWNER TO postgres;

--
-- TOC entry 2101 (class 0 OID 0)
-- Dependencies: 167
-- Name: tipologias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipologias_id_seq OWNED BY tipologias.id;


--
-- TOC entry 2102 (class 0 OID 0)
-- Dependencies: 167
-- Name: tipologias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipologias_id_seq', 1, false);


--
-- TOC entry 160 (class 1259 OID 24588)
-- Dependencies: 6
-- Name: ufs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ufs (
    id integer NOT NULL,
    descricao integer NOT NULL,
    created time without time zone,
    modified time without time zone
);


ALTER TABLE public.ufs OWNER TO postgres;

--
-- TOC entry 159 (class 1259 OID 24586)
-- Dependencies: 6 160
-- Name: ufs_descricao_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ufs_descricao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ufs_descricao_seq OWNER TO postgres;

--
-- TOC entry 2103 (class 0 OID 0)
-- Dependencies: 159
-- Name: ufs_descricao_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE ufs_descricao_seq OWNED BY ufs.descricao;


--
-- TOC entry 2104 (class 0 OID 0)
-- Dependencies: 159
-- Name: ufs_descricao_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ufs_descricao_seq', 1, false);


--
-- TOC entry 158 (class 1259 OID 24584)
-- Dependencies: 6 160
-- Name: ufs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ufs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ufs_id_seq OWNER TO postgres;

--
-- TOC entry 2105 (class 0 OID 0)
-- Dependencies: 158
-- Name: ufs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE ufs_id_seq OWNED BY ufs.id;


--
-- TOC entry 2106 (class 0 OID 0)
-- Dependencies: 158
-- Name: ufs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ufs_id_seq', 1, false);


--
-- TOC entry 152 (class 1259 OID 16435)
-- Dependencies: 6
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    password character(40) NOT NULL,
    group_id integer NOT NULL,
    created date,
    modified date
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 153 (class 1259 OID 16438)
-- Dependencies: 6 152
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 2107 (class 0 OID 0)
-- Dependencies: 153
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- TOC entry 2108 (class 0 OID 0)
-- Dependencies: 153
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 19, true);


--
-- TOC entry 1939 (class 2604 OID 16440)
-- Dependencies: 143 142
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE acos ALTER COLUMN id SET DEFAULT nextval('acos_id_seq'::regclass);


--
-- TOC entry 1942 (class 2604 OID 16441)
-- Dependencies: 147 144
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE aros ALTER COLUMN id SET DEFAULT nextval('aros_id_seq'::regclass);


--
-- TOC entry 1947 (class 2604 OID 16442)
-- Dependencies: 146 145
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE aros_acos ALTER COLUMN id SET DEFAULT nextval('aros_acos_id_seq'::regclass);


--
-- TOC entry 1952 (class 2604 OID 24581)
-- Dependencies: 156 157 157
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE cidades ALTER COLUMN id SET DEFAULT nextval('cidades_id_seq'::regclass);


--
-- TOC entry 1964 (class 2604 OID 24674)
-- Dependencies: 180 179 180
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE contato_pfs ALTER COLUMN id SET DEFAULT nextval('contatos_pessoas_fisicas_id_seq'::regclass);


--
-- TOC entry 1970 (class 2604 OID 32915)
-- Dependencies: 191 192 192
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE contatos ALTER COLUMN id SET DEFAULT nextval('contatos_id_seq'::regclass);


--
-- TOC entry 1962 (class 2604 OID 24654)
-- Dependencies: 175 176 176
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE curriculos ALTER COLUMN id SET DEFAULT nextval('curriculos_pfs_id_seq'::regclass);


--
-- TOC entry 1968 (class 2604 OID 24733)
-- Dependencies: 187 188 188
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE escolaridades ALTER COLUMN id SET DEFAULT nextval('escolaridade_id_seq'::regclass);


--
-- TOC entry 1957 (class 2604 OID 24614)
-- Dependencies: 165 166 166
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE expedidor_rgs ALTER COLUMN id SET DEFAULT nextval('expedidor_rgs_id_seq'::regclass);


--
-- TOC entry 1966 (class 2604 OID 24707)
-- Dependencies: 184 183 184
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE funcao_exercidas ALTER COLUMN id SET DEFAULT nextval('funcoes_exercidas_id_seq'::regclass);


--
-- TOC entry 1961 (class 2604 OID 24646)
-- Dependencies: 173 174 174
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE funcoes ALTER COLUMN id SET DEFAULT nextval('funcoes_id_seq'::regclass);


--
-- TOC entry 1948 (class 2604 OID 16443)
-- Dependencies: 149 148
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE groups ALTER COLUMN id SET DEFAULT nextval('groups_id_seq'::regclass);


--
-- TOC entry 1963 (class 2604 OID 24666)
-- Dependencies: 177 178 178
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE multimidias ALTER COLUMN id SET DEFAULT nextval('multimidia_curriculos_id_seq'::regclass);


--
-- TOC entry 1955 (class 2604 OID 24600)
-- Dependencies: 161 162 162
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE nacionalidades ALTER COLUMN id SET DEFAULT nextval('nacionalidades_id_seq'::regclass);


--
-- TOC entry 1956 (class 2604 OID 24608)
-- Dependencies: 164 163 164
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE naturalidades ALTER COLUMN id SET DEFAULT nextval('naturalidades_id_seq'::regclass);


--
-- TOC entry 1960 (class 2604 OID 24638)
-- Dependencies: 171 172 172
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ocupacoes ALTER COLUMN id SET DEFAULT nextval('ocupacoes_id_seq'::regclass);


--
-- TOC entry 1969 (class 2604 OID 32907)
-- Dependencies: 189 190 190
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE paises ALTER COLUMN id SET DEFAULT nextval('paises_id_seq'::regclass);


--
-- TOC entry 1951 (class 2604 OID 16910)
-- Dependencies: 154 155 155
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE pfs ALTER COLUMN id SET DEFAULT nextval('pessoas_fisicas_id_seq'::regclass);


--
-- TOC entry 1949 (class 2604 OID 16444)
-- Dependencies: 151 150
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE posts ALTER COLUMN id SET DEFAULT nextval('posts_id_seq'::regclass);


--
-- TOC entry 1967 (class 2604 OID 24723)
-- Dependencies: 185 186 186
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE produtos ALTER COLUMN id SET DEFAULT nextval('produtos_id_seq'::regclass);


--
-- TOC entry 1959 (class 2604 OID 24630)
-- Dependencies: 170 169 170
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE segmento_culturais ALTER COLUMN id SET DEFAULT nextval('segmentos_culturais_id_seq'::regclass);


--
-- TOC entry 1965 (class 2604 OID 24682)
-- Dependencies: 182 181 182
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE telefone_pfs ALTER COLUMN id SET DEFAULT nextval('telefones_pfs_id_seq'::regclass);


--
-- TOC entry 1971 (class 2604 OID 32923)
-- Dependencies: 194 193 194
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE telefones ALTER COLUMN id SET DEFAULT nextval('telefones_id_seq'::regclass);


--
-- TOC entry 1958 (class 2604 OID 24622)
-- Dependencies: 168 167 168
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE tipologias ALTER COLUMN id SET DEFAULT nextval('tipologias_id_seq'::regclass);


--
-- TOC entry 1953 (class 2604 OID 24591)
-- Dependencies: 160 158 160
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ufs ALTER COLUMN id SET DEFAULT nextval('ufs_id_seq'::regclass);


--
-- TOC entry 1954 (class 2604 OID 24592)
-- Dependencies: 159 160 160
-- Name: descricao; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ufs ALTER COLUMN descricao SET DEFAULT nextval('ufs_descricao_seq'::regclass);


--
-- TOC entry 1950 (class 2604 OID 16445)
-- Dependencies: 153 152
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- TOC entry 2024 (class 0 OID 16393)
-- Dependencies: 142
-- Data for Name: acos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY acos (id, parent_id, model, foreign_key, alias, lft, rght) FROM stdin;
9	8	\N	\N	display	3	4
8	7	\N	\N	Pages	2	7
10	8	\N	\N	build_acl	5	6
12	11	\N	\N	index	9	10
13	11	\N	\N	view	11	12
14	11	\N	\N	add	13	14
15	11	\N	\N	delete	15	16
16	11	\N	\N	edit	17	18
11	7	\N	\N	Groups	8	21
17	11	\N	\N	build_acl	19	20
19	18	\N	\N	index	23	24
20	18	\N	\N	view	25	26
21	18	\N	\N	add	27	28
22	18	\N	\N	delete	29	30
23	18	\N	\N	edit	31	32
18	7	\N	\N	Posts	22	35
24	18	\N	\N	build_acl	33	34
26	25	\N	\N	index	37	38
27	25	\N	\N	view	39	40
28	25	\N	\N	add	41	42
29	25	\N	\N	delete	43	44
30	25	\N	\N	edit	45	46
31	25	\N	\N	login	47	48
32	25	\N	\N	logout	49	50
7	\N		\N	controllers	1	54
25	7	\N	\N	Users	36	53
33	25	\N	\N	build_acl	51	52
\.


--
-- TOC entry 2025 (class 0 OID 16403)
-- Dependencies: 144
-- Data for Name: aros; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY aros (id, parent_id, model, foreign_key, alias, lft, rght) FROM stdin;
6	\N	Group	5		1	4
9	6	User	17		2	3
7	\N	Group	6		5	8
10	7	User	18		6	7
8	\N	Group	7		9	12
11	8	User	19		10	11
\.


--
-- TOC entry 2026 (class 0 OID 16411)
-- Dependencies: 145
-- Data for Name: aros_acos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY aros_acos (id, aro_id, aco_id, _create, _read, _update, _delete) FROM stdin;
3	6	7	1 	1 	1 	1 
4	7	7	-1	-1	-1	-1
5	7	18	1 	1 	1 	1 
6	8	7	-1	-1	-1	-1
7	8	21	1 	1 	1 	1 
8	8	23	1 	1 	1 	1 
\.


--
-- TOC entry 2031 (class 0 OID 24578)
-- Dependencies: 157
-- Data for Name: cidades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cidades (id, uf_id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2042 (class 0 OID 24671)
-- Dependencies: 180
-- Data for Name: contato_pfs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY contato_pfs (id, telefone_pf_id, fax, email, site) FROM stdin;
\.


--
-- TOC entry 2048 (class 0 OID 32912)
-- Dependencies: 192
-- Data for Name: contatos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY contatos (id, descricao) FROM stdin;
\.


--
-- TOC entry 2040 (class 0 OID 24651)
-- Dependencies: 176
-- Data for Name: curriculos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY curriculos (id, multimidia_id, descricao, funcao_exercida_id, organizacao_responsavel, data, produto_id) FROM stdin;
\.


--
-- TOC entry 2046 (class 0 OID 24730)
-- Dependencies: 188
-- Data for Name: escolaridades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY escolaridades (id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2035 (class 0 OID 24611)
-- Dependencies: 166
-- Data for Name: expedidor_rgs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY expedidor_rgs (id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2044 (class 0 OID 24704)
-- Dependencies: 184
-- Data for Name: funcao_exercidas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY funcao_exercidas (id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2039 (class 0 OID 24643)
-- Dependencies: 174
-- Data for Name: funcoes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY funcoes (id, ocupacao_id, descricao, tipo, created, modified) FROM stdin;
\.


--
-- TOC entry 2027 (class 0 OID 16422)
-- Dependencies: 148
-- Data for Name: groups; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY groups (id, name, created, modified) FROM stdin;
5	administrators	2011-12-24	2011-12-24
6	managers	2011-12-24	2011-12-24
7	users	2011-12-24	2011-12-24
\.


--
-- TOC entry 2041 (class 0 OID 24663)
-- Dependencies: 178
-- Data for Name: multimidias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY multimidias (id, multimidia) FROM stdin;
\.


--
-- TOC entry 2033 (class 0 OID 24597)
-- Dependencies: 162
-- Data for Name: nacionalidades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY nacionalidades (id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2034 (class 0 OID 24605)
-- Dependencies: 164
-- Data for Name: naturalidades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY naturalidades (id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2038 (class 0 OID 24635)
-- Dependencies: 172
-- Data for Name: ocupacoes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY ocupacoes (id, segmento_cultural_id, descricao, tipo, created, modified) FROM stdin;
\.


--
-- TOC entry 2047 (class 0 OID 32904)
-- Dependencies: 190
-- Data for Name: paises; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY paises (id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2030 (class 0 OID 16907)
-- Dependencies: 155
-- Data for Name: pfs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pfs (id, nacionalidade_id, naturalidade_id, expedidor_rg_id, curriculo_id, cidade_id, escolaridade_id, tipologia_id, pais_id, nome, nome_artistico, naturalizado, data_naturalizacao, tipo_visto, data_validade_visto, data_nascimento, sexo, cpf, rg, data_rg, ano_graduacao, curso, profissao, logradouro, numero, complemento, bairro, cep, comprovante, representante_oficial, representante_nome, representante_cpf, representante_rg, representante_dataexpedicao_rg, representante_expedidor_rg, representante_telefone, representante_celular, representante_email, representante_delegacao, deletado, created, modified) FROM stdin;
\.


--
-- TOC entry 2028 (class 0 OID 16427)
-- Dependencies: 150
-- Data for Name: posts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY posts (id, title, body, created, modified) FROM stdin;
2	A title once again	And the post body follows.	2011-12-23	\N
3	Title strikes back	This is really exciting! Not.	2011-12-23	\N
1	The title 1	This is the post body.	2011-12-23	2011-12-23
8	teste	testes	2011-12-25	2011-12-25
\.


--
-- TOC entry 2045 (class 0 OID 24720)
-- Dependencies: 186
-- Data for Name: produtos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY produtos (id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2037 (class 0 OID 24627)
-- Dependencies: 170
-- Data for Name: segmento_culturais; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY segmento_culturais (id, descricao, tipo, created, modified) FROM stdin;
\.


--
-- TOC entry 2043 (class 0 OID 24679)
-- Dependencies: 182
-- Data for Name: telefone_pfs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY telefone_pfs (id, telefone) FROM stdin;
\.


--
-- TOC entry 2049 (class 0 OID 32920)
-- Dependencies: 194
-- Data for Name: telefones; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY telefones (id, descricao) FROM stdin;
\.


--
-- TOC entry 2036 (class 0 OID 24619)
-- Dependencies: 168
-- Data for Name: tipologias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipologias (id, segmento_cultural, ocupacao_id, funcao_id, tempo_atuacao) FROM stdin;
\.


--
-- TOC entry 2032 (class 0 OID 24588)
-- Dependencies: 160
-- Data for Name: ufs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY ufs (id, descricao, created, modified) FROM stdin;
\.


--
-- TOC entry 2029 (class 0 OID 16435)
-- Dependencies: 152
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, group_id, created, modified) FROM stdin;
17	admin	ba2035c18ab408e26f8c44ee266bf5d20731fca0	5	2011-12-24	2011-12-24
18	gerente	138d6b899cbc908189c3fa6711c14707f5cc6372	6	2011-12-24	2011-12-24
19	usuario	11f14cbe38a53fc4a470c7aa685795c7f65d725e	7	2011-12-24	2011-12-24
\.


--
-- TOC entry 1973 (class 2606 OID 16447)
-- Dependencies: 142 142
-- Name: acos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY acos
    ADD CONSTRAINT acos_pkey PRIMARY KEY (id);


--
-- TOC entry 1977 (class 2606 OID 16449)
-- Dependencies: 145 145
-- Name: aros_acos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY aros_acos
    ADD CONSTRAINT aros_acos_pkey PRIMARY KEY (id);


--
-- TOC entry 1975 (class 2606 OID 16451)
-- Dependencies: 144 144
-- Name: aros_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY aros
    ADD CONSTRAINT aros_pkey PRIMARY KEY (id);


--
-- TOC entry 1989 (class 2606 OID 24583)
-- Dependencies: 157 157
-- Name: cidades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cidades
    ADD CONSTRAINT cidades_pkey PRIMARY KEY (id);


--
-- TOC entry 2009 (class 2606 OID 24676)
-- Dependencies: 180 180
-- Name: contatos_pessoas_fisicas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY contato_pfs
    ADD CONSTRAINT contatos_pessoas_fisicas_pkey PRIMARY KEY (id);


--
-- TOC entry 2021 (class 2606 OID 32917)
-- Dependencies: 192 192
-- Name: contatos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY contatos
    ADD CONSTRAINT contatos_pkey PRIMARY KEY (id);


--
-- TOC entry 2005 (class 2606 OID 24659)
-- Dependencies: 176 176
-- Name: curriculos_pfs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY curriculos
    ADD CONSTRAINT curriculos_pfs_pkey PRIMARY KEY (id);


--
-- TOC entry 2017 (class 2606 OID 24735)
-- Dependencies: 188 188
-- Name: escolaridade_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY escolaridades
    ADD CONSTRAINT escolaridade_pkey PRIMARY KEY (id);


--
-- TOC entry 1995 (class 2606 OID 24616)
-- Dependencies: 166 166
-- Name: expedidor_rgs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY expedidor_rgs
    ADD CONSTRAINT expedidor_rgs_pkey PRIMARY KEY (id);


--
-- TOC entry 2013 (class 2606 OID 24709)
-- Dependencies: 184 184
-- Name: funcoes_exercidas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY funcao_exercidas
    ADD CONSTRAINT funcoes_exercidas_pkey PRIMARY KEY (id);


--
-- TOC entry 2003 (class 2606 OID 24648)
-- Dependencies: 174 174
-- Name: funcoes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY funcoes
    ADD CONSTRAINT funcoes_pkey PRIMARY KEY (id);


--
-- TOC entry 1979 (class 2606 OID 16453)
-- Dependencies: 148 148
-- Name: groups_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY groups
    ADD CONSTRAINT groups_pk PRIMARY KEY (id);


--
-- TOC entry 2007 (class 2606 OID 24668)
-- Dependencies: 178 178
-- Name: multimidia_curriculos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY multimidias
    ADD CONSTRAINT multimidia_curriculos_pkey PRIMARY KEY (id);


--
-- TOC entry 1993 (class 2606 OID 24602)
-- Dependencies: 162 162
-- Name: nacionalidades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY nacionalidades
    ADD CONSTRAINT nacionalidades_pkey PRIMARY KEY (id);


--
-- TOC entry 2001 (class 2606 OID 24640)
-- Dependencies: 172 172
-- Name: ocupacoes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ocupacoes
    ADD CONSTRAINT ocupacoes_pkey PRIMARY KEY (id);


--
-- TOC entry 2019 (class 2606 OID 32909)
-- Dependencies: 190 190
-- Name: paises_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY paises
    ADD CONSTRAINT paises_pkey PRIMARY KEY (id);


--
-- TOC entry 1987 (class 2606 OID 16915)
-- Dependencies: 155 155
-- Name: pessoas_fisicas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pfs
    ADD CONSTRAINT pessoas_fisicas_pkey PRIMARY KEY (id);


--
-- TOC entry 1981 (class 2606 OID 16455)
-- Dependencies: 150 150
-- Name: posts_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY posts
    ADD CONSTRAINT posts_pk PRIMARY KEY (id);


--
-- TOC entry 2015 (class 2606 OID 24725)
-- Dependencies: 186 186
-- Name: produtos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY produtos
    ADD CONSTRAINT produtos_pkey PRIMARY KEY (id);


--
-- TOC entry 1999 (class 2606 OID 24632)
-- Dependencies: 170 170
-- Name: segmentos_culturais_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY segmento_culturais
    ADD CONSTRAINT segmentos_culturais_pkey PRIMARY KEY (id);


--
-- TOC entry 2011 (class 2606 OID 24684)
-- Dependencies: 182 182
-- Name: telefones_pfs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY telefone_pfs
    ADD CONSTRAINT telefones_pfs_pkey PRIMARY KEY (id);


--
-- TOC entry 2023 (class 2606 OID 32925)
-- Dependencies: 194 194
-- Name: telefones_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY telefones
    ADD CONSTRAINT telefones_pkey PRIMARY KEY (id);


--
-- TOC entry 1997 (class 2606 OID 24624)
-- Dependencies: 168 168
-- Name: tipologias_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipologias
    ADD CONSTRAINT tipologias_pkey PRIMARY KEY (id);


--
-- TOC entry 1991 (class 2606 OID 24594)
-- Dependencies: 160 160
-- Name: ufs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ufs
    ADD CONSTRAINT ufs_pkey PRIMARY KEY (id);


--
-- TOC entry 1983 (class 2606 OID 16457)
-- Dependencies: 152 152
-- Name: users_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pk PRIMARY KEY (id);


--
-- TOC entry 1985 (class 2606 OID 16459)
-- Dependencies: 152 152
-- Name: users_username_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_username_key UNIQUE (username);


--
-- TOC entry 2054 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2012-02-01 11:14:21

--
-- PostgreSQL database dump complete
--

