--
-- PostgreSQL database dump
--

-- Dumped from database version 9.0.5
-- Dumped by pg_dump version 9.0.5
-- Started on 2012-03-29 17:14:07

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
-- TOC entry 224 (class 1259 OID 18459)
-- Dependencies: 6
-- Name: contato_pfs; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE contato_pfs (
    id integer NOT NULL,
    pf_id integer NOT NULL,
    telefone character varying(15),
    email character varying(255),
    site character varying(255)
);


ALTER TABLE public.contato_pfs OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 18457)
-- Dependencies: 224 6
-- Name: contato_pfs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE contato_pfs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contato_pfs_id_seq OWNER TO postgres;

--
-- TOC entry 1994 (class 0 OID 0)
-- Dependencies: 223
-- Name: contato_pfs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE contato_pfs_id_seq OWNED BY contato_pfs.id;


--
-- TOC entry 1995 (class 0 OID 0)
-- Dependencies: 223
-- Name: contato_pfs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('contato_pfs_id_seq', 5, true);


--
-- TOC entry 1987 (class 2604 OID 18462)
-- Dependencies: 224 223 224
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE contato_pfs ALTER COLUMN id SET DEFAULT nextval('contato_pfs_id_seq'::regclass);


--
-- TOC entry 1991 (class 0 OID 18459)
-- Dependencies: 224
-- Data for Name: contato_pfs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY contato_pfs (id, pf_id, telefone, email, site) FROM stdin;
5	134	(67)6767-6876	email1@mail.com.br	site1.com.br
\.


--
-- TOC entry 1989 (class 2606 OID 18467)
-- Dependencies: 224 224
-- Name: contato_pfs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY contato_pfs
    ADD CONSTRAINT contato_pfs_pkey PRIMARY KEY (id);


--
-- TOC entry 1990 (class 2606 OID 18468)
-- Dependencies: 187 224
-- Name: fkeyContato_Pfs_Pfs; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY contato_pfs
    ADD CONSTRAINT "fkeyContato_Pfs_Pfs" FOREIGN KEY (pf_id) REFERENCES pfs(id);


-- Completed on 2012-03-29 17:14:08

--
-- PostgreSQL database dump complete
--

