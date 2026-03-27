--cau2
INSERT INTO NHASANXUAT (mansx, tennsx, quocgia) VALUES
('DE', 'DELL', 'Hoa kỳ'),
('AS', 'ASUS', 'Đài Loan'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật Bản');

INSERT INTO HANGHOA (mahang, tenhang, mansx, namsx, gia) VALUES
('DE01', 'Dell Vostro', 'DE', 2015, 650),
('DE02', 'Del Inspiron', 'DE', 2015, 550),
('AS01', 'Asus TUF', 'AS', 2017, 520),
('AS02', 'Asus Vivobook', 'AS', 2017, 580),
('LE01', 'Lenovo Thinkpad', 'LE', 2019, 750),
('TO01', 'Toshiba Satellite', 'TO', 2014, 630),
('LE02', 'Lenovo Legion', 'LE', 2020, 540),
('LE03', 'Lenovo Yoga', 'LE', 2020, 600);

INSERT INTO KHACHHANG (makh, tenkh, namsinh, dienthoai, diachi) VALUES
('K001', 'Nguyễn Thị Lan', 1980, '0913123456', 'Bạc Liêu'),
('K002', 'Ngô Thanh Minh', 1985, '0913024357', 'Vĩnh Lợi'),
('K003', 'Lâm Văn Thanh', 1979, '0913123457', 'Giá Rai'),
('K004', 'Dương Thu Thủy', 1995, '0913024358', 'Hồng Dân'),
('K005', 'Nguyễn Thị Xuân', 1987, '0903223344', 'Phước Long'),
('K006', 'Huỳnh Mẫn Đạt', 1975, '0989122112', 'Bạc Liêu'),
('K007', 'Lâm Hoài Bảo', 1990, '0944556677', 'Bạc Liêu'),
('K008', 'Hồ Trung Tín', 2000, '0944119999', 'Phước Long'),
('K009', 'Trương Xuân Thi', 2001, '0909000111', 'Vĩnh Lợi'),
('K010', 'Ngô Văn Nam', 2001, '0909000112', 'Giá Rai');

INSERT INTO HOADON (mahd, makh, mahang, soluong) VALUES
('001', 'K001', 'DE01', 2),
('001', 'K001', 'DE02', 1),
('002', 'K002', 'LE01', 5),
('002', 'K002', 'LE02', 3),
('003', 'K002', 'TO01', 1),
('004', 'K003', 'DE01', 2),
('005', 'K004', 'AS01', 4),
('005', 'K004', 'LE01', 6),
('005', 'K004', 'LE02', 8),
('006', 'K005', 'AS01', 5);

--cau3
TẠO BẢNG TONKHO
CREATE TABLE tonkho (
    mahang VARCHAR(4) PRIMARY KEY,
    tenhang VARCHAR(40),
    mansx VARCHAR(2),
    namsx INT,
    gia INT,
    soluong INT
);

--cau4
INSERT INTO tonkho (mahang, tenhang, mansx, namsx, gia, soluong)
VALUES 
('DE01', 'Dell Vostro', 'DE', 2015, 650, 20),
('DE02', 'Dell Inspiron', 'DE', 2015, 550, 30);

--cau5
UPDATE khachhang
SET dienthoai = '0912131415'
WHERE makh = 'K007';

--cau6
DELETE FROM khachhang
WHERE makh = 'K010';

--cau7
SELECT *
FROM HANGHOA, NHASANXUAT
WHERE HANGHOA.mansx = NHASANXUAT.mansx
AND tennsx = 'DELL';