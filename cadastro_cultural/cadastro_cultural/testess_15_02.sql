--
-- PostgreSQL database dump
--

-- Dumped from database version 9.0.6
-- Dumped by pg_dump version 9.0.6
-- Started on 2012-02-15 13:18:30

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- TOC entry 498 (class 2612 OID 11574)
-- Name: plpgsql; Type: PROCEDURAL LANGUAGE; Schema: -; Owner: postgres
--

CREATE OR REPLACE PROCEDURAL LANGUAGE plpgsql;


ALTER PROCEDURAL LANGUAGE plpgsql OWNER TO postgres;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 142 (class 1259 OID 33318)
-- Dependencies: 6
-- Name: cbos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cbos (
    id integer NOT NULL,
    codcbo integer NOT NULL,
    nomcbo character varying(200) NOT NULL
);


ALTER TABLE public.cbos OWNER TO postgres;

--
-- TOC entry 1882 (class 0 OID 0)
-- Dependencies: 142
-- Name: TABLE cbos; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE cbos IS 'Tabela referente as atividades do CBO.';


--
-- TOC entry 1883 (class 0 OID 0)
-- Dependencies: 142
-- Name: COLUMN cbos.id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN cbos.id IS 'Campo referente ao código do CBO para chave primária.';


--
-- TOC entry 1884 (class 0 OID 0)
-- Dependencies: 142
-- Name: COLUMN cbos.codcbo; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN cbos.codcbo IS 'Campo referente ao código fixo de cada atividade do CBO';


--
-- TOC entry 143 (class 1259 OID 33321)
-- Dependencies: 142 6
-- Name: cbos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cbos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cbos_id_seq OWNER TO postgres;

--
-- TOC entry 1885 (class 0 OID 0)
-- Dependencies: 143
-- Name: cbos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cbos_id_seq OWNED BY cbos.id;


--
-- TOC entry 1886 (class 0 OID 0)
-- Dependencies: 143
-- Name: cbos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cbos_id_seq', 2, true);


--
-- TOC entry 144 (class 1259 OID 33323)
-- Dependencies: 6
-- Name: cnaes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cnaes (
    id integer NOT NULL,
    nomcnae character varying(200) NOT NULL,
    codcnae integer NOT NULL
);


ALTER TABLE public.cnaes OWNER TO postgres;

--
-- TOC entry 1887 (class 0 OID 0)
-- Dependencies: 144
-- Name: TABLE cnaes; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE cnaes IS 'Tabela referente as atividades do CNAE.';


--
-- TOC entry 1888 (class 0 OID 0)
-- Dependencies: 144
-- Name: COLUMN cnaes.id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN cnaes.id IS 'Campo referente ao código do CNAE para chave primária.';


--
-- TOC entry 1889 (class 0 OID 0)
-- Dependencies: 144
-- Name: COLUMN cnaes.codcnae; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN cnaes.codcnae IS 'Campo referente ao código fixo de cada atividade do CNAE.';


--
-- TOC entry 145 (class 1259 OID 33326)
-- Dependencies: 144 6
-- Name: cnaes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cnaes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cnaes_id_seq OWNER TO postgres;

--
-- TOC entry 1890 (class 0 OID 0)
-- Dependencies: 145
-- Name: cnaes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cnaes_id_seq OWNED BY cnaes.id;


--
-- TOC entry 1891 (class 0 OID 0)
-- Dependencies: 145
-- Name: cnaes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cnaes_id_seq', 2, true);


--
-- TOC entry 146 (class 1259 OID 33328)
-- Dependencies: 6
-- Name: elos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE elos (
    id integer NOT NULL,
    nomelo character varying(100) NOT NULL
);


ALTER TABLE public.elos OWNER TO postgres;

--
-- TOC entry 1892 (class 0 OID 0)
-- Dependencies: 146
-- Name: TABLE elos; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE elos IS 'Tabela referente a descrição dos Elos.';


