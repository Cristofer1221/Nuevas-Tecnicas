/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     20/09/2019 17:51:30                          */
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
   CAT_ID               char(6) not null,
   CAT_NOMBRE           char(15) not null,
   primary key (CAT_ID)
);

/*==============================================================*/
/* Table: CPU                                                   */
/*==============================================================*/
create table CPU
(
   CPU_ID               char(6) not null,
   CAT_ID               char(6),
   CPU_CLOCKSPEED       decimal not null,
   CPU_TURBOCLOCKSPEED  decimal not null,
   CPU_CORES            numeric(8,0) not null,
   CPU_SOCKET           char(15) not null,
   primary key (CPU_ID)
);

/*==============================================================*/
/* Table: DISCOS                                                */
/*==============================================================*/
create table DISCOS
(
   DISCOS_ID            char(6) not null,
   CAT_ID               char(6),
   DISCOS_FORMA         char(15) not null,
   DISCOS_INTERFAZ      char(15) not null,
   DISCOS_CAPACIDAD     decimal not null,
   DISCOS_VELOLECTURA   decimal not null,
   DISCOS_VELOECRITURA  decimal not null,
   primary key (DISCOS_ID)
);

/*==============================================================*/
/* Table: GPU                                                   */
/*==============================================================*/
create table GPU
(
   GPU_ID               char(6) not null,
   CAT_ID               char(6),
   GPU_CLOCKSPEED       decimal not null,
   TURBO_CLOCK_SPEED_   decimal not null,
   GPU_SERIE            char(15) not null,
   primary key (GPU_ID)
);

/*==============================================================*/
/* Table: RAM                                                   */
/*==============================================================*/
create table RAM
(
   RAM_ID               char(6) not null,
   CAT_ID               char(6),
   RAM_MCESCRITURA      decimal not null,
   RAM_MCLECTURA        decimal not null,
   RAM_MCMEZCLA         decimal not null,
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

