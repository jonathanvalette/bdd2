/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  19/02/2020 15:44:12                      */
/*==============================================================*/


drop table if exists AUTEUR;

drop table if exists CLIENT;

drop table if exists COMMENTER;

drop table if exists CONTIENT;

drop table if exists ECRIRE;

drop table if exists EDITEUR;

drop table if exists FACTURE;

drop table if exists FORMAT;

drop table if exists LIVRES;

drop table if exists THEME;

drop table if exists TRAITE;

drop table if exists USERS;

/*==============================================================*/
/* Table : AUTEUR                                               */
/*==============================================================*/
create table AUTEUR
(
   IDAUTEUR             int not null,
   NOMAUTEUR            text,
   PNAUTEUR             text,
   TELEPHONE            text,
   ADRESSE              text,
   VILLE                text,
   CODEPOSTAL           text,
   CONTRAT              text,
   primary key (IDAUTEUR)
);

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT
(
   IDCLIENT             int not null,
   NOMCLIENT            text,
   PNCLIENT             text,
   NOMRUECLIENT         text,
   NURUECLIENT          text,
   CODEPOSTALCLIENT     text,
   VILLECLIENT          text,
   PAYSCLIENT           text,
   NOMRUERUELIVRAISON   text,
   NURUELIVRAISON       text,
   CODEPOSTALLIVRAISON  text,
   VILLELIVRAISON       text,
   PAYSLIVRAISON        text,
   TELEPHONECLIENT      text,
   MAILCLIENT           char(20),
   MDPCLIENT            text,
   primary key (IDCLIENT)
);

/*==============================================================*/
/* Table : COMMENTER                                            */
/*==============================================================*/
create table COMMENTER
(
   IDLIVRE              int not null,
   IDCLIENT             int not null,
   primary key (IDLIVRE, IDCLIENT)
);

/*==============================================================*/
/* Table : CONTIENT                                             */
/*==============================================================*/
create table CONTIENT
(
   IDLIVRE              int not null,
   IDFACTURE            int not null,
   primary key (IDLIVRE, IDFACTURE)
);

/*==============================================================*/
/* Table : ECRIRE                                               */
/*==============================================================*/
create table ECRIRE
(
   IDLIVRE              int not null,
   IDAUTEUR             int not null,
   primary key (IDLIVRE, IDAUTEUR)
);

/*==============================================================*/
/* Table : EDITEUR                                              */
/*==============================================================*/
create table EDITEUR
(
   IDEDITEUR            int not null,
   NOMEDITEUR           text,
   VILLEEDITEUR         text,
   PAYSCLIENT           text,
   primary key (IDEDITEUR)
);

/*==============================================================*/
/* Table : FACTURE                                              */
/*==============================================================*/
create table FACTURE
(
   IDFACTURE            int not null,
   IDCLIENT             int not null,
   DATEFACTURE          date not null,
   DATEPAIEMENT         decimal(10,2) not null,
   STATUTCMDE           bool,
   primary key (IDFACTURE)
);

/*==============================================================*/
/* Table : FORMAT                                               */
/*==============================================================*/
create table FORMAT
(
   IDFORMAT             int not null,
   LIBELLEFORMAT        text,
   POIDS                numeric(8,0),
   primary key (IDFORMAT)
);

/*==============================================================*/
/* Table : LIVRES                                               */
/*==============================================================*/
create table LIVRES
(
   IDLIVRE              int not null,
   IDEDITEUR            int not null,
   IDFORMAT             int not null,
   TITRE                text,
   PRIXTTCUNIT          numeric(8,0),
   PRIXHTUNIT           numeric(8,0),
   PREFACE              text,
   JACKET               longblob,
   DATEPUBLICATION      text,
   ISBN                 numeric(8,0),
   primary key (IDLIVRE)
);

/*==============================================================*/
/* Table : THEME                                                */
/*==============================================================*/
create table THEME
(
   IDTHEME              int not null,
   CODECLASSE           text,
   LIBCLASSE            text,
   primary key (IDTHEME)
);

/*==============================================================*/
/* Table : TRAITE                                               */
/*==============================================================*/
create table TRAITE
(
   IDTHEME              int not null,
   IDLIVRE              int not null,
   primary key (IDTHEME, IDLIVRE)
);

/*==============================================================*/
/* Table : USERS                                                */
/*==============================================================*/
create table USERS
(
   IDUSER               int not null,
   NOM                  char(50) not null,
   PRENOM               char(50) not null,
   ADMINISTRATEUR       bool not null,
   primary key (IDUSER)
);

alter table COMMENTER add constraint FK_COMMENTER foreign key (IDLIVRE)
      references LIVRES (IDLIVRE) on delete restrict on update restrict;

alter table COMMENTER add constraint FK_COMMENTER2 foreign key (IDCLIENT)
      references CLIENT (IDCLIENT) on delete restrict on update restrict;

alter table CONTIENT add constraint FK_CONTIENT foreign key (IDLIVRE)
      references LIVRES (IDLIVRE) on delete restrict on update restrict;

alter table CONTIENT add constraint FK_CONTIENT2 foreign key (IDFACTURE)
      references FACTURE (IDFACTURE) on delete restrict on update restrict;

alter table ECRIRE add constraint FK_ECRIRE foreign key (IDLIVRE)
      references LIVRES (IDLIVRE) on delete restrict on update restrict;

alter table ECRIRE add constraint FK_ECRIRE2 foreign key (IDAUTEUR)
      references AUTEUR (IDAUTEUR) on delete restrict on update restrict;

alter table FACTURE add constraint FK_COMMANDE foreign key (IDCLIENT)
      references CLIENT (IDCLIENT) on delete restrict on update restrict;

alter table LIVRES add constraint FK_EDITE foreign key (IDEDITEUR)
      references EDITEUR (IDEDITEUR) on delete restrict on update restrict;

alter table LIVRES add constraint FK_MESURE foreign key (IDFORMAT)
      references FORMAT (IDFORMAT) on delete restrict on update restrict;

alter table TRAITE add constraint FK_TRAITE foreign key (IDTHEME)
      references THEME (IDTHEME) on delete restrict on update restrict;

alter table TRAITE add constraint FK_TRAITE2 foreign key (IDLIVRE)
      references LIVRES (IDLIVRE) on delete restrict on update restrict;