--
-- TOC entry 1893 (class 0 OID 0)
-- Dependencies: 146
-- Name: COLUMN elos.id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN elos.id IS 'Campo referente ao código do ELO para chave primária.';


--
-- TOC entry 147 (class 1259 OID 33331)
-- Dependencies: 146 6
-- Name: elos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE elos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.elos_id_seq OWNER TO postgres;

--
-- TOC entry 1894 (class 0 OID 0)
-- Dependencies: 147
-- Name: elos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE elos_id_seq OWNED BY elos.id;


--
-- TOC entry 1895 (class 0 OID 0)
-- Dependencies: 147
-- Name: elos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('elos_id_seq', 2, true);


--
-- TOC entry 158 (class 1259 OID 42254)
-- Dependencies: 6
-- Name: fisicas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE fisicas (
    id integer NOT NULL,
    tipologia_id integer NOT NULL,
    nome character varying(50) NOT NULL
);


ALTER TABLE public.fisicas OWNER TO postgres;

--
-- TOC entry 157 (class 1259 OID 42252)
-- Dependencies: 158 6
-- Name: fisicas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE fisicas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fisicas_id_seq OWNER TO postgres;

--
-- TOC entry 1896 (class 0 OID 0)
-- Dependencies: 157
-- Name: fisicas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE fisicas_id_seq OWNED BY fisicas.id;


--
-- TOC entry 1897 (class 0 OID 0)
-- Dependencies: 157
-- Name: fisicas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('fisicas_id_seq', 1, false);


--
-- TOC entry 160 (class 1259 OID 42353)
-- Dependencies: 6
-- Name: grupotipologias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE grupotipologias (
    id integer NOT NULL,
    segmentocultural_id integer NOT NULL,
    nome character varying(20) NOT NULL
);


ALTER TABLE public.grupotipologias OWNER TO postgres;

--
-- TOC entry 159 (class 1259 OID 42351)
-- Dependencies: 160 6
-- Name: grupotipologias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE grupotipologias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.grupotipologias_id_seq OWNER TO postgres;

--
-- TOC entry 1898 (class 0 OID 0)
-- Dependencies: 159
-- Name: grupotipologias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE grupotipologias_id_seq OWNED BY grupotipologias.id;


--
-- TOC entry 1899 (class 0 OID 0)
-- Dependencies: 159
-- Name: grupotipologias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('grupotipologias_id_seq', 5, true);


--
-- TOC entry 154 (class 1259 OID 42238)
-- Dependencies: 6
-- Name: municipios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE municipios (
    id integer NOT NULL,
    nome character varying(50) NOT NULL
);


ALTER TABLE public.municipios OWNER TO postgres;

--
-- TOC entry 153 (class 1259 OID 42236)
-- Dependencies: 154 6
-- Name: municipios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE municipios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.municipios_id_seq OWNER TO postgres;

--
-- TOC entry 1900 (class 0 OID 0)
-- Dependencies: 153
-- Name: municipios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE municipios_id_seq OWNED BY municipios.id;


--
-- TOC entry 1901 (class 0 OID 0)
-- Dependencies: 153
-- Name: municipios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('municipios_id_seq', 1, false);


--
-- TOC entry 156 (class 1259 OID 42246)
-- Dependencies: 6
-- Name: segmentoculturais; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE segmentoculturais (
    id integer NOT NULL,
    nome character varying(50) NOT NULL
);


ALTER TABLE public.segmentoculturais OWNER TO postgres;

--
-- TOC entry 155 (class 1259 OID 42244)
-- Dependencies: 6 156
-- Name: segmentoculturais_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE segmentoculturais_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.segmentoculturais_id_seq OWNER TO postgres;

--
-- TOC entry 1902 (class 0 OID 0)
-- Dependencies: 155
-- Name: segmentoculturais_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE segmentoculturais_id_seq OWNED BY segmentoculturais.id;


--
-- TOC entry 1903 (class 0 OID 0)
-- Dependencies: 155
-- Name: segmentoculturais_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('segmentoculturais_id_seq', 3, true);


