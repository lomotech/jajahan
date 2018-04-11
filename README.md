# jajahan

## intro
Jajahan adalah senarai alternatif untuk negeri, daerah, mukim, dun, bahagian, parlimen di dalam Malaysia. Tujuan asal adalah untuk digunakan di dalam sistem sebagai fix data yang tidak perlu masuk ke database kerana pertukarannya amat sedikit mengikut masa.

## sumber data
- [sddsa](http://sddsa.mampu.gov.my) - data tak ada link dengan antara entiti. ada update dari masa ke semasa.
- [statistic.gov,my](http://statistics.gov.my) - tidak lengkap dan out of date.
- [sabah.gov.my](http://www.sabah.gov.my) - tidak lengkap dan out of date.

## info
- Tarikh retrive : 28 November 2016.
- Jangan pernah percaya kepada kod daripada SDDSA. Kod tersebut hanya rujukan kerana selalu bertukar. untuk kegunaan jangka panjang letak id sendiri terutamanya subdistrict.
- Data subdistrict ada tiga jenis:
   1. mukim
   2. bandar
   3. mukim
- Data untuk subdistrict **KUALA MUDA, KEDAH** tiada dalam SDDSA. data ditarik daripada statistics.gov.my.
- Data untuk subdistrict **SABAH** tiada dalam SDDSA. data ditarik daripada www.sabah.gov.my.
- Data untuk subdistrict **SARAWAK** ditukar kepada bahasa Malaysia.
- Data untuk poskod **NEGERI SEMBILAN** dalam SDDSA salah. Ada data duplicate kepada PAHANG. Cherry-picked.

### Q&A
1. Kenapa tak buat dalam JSON?
    - Sebab guna Eloquent dalam Laravel. Maka array lebih mudah. Untuk collection ataupun seeding.
2. Kenapa tak buat API?
    - Malas & tiada keperluan sendiri buat masa ni. Sebab mengikut spesifikasi pengguna, ada beberapa situasi akan berlainan daripada yang SDDSA ada terutamanya pecahan daerah / zon kawalan.

## changelog

### 1.0
- Senarai data asas state, district, subdistrict daripada SDDSA.

### 1.1
- Tambah beberapa data subdistrict daripada beberapa sumber luar.
- Masukkan data education

### 1.2
- Tambah kecil loging, kelantan 0312.
- Swap subdistrict hulu terengganu, terengganu & marang, terengganu.
- Tambah & betulkan data subdistrict. 

### 1.3
- Poskod.

#### 1.3.1
- Bank.

#### 1.3.2
- Bank sekarang adalah bank + institusi kewangan yang ada kod swift dalam malaysia. retrive daripada [theswictcodes](https://www.theswiftcodes.com/malaysia).

#### 1.3.3
- Tambah bank code pada bank list. Untuk mudahkan kerja untuk pecahkan antara bank dan branch.

#### 1.2018.01
- Sync data dengan SPR untuk PRU14. Untuk yang mencari data 2013, sila search "//2013:"
