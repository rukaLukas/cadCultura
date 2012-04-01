--
-- PostgreSQL database dump
--

-- Dumped from database version 9.0.5
-- Dumped by pg_dump version 9.0.5
-- Started on 2012-03-30 10:04:35

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 187 (class 1259 OID 17363)
-- Dependencies: 1993 6
-- Name: pfs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pfs (
    id integer NOT NULL,
    cidade_id integer NOT NULL,
    tipologia_id integer,
    nome character varying(50) NOT NULL,
    nome_artistico character varying(50) NOT NULL,
    naturalizado character(1),
    data_naturalizacao character varying(20),
    visto character varying(20),
    data_validade_visto character varying(20),
    data_nascimento date NOT NULL,
    sexo character(1) NOT NULL,
    cpf character varying(14) NOT NULL,
    rg_expedidor character varying(12),
    data_rg character varying(20),
    profissao character varying(20) NOT NULL,
    logradouro character varying(50) NOT NULL,
    numero character varying(7) NOT NULL,
    complemento character varying(50) NOT NULL,
    bairro character varying(30) NOT NULL,
    cep character varying(9) NOT NULL,
    comprovante character varying(255),
    deletado character(1) DEFAULT 'N'::bpchar,
    created timestamp without time zone,
    modified timestamp without time zone,
    fax character varying(20),
    curriculo_anexo character varying(255),
    passaporte character varying(9),
    naturalidade character varying(30),
    estado_id integer,
    rg_dataexpedicao character varying(20),
    documento_anexo character varying(255),
    rg character varying(12),
    cidade character varying(20),
    nacionalidade_id integer,
    pais_origem character varying(50),
    user_id integer NOT NULL
);


ALTER TABLE public.pfs OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 17369)
-- Dependencies: 187 6
-- Name: pfs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pfs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pfs_id_seq OWNER TO postgres;

--
-- TOC entry 2002 (class 0 OID 0)
-- Dependencies: 188
-- Name: pfs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE pfs_id_seq OWNED BY pfs.id;


--
-- TOC entry 2003 (class 0 OID 0)
-- Dependencies: 188
-- Name: pfs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pfs_id_seq', 136, true);


--
-- TOC entry 1992 (class 2604 OID 17459)
-- Dependencies: 188 187
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE pfs ALTER COLUMN id SET DEFAULT nextval('pfs_id_seq'::regclass);


--
-- TOC entry 1999 (class 0 OID 17363)
-- Dependencies: 187
-- Data for Name: pfs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pfs (id, cidade_id, tipologia_id, nome, nome_artistico, naturalizado, data_naturalizacao, visto, data_validade_visto, data_nascimento, sexo, cpf, rg_expedidor, data_rg, profissao, logradouro, numero, complemento, bairro, cep, comprovante, deletado, created, modified, fax, curriculo_anexo, passaporte, naturalidade, estado_id, rg_dataexpedicao, documento_anexo, rg, cidade, nacionalidade_id, pais_origem, user_id) FROM stdin;
134	1	\N	nome completo	nome artistico	N	\N	\N	\N	1986-05-10	M	031.720.195-60	SSP	\N	profissão 1	logradouro	432		bairro novo	41235-030	\N	S	2012-03-28 14:56:52	2012-03-29 23:05:15		\N		soteropolitano	5	18/03/2012	\N	10033260-99	\N	1		17
\.


--
-- TOC entry 1995 (class 2606 OID 17562)
-- Dependencies: 187 187
-- Name: pfs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pfs
    ADD CONSTRAINT pfs_pkey PRIMARY KEY (id);


--
-- TOC entry 1997 (class 2606 OID 17603)
-- Dependencies: 187 150
-- Name: fkeyPfs_Cidade; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pfs
    ADD CONSTRAINT "fkeyPfs_Cidade" FOREIGN KEY (cidade_id) REFERENCES cidades(id);


--
-- TOC entry 1996 (class 2606 OID 18486)
-- Dependencies: 179 187
-- Name: fkeyPfs_Nacionalidades; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pfs
    ADD CONSTRAINT "fkeyPfs_Nacionalidades" FOREIGN KEY (nacionalidade_id) REFERENCES nacionalidades(id);


--
-- TOC entry 1998 (class 2606 OID 18528)
-- Dependencies: 187 212
-- Name: fkeyPfs_Users; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pfs
    ADD CONSTRAINT "fkeyPfs_Users" FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE;


-- Completed on 2012-03-30 10:04:35

--
-- PostgreSQL database dump complete
--