--
-- TOC entry 148 (class 1259 OID 33343)
-- Dependencies: 6
-- Name: territorios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE territorios (
    id integer NOT NULL,
    nomterritorio character varying(200) NOT NULL,
    tipoterritorio integer NOT NULL
);


ALTER TABLE public.territorios OWNER TO postgres;

--
-- TOC entry 1904 (class 0 OID 0)
-- Dependencies: 148
-- Name: TABLE territorios; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE territorios IS 'Tabela referente as Regiões Territoriais';


--
-- TOC entry 1905 (class 0 OID 0)
-- Dependencies: 148
-- Name: COLUMN territorios.id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN territorios.id IS 'Campo referente ao código do território.';


--
-- TOC entry 1906 (class 0 OID 0)
-- Dependencies: 148
-- Name: COLUMN territorios.tipoterritorio; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN territorios.tipoterritorio IS 'A definir: valores fixos para o tipo de território ou chave estrangeira para outra tabela.';


--
-- TOC entry 149 (class 1259 OID 33346)
-- Dependencies: 6 148
-- Name: territorios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE territorios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.territorios_id_seq OWNER TO postgres;

--
-- TOC entry 1907 (class 0 OID 0)
-- Dependencies: 149
-- Name: territorios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE territorios_id_seq OWNED BY territorios.id;


--
-- TOC entry 1908 (class 0 OID 0)
-- Dependencies: 149
-- Name: territorios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('territorios_id_seq', 1, false);


--
-- TOC entry 150 (class 1259 OID 33348)
-- Dependencies: 6
-- Name: territorios_municipios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE territorios_municipios (
    territorio_id integer NOT NULL,
    municipio_id integer NOT NULL
);


ALTER TABLE public.territorios_municipios OWNER TO postgres;

--
-- TOC entry 1909 (class 0 OID 0)
-- Dependencies: 150
-- Name: TABLE territorios_municipios; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE territorios_municipios IS 'Tabela assossiativa entre Região territorial e Municípios';


--
-- TOC entry 151 (class 1259 OID 33351)
-- Dependencies: 6
-- Name: tipologias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipologias (
    id integer NOT NULL,
    grupotipologia_id integer NOT NULL,
    segmentocultural_id integer NOT NULL,
    cnae_id integer,
    cbo_id integer,
    elo_id integer,
    stsdeletado boolean
);


ALTER TABLE public.tipologias OWNER TO postgres;

--
-- TOC entry 1910 (class 0 OID 0)
-- Dependencies: 151
-- Name: COLUMN tipologias.id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN tipologias.id IS 'Campo referente ao código da tipologia';


--
-- TOC entry 1911 (class 0 OID 0)
-- Dependencies: 151
-- Name: COLUMN tipologias.grupotipologia_id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN tipologias.grupotipologia_id IS 'Chave estrangeira para grupo tipologia';


--
-- TOC entry 1912 (class 0 OID 0)
-- Dependencies: 151
-- Name: COLUMN tipologias.segmentocultural_id; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN tipologias.segmentocultural_id IS 'Chave estrangeira referente ao código do segmento cultural';


--
-- TOC entry 152 (class 1259 OID 33354)
-- Dependencies: 6 151
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
-- TOC entry 1913 (class 0 OID 0)
-- Dependencies: 152
-- Name: tipologias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipologias_id_seq OWNED BY tipologias.id;


--
-- TOC entry 1914 (class 0 OID 0)
-- Dependencies: 152
-- Name: tipologias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipologias_id_seq', 3, true);


--
-- TOC entry 1832 (class 2604 OID 33356)
-- Dependencies: 143 142
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE cbos ALTER COLUMN id SET DEFAULT nextval('cbos_id_seq'::regclass);


--
-- TOC entry 1833 (class 2604 OID 33357)
-- Dependencies: 145 144
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE cnaes ALTER COLUMN id SET DEFAULT nextval('cnaes_id_seq'::regclass);


