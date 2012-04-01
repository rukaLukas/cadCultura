--
-- PostgreSQL database dump
--

-- Dumped from database version 9.0.5
-- Dumped by pg_dump version 9.0.5
-- Started on 2012-03-29 17:24:26

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
-- TOC entry 179 (class 1259 OID 17343)
-- Dependencies: 6
-- Name: nacionalidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE nacionalidades (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL
);


ALTER TABLE public.nacionalidades OWNER TO postgres;

--
-- TOC entry 180 (class 1259 OID 17346)
-- Dependencies: 6 179
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
-- TOC entry 1998 (class 0 OID 0)
-- Dependencies: 180
-- Name: nacionalidades_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE nacionalidades_id_seq OWNED BY nacionalidades.id;


--
-- TOC entry 1999 (class 0 OID 0)
-- Dependencies: 180
-- Name: nacionalidades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('nacionalidades_id_seq', 2, true);


--
-- TOC entry 1992 (class 2604 OID 17455)
-- Dependencies: 180 179
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE nacionalidades ALTER COLUMN id SET DEFAULT nextval('nacionalidades_id_seq'::regclass);


--
-- TOC entry 1995 (class 0 OID 17343)
-- Dependencies: 179
-- Data for Name: nacionalidades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY nacionalidades (id, descricao) FROM stdin;
1	Brasileiro
2	Outro
\.


--
-- TOC entry 1994 (class 2606 OID 17503)
-- Dependencies: 179 179
-- Name: nacionalidades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY nacionalidades
    ADD CONSTRAINT nacionalidades_pkey PRIMARY KEY (id);


-- Completed on 2012-03-29 17:24:27

--
-- PostgreSQL database dump complete
--

