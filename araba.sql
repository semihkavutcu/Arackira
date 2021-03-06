PGDMP                          x            araba    12.3    12.3 m    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    49152    araba    DATABASE     �   CREATE DATABASE araba WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Turkish_Turkey.1254' LC_CTYPE = 'Turkish_Turkey.1254';
    DROP DATABASE araba;
                postgres    false            �            1259    49209    admins    TABLE     �   CREATE TABLE public.admins (
    admin_id integer NOT NULL,
    admin_kad character varying(20),
    admin_password character varying(500),
    admin_updated_at timestamp without time zone
);
    DROP TABLE public.admins;
       public         heap    postgres    false            �            1259    49207    admins_admin_id_seq    SEQUENCE     �   CREATE SEQUENCE public.admins_admin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.admins_admin_id_seq;
       public          postgres    false    215            �           0    0    admins_admin_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.admins_admin_id_seq OWNED BY public.admins.admin_id;
          public          postgres    false    214            �            1259    49179    araba    TABLE     �   CREATE TABLE public.araba (
    araba_id integer NOT NULL,
    araba_ad character varying(20),
    katag_id integer,
    markas_id integer
);
    DROP TABLE public.araba;
       public         heap    postgres    false            �            1259    49177    araba_araba_id_seq    SEQUENCE     �   CREATE SEQUENCE public.araba_araba_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.araba_araba_id_seq;
       public          postgres    false    209            �           0    0    araba_araba_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.araba_araba_id_seq OWNED BY public.araba.araba_id;
          public          postgres    false    208            �            1259    49171    araba_plaka    TABLE     j   CREATE TABLE public.araba_plaka (
    araba_id integer NOT NULL,
    araba_plaka character varying(20)
);
    DROP TABLE public.araba_plaka;
       public         heap    postgres    false            �            1259    49169    araba_plaka_araba_id_seq    SEQUENCE     �   CREATE SEQUENCE public.araba_plaka_araba_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.araba_plaka_araba_id_seq;
       public          postgres    false    207            �           0    0    araba_plaka_araba_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.araba_plaka_araba_id_seq OWNED BY public.araba_plaka.araba_id;
          public          postgres    false    206            �            1259    49250    cari    TABLE     O   CREATE TABLE public.cari (
    cari_id integer NOT NULL,
    toplam numeric
);
    DROP TABLE public.cari;
       public         heap    postgres    false            �            1259    49248    cari_cari_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cari_cari_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.cari_cari_id_seq;
       public          postgres    false    223            �           0    0    cari_cari_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.cari_cari_id_seq OWNED BY public.cari.cari_id;
          public          postgres    false    222            �            1259    49291    firma    TABLE     �   CREATE TABLE public.firma (
    firma_id integer NOT NULL,
    firma_ad character varying(100),
    firma_adres character varying(200),
    firma_yetkili_ad character varying(20)
);
    DROP TABLE public.firma;
       public         heap    postgres    false            �            1259    49289    firma_firma_id_seq    SEQUENCE     �   CREATE SEQUENCE public.firma_firma_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.firma_firma_id_seq;
       public          postgres    false    231            �           0    0    firma_firma_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.firma_firma_id_seq OWNED BY public.firma.firma_id;
          public          postgres    false    230            �            1259    49187    g_bedel    TABLE     d   CREATE TABLE public.g_bedel (
    g_id integer NOT NULL,
    araba_id integer,
    fiyat numeric
);
    DROP TABLE public.g_bedel;
       public         heap    postgres    false            �            1259    49185    g_bedel_g_id_seq    SEQUENCE     �   CREATE SEQUENCE public.g_bedel_g_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.g_bedel_g_id_seq;
       public          postgres    false    211            �           0    0    g_bedel_g_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.g_bedel_g_id_seq OWNED BY public.g_bedel.g_id;
          public          postgres    false    210            �            1259    49272    k_araba    TABLE     S   CREATE TABLE public.k_araba (
    k_id integer NOT NULL,
    k_araba_id integer
);
    DROP TABLE public.k_araba;
       public         heap    postgres    false            �            1259    49270    k_araba_k_id_seq    SEQUENCE     �   CREATE SEQUENCE public.k_araba_k_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.k_araba_k_id_seq;
       public          postgres    false    227            �           0    0    k_araba_k_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.k_araba_k_id_seq OWNED BY public.k_araba.k_id;
          public          postgres    false    226            �            1259    49239    k_zarar    TABLE     Q   CREATE TABLE public.k_zarar (
    kaza_id integer NOT NULL,
    fiyat numeric
);
    DROP TABLE public.k_zarar;
       public         heap    postgres    false            �            1259    49237    k_zarar_kaza_id_seq    SEQUENCE     �   CREATE SEQUENCE public.k_zarar_kaza_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.k_zarar_kaza_id_seq;
       public          postgres    false    221            �           0    0    k_zarar_kaza_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.k_zarar_kaza_id_seq OWNED BY public.k_zarar.kaza_id;
          public          postgres    false    220            �            1259    49163    kategori    TABLE     `   CREATE TABLE public.kategori (
    kat_id integer NOT NULL,
    kat_ad character varying(20)
);
    DROP TABLE public.kategori;
       public         heap    postgres    false            �            1259    49161    kategori_kat_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kategori_kat_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.kategori_kat_id_seq;
       public          postgres    false    205            �           0    0    kategori_kat_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.kategori_kat_id_seq OWNED BY public.kategori.kat_id;
          public          postgres    false    204            �            1259    49231    kaza    TABLE     {   CREATE TABLE public.kaza (
    kaza_id integer NOT NULL,
    kaza_adres character varying(20),
    kaza_arac_id integer
);
    DROP TABLE public.kaza;
       public         heap    postgres    false            �            1259    49229    kaza_kaza_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kaza_kaza_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.kaza_kaza_id_seq;
       public          postgres    false    219            �           0    0    kaza_kaza_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.kaza_kaza_id_seq OWNED BY public.kaza.kaza_id;
          public          postgres    false    218            �            1259    49261 
   kiralanmis    TABLE     �   CREATE TABLE public.kiralanmis (
    k_id integer NOT NULL,
    araba_id integer,
    fiyat numeric,
    sure integer,
    miktar integer
);
    DROP TABLE public.kiralanmis;
       public         heap    postgres    false            �            1259    49259    kiralanmis_k_id_seq    SEQUENCE     �   CREATE SEQUENCE public.kiralanmis_k_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.kiralanmis_k_id_seq;
       public          postgres    false    225            �           0    0    kiralanmis_k_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.kiralanmis_k_id_seq OWNED BY public.kiralanmis.k_id;
          public          postgres    false    224            �            1259    49155    marka    TABLE     a   CREATE TABLE public.marka (
    marka_id integer NOT NULL,
    marka_ad character varying(20)
);
    DROP TABLE public.marka;
       public         heap    postgres    false            �            1259    49153    marka_marka_id_seq    SEQUENCE     �   CREATE SEQUENCE public.marka_marka_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.marka_marka_id_seq;
       public          postgres    false    203            �           0    0    marka_marka_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.marka_marka_id_seq OWNED BY public.marka.marka_id;
          public          postgres    false    202            �            1259    49280    odeme    TABLE     s   CREATE TABLE public.odeme (
    odeme_id integer NOT NULL,
    odeme_firma_id integer,
    odeme_toplam numeric
);
    DROP TABLE public.odeme;
       public         heap    postgres    false            �            1259    49278    odeme_odeme_id_seq    SEQUENCE     �   CREATE SEQUENCE public.odeme_odeme_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.odeme_odeme_id_seq;
       public          postgres    false    229            �           0    0    odeme_odeme_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.odeme_odeme_id_seq OWNED BY public.odeme.odeme_id;
          public          postgres    false    228            �            1259    49198    s_bedel    TABLE     d   CREATE TABLE public.s_bedel (
    s_id integer NOT NULL,
    araba_id integer,
    fiyat numeric
);
    DROP TABLE public.s_bedel;
       public         heap    postgres    false            �            1259    49196    s_bedel_s_id_seq    SEQUENCE     �   CREATE SEQUENCE public.s_bedel_s_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.s_bedel_s_id_seq;
       public          postgres    false    213            �           0    0    s_bedel_s_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.s_bedel_s_id_seq OWNED BY public.s_bedel.s_id;
          public          postgres    false    212            �            1259    49220    y_bedel    TABLE     d   CREATE TABLE public.y_bedel (
    y_id integer NOT NULL,
    araba_id integer,
    fiyat numeric
);
    DROP TABLE public.y_bedel;
       public         heap    postgres    false            �            1259    49218    y_bedel_y_id_seq    SEQUENCE     �   CREATE SEQUENCE public.y_bedel_y_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.y_bedel_y_id_seq;
       public          postgres    false    217            �           0    0    y_bedel_y_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.y_bedel_y_id_seq OWNED BY public.y_bedel.y_id;
          public          postgres    false    216            �
           2604    49212    admins admin_id    DEFAULT     r   ALTER TABLE ONLY public.admins ALTER COLUMN admin_id SET DEFAULT nextval('public.admins_admin_id_seq'::regclass);
 >   ALTER TABLE public.admins ALTER COLUMN admin_id DROP DEFAULT;
       public          postgres    false    214    215    215            �
           2604    49182    araba araba_id    DEFAULT     p   ALTER TABLE ONLY public.araba ALTER COLUMN araba_id SET DEFAULT nextval('public.araba_araba_id_seq'::regclass);
 =   ALTER TABLE public.araba ALTER COLUMN araba_id DROP DEFAULT;
       public          postgres    false    209    208    209            �
           2604    49174    araba_plaka araba_id    DEFAULT     |   ALTER TABLE ONLY public.araba_plaka ALTER COLUMN araba_id SET DEFAULT nextval('public.araba_plaka_araba_id_seq'::regclass);
 C   ALTER TABLE public.araba_plaka ALTER COLUMN araba_id DROP DEFAULT;
       public          postgres    false    207    206    207            �
           2604    49253    cari cari_id    DEFAULT     l   ALTER TABLE ONLY public.cari ALTER COLUMN cari_id SET DEFAULT nextval('public.cari_cari_id_seq'::regclass);
 ;   ALTER TABLE public.cari ALTER COLUMN cari_id DROP DEFAULT;
       public          postgres    false    222    223    223            �
           2604    49294    firma firma_id    DEFAULT     p   ALTER TABLE ONLY public.firma ALTER COLUMN firma_id SET DEFAULT nextval('public.firma_firma_id_seq'::regclass);
 =   ALTER TABLE public.firma ALTER COLUMN firma_id DROP DEFAULT;
       public          postgres    false    231    230    231            �
           2604    49190    g_bedel g_id    DEFAULT     l   ALTER TABLE ONLY public.g_bedel ALTER COLUMN g_id SET DEFAULT nextval('public.g_bedel_g_id_seq'::regclass);
 ;   ALTER TABLE public.g_bedel ALTER COLUMN g_id DROP DEFAULT;
       public          postgres    false    210    211    211            �
           2604    49275    k_araba k_id    DEFAULT     l   ALTER TABLE ONLY public.k_araba ALTER COLUMN k_id SET DEFAULT nextval('public.k_araba_k_id_seq'::regclass);
 ;   ALTER TABLE public.k_araba ALTER COLUMN k_id DROP DEFAULT;
       public          postgres    false    226    227    227            �
           2604    49242    k_zarar kaza_id    DEFAULT     r   ALTER TABLE ONLY public.k_zarar ALTER COLUMN kaza_id SET DEFAULT nextval('public.k_zarar_kaza_id_seq'::regclass);
 >   ALTER TABLE public.k_zarar ALTER COLUMN kaza_id DROP DEFAULT;
       public          postgres    false    220    221    221            �
           2604    49166    kategori kat_id    DEFAULT     r   ALTER TABLE ONLY public.kategori ALTER COLUMN kat_id SET DEFAULT nextval('public.kategori_kat_id_seq'::regclass);
 >   ALTER TABLE public.kategori ALTER COLUMN kat_id DROP DEFAULT;
       public          postgres    false    204    205    205            �
           2604    49234    kaza kaza_id    DEFAULT     l   ALTER TABLE ONLY public.kaza ALTER COLUMN kaza_id SET DEFAULT nextval('public.kaza_kaza_id_seq'::regclass);
 ;   ALTER TABLE public.kaza ALTER COLUMN kaza_id DROP DEFAULT;
       public          postgres    false    219    218    219            �
           2604    49264    kiralanmis k_id    DEFAULT     r   ALTER TABLE ONLY public.kiralanmis ALTER COLUMN k_id SET DEFAULT nextval('public.kiralanmis_k_id_seq'::regclass);
 >   ALTER TABLE public.kiralanmis ALTER COLUMN k_id DROP DEFAULT;
       public          postgres    false    224    225    225            �
           2604    49158    marka marka_id    DEFAULT     p   ALTER TABLE ONLY public.marka ALTER COLUMN marka_id SET DEFAULT nextval('public.marka_marka_id_seq'::regclass);
 =   ALTER TABLE public.marka ALTER COLUMN marka_id DROP DEFAULT;
       public          postgres    false    203    202    203            �
           2604    49283    odeme odeme_id    DEFAULT     p   ALTER TABLE ONLY public.odeme ALTER COLUMN odeme_id SET DEFAULT nextval('public.odeme_odeme_id_seq'::regclass);
 =   ALTER TABLE public.odeme ALTER COLUMN odeme_id DROP DEFAULT;
       public          postgres    false    229    228    229            �
           2604    49201    s_bedel s_id    DEFAULT     l   ALTER TABLE ONLY public.s_bedel ALTER COLUMN s_id SET DEFAULT nextval('public.s_bedel_s_id_seq'::regclass);
 ;   ALTER TABLE public.s_bedel ALTER COLUMN s_id DROP DEFAULT;
       public          postgres    false    213    212    213            �
           2604    49223    y_bedel y_id    DEFAULT     l   ALTER TABLE ONLY public.y_bedel ALTER COLUMN y_id SET DEFAULT nextval('public.y_bedel_y_id_seq'::regclass);
 ;   ALTER TABLE public.y_bedel ALTER COLUMN y_id DROP DEFAULT;
       public          postgres    false    216    217    217            �          0    49209    admins 
   TABLE DATA           W   COPY public.admins (admin_id, admin_kad, admin_password, admin_updated_at) FROM stdin;
    public          postgres    false    215   Dq       �          0    49179    araba 
   TABLE DATA           H   COPY public.araba (araba_id, araba_ad, katag_id, markas_id) FROM stdin;
    public          postgres    false    209   aq       �          0    49171    araba_plaka 
   TABLE DATA           <   COPY public.araba_plaka (araba_id, araba_plaka) FROM stdin;
    public          postgres    false    207   �q       �          0    49250    cari 
   TABLE DATA           /   COPY public.cari (cari_id, toplam) FROM stdin;
    public          postgres    false    223   �q       �          0    49291    firma 
   TABLE DATA           R   COPY public.firma (firma_id, firma_ad, firma_adres, firma_yetkili_ad) FROM stdin;
    public          postgres    false    231   �q       �          0    49187    g_bedel 
   TABLE DATA           8   COPY public.g_bedel (g_id, araba_id, fiyat) FROM stdin;
    public          postgres    false    211   �q       �          0    49272    k_araba 
   TABLE DATA           3   COPY public.k_araba (k_id, k_araba_id) FROM stdin;
    public          postgres    false    227   %r       �          0    49239    k_zarar 
   TABLE DATA           1   COPY public.k_zarar (kaza_id, fiyat) FROM stdin;
    public          postgres    false    221   Br       �          0    49163    kategori 
   TABLE DATA           2   COPY public.kategori (kat_id, kat_ad) FROM stdin;
    public          postgres    false    205   _r       �          0    49231    kaza 
   TABLE DATA           A   COPY public.kaza (kaza_id, kaza_adres, kaza_arac_id) FROM stdin;
    public          postgres    false    219   �r       �          0    49261 
   kiralanmis 
   TABLE DATA           I   COPY public.kiralanmis (k_id, araba_id, fiyat, sure, miktar) FROM stdin;
    public          postgres    false    225   �r       �          0    49155    marka 
   TABLE DATA           3   COPY public.marka (marka_id, marka_ad) FROM stdin;
    public          postgres    false    203   �r       �          0    49280    odeme 
   TABLE DATA           G   COPY public.odeme (odeme_id, odeme_firma_id, odeme_toplam) FROM stdin;
    public          postgres    false    229   �r       �          0    49198    s_bedel 
   TABLE DATA           8   COPY public.s_bedel (s_id, araba_id, fiyat) FROM stdin;
    public          postgres    false    213   	s       �          0    49220    y_bedel 
   TABLE DATA           8   COPY public.y_bedel (y_id, araba_id, fiyat) FROM stdin;
    public          postgres    false    217   .s       �           0    0    admins_admin_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.admins_admin_id_seq', 1, false);
          public          postgres    false    214            �           0    0    araba_araba_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.araba_araba_id_seq', 1, true);
          public          postgres    false    208            �           0    0    araba_plaka_araba_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.araba_plaka_araba_id_seq', 1, false);
          public          postgres    false    206            �           0    0    cari_cari_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.cari_cari_id_seq', 1, false);
          public          postgres    false    222            �           0    0    firma_firma_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.firma_firma_id_seq', 3, true);
          public          postgres    false    230            �           0    0    g_bedel_g_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.g_bedel_g_id_seq', 2, true);
          public          postgres    false    210            �           0    0    k_araba_k_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.k_araba_k_id_seq', 1, false);
          public          postgres    false    226            �           0    0    k_zarar_kaza_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.k_zarar_kaza_id_seq', 1, false);
          public          postgres    false    220            �           0    0    kategori_kat_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.kategori_kat_id_seq', 1, true);
          public          postgres    false    204            �           0    0    kaza_kaza_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.kaza_kaza_id_seq', 1, false);
          public          postgres    false    218            �           0    0    kiralanmis_k_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.kiralanmis_k_id_seq', 1, true);
          public          postgres    false    224            �           0    0    marka_marka_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.marka_marka_id_seq', 1, true);
          public          postgres    false    202            �           0    0    odeme_odeme_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.odeme_odeme_id_seq', 1, true);
          public          postgres    false    228            �           0    0    s_bedel_s_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.s_bedel_s_id_seq', 2, true);
          public          postgres    false    212            �           0    0    y_bedel_y_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.y_bedel_y_id_seq', 2, true);
          public          postgres    false    216            �
           2606    49217    admins admins_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.admins
    ADD CONSTRAINT admins_pkey PRIMARY KEY (admin_id);
 <   ALTER TABLE ONLY public.admins DROP CONSTRAINT admins_pkey;
       public            postgres    false    215            �
           2606    49184    araba araba_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.araba
    ADD CONSTRAINT araba_pkey PRIMARY KEY (araba_id);
 :   ALTER TABLE ONLY public.araba DROP CONSTRAINT araba_pkey;
       public            postgres    false    209            �
           2606    49176    araba_plaka araba_plaka_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.araba_plaka
    ADD CONSTRAINT araba_plaka_pkey PRIMARY KEY (araba_id);
 F   ALTER TABLE ONLY public.araba_plaka DROP CONSTRAINT araba_plaka_pkey;
       public            postgres    false    207            �
           2606    49258    cari cari_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.cari
    ADD CONSTRAINT cari_pkey PRIMARY KEY (cari_id);
 8   ALTER TABLE ONLY public.cari DROP CONSTRAINT cari_pkey;
       public            postgres    false    223                       2606    49296    firma firma_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.firma
    ADD CONSTRAINT firma_pkey PRIMARY KEY (firma_id);
 :   ALTER TABLE ONLY public.firma DROP CONSTRAINT firma_pkey;
       public            postgres    false    231            �
           2606    49195    g_bedel g_bedel_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.g_bedel
    ADD CONSTRAINT g_bedel_pkey PRIMARY KEY (g_id);
 >   ALTER TABLE ONLY public.g_bedel DROP CONSTRAINT g_bedel_pkey;
       public            postgres    false    211                       2606    49277    k_araba k_araba_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.k_araba
    ADD CONSTRAINT k_araba_pkey PRIMARY KEY (k_id);
 >   ALTER TABLE ONLY public.k_araba DROP CONSTRAINT k_araba_pkey;
       public            postgres    false    227            �
           2606    49247    k_zarar k_zarar_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.k_zarar
    ADD CONSTRAINT k_zarar_pkey PRIMARY KEY (kaza_id);
 >   ALTER TABLE ONLY public.k_zarar DROP CONSTRAINT k_zarar_pkey;
       public            postgres    false    221            �
           2606    49168    kategori kategori_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.kategori
    ADD CONSTRAINT kategori_pkey PRIMARY KEY (kat_id);
 @   ALTER TABLE ONLY public.kategori DROP CONSTRAINT kategori_pkey;
       public            postgres    false    205            �
           2606    49236    kaza kaza_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.kaza
    ADD CONSTRAINT kaza_pkey PRIMARY KEY (kaza_id);
 8   ALTER TABLE ONLY public.kaza DROP CONSTRAINT kaza_pkey;
       public            postgres    false    219                       2606    49269    kiralanmis kiralanmis_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.kiralanmis
    ADD CONSTRAINT kiralanmis_pkey PRIMARY KEY (k_id);
 D   ALTER TABLE ONLY public.kiralanmis DROP CONSTRAINT kiralanmis_pkey;
       public            postgres    false    225            �
           2606    49160    marka marka_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.marka
    ADD CONSTRAINT marka_pkey PRIMARY KEY (marka_id);
 :   ALTER TABLE ONLY public.marka DROP CONSTRAINT marka_pkey;
       public            postgres    false    203                       2606    49288    odeme odeme_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.odeme
    ADD CONSTRAINT odeme_pkey PRIMARY KEY (odeme_id);
 :   ALTER TABLE ONLY public.odeme DROP CONSTRAINT odeme_pkey;
       public            postgres    false    229            �
           2606    49206    s_bedel s_bedel_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.s_bedel
    ADD CONSTRAINT s_bedel_pkey PRIMARY KEY (s_id);
 >   ALTER TABLE ONLY public.s_bedel DROP CONSTRAINT s_bedel_pkey;
       public            postgres    false    213            �
           2606    49228    y_bedel y_bedel_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.y_bedel
    ADD CONSTRAINT y_bedel_pkey PRIMARY KEY (y_id);
 >   ALTER TABLE ONLY public.y_bedel DROP CONSTRAINT y_bedel_pkey;
       public            postgres    false    217            �      x������ � �      �      x�3�L,I�4�4����� ��      �      x������ � �      �      x������ � �      �   -   x�3�442�a.cd��1�!�cIbvb���k^f.�)����� T�G      �      x�3�4�4600������ h�      �      x������ � �      �      x������ � �      �      x�3�442����� 
*�      �      x������ � �      �      x�3�4�4 N#Nc�=... ��      �      x�3�442����� 
*�      �      x������ � �      �      x�3�4�460������ �      �      x�3�4�46 �=... �     