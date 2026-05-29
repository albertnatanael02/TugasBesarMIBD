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

UPDATE users
SET password = '12345'
WHERE email = 'budi@gmail.com';