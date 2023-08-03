create table program_perpustakaan.inventory_lab
(
    id           int auto_increment
        primary key,
    nama_barang  varchar(50) null,
    jenis_barang varchar(50) null,
    lokasi       varchar(50) null,
    status       varchar(50) null
);