--
-- TOC entry 1834 (class 2604 OID 33358)
-- Dependencies: 147 146
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE elos ALTER COLUMN id SET DEFAULT nextval('elos_id_seq'::regclass);


--
-- TOC entry 1839 (class 2604 OID 42257)
-- Dependencies: 158 157 158
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE fisicas ALTER COLUMN id SET DEFAULT nextval('fisicas_id_seq'::regclass);


--
-- TOC entry 1840 (class 2604 OID 42356)
-- Dependencies: 160 159 160
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE grupotipologias ALTER COLUMN id SET DEFAULT nextval('grupotipologias_id_seq'::regclass);


--
-- TOC entry 1837 (class 2604 OID 42241)
-- Dependencies: 153 154 154
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE municipios ALTER COLUMN id SET DEFAULT nextval('municipios_id_seq'::regclass);


--
-- TOC entry 1838 (class 2604 OID 42249)
-- Dependencies: 155 156 156
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE segmentoculturais ALTER COLUMN id SET DEFAULT nextval('segmentoculturais_id_seq'::regclass);


--
-- TOC entry 1835 (class 2604 OID 33361)
-- Dependencies: 149 148
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE territorios ALTER COLUMN id SET DEFAULT nextval('territorios_id_seq'::regclass);


--
-- TOC entry 1836 (class 2604 OID 33362)
-- Dependencies: 152 151
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE tipologias ALTER COLUMN id SET DEFAULT nextval('tipologias_id_seq'::regclass);


--
-- TOC entry 1867 (class 0 OID 33318)
-- Dependencies: 142
-- Data for Name: cbos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cbos (id, codcbo, nomcbo) FROM stdin;
1	1	diretor
2	2	roterista
\.


--
-- TOC entry 1868 (class 0 OID 33323)
-- Dependencies: 144
-- Data for Name: cnaes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cnaes (id, nomcnae, codcnae) FROM stdin;
2	cnae 2	2
1	cnae 1	11
\.


--
-- TOC entry 1869 (class 0 OID 33328)
-- Dependencies: 146
-- Data for Name: elos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY elos (id, nomelo) FROM stdin;
1	difusão
2	criação
\.


--
-- TOC entry 1875 (class 0 OID 42254)
-- Dependencies: 158
-- Data for Name: fisicas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY fisicas (id, tipologia_id, nome) FROM stdin;
\.


--
-- TOC entry 1876 (class 0 OID 42353)
-- Dependencies: 160
-- Data for Name: grupotipologias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY grupotipologias (id, segmentocultural_id, nome) FROM stdin;
1	1	PF
5	3	PJ
4	2	PF
\.


--
-- TOC entry 1873 (class 0 OID 42238)
-- Dependencies: 154
-- Data for Name: municipios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY municipios (id, nome) FROM stdin;
\.


--
-- TOC entry 1874 (class 0 OID 42246)
-- Dependencies: 156
-- Data for Name: segmentoculturais; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY segmentoculturais (id, nome) FROM stdin;
1	cinema
2	Música
3	Teatro
\.


--
-- TOC entry 1870 (class 0 OID 33343)
-- Dependencies: 148
-- Data for Name: territorios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY territorios (id, nomterritorio, tipoterritorio) FROM stdin;
\.


--
-- TOC entry 1871 (class 0 OID 33348)
-- Dependencies: 150
-- Data for Name: territorios_municipios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY territorios_municipios (territorio_id, municipio_id) FROM stdin;
\.


--
-- TOC entry 1872 (class 0 OID 33351)
-- Dependencies: 151
-- Data for Name: tipologias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipologias (id, grupotipologia_id, segmentocultural_id, cnae_id, cbo_id, elo_id, stsdeletado) FROM stdin;
1	1	1	1	1	1	f
2	4	1	\N	1	\N	\N
3	1	1	\N	2	\N	f
\.


--
-- TOC entry 1860 (class 2606 OID 42259)
-- Dependencies: 158 158
-- Name: fisicas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY fisicas
    ADD CONSTRAINT fisicas_pkey PRIMARY KEY (id);


--
-- TOC entry 1862 (class 2606 OID 42358)
-- Dependencies: 160 160
-- Name: grupotipologias_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY grupotipologias
    ADD CONSTRAINT grupotipologias_pkey PRIMARY KEY (id);


--
-- TOC entry 1856 (class 2606 OID 42243)
-- Dependencies: 154 154
-- Name: municipios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY municipios
    ADD CONSTRAINT municipios_pkey PRIMARY KEY (id);


--
-- TOC entry 1842 (class 2606 OID 33364)
-- Dependencies: 142 142
-- Name: pkCbo; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cbos
    ADD CONSTRAINT "pkCbo" PRIMARY KEY (id);


--
-- TOC entry 1844 (class 2606 OID 33366)
-- Dependencies: 144 144
-- Name: pkCnae; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cnaes
    ADD CONSTRAINT "pkCnae" PRIMARY KEY (id);


--
-- TOC entry 1846 (class 2606 OID 33368)
-- Dependencies: 146 146
-- Name: pkElo; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY elos
    ADD CONSTRAINT "pkElo" PRIMARY KEY (id);


--
-- TOC entry 1848 (class 2606 OID 33374)
-- Dependencies: 148 148
-- Name: pkTerritorios; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY territorios
    ADD CONSTRAINT "pkTerritorios" PRIMARY KEY (id);


--
-- TOC entry 1852 (class 2606 OID 33376)
-- Dependencies: 150 150 150
-- Name: pkTerritorios_municipios; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY territorios_municipios
    ADD CONSTRAINT "pkTerritorios_municipios" PRIMARY KEY (territorio_id, municipio_id);


--
-- TOC entry 1854 (class 2606 OID 33378)
-- Dependencies: 151 151
-- Name: pkTipologia; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipologias
    ADD CONSTRAINT "pkTipologia" PRIMARY KEY (id);


--
-- TOC entry 1858 (class 2606 OID 42251)
-- Dependencies: 156 156
-- Name: segmentoculturais_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY segmentoculturais
    ADD CONSTRAINT segmentoculturais_pkey PRIMARY KEY (id);


--
-- TOC entry 1850 (class 2606 OID 33380)
-- Dependencies: 148 148
-- Name: ukTerritoriosNomterritorio; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY territorios
    ADD CONSTRAINT "ukTerritoriosNomterritorio" UNIQUE (nomterritorio);


--
-- TOC entry 1863 (class 2606 OID 33383)
-- Dependencies: 148 1847 150
-- Name: fkTerritorios_municipios_Municipios; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY territorios_municipios
    ADD CONSTRAINT "fkTerritorios_municipios_Municipios" FOREIGN KEY (territorio_id) REFERENCES territorios(id);


--
-- TOC entry 1864 (class 2606 OID 33388)
-- Dependencies: 151 1841 142
-- Name: fkTipologias_Cbos; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipologias
    ADD CONSTRAINT "fkTipologias_Cbos" FOREIGN KEY (cbo_id) REFERENCES cbos(id);


--
-- TOC entry 1865 (class 2606 OID 33393)
-- Dependencies: 1843 151 144
-- Name: fkTipologias_Cnaes; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipologias
    ADD CONSTRAINT "fkTipologias_Cnaes" FOREIGN KEY (cnae_id) REFERENCES cnaes(id);


--
-- TOC entry 1866 (class 2606 OID 33398)
-- Dependencies: 1845 151 146
-- Name: fkTipologias_Elos; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipologias
    ADD CONSTRAINT "fkTipologias_Elos" FOREIGN KEY (elo_id) REFERENCES elos(id);


--
-- TOC entry 1881 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2012-02-15 13:18:31

--
-- PostgreSQL database dump complete
--

