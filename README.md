# jajahan

## intro
Jajahan adalah senarai alternatif untuk negeri, daerah, mukim, dun, bahagian, parlimen di dalam Malaysia. Tujuan asal adalah untuk digunakan di dalam sistem sebagai fix data yang tidak perlu masuk ke database kerana pertukarannya amat sedikit mengikut masa.

## sumber data
- [sddsa](http://sddsa.mampu.gov.my) - data tak ada link dengan antara entiti. ada update dari masa ke semasa.
- [statistic.gov,my](http://statistics.gov.my) - tidak lengkap dan out of date.
- [sabah.gov.my](http://www.sabah.gov.my) - tidak lengkap dan out of date.
- pos malaysia - untuk poskod

## nota kod DDSA
- Jangan pernah percaya kepada kod daripada DDSA. Kod tersebut hanya rujukan kerana selalu bertukar. Untuk kegunaan jangka panjang, letak id sendiri terutamanya subdistrict sebagai FK.
- Data subdistrict ada tiga jenis:
   1. mukim
   2. bandar
   3. mukim
- Data district (baca: daerah) di dalam DDSA adalah mengikut daerah pejabat tanah. Bukannya alamat. Maka tiada Shah Alam, Alor Setar dan sebagainya di dalam data daerah.

## info tarikh terakhir periksa
- Country : 28 November 2016.
- State : 28 November 2016.
- District : 28 November 2016.
- Subdistrict : 28 November 2016.
- Negara : 28 November 2016.
- Poskod : 31 Oktober 2018.

## change log
2.0.2019.1 - Restructure semula directory untuk pecahkan di antara php array, json, csv, dan jenis lain yang mungkin ada nanti.

## todo
- masukkan data poskod terkini daripada posmalaysia
- jana data csv dan json daripada array php