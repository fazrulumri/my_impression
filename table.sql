create table tb_registrasi (
    reg_id int(11) not null auto_increment,
    reg_nis varchar(20) not null,
    reg_nama varchar (100) not null,
    reg_tptlahir varchar (100) not null,
    reg_tgllahir date default '1990-01-01',	
    reg_alamat text DEFAULT null,
    reg_nohp varchar (25) not null,
    primary key(reg_id),
    unique key (reg_nis)
);