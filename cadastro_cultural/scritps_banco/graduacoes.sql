PGDMP     *                    p            cadastrocultural    9.0.5    9.0.5 
    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     )   SET standard_conforming_strings = 'off';
                       false            �            1259    18427 
   graduacoes    TABLE     �   CREATE TABLE graduacoes (
    id integer NOT NULL,
    pf_id integer NOT NULL,
    ano_graduacao character varying(4),
    curso character varying(100)
);
    DROP TABLE public.graduacoes;
       public         postgres    false    6            �            1259    18425    graduacoes_id_seq    SEQUENCE     s   CREATE SEQUENCE graduacoes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.graduacoes_id_seq;
       public       postgres    false    222    6            �           0    0    graduacoes_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE graduacoes_id_seq OWNED BY graduacoes.id;
            public       postgres    false    221            �           0    0    graduacoes_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('graduacoes_id_seq', 40, true);
            public       postgres    false    221            �           2604    18430    id    DEFAULT     [   ALTER TABLE graduacoes ALTER COLUMN id SET DEFAULT nextval('graduacoes_id_seq'::regclass);
 <   ALTER TABLE public.graduacoes ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    222    221    222            �          0    18427 
   graduacoes 
   TABLE DATA               >   COPY graduacoes (id, pf_id, ano_graduacao, curso) FROM stdin;
    public       postgres    false    222   �	       �           2606    18432    graduacoes_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY graduacoes
    ADD CONSTRAINT graduacoes_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.graduacoes DROP CONSTRAINT graduacoes_pkey;
       public         postgres    false    222    222            �           2606    18433    fkGraduacoes_Pfs    FK CONSTRAINT     j   ALTER TABLE ONLY graduacoes
    ADD CONSTRAINT "fkGraduacoes_Pfs" FOREIGN KEY (pf_id) REFERENCES pfs(id);
 G   ALTER TABLE ONLY public.graduacoes DROP CONSTRAINT "fkGraduacoes_Pfs";
       public       postgres    false    187    222            �      x�31�446�4204������ ��     