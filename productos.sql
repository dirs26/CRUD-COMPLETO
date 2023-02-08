CREATE TABLE IF NOT EXISTS public.productos
(
    id serial NOT NULL,
    nombre character varying(50) NOT NULL,
    unidades smallint NOT NULL,
    CONSTRAINT producto_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.producto
    OWNER to postgres;

insert into public.productos (nombre,unidades)
values ('sombrero',11);
select * from public.productos


CREATE OR REPLACE PROCEDURE public.sp_add_productos(IN nombre text, IN unidades numeric)
	BEGIN ATOMIC
		insert into public.productos (nombre,unidades) VALUES (nombre,unidades);
	END;
	
	call public.sp_add_productos('gorro',20)
	
	
CREATE OR REPLACE PROCEDURE
public.sp_add_productos(IN nombre text, IN unidades numeric)
	BEGIN ATOMIC
		update public.productos SET unidades=unidades
		WHERE nombre like nombre;
	END;