USE [TugasBesarMIBD];


CREATE TABLE Guru (
    idGuru INT PRIMARY KEY IDENTITY(1,1),
    namaGuru VARCHAR(100) NOT NULL
);


CREATE TABLE MataPelajaran (
    idMataPelajaran INT PRIMARY KEY IDENTITY(1,1),
    namaMataPelajaran VARCHAR(100) NOT NULL
);


CREATE TABLE JenjangPendidikan (
    idJenjangPendidikan INT PRIMARY KEY IDENTITY(1,1),
    namaJenjangPendidikan VARCHAR(50) NOT NULL
);


CREATE TABLE JenjangPendidikanMataPelajaran (
    idJenjangPendidikan INT,
    idMataPelajaran INT,

    PRIMARY KEY (idJenjangPendidikan, idMataPelajaran),

    FOREIGN KEY (idJenjangPendidikan)
        REFERENCES JenjangPendidikan(idJenjangPendidikan),

    FOREIGN KEY (idMataPelajaran)
        REFERENCES MataPelajaran(idMataPelajaran)
);


CREATE TABLE KompetensiGuru (
    idGuru INT,
    idMataPelajaran INT,

    PRIMARY KEY (idGuru, idMataPelajaran),

    FOREIGN KEY (idGuru)
        REFERENCES Guru(idGuru),

    FOREIGN KEY (idMataPelajaran)
        REFERENCES MataPelajaran(idMataPelajaran)
);


CREATE TABLE JadwalKetersediaanGuru (
    idJadwalGuru INT PRIMARY KEY IDENTITY(1,1),

    idGuru INT NOT NULL,

    jadwalHari VARCHAR(20) NOT NULL,

    jamMulai TIME NOT NULL,

    jamSelesai TIME NOT NULL,

    FOREIGN KEY (idGuru)
        REFERENCES Guru(idGuru)
);


CREATE TABLE JadwalKursus (
    idJadwalKursus INT PRIMARY KEY IDENTITY(1,1),

    idGuru INT NOT NULL,

    idMataPelajaran INT NOT NULL,

    jadwalHari VARCHAR(20) NOT NULL,

    jamMulai TIME NOT NULL,

    jamSelesai TIME NOT NULL,

    kuota INT DEFAULT 10,

    FOREIGN KEY (idGuru)
        REFERENCES Guru(idGuru),

    FOREIGN KEY (idMataPelajaran)
        REFERENCES MataPelajaran(idMataPelajaran)
);


CREATE TABLE Siswa (
    idSiswa INT PRIMARY KEY IDENTITY(1,1),

    namaSiswa VARCHAR(100) NOT NULL
);


CREATE TABLE PendaftaranKursus (
    idPendaftaran INT PRIMARY KEY IDENTITY(1,1),

    idSiswa INT NOT NULL,

    idJadwalKursus INT NOT NULL,

    tanggalDaftar DATE NOT NULL,

    statusAktif VARCHAR(20) DEFAULT 'Aktif',

    FOREIGN KEY (idSiswa)
        REFERENCES Siswa(idSiswa),

    FOREIGN KEY (idJadwalKursus)
        REFERENCES JadwalKursus(idJadwalKursus)
);


CREATE TABLE InvoiceKursus (
    idInvoice INT PRIMARY KEY IDENTITY(1,1),

    idPendaftaran INT NOT NULL,

    totalBiaya DECIMAL(18,2) NOT NULL,

    statusLunas VARCHAR(20) DEFAULT 'Belum Lunas',

    tanggalInvoice DATE NOT NULL,

    FOREIGN KEY (idPendaftaran)
        REFERENCES PendaftaranKursus(idPendaftaran)
);


CREATE TABLE PembayaranKursus (
    idPembayaran INT PRIMARY KEY IDENTITY(1,1),

    idInvoice INT NOT NULL,

    tanggalPembayaran DATE NOT NULL,

    jumlahPembayaran DECIMAL(18,2) NOT NULL,

    FOREIGN KEY (idInvoice)
        REFERENCES InvoiceKursus(idInvoice)
);


CREATE TABLE users (
    id INT PRIMARY KEY IDENTITY(1,1),
    nama VARCHAR(100),
    email VARCHAR(100)
);
