--  untuk memakai database pegawai
use pegawai;

--create tabel jabatan
create table jabatan(
    id integer primary key auto_increment,
    kode char(4) not null,
    nama varchar (50) not null
);

-- create table pegawai
create table pegawai(
    id integer primary key auto_increment,
    id_jabatan integer not null,
    kode_pegawai char (8) not null, 
    jenis_kelamin enum ('laki-laki', 'perempuan')  not null,
    nama varchar (50) not null,
    tempat_lahir varchar (50) not null,
    alamat varchar (255) not null,
     foreign key (id_jabatan) references jabatan (id)
);

-- untuk melihat tabel yang dibuat
show tables;

-- untuk melihat atribut di tabel pegawai
desc pegawai; 

-- untuk menambah data di tabel jabatan
insert into jabatan (kode, nama) values ("HR", " Human Resource Department");
insert into jabatan (kode, nama) values ("CEO", "Direktur");


-- untuk menambah data di tabel pegawai
insert into pegawai (id_jabatan, kode_pegawai, jenis_kelamin, nama, tempat_lahir, alamat) values (1, "20317100", "perempuan", "Eva", "Bojonegoro","Jl.Pisang no 2");
insert into pegawai (id_jabatan, kode_pegawai, jenis_kelamin, nama, tempat_lahir, alamat) values (2, "22427111", "laki-laki", "Evan", "Mojokerto","Jl.Merapi no 40");

-- untuk lihat data di tabel pegawai
select * from pegawai;