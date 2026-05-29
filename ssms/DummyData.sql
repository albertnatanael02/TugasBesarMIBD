INSERT INTO Guru (namaGuru)
VALUES ('Budi'), ('Siti');

INSERT INTO MataPelajaran (namaMataPelajaran)
VALUES ('Matematika'), ('Fisika');

INSERT INTO Siswa (namaSiswa)
VALUES ('Andi'), ('Rina');

INSERT INTO users (nama, email)
VALUES
('Budi', 'budi@gmail.com'),
('Andi', 'andi@gmail.com'),
('Siti', 'siti@gmail.com');

select *
from users

INSERT INTO users (nama, email, password)
VALUES
('Admin', 'admin@gmail.com', '12345'),
('Guru', 'guru@gmail.com', '12345'),
('Murid', 'murid@gmail.com', '12345');
