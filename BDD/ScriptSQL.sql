------------------------------------------------------------
--        Script Postgre 
------------------------------------------------------------



------------------------------------------------------------
-- Table: customers
------------------------------------------------------------
CREATE TABLE public.customers(
	id         SERIAL NOT NULL ,
	first_name VARCHAR (40) NOT NULL ,
	last_name  VARCHAR (40) NOT NULL ,
	email      VARCHAR (40) NOT NULL ,
	created_at DATE  NOT NULL ,
	CONSTRAINT prk_constraint_customers PRIMARY KEY (id)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: product
------------------------------------------------------------
CREATE TABLE public.product(
	id             SERIAL NOT NULL ,
	last_name      VARCHAR (40) NOT NULL ,
	quantity_stock INT  NOT NULL ,
	price          FLOAT  NOT NULL ,
	CONSTRAINT prk_constraint_product PRIMARY KEY (id)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: product_group
------------------------------------------------------------
CREATE TABLE public.product_group(
	id        SERIAL NOT NULL ,
	last_name VARCHAR (40)  ,
	CONSTRAINT prk_constraint_product_group PRIMARY KEY (id)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: cus_pro
------------------------------------------------------------
CREATE TABLE public.cus_pro(
	id         INT  NOT NULL ,
	id_product INT  NOT NULL ,
	CONSTRAINT prk_constraint_cus_pro PRIMARY KEY (id,id_product)
)WITHOUT OIDS;


------------------------------------------------------------
-- Table: pro_progroup
------------------------------------------------------------
CREATE TABLE public.pro_progroup(
	id               INT  NOT NULL ,
	id_product_group INT  NOT NULL ,
	CONSTRAINT prk_constraint_pro_progroup PRIMARY KEY (id,id_product_group)
)WITHOUT OIDS;



ALTER TABLE public.cus_pro ADD CONSTRAINT FK_cus_pro_id FOREIGN KEY (id) REFERENCES public.customers(id);
ALTER TABLE public.cus_pro ADD CONSTRAINT FK_cus_pro_id_product FOREIGN KEY (id_product) REFERENCES public.product(id);
ALTER TABLE public.pro_progroup ADD CONSTRAINT FK_pro_progroup_id FOREIGN KEY (id) REFERENCES public.product(id);
ALTER TABLE public.pro_progroup ADD CONSTRAINT FK_pro_progroup_id_product_group FOREIGN KEY (id_product_group) REFERENCES public.product_group(id);
