/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     20/09/2019 15:01:36                          */
/*==============================================================*/


drop table if exists CATEGORIA;

drop table if exists CPU;

drop table if exists DISCOS;

drop table if exists GPU;

drop table if exists RAM;

/*==============================================================*/
/* Table: CATEGORIA                                             */
/*==============================================================*/
create table CATEGORIA
(
   CAT_ID               text not null,
   CAT_NOMBRE           text not null,
   primary key (CAT_ID)
);

/*==============================================================*/
/* Table: CPU                                                   */
/*==============================================================*/
create table CPU
(
   CPU_ID               text not null,
   CAT_ID               text,
   CPU_CLOCKSPEED       decimal,
   CPU_TURBOCLOCKSPEED  decimal,
   CPU_CORES            numeric(8,0),
   CPU_SOCKET           text,
   primary key (CPU_ID)
);

/*==============================================================*/
/* Table: DISCOS                                                */
/*==============================================================*/
create table DISCOS
(
   ID_CPU3              text not null,
   CAT_ID               text,
   DISCOS_FORMA         text,
   DISCOS_INTERFAZ      text,
   DISCOS_CAPACIDAD     decimal,
   DISCOS_VELOLECTURA   decimal,
   DISCOS_VELOECRITURA  decimal,
   primary key (ID_CPU3)
);

/*==============================================================*/
/* Table: GPU                                                   */
/*==============================================================*/
create table GPU
(
   ID_CPU2              text not null,
   CAT_ID               text,
   GPU_CLOCKSPEED       decimal,
   TURBO_CLOCK_SPEED_   decimal,
   GPU_SERIE            text,
   primary key (ID_CPU2)
);

/*==============================================================*/
/* Table: RAM                                                   */
/*==============================================================*/
create table RAM
(
   RAM_ID               text not null,
   CAT_ID               text,
   RAM_MCESCRITURA      decimal,
   RAM_MCLECTURA        decimal,
   RAM_MCMEZCLA         decimal,
   primary key (RAM_ID)
);

alter table CPU add constraint FK_RELATIONSHIP_1 foreign key (CAT_ID)
      references CATEGORIA (CAT_ID) on delete restrict on update restrict;

alter table DISCOS add constraint FK_RELATIONSHIP_3 foreign key (CAT_ID)
      references CATEGORIA (CAT_ID) on delete restrict on update restrict;

alter table GPU add constraint FK_RELATIONSHIP_2 foreign key (CAT_ID)
      references CATEGORIA (CAT_ID) on delete restrict on update restrict;

alter table RAM add constraint FK_RELATIONSHIP_4 foreign key (CAT_ID)
      references CATEGORIA (CAT_ID) on delete restrict on update restrict;

