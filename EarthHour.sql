create table Event
(
  IDEvent     numeric,
  NamaEvent   VARCHAR2(100),
  TglMulai    date,
  TglSelesai  date,
  Deskripsi   varchar2(2048),
  constraint PK_IDEvent primary key (IDEvent)
)

create table Foto
(
  IDFoto    numeric,
  Judul     VARCHAR2(100),
  Deskripsi varchar2(2048),
  TglAmbil  date,
  Foto      blob,
  constraint PK_IDFoto primary key (IDFoto)
)

create table Video
(
  IDVideo     numeric,
  LinkVideo   varchar2(300),
  JudulVideo  varchar2(100),
  TglVideo    date,
  Deskripsi   varchar2(2048),
  constraint PK_IDVideo primary key (IDVideo)
)

create table Sponsor
(
  IDSponsor   numeric,
  NamaSponsor varchar2(100),
  LinkSponsor varchar2(200),
  Logo        blob,
  constraint PK_IDSponsor primary key (IDSponsor)
)

create table Organisasi
(
  IDOrganisasi    numeric,
  NamaOrganisasi  varchar2(50),
  Alamat          varchar2(100),
  Deskripsi       varchar2(2048),
  Website         varchar2(50),
  Email           varchar2(30),
  constraint PK_IDOrganisasi primary key (IDOrganisasi)
)

create table ListFoto
(
  IDEvent numeric,
  IDFoto  numeric,
  constraint FK_IDEvent1 foreign key (IDEvent) references Event(IDEvent),
  constraint FK_IDFoto   foreign key (IDFoto)  references Foto(IDFoto)
)

create table ListVideo
(
  IDEvent numeric,
  IDVideo numeric,
  constraint FK_IDEvent2  foreign key (IDEvent) references Event(IDEvent),
  constraint FK_IDVideo   foreign key (IDVideo) references Video(IDVideo)
)

create table Disponsori
(
  IDEvent   numeric,
  IDSponsor numeric,
  constraint FK_IDEvent3  foreign key (IDEvent) references  Event(IDEvent),
  constraint FK_IDSponsor foreign key (IDSponsor) references  Sponsor(IDSponsor)
)