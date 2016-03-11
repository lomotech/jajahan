#jajahan
=======

##intro
Jajahan adalah senarai alternatif untuk negeri, daerah, mukim, dun, bahagian, parlimen di dalam Malaysia. Tujuan asal adalah untuk digunakan di dalam sistem sebagai fix data yang tidak perlu masuk ke database kerana pertukarannya amat sedikit mengikut masa.

##sumber data
- sddsa.mampu.gov.my - data tak ada link dengan antara entiti. ada update dari masa ke semasa.
- statistics.gov.my - tidak lengkap dan out of date.
- www.sabah.gov.my - tidak lengkap dan out of date.

##info
- Tarikh retrive : 15 Januari 2016.
- Jangan pernah percaya kepada kod daripada SDDSA. Kod tersebut hanya rujukan kerana selalu bertukar. untuk kegunaan jangka panjang letak id sendiri terutamanya subdistrict.
- Data subdistrict ada tiga jenis:
   1. mukim
   2. bandar
   3. mukim
- Data untuk subdistrict **KUALA MUDA, KEDAH** tiada dalam SDDSA. data ditarik daripada statistics.gov.my.
- Data untuk subdistrict **SABAH** tiada dalam SDDSA. data ditarik daripada www.sabah.gov.my.
- Data untuk subdistrict **SARAWAK** ditukar kepada bahasa Malaysia.

##changelog

###1.3b
- Poskod. Perlis sahaja yang dah dimasukkan. 

###1.2
- Tambah kecil loging, kelantan 0312.
- Swap subdistrict hulu terengganu, terengganu & marang, terengganu.
- Tambah & betulkan data subdistrict. 

###1.1
- Tambah beberapa data subdistrict daripada beberapa sumber luar.
- Masukkan data education

###1.0
- Senarai data asas state, district, subdistrict daripada SDDSA.
