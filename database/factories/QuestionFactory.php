<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    protected static int $ipsIndex = 0;
    protected static int $ipaIndex = 0;
    protected static int $matematikaIndex = 0;

    /**
     * Deskripsi berdasarkan mata pelajaran
     */
    protected static array $DESCRIPTIONS = [
        'IPS' => [
            'Jawablah berdasarkan materi IPS.',
            
        ],

        'IPA' => [
            'Jawablah berdasarkan konsep IPA.',
        ],

        'Matematika' => [
            'Kerjakan sesuai konsep matematika.',
        ],
    ];

    /**
     * ==========================
     * BANK SOAL IPS (150 SOAL)
     * ==========================
     */
    protected static array $ipsQuestions = [

        [
    'q' => 'Siapa presiden pertama Republik Indonesia?',
    'a' => [
        'Soekarno',
        'Soeharto',
        'B.J. Habibie',
        'Megawati Soekarnoputri',
    ],
    'c' => 0,
],

[
    'q' => 'Ibu kota Provinsi Sumatera Utara adalah...',
    'a' => [
        'Medan',
        'Padang',
        'Pekanbaru',
        'Banda Aceh',
    ],
    'c' => 0,
],

[
    'q' => 'ASEAN didirikan pada tahun...',
    'a' => [
        '1965',
        '1966',
        '1967',
        '1968',
    ],
    'c' => 2,
],

[
    'q' => 'Pulau terbesar di Indonesia adalah...',
    'a' => [
        'Jawa',
        'Sumatera',
        'Kalimantan',
        'Sulawesi',
    ],
    'c' => 2,
],

[
    'q' => 'Mata uang negara Jepang adalah...',
    'a' => [
        'Won',
        'Yuan',
        'Yen',
        'Ringgit',
    ],
    'c' => 2,
],

[
    'q' => 'Lambang sila pertama Pancasila adalah...',
    'a' => [
        'Bintang',
        'Pohon Beringin',
        'Padi dan Kapas',
        'Rantai',
    ],
    'c' => 0,
],

[
    'q' => 'Proklamasi Kemerdekaan Indonesia dibacakan pada tanggal...',
    'a' => [
        '17 Agustus 1945',
        '18 Agustus 1945',
        '20 Mei 1908',
        '28 Oktober 1928',
    ],
    'c' => 0,
],

[
    'q' => 'Benua terbesar di dunia adalah...',
    'a' => [
        'Afrika',
        'Asia',
        'Eropa',
        'Amerika',
    ],
    'c' => 1,
],

[
    'q' => 'Negara yang dijuluki Negeri Sakura adalah...',
    'a' => [
        'China',
        'Jepang',
        'Korea Selatan',
        'Thailand',
    ],
    'c' => 1,
],

[
    'q' => 'Ibukota Indonesia saat ini adalah...',
    'a' => [
        'Bandung',
        'Surabaya',
        'Jakarta',
        'Medan',
    ],
    'c' => 2,
],

[
    'q' => 'Semboyan negara Indonesia adalah...',
    'a' => [
        'Merdeka atau Mati',
        'Bhinneka Tunggal Ika',
        'Tut Wuri Handayani',
        'Indonesia Raya',
    ],
    'c' => 1,
],

[
    'q' => 'Gunung tertinggi di Indonesia adalah...',
    'a' => [
        'Gunung Semeru',
        'Gunung Kerinci',
        'Puncak Jaya',
        'Gunung Rinjani',
    ],
    'c' => 2,
],

[
    'q' => 'Lembaga yang membuat undang-undang adalah...',
    'a' => [
        'Mahkamah Agung',
        'Presiden',
        'DPR',
        'BPK',
    ],
    'c' => 2,
],

[
    'q' => 'Hari Kebangkitan Nasional diperingati setiap tanggal...',
    'a' => [
        '20 Mei',
        '17 Agustus',
        '28 Oktober',
        '1 Juni',
    ],
    'c' => 0,
],

[
    'q' => 'Samudra yang berada di sebelah selatan Indonesia adalah...',
    'a' => [
        'Samudra Atlantik',
        'Samudra Hindia',
        'Samudra Arktik',
        'Samudra Pasifik',
    ],
    'c' => 1,
],

[
    'q' => 'Tokoh yang dikenal sebagai Bapak Pendidikan Nasional adalah...',
    'a' => [
        'Ir. Soekarno',
        'Moh. Hatta',
        'Ki Hajar Dewantara',
        'Jenderal Sudirman',
    ],
    'c' => 2,
],

[
    'q' => 'Jumlah provinsi di Indonesia saat ini adalah...',
    'a' => [
        '34',
        '36',
        '38',
        '40',
    ],
    'c' => 2,
],

[
    'q' => 'Laut yang memisahkan Pulau Jawa dan Pulau Sumatera adalah...',
    'a' => [
        'Laut Jawa',
        'Selat Sunda',
        'Selat Makassar',
        'Selat Bali',
    ],
    'c' => 1,
],

[
    'q' => 'Organisasi Budi Utomo berdiri pada tahun...',
    'a' => [
        '1908',
        '1928',
        '1945',
        '1912',
    ],
    'c' => 0,
],

[
    'q' => 'Hari Sumpah Pemuda diperingati setiap tanggal...',
    'a' => [
        '17 Agustus',
        '20 Mei',
        '28 Oktober',
        '1 Juni',
    ],
    'c' => 2,
],
[
    'q' => 'Ibu kota Provinsi Kalimantan Selatan adalah...',
    'a' => [
        'Samarinda',
        'Pontianak',
        'Palangka Raya',
        'Banjarmasin',
    ],
    'c' => 3,
],

[
    'q' => 'Salah satu hasil perkebunan utama Indonesia adalah...',
    'a' => [
        'Padi',
        'Kelapa Sawit',
        'Jagung',
        'Kentang',
    ],
    'c' => 1,
],

[
    'q' => 'Pahlawan nasional asal Maluku yang terkenal adalah...',
    'a' => [
        'Pattimura',
        'Diponegoro',
        'Sultan Hasanuddin',
        'Tuanku Imam Bonjol',
    ],
    'c' => 0,
],

[
    'q' => 'Kegiatan menjual barang ke luar negeri disebut...',
    'a' => [
        'Impor',
        'Distribusi',
        'Ekspor',
        'Produksi',
    ],
    'c' => 2,
],

[
    'q' => 'Lembaga yang menyusun Undang-Undang Dasar adalah...',
    'a' => [
        'MPR',
        'DPR',
        'KPU',
        'BPK',
    ],
    'c' => 0,
],

[
    'q' => 'Provinsi yang memiliki ibu kota Kupang adalah...',
    'a' => [
        'NTB',
        'NTT',
        'Bali',
        'Maluku',
    ],
    'c' => 1,
],

[
    'q' => 'Pekerjaan utama masyarakat di daerah pegunungan adalah...',
    'a' => [
        'Nelayan',
        'Petani',
        'Pilot',
        'Pelaut',
    ],
    'c' => 1,
],

[
    'q' => 'Sungai Musi berada di Provinsi...',
    'a' => [
        'Sumatera Selatan',
        'Riau',
        'Aceh',
        'Lampung',
    ],
    'c' => 0,
],

[
    'q' => 'Provinsi yang memiliki ibu kota Mataram adalah...',
    'a' => [
        'NTT',
        'Bali',
        'NTB',
        'Maluku',
    ],
    'c' => 2,
],

[
    'q' => 'Pancasila disahkan sebagai dasar negara pada tanggal...',
    'a' => [
        '17 Agustus 1945',
        '18 Agustus 1945',
        '1 Juni 1945',
        '20 Mei 1908',
    ],
    'c' => 1,
],

[
    'q' => 'Ibu kota Provinsi Jambi adalah...',
    'a' => [
        'Palembang',
        'Jambi',
        'Pekanbaru',
        'Bengkulu',
    ],
    'c' => 1,
],

[
    'q' => 'Salah satu manfaat bendungan adalah...',
    'a' => [
        'Menyebabkan banjir',
        'Irigasi pertanian',
        'Mengurangi air',
        'Merusak sawah',
    ],
    'c' => 1,
],

[
    'q' => 'Provinsi Gorontalo memiliki ibu kota...',
    'a' => [
        'Palu',
        'Manado',
        'Gorontalo',
        'Kendari',
    ],
    'c' => 2,
],

[
    'q' => 'Pulau Sulawesi terkenal dengan bentuknya yang menyerupai...',
    'a' => [
        'Huruf K',
        'Huruf X',
        'Anggrek',
        'Bintang',
    ],
    'c' => 0,
],

[
    'q' => 'Tokoh yang dikenal sebagai Bapak Koperasi Indonesia adalah...',
    'a' => [
        'Mohammad Hatta',
        'Soekarno',
        'Ki Hajar Dewantara',
        'Ahmad Dahlan',
    ],
    'c' => 0,
],

[
    'q' => 'Ibu kota Provinsi Bengkulu adalah...',
    'a' => [
        'Bengkulu',
        'Padang',
        'Jambi',
        'Palembang',
    ],
    'c' => 0,
],

[
    'q' => 'Contoh sumber daya alam yang tidak dapat diperbarui adalah...',
    'a' => [
        'Air',
        'Hutan',
        'Minyak bumi',
        'Angin',
    ],
    'c' => 2,
],

[
    'q' => 'Lembaga yang bertugas menjaga konstitusi di Indonesia adalah...',
    'a' => [
        'Mahkamah Konstitusi',
        'Mahkamah Agung',
        'DPR',
        'BPK',
    ],
    'c' => 0,
],

[
    'q' => 'Provinsi Sulawesi Tenggara memiliki ibu kota...',
    'a' => [
        'Palu',
        'Kendari',
        'Makassar',
        'Manado',
    ],
    'c' => 1,
],

[
    'q' => 'Tujuan utama mempelajari IPS adalah...',
    'a' => [
        'Memahami kehidupan masyarakat dan lingkungan',
        'Menghafal semua nama negara',
        'Belajar membuat mesin',
        'Belajar pemrograman',
    ],
    'c' => 0,
],

[
    'q' => 'Indonesia memiliki wilayah laut yang luas sehingga disebut sebagai negara...',
    'a' => [
        'Agraris',
        'Maritim',
        'Industri',
        'Subtropis',
    ],
    'c' => 1,
],

[
    'q' => 'Contoh kegiatan ekonomi di bidang pertanian adalah...',
    'a' => [
        'Menanam padi',
        'Menjual pakaian',
        'Membuat mebel',
        'Mengajar di sekolah',
    ],
    'c' => 0,
],

[
    'q' => 'Ibu kota Provinsi Papua Selatan adalah...',
    'a' => [
        'Jayapura',
        'Merauke',
        'Timika',
        'Nabire',
    ],
    'c' => 1,
],

[
    'q' => 'Indonesia memiliki iklim tropis karena...',
    'a' => [
        'Berada di garis khatulistiwa',
        'Dikelilingi pegunungan',
        'Memiliki banyak sungai',
        'Memiliki banyak pulau',
    ],
    'c' => 0,
],

[
    'q' => 'Pahlawan nasional yang memimpin perang di Maluku adalah...',
    'a' => [
        'Pattimura',
        'Diponegoro',
        'Sultan Hasanuddin',
        'Cut Nyak Dhien',
    ],
    'c' => 0,
],

[
    'q' => 'Contoh kegiatan ekonomi di bidang perikanan adalah...',
    'a' => [
        'Menangkap ikan',
        'Menanam jagung',
        'Membuat pakaian',
        'Mengajar di sekolah',
    ],
    'c' => 0,
],

[
    'q' => 'Pulau yang dikenal sebagai Pulau Garam adalah...',
    'a' => [
        'Bali',
        'Madura',
        'Lombok',
        'Batam',
    ],
    'c' => 1,
],

[
    'q' => 'Salah satu manfaat pajak bagi negara adalah...',
    'a' => [
        'Membiayai pembangunan',
        'Mengurangi jumlah penduduk',
        'Mengurangi perdagangan',
        'Menghentikan produksi',
    ],
    'c' => 0,
],

[
    'q' => 'Indonesia memiliki semboyan nasional yaitu...',
    'a' => [
        'Tut Wuri Handayani',
        'Bhinneka Tunggal Ika',
        'Merdeka atau Mati',
        'Satu Nusa',
    ],
    'c' => 1,
],

[
    'q' => 'Sikap yang mencerminkan persatuan dalam kehidupan sehari-hari adalah...',
    'a' => [
        'Gotong royong',
        'Bermusuhan',
        'Mengejek teman',
        'Memaksakan kehendak',
    ],
    'c' => 0,
],
[
    'q' => 'Salah satu kewajiban warga negara adalah...',
    'a' => [
        'Mendapatkan pendidikan',
        'Menaati peraturan yang berlaku',
        'Memperoleh pelayanan kesehatan',
        'Menggunakan fasilitas umum',
    ],
    'c' => 1,
],

[
    'q' => 'Gunung Bromo terletak di Provinsi...',
    'a' => [
        'Jawa Barat',
        'Jawa Tengah',
        'Jawa Timur',
        'Bali',
    ],
    'c' => 2,
],

[
    'q' => 'Laut yang berada di sebelah timur Pulau Kalimantan adalah...',
    'a' => [
        'Laut Jawa',
        'Laut Sulawesi',
        'Laut Banda',
        'Laut Flores',
    ],
    'c' => 1,
],

[
    'q' => 'Salah satu contoh sumber daya alam yang dapat diperbarui adalah...',
    'a' => [
        'Minyak bumi',
        'Batu bara',
        'Hutan',
        'Emas',
    ],
    'c' => 2,
],

[
    'q' => 'Provinsi yang memiliki ibu kota Pontianak adalah...',
    'a' => [
        'Kalimantan Tengah',
        'Kalimantan Selatan',
        'Kalimantan Barat',
        'Kalimantan Timur',
    ],
    'c' => 2,
],

[
    'q' => 'Pekerjaan yang menghasilkan barang disebut...',
    'a' => [
        'Jasa',
        'Produksi',
        'Distribusi',
        'Konsumsi',
    ],
    'c' => 1,
],

[
    'q' => 'Hari Kemerdekaan Indonesia diperingati setiap tanggal...',
    'a' => [
        '20 Mei',
        '1 Juni',
        '17 Agustus',
        '10 November',
    ],
    'c' => 2,
],

[
    'q' => 'Pulau Bali terkenal dengan objek wisata...',
    'a' => [
        'Danau Toba',
        'Pantai Kuta',
        'Raja Ampat',
        'Candi Borobudur',
    ],
    'c' => 1,
],

[
    'q' => 'Negara Indonesia memiliki bentuk negara...',
    'a' => [
        'Serikat',
        'Kesatuan',
        'Monarki',
        'Koloni',
    ],
    'c' => 1,
],

[
    'q' => 'Badan yang menjaga stabilitas nilai rupiah adalah...',
    'a' => [
        'Bank Indonesia',
        'KPK',
        'BPK',
        'OJK',
    ],
    'c' => 0,
],

[
    'q' => 'Provinsi yang memiliki ibu kota Palembang adalah...',
    'a' => [
        'Lampung',
        'Bengkulu',
        'Jambi',
        'Sumatera Selatan',
    ],
    'c' => 3,
],

[
    'q' => 'Salah satu manfaat perdagangan internasional adalah...',
    'a' => [
        'Mengurangi kerja sama',
        'Menambah devisa negara',
        'Mengurangi produksi',
        'Menaikkan pengangguran',
    ],
    'c' => 1,
],

[
    'q' => 'Indonesia berada di kawasan Asia...',
    'a' => [
        'Barat',
        'Selatan',
        'Tenggara',
        'Timur',
    ],
    'c' => 2,
],

[
    'q' => 'Contoh kegiatan konsumsi adalah...',
    'a' => [
        'Membuat meja',
        'Menjual pakaian',
        'Memakan nasi',
        'Mengirim barang',
    ],
    'c' => 2,
],

[
    'q' => 'Provinsi yang memiliki ibu kota Bandar Lampung adalah...',
    'a' => [
        'Lampung',
        'Bengkulu',
        'Jambi',
        'Riau',
    ],
    'c' => 0,
],

[
    'q' => 'Tokoh yang menjahit Bendera Merah Putih adalah...',
    'a' => [
        'Fatmawati',
        'R.A. Kartini',
        'Cut Nyak Dhien',
        'Dewi Sartika',
    ],
    'c' => 0,
],

[
    'q' => 'Pulau terbesar di Provinsi Nusa Tenggara Timur adalah...',
    'a' => [
        'Bali',
        'Lombok',
        'Flores',
        'Jawa',
    ],
    'c' => 2,
],

[
    'q' => 'Salah satu contoh pekerjaan di bidang jasa adalah...',
    'a' => [
        'Petani',
        'Nelayan',
        'Guru',
        'Penambang',
    ],
    'c' => 2,
],

[
    'q' => 'Provinsi yang terkenal dengan Raja Ampat adalah...',
    'a' => [
        'Papua Barat',
        'Papua',
        'Maluku',
        'Sulawesi Utara',
    ],
    'c' => 0,
],

[
    'q' => 'Lembaga negara yang mengawasi penggunaan keuangan negara adalah...',
    'a' => [
        'Bank Indonesia',
        'BPK',
        'KPU',
        'Mahkamah Agung',
    ],
    'c' => 1,
],
[
    'q' => 'Semboyan "Bhinneka Tunggal Ika" memiliki arti...',
    'a' => [
        'Bersatu kita teguh',
        'Berbeda-beda tetapi tetap satu',
        'Gotong royong untuk semua',
        'Persatuan adalah kekuatan',
    ],
    'c' => 1,
],

[
    'q' => 'Ibu kota Provinsi Riau adalah...',
    'a' => [
        'Padang',
        'Jambi',
        'Pekanbaru',
        'Medan',
    ],
    'c' => 2,
],

[
    'q' => 'Pulau Madura terletak di sebelah... Pulau Jawa.',
    'a' => [
        'Selatan',
        'Utara',
        'Barat',
        'Timur',
    ],
    'c' => 1,
],

[
    'q' => 'Provinsi yang memiliki ibu kota Manado adalah...',
    'a' => [
        'Sulawesi Tengah',
        'Sulawesi Selatan',
        'Sulawesi Utara',
        'Gorontalo',
    ],
    'c' => 2,
],

[
    'q' => 'Salah satu tujuan ekspor adalah...',
    'a' => [
        'Mengurangi produksi',
        'Menambah devisa negara',
        'Mengurangi penduduk',
        'Menambah impor',
    ],
    'c' => 1,
],

[
    'q' => 'Kegiatan membeli barang dari luar negeri disebut...',
    'a' => [
        'Ekspor',
        'Distribusi',
        'Impor',
        'Produksi',
    ],
    'c' => 2,
],

[
    'q' => 'Kegiatan menghasilkan barang disebut...',
    'a' => [
        'Produksi',
        'Distribusi',
        'Konsumsi',
        'Ekspor',
    ],
    'c' => 0,
],

[
    'q' => 'Orang yang menggunakan barang atau jasa disebut...',
    'a' => [
        'Produsen',
        'Distributor',
        'Konsumen',
        'Pedagang',
    ],
    'c' => 2,
],

[
    'q' => 'Lembaga yang mencetak uang rupiah adalah...',
    'a' => [
        'KPK',
        'Bank Indonesia',
        'OJK',
        'Kementerian Keuangan',
    ],
    'c' => 1,
],

[
    'q' => 'Ibu kota Provinsi Aceh adalah...',
    'a' => [
        'Banda Aceh',
        'Lhokseumawe',
        'Langsa',
        'Sabang',
    ],
    'c' => 0,
],

[
    'q' => 'Indonesia memiliki berapa sila dalam Pancasila?',
    'a' => [
        '3',
        '4',
        '5',
        '6',
    ],
    'c' => 2,
],

[
    'q' => 'Tokoh yang mengetik naskah Proklamasi adalah...',
    'a' => [
        'Sayuti Melik',
        'Moh. Hatta',
        'Soekarno',
        'Ahmad Soebardjo',
    ],
    'c' => 0,
],

[
    'q' => 'Hari Lahir Pancasila diperingati setiap tanggal...',
    'a' => [
        '20 Mei',
        '1 Juni',
        '17 Agustus',
        '10 November',
    ],
    'c' => 1,
],

[
    'q' => 'Kota yang dijuluki Kota Pahlawan adalah...',
    'a' => [
        'Bandung',
        'Jakarta',
        'Surabaya',
        'Semarang',
    ],
    'c' => 2,
],

[
    'q' => 'Provinsi Banten memiliki ibu kota...',
    'a' => [
        'Serang',
        'Cilegon',
        'Tangerang',
        'Pandeglang',
    ],
    'c' => 0,
],

[
    'q' => 'Negara yang terletak di sebelah utara Indonesia adalah...',
    'a' => [
        'Australia',
        'Timor Leste',
        'Malaysia',
        'Papua Nugini',
    ],
    'c' => 2,
],

[
    'q' => 'Kegiatan menyalurkan barang dari produsen ke konsumen disebut...',
    'a' => [
        'Produksi',
        'Distribusi',
        'Konsumsi',
        'Impor',
    ],
    'c' => 1,
],

[
    'q' => 'Lembaga yang menyelenggarakan pemilu di Indonesia adalah...',
    'a' => [
        'KPU',
        'BPK',
        'MPR',
        'DPR',
    ],
    'c' => 0,
],

[
    'q' => 'Pulau yang dikenal sebagai Pulau Seribu Masjid adalah...',
    'a' => [
        'Bali',
        'Lombok',
        'Jawa',
        'Sumatera',
    ],
    'c' => 1,
],

[
    'q' => 'Salah satu manfaat hutan adalah...',
    'a' => [
        'Menyebabkan banjir',
        'Menghasilkan oksigen',
        'Mengurangi kesuburan tanah',
        'Mencemari udara',
    ],
    'c' => 1,
],
[
    'q' => 'Lambang negara Indonesia adalah...',
    'a' => [
        'Burung Merak',
        'Garuda Pancasila',
        'Elang Jawa',
        'Harimau',
    ],
    'c' => 1,
],

[
    'q' => 'Pulau terbesar kedua di Indonesia adalah...',
    'a' => [
        'Sumatera',
        'Jawa',
        'Sulawesi',
        'Papua',
    ],
    'c' => 3,
],

[
    'q' => 'Negara yang berbatasan langsung dengan Papua adalah...',
    'a' => [
        'Malaysia',
        'Timor Leste',
        'Papua Nugini',
        'Filipina',
    ],
    'c' => 2,
],

[
    'q' => 'Ibu kota Provinsi Jawa Tengah adalah...',
    'a' => [
        'Yogyakarta',
        'Semarang',
        'Solo',
        'Purwokerto',
    ],
    'c' => 1,
],

[
    'q' => 'Indonesia dikenal sebagai negara maritim karena...',
    'a' => [
        'Memiliki banyak gunung',
        'Memiliki wilayah laut yang luas',
        'Memiliki banyak sungai',
        'Memiliki banyak hutan',
    ],
    'c' => 1,
],

[
    'q' => 'Pahlawan wanita yang memperjuangkan emansipasi wanita adalah...',
    'a' => [
        'Cut Nyak Dhien',
        'R.A. Kartini',
        'Dewi Sartika',
        'Martha Christina Tiahahu',
    ],
    'c' => 1,
],

[
    'q' => 'Sumpah Pemuda diikrarkan pada tahun...',
    'a' => [
        '1908',
        '1928',
        '1945',
        '1950',
    ],
    'c' => 1,
],

[
    'q' => 'Pulau Komodo berada di Provinsi...',
    'a' => [
        'Bali',
        'Nusa Tenggara Barat',
        'Nusa Tenggara Timur',
        'Maluku',
    ],
    'c' => 2,
],

[
    'q' => 'Mata pencaharian utama masyarakat pesisir adalah...',
    'a' => [
        'Petani',
        'Nelayan',
        'Guru',
        'Pedagang',
    ],
    'c' => 1,
],

[
    'q' => 'Peta yang menunjukkan kenampakan alam disebut...',
    'a' => [
        'Peta Tematik',
        'Peta Topografi',
        'Peta Politik',
        'Peta Jalan',
    ],
    'c' => 1,
],

[
    'q' => 'Gunung Kerinci terletak di Pulau...',
    'a' => [
        'Jawa',
        'Sumatera',
        'Sulawesi',
        'Papua',
    ],
    'c' => 1,
],

[
    'q' => 'Ibu kota Provinsi Kalimantan Timur adalah...',
    'a' => [
        'Pontianak',
        'Banjarmasin',
        'Samarinda',
        'Palangka Raya',
    ],
    'c' => 2,
],

[
    'q' => 'Presiden dipilih melalui...',
    'a' => [
        'Pemilu',
        'Musyawarah Desa',
        'Undian',
        'Penunjukan DPR',
    ],
    'c' => 0,
],

[
    'q' => 'Lembaga yang mengadili pelanggaran hukum adalah...',
    'a' => [
        'DPR',
        'Mahkamah Agung',
        'BPK',
        'KPU',
    ],
    'c' => 1,
],

[
    'q' => 'Provinsi yang memiliki ibu kota Makassar adalah...',
    'a' => [
        'Sulawesi Selatan',
        'Sulawesi Tengah',
        'Sulawesi Barat',
        'Sulawesi Utara',
    ],
    'c' => 0,
],

[
    'q' => 'Indonesia berada pada garis khatulistiwa sehingga memiliki iklim...',
    'a' => [
        'Subtropis',
        'Tropis',
        'Kutub',
        'Gurun',
    ],
    'c' => 1,
],

[
    'q' => 'Hari Pendidikan Nasional diperingati setiap...',
    'a' => [
        '20 Mei',
        '2 Mei',
        '17 Agustus',
        '1 Juni',
    ],
    'c' => 1,
],

[
    'q' => 'Selat yang memisahkan Sumatera dan Kalimantan adalah...',
    'a' => [
        'Selat Karimata',
        'Selat Bali',
        'Selat Sunda',
        'Selat Makassar',
    ],
    'c' => 0,
],

[
    'q' => 'Indonesia memiliki bentuk pemerintahan...',
    'a' => [
        'Monarki',
        'Republik',
        'Kolonial',
        'Kerajaan',
    ],
    'c' => 1,
],

[
    'q' => 'Salah satu hasil tambang utama Indonesia adalah...',
    'a' => [
        'Batu Bara',
        'Kapas',
        'Kopi',
        'Karet',
    ],
    'c' => 0,
],
[
    'q' => 'Siapa wakil presiden pertama Republik Indonesia?',
    'a' => [
        'Mohammad Hatta',
        'Adam Malik',
        'B.J. Habibie',
        'Try Sutrisno',
    ],
    'c' => 0,
],

[
    'q' => 'Hari Kesaktian Pancasila diperingati setiap tanggal...',
    'a' => [
        '1 Juni',
        '1 Oktober',
        '17 Agustus',
        '10 November',
    ],
    'c' => 1,
],

[
    'q' => 'Laut yang berada di antara Pulau Jawa dan Kalimantan adalah...',
    'a' => [
        'Laut Jawa',
        'Laut Banda',
        'Laut Flores',
        'Laut Sulawesi',
    ],
    'c' => 0,
],

[
    'q' => 'Pahlawan nasional yang memimpin Perang Diponegoro adalah...',
    'a' => [
        'Pangeran Diponegoro',
        'Sultan Hasanuddin',
        'Pattimura',
        'Tuanku Imam Bonjol',
    ],
    'c' => 0,
],

[
    'q' => 'Indonesia dikenal sebagai negara...',
    'a' => [
        'Kepulauan',
        'Gurun',
        'Kutub',
        'Pegunungan',
    ],
    'c' => 0,
],

[
    'q' => 'Gunung berapi tertinggi di Pulau Jawa adalah...',
    'a' => [
        'Semeru',
        'Merapi',
        'Bromo',
        'Kelud',
    ],
    'c' => 0,
],

[
    'q' => 'Organisasi Perserikatan Bangsa-Bangsa disingkat...',
    'a' => [
        'PBB',
        'ASEAN',
        'APEC',
        'OPEC',
    ],
    'c' => 0,
],

[
    'q' => 'Tanggal berdirinya Budi Utomo adalah...',
    'a' => [
        '20 Mei 1908',
        '28 Oktober 1928',
        '17 Agustus 1945',
        '1 Juni 1945',
    ],
    'c' => 0,
],

[
    'q' => 'Provinsi yang terkenal dengan Danau Toba adalah...',
    'a' => [
        'Sumatera Barat',
        'Sumatera Utara',
        'Aceh',
        'Riau',
    ],
    'c' => 1,
],

[
    'q' => 'Indonesia terletak di antara Samudra Hindia dan...',
    'a' => [
        'Atlantik',
        'Pasifik',
        'Arktik',
        'Antartika',
    ],
    'c' => 1,
],

[
    'q' => 'Pahlawan wanita dari Aceh adalah...',
    'a' => [
        'Cut Nyak Dhien',
        'R.A. Kartini',
        'Dewi Sartika',
        'Martha Christina Tiahahu',
    ],
    'c' => 0,
],

[
    'q' => 'Hari Pahlawan diperingati setiap tanggal...',
    'a' => [
        '17 Agustus',
        '10 November',
        '20 Mei',
        '28 Oktober',
    ],
    'c' => 1,
],

[
    'q' => 'Bentuk pemerintahan Indonesia adalah...',
    'a' => [
        'Kerajaan',
        'Republik',
        'Kesultanan',
        'Koloni',
    ],
    'c' => 1,
],

[
    'q' => 'Provinsi yang memiliki Candi Borobudur adalah...',
    'a' => [
        'Jawa Tengah',
        'DIY',
        'Jawa Timur',
        'Banten',
    ],
    'c' => 0,
],

[
    'q' => 'Ibukota Provinsi Jawa Timur adalah...',
    'a' => [
        'Malang',
        'Surabaya',
        'Madiun',
        'Kediri',
    ],
    'c' => 1,
],

[
    'q' => 'Negara dengan jumlah penduduk terbanyak di dunia adalah...',
    'a' => [
        'India',
        'China',
        'Amerika Serikat',
        'Indonesia',
    ],
    'c' => 0,
],

[
    'q' => 'Bendera negara Indonesia berwarna...',
    'a' => [
        'Merah Putih',
        'Merah Biru',
        'Putih Hijau',
        'Biru Putih',
    ],
    'c' => 0,
],

[
    'q' => 'Peta digunakan untuk menunjukkan...',
    'a' => [
        'Cuaca',
        'Letak suatu wilayah',
        'Jumlah penduduk',
        'Harga barang',
    ],
    'c' => 1,
],

[
    'q' => 'Indonesia memiliki berapa zona waktu?',
    'a' => [
        '2',
        '3',
        '4',
        '5',
    ],
    'c' => 1,
],

[
    'q' => 'Lagu "Indonesia Raya" diciptakan oleh...',
    'a' => [
        'W.R. Supratman',
        'Ismail Marzuki',
        'C. Simanjuntak',
        'Kusbini',
    ],
    'c' => 0,
],
[
    'q' => 'Apa nama ibu kota Provinsi Jawa Barat?',
    'a' => [
        'Bandung',
        'Semarang',
        'Surabaya',
        'Yogyakarta',
    ],
    'c' => 0,
],

[
    'q' => 'Negara tetangga Indonesia yang berada di Pulau Kalimantan adalah...',
    'a' => [
        'Thailand',
        'Malaysia',
        'Filipina',
        'Vietnam',
    ],
    'c' => 1,
],

[
    'q' => 'Lembaga yang bertugas memeriksa pengelolaan keuangan negara adalah...',
    'a' => [
        'DPR',
        'BPK',
        'MA',
        'MK',
    ],
    'c' => 1,
],

[
    'q' => 'Lagu kebangsaan Indonesia adalah...',
    'a' => [
        'Indonesia Raya',
        'Garuda Pancasila',
        'Hari Merdeka',
        'Bagimu Negeri',
    ],
    'c' => 0,
],

[
    'q' => 'Pahlawan yang dikenal sebagai Bapak Proklamator adalah...',
    'a' => [
        'Soekarno',
        'Ki Hajar Dewantara',
        'Jenderal Sudirman',
        'Mohammad Yamin',
    ],
    'c' => 0,
],

[
    'q' => 'Benua tempat Indonesia berada adalah...',
    'a' => [
        'Afrika',
        'Asia',
        'Eropa',
        'Australia',
    ],
    'c' => 1,
],

[
    'q' => 'Pemilu di Indonesia dilaksanakan setiap...',
    'a' => [
        '3 Tahun',
        '4 Tahun',
        '5 Tahun',
        '6 Tahun',
    ],
    'c' => 2,
],

[
    'q' => 'Selat yang memisahkan Pulau Jawa dan Bali adalah...',
    'a' => [
        'Selat Sunda',
        'Selat Bali',
        'Selat Makassar',
        'Selat Karimata',
    ],
    'c' => 1,
],

[
    'q' => 'Provinsi paling timur di Indonesia adalah...',
    'a' => [
        'Papua',
        'Maluku',
        'Sulawesi Utara',
        'NTT',
    ],
    'c' => 0,
],

[
    'q' => 'Tanggal lahir Pancasila diperingati setiap...',
    'a' => [
        '20 Mei',
        '17 Agustus',
        '1 Juni',
        '28 Oktober',
    ],
    'c' => 2,
],

[
    'q' => 'Mata uang Indonesia adalah...',
    'a' => [
        'Dollar',
        'Yen',
        'Ringgit',
        'Rupiah',
    ],
    'c' => 3,
],

[
    'q' => 'Provinsi Bali terkenal dengan objek wisata...',
    'a' => [
        'Danau Toba',
        'Pantai Kuta',
        'Borobudur',
        'Bunaken',
    ],
    'c' => 1,
],

[
    'q' => 'Indonesia merdeka dari penjajahan...',
    'a' => [
        'Belanda',
        'Portugis',
        'Jepang',
        'Inggris',
    ],
    'c' => 2,
],

[
    'q' => 'Candi Borobudur berada di Provinsi...',
    'a' => [
        'Jawa Timur',
        'Jawa Tengah',
        'DIY',
        'Banten',
    ],
    'c' => 1,
],

[
    'q' => 'Pahlawan yang dijuluki Ayam Jantan dari Timur adalah...',
    'a' => [
        'Pattimura',
        'Tuanku Imam Bonjol',
        'Sultan Hasanuddin',
        'Diponegoro',
    ],
    'c' => 2,
],

[
    'q' => 'Pulau Dewata merupakan julukan untuk...',
    'a' => [
        'Lombok',
        'Bali',
        'Jawa',
        'Sumatera',
    ],
    'c' => 1,
],

[
    'q' => 'Kerja sama antarnegara di bidang ekonomi disebut...',
    'a' => [
        'Kolaborasi',
        'Perdagangan Internasional',
        'Urbanisasi',
        'Migrasi',
    ],
    'c' => 1,
],

[
    'q' => 'Sungai terpanjang di Indonesia adalah...',
    'a' => [
        'Kapuas',
        'Musi',
        'Mahakam',
        'Barito',
    ],
    'c' => 0,
],

[
    'q' => 'Indonesia terletak di antara dua benua yaitu...',
    'a' => [
        'Asia dan Afrika',
        'Asia dan Australia',
        'Eropa dan Asia',
        'Australia dan Amerika',
    ],
    'c' => 1,
],

[
    'q' => 'Tujuan utama dibentuknya ASEAN adalah...',
    'a' => [
        'Memperluas wilayah',
        'Kerja sama antarnegara Asia Tenggara',
        'Membentuk negara baru',
        'Menguasai perdagangan dunia',
    ],
    'c' => 1,
],

    ];

    /**
     * ==========================
     * BANK SOAL IPA (150 SOAL)
     * ==========================
     */
    protected static array $ipaQuestions = [

       [
    'q' => 'Bagian tumbuhan yang berfungsi menyimpan cadangan makanan pada kentang adalah...',
    'a' => [
        'Umbi batang',
        'Akar',
        'Daun',
        'Bunga',
    ],
    'c' => 0,
],

[
    'q' => 'Planet yang disebut planet biru adalah...',
    'a' => [
        'Mars',
        'Bumi',
        'Venus',
        'Saturnus',
    ],
    'c' => 1,
],

[
    'q' => 'Organ tubuh yang menghasilkan urin adalah...',
    'a' => [
        'Hati',
        'Jantung',
        'Ginjal',
        'Paru-paru',
    ],
    'c' => 2,
],

[
    'q' => 'Alat ukur waktu adalah...',
    'a' => [
        'Neraca',
        'Stopwatch',
        'Mistar',
        'Barometer',
    ],
    'c' => 1,
],

[
    'q' => 'Contoh hewan yang bernapas dengan paru-paru adalah...',
    'a' => [
        'Lele',
        'Katak dewasa',
        'Udang',
        'Belalang',
    ],
    'c' => 1,
],

[
    'q' => 'Sumber energi listrik pada senter adalah...',
    'a' => [
        'Aki',
        'Baterai',
        'Generator',
        'Dinamo',
    ],
    'c' => 1,
],

[
    'q' => 'Bunyi tidak dapat merambat melalui...',
    'a' => [
        'Udara',
        'Air',
        'Ruang hampa',
        'Besi',
    ],
    'c' => 2,
],

[
    'q' => 'Contoh perubahan energi pada televisi adalah...',
    'a' => [
        'Listrik menjadi cahaya dan bunyi',
        'Gerak menjadi listrik',
        'Panas menjadi gerak',
        'Kimia menjadi panas',
    ],
    'c' => 0,
],

[
    'q' => 'Planet yang memiliki delapan planet dalam tata surya mengelilinginya adalah...',
    'a' => [
        'Bulan',
        'Matahari',
        'Mars',
        'Venus',
    ],
    'c' => 1,
],

[
    'q' => 'Tulang yang melindungi paru-paru adalah...',
    'a' => [
        'Tulang paha',
        'Tulang rusuk',
        'Tulang lengan',
        'Tulang betis',
    ],
    'c' => 1,
],

[
    'q' => 'Contoh gaya yang menyebabkan benda berhenti adalah...',
    'a' => [
        'Gaya gesek',
        'Gaya magnet',
        'Gaya gravitasi',
        'Gaya listrik',
    ],
    'c' => 0,
],

[
    'q' => 'Hewan yang mengalami metamorfosis sempurna memiliki fase...',
    'a' => [
        'Telur-larva-pupa-dewasa',
        'Telur-nimfa-dewasa',
        'Larva-pupa',
        'Telur-dewasa',
    ],
    'c' => 0,
],

[
    'q' => 'Contoh tumbuhan berbiji terbuka adalah...',
    'a' => [
        'Mangga',
        'Pinus',
        'Padi',
        'Jagung',
    ],
    'c' => 1,
],

[
    'q' => 'Alat optik yang digunakan dokter untuk memeriksa mata adalah...',
    'a' => [
        'Mikroskop',
        'Periskop',
        'Oftalmoskop',
        'Teropong',
    ],
    'c' => 2,
],

[
    'q' => 'Perubahan dari gas menjadi cair disebut...',
    'a' => [
        'Mengembun',
        'Menguap',
        'Mencair',
        'Membeku',
    ],
    'c' => 0,
],

[
    'q' => 'Contoh energi kimia adalah...',
    'a' => [
        'Makanan',
        'Cahaya',
        'Angin',
        'Suara',
    ],
    'c' => 0,
],

[
    'q' => 'Bagian jantung yang menerima darah dari seluruh tubuh adalah...',
    'a' => [
        'Serambi kanan',
        'Bilik kiri',
        'Serambi kiri',
        'Bilik kanan',
    ],
    'c' => 0,
],

[
    'q' => 'Lapisan ozon terdapat pada...',
    'a' => [
        'Troposfer',
        'Stratosfer',
        'Mesosfer',
        'Eksosfer',
    ],
    'c' => 1,
],

[
    'q' => 'Planet yang memiliki suhu paling tinggi adalah...',
    'a' => [
        'Merkurius',
        'Venus',
        'Mars',
        'Saturnus',
    ],
    'c' => 1,
],

[
    'q' => 'Organ tubuh yang menghasilkan hormon insulin adalah...',
    'a' => [
        'Pankreas',
        'Hati',
        'Ginjal',
        'Usus',
    ],
    'c' => 0,
],

[
    'q' => 'Contoh benda transparan adalah...',
    'a' => [
        'Kaca bening',
        'Kayu',
        'Besi',
        'Batu',
    ],
    'c' => 0,
],

[
    'q' => 'Energi yang berasal dari aliran air dimanfaatkan pada...',
    'a' => [
        'PLTA',
        'PLTU',
        'PLTS',
        'PLTG',
    ],
    'c' => 0,
],

[
    'q' => 'Alat reproduksi betina pada bunga disebut...',
    'a' => [
        'Benang sari',
        'Putik',
        'Mahkota',
        'Kelopak',
    ],
    'c' => 1,
],

[
    'q' => 'Contoh hewan nokturnal adalah...',
    'a' => [
        'Burung hantu',
        'Ayam',
        'Merpati',
        'Bebek',
    ],
    'c' => 0,
],

[
    'q' => 'Satuan daya listrik adalah...',
    'a' => [
        'Volt',
        'Ampere',
        'Watt',
        'Ohm',
    ],
    'c' => 2,
],

[
    'q' => 'Jaringan pengangkut hasil fotosintesis adalah...',
    'a' => [
        'Floem',
        'Xilem',
        'Epidermis',
        'Korteks',
    ],
    'c' => 0,
],

[
    'q' => 'Bagian bumi yang berupa lapisan udara disebut...',
    'a' => [
        'Atmosfer',
        'Litosfer',
        'Hidrosfer',
        'Biosfer',
    ],
    'c' => 0,
],

[
    'q' => 'Hewan yang berkembang biak dengan bertelur dan melahirkan disebut...',
    'a' => [
        'Vivipar',
        'Ovovivipar',
        'Ovipar',
        'Mamalia',
    ],
    'c' => 1,
],

[
    'q' => 'Benda yang dapat menghasilkan cahaya sendiri disebut...',
    'a' => [
        'Sumber cahaya',
        'Cermin',
        'Lensa',
        'Prisma',
    ],
    'c' => 0,
],

[
    'q' => 'Organ tubuh yang berfungsi mencerna makanan secara kimiawi pertama kali adalah...',
    'a' => [
        'Mulut',
        'Kerongkongan',
        'Lambung',
        'Usus halus',
    ],
    'c' => 0,
],
[
    'q' => 'Bagian tumbuhan yang berfungsi mengangkut air dan mineral adalah...',
    'a' => [
        'Xilem',
        'Floem',
        'Epidermis',
        'Korteks',
    ],
    'c' => 0,
],

[
    'q' => 'Planet yang memiliki jumlah satelit terbanyak adalah...',
    'a' => [
        'Mars',
        'Jupiter',
        'Merkurius',
        'Venus',
    ],
    'c' => 1,
],

[
    'q' => 'Satuan energi dalam SI adalah...',
    'a' => [
        'Newton',
        'Joule',
        'Watt',
        'Volt',
    ],
    'c' => 1,
],

[
    'q' => 'Organ tubuh manusia yang menghasilkan empedu adalah...',
    'a' => [
        'Ginjal',
        'Paru-paru',
        'Hati',
        'Lambung',
    ],
    'c' => 2,
],

[
    'q' => 'Benda langit yang mengelilingi planet disebut...',
    'a' => [
        'Meteor',
        'Komet',
        'Asteroid',
        'Satelit',
    ],
    'c' => 3,
],

[
    'q' => 'Contoh hewan ovipar adalah...',
    'a' => [
        'Ayam',
        'Kucing',
        'Sapi',
        'Kelinci',
    ],
    'c' => 0,
],

[
    'q' => 'Bagian telinga yang mengubah getaran menjadi impuls saraf adalah...',
    'a' => [
        'Daun telinga',
        'Rumah siput',
        'Gendang telinga',
        'Saluran telinga',
    ],
    'c' => 1,
],

[
    'q' => 'Fotosintesis menghasilkan...',
    'a' => [
        'Karbon dioksida',
        'Nitrogen',
        'Oksigen',
        'Metana',
    ],
    'c' => 2,
],

[
    'q' => 'Contoh konduktor panas adalah...',
    'a' => [
        'Kayu',
        'Karet',
        'Plastik',
        'Aluminium',
    ],
    'c' => 3,
],

[
    'q' => 'Planet yang memiliki cincin paling indah adalah...',
    'a' => [
        'Saturnus',
        'Mars',
        'Venus',
        'Merkurius',
    ],
    'c' => 0,
],

[
    'q' => 'Alat untuk mengukur kuat arus listrik adalah...',
    'a' => [
        'Amperemeter',
        'Voltmeter',
        'Ohmmeter',
        'Barometer',
    ],
    'c' => 0,
],

[
    'q' => 'Sumber energi panas alami terbesar adalah...',
    'a' => [
        'Api',
        'Matahari',
        'Listrik',
        'Gas',
    ],
    'c' => 1,
],

[
    'q' => 'Bagian darah yang melawan kuman adalah...',
    'a' => [
        'Plasma',
        'Trombosit',
        'Sel darah putih',
        'Sel darah merah',
    ],
    'c' => 2,
],

[
    'q' => 'Planet yang memiliki warna kebiruan adalah...',
    'a' => [
        'Mars',
        'Venus',
        'Jupiter',
        'Neptunus',
    ],
    'c' => 3,
],

[
    'q' => 'Bagian tumbuhan yang menjadi tempat penyimpanan cadangan makanan pada singkong adalah...',
    'a' => [
        'Akar',
        'Daun',
        'Batang',
        'Bunga',
    ],
    'c' => 0,
],

[
    'q' => 'Contoh gaya tak sentuh adalah...',
    'a' => [
        'Gaya magnet',
        'Gaya dorong',
        'Gaya tarik tali',
        'Gaya otot',
    ],
    'c' => 0,
],

[
    'q' => 'Lapisan atmosfer tempat satelit buatan mengorbit adalah...',
    'a' => [
        'Troposfer',
        'Termosfer',
        'Stratosfer',
        'Mesosfer',
    ],
    'c' => 1,
],

[
    'q' => 'Organ yang menyaring darah adalah...',
    'a' => [
        'Paru-paru',
        'Jantung',
        'Ginjal',
        'Usus',
    ],
    'c' => 2,
],

[
    'q' => 'Perubahan energi pada setrika listrik adalah...',
    'a' => [
        'Panas menjadi listrik',
        'Kimia menjadi panas',
        'Gerak menjadi panas',
        'Listrik menjadi panas',
    ],
    'c' => 3,
],

[
    'q' => 'Hewan yang mengalami metamorfosis tidak sempurna adalah...',
    'a' => [
        'Belalang',
        'Kupu-kupu',
        'Nyamuk',
        'Lalat',
    ],
    'c' => 0,
],

[
    'q' => 'Gas yang paling dibutuhkan manusia untuk bernapas adalah...',
    'a' => [
        'Karbon dioksida',
        'Oksigen',
        'Nitrogen',
        'Helium',
    ],
    'c' => 1,
],

[
    'q' => 'Bagian mata yang berfungsi memfokuskan cahaya adalah...',
    'a' => [
        'Retina',
        'Kornea',
        'Lensa',
        'Pupil',
    ],
    'c' => 2,
],

[
    'q' => 'Planet yang membutuhkan waktu paling lama mengelilingi Matahari adalah...',
    'a' => [
        'Saturnus',
        'Uranus',
        'Jupiter',
        'Neptunus',
    ],
    'c' => 3,
],

[
    'q' => 'Contoh benda yang bersifat isolator listrik adalah...',
    'a' => [
        'Karet',
        'Tembaga',
        'Besi',
        'Aluminium',
    ],
    'c' => 0,
],

[
    'q' => 'Tumbuhan memperoleh air dari tanah melalui...',
    'a' => [
        'Batang',
        'Akar',
        'Daun',
        'Bunga',
    ],
    'c' => 1,
],

[
    'q' => 'Alat ukur tekanan udara adalah...',
    'a' => [
        'Termometer',
        'Higrometer',
        'Barometer',
        'Anemometer',
    ],
    'c' => 2,
],

[
    'q' => 'Contoh energi terbarukan adalah...',
    'a' => [
        'Batu bara',
        'Minyak bumi',
        'Gas alam',
        'Energi angin',
    ],
    'c' => 3,
],

[
    'q' => 'Lapisan bumi tempat makhluk hidup tinggal disebut...',
    'a' => [
        'Biosfer',
        'Atmosfer',
        'Litosfer',
        'Hidrosfer',
    ],
    'c' => 0,
],

[
    'q' => 'Bunyi dapat merambat melalui...',
    'a' => [
        'Zat padat, cair, dan gas',
        'Ruang hampa',
        'Cahaya saja',
        'Magnet saja',
    ],
    'c' => 0,
],

[
    'q' => 'Bagian bunga yang akan berkembang menjadi buah adalah...',
    'a' => [
        'Mahkota',
        'Putik',
        'Benang sari',
        'Kelopak',
    ],
    'c' => 1,
],
[
    'q' => 'Alat gerak aktif pada manusia adalah...',
    'a' => [
        'Tulang',
        'Otot',
        'Sendi',
        'Saraf',
    ],
    'c' => 1,
],

[
    'q' => 'Planet yang memiliki satelit alami bernama Bulan adalah...',
    'a' => [
        'Mars',
        'Venus',
        'Bumi',
        'Merkurius',
    ],
    'c' => 2,
],

[
    'q' => 'Bagian bunga yang menjadi alat kelamin jantan adalah...',
    'a' => [
        'Putik',
        'Mahkota',
        'Benang sari',
        'Kelopak',
    ],
    'c' => 2,
],

[
    'q' => 'Contoh sumber energi yang dapat diperbarui adalah...',
    'a' => [
        'Minyak bumi',
        'Batu bara',
        'Matahari',
        'Gas alam',
    ],
    'c' => 2,
],

[
    'q' => 'Indra pengecap pada manusia adalah...',
    'a' => [
        'Kulit',
        'Lidah',
        'Hidung',
        'Telinga',
    ],
    'c' => 1,
],

[
    'q' => 'Bagian tumbuhan yang berfungsi sebagai alat perkembangbiakan adalah...',
    'a' => [
        'Akar',
        'Daun',
        'Batang',
        'Bunga',
    ],
    'c' => 3,
],

[
    'q' => 'Gerhana Bulan terjadi ketika...',
    'a' => [
        'Matahari di antara Bumi dan Bulan',
        'Bumi di antara Matahari dan Bulan',
        'Bulan di antara Matahari dan Bumi',
        'Planet di antara Matahari dan Bulan',
    ],
    'c' => 1,
],

[
    'q' => 'Bagian darah yang membantu proses pembekuan darah adalah...',
    'a' => [
        'Plasma',
        'Leukosit',
        'Eritrosit',
        'Trombosit',
    ],
    'c' => 3,
],

[
    'q' => 'Contoh hewan omnivora adalah...',
    'a' => [
        'Harimau',
        'Kambing',
        'Ayam',
        'Sapi',
    ],
    'c' => 2,
],

[
    'q' => 'Energi yang tersimpan dalam makanan disebut energi...',
    'a' => [
        'Kimia',
        'Panas',
        'Gerak',
        'Listrik',
    ],
    'c' => 0,
],

[
    'q' => 'Tumbuhan bernapas melalui...',
    'a' => [
        'Stomata',
        'Akar',
        'Batang',
        'Bunga',
    ],
    'c' => 0,
],

[
    'q' => 'Bagian mata yang berfungsi menangkap bayangan adalah...',
    'a' => [
        'Retina',
        'Kornea',
        'Pupil',
        'Lensa',
    ],
    'c' => 0,
],

[
    'q' => 'Planet yang memiliki ukuran paling kecil adalah...',
    'a' => [
        'Mars',
        'Merkurius',
        'Venus',
        'Bumi',
    ],
    'c' => 1,
],

[
    'q' => 'Hewan berikut yang termasuk reptil adalah...',
    'a' => [
        'Katak',
        'Buaya',
        'Ayam',
        'Kucing',
    ],
    'c' => 1,
],

[
    'q' => 'Perubahan energi pada kipas angin adalah...',
    'a' => [
        'Listrik menjadi gerak',
        'Gerak menjadi panas',
        'Kimia menjadi cahaya',
        'Panas menjadi listrik',
    ],
    'c' => 0,
],

[
    'q' => 'Sumber vitamin C yang baik berasal dari...',
    'a' => [
        'Jeruk',
        'Nasi',
        'Daging',
        'Telur',
    ],
    'c' => 0,
],

[
    'q' => 'Contoh benda yang dapat ditarik magnet adalah...',
    'a' => [
        'Kayu',
        'Plastik',
        'Besi',
        'Kaca',
    ],
    'c' => 2,
],

[
    'q' => 'Sistem peredaran darah manusia disebut...',
    'a' => [
        'Terbuka',
        'Tertutup',
        'Ganda',
        'Tunggal',
    ],
    'c' => 1,
],

[
    'q' => 'Hewan yang berkembang biak dengan cara membelah diri adalah...',
    'a' => [
        'Amoeba',
        'Ayam',
        'Kucing',
        'Ikan',
    ],
    'c' => 0,
],

[
    'q' => 'Bagian bumi yang tertutup air disebut...',
    'a' => [
        'Litosfer',
        'Atmosfer',
        'Hidrosfer',
        'Biosfer',
    ],
    'c' => 2,
],

[
    'q' => 'Alat untuk melihat benda yang sangat kecil adalah...',
    'a' => [
        'Teropong',
        'Mikroskop',
        'Lup',
        'Periskop',
    ],
    'c' => 1,
],

[
    'q' => 'Bintang memancarkan cahaya karena...',
    'a' => [
        'Memantulkan cahaya Matahari',
        'Menghasilkan cahaya sendiri',
        'Terbuat dari es',
        'Terbuat dari batu',
    ],
    'c' => 1,
],

[
    'q' => 'Penyakit akibat kekurangan vitamin D adalah...',
    'a' => [
        'Skorbut',
        'Rabun senja',
        'Rakitis',
        'Anemia',
    ],
    'c' => 2,
],

[
    'q' => 'Contoh perubahan fisika adalah...',
    'a' => [
        'Kertas dibakar',
        'Besi berkarat',
        'Es mencair',
        'Kayu membusuk',
    ],
    'c' => 2,
],

[
    'q' => 'Planet Uranus dan Neptunus termasuk planet...',
    'a' => [
        'Batuan',
        'Gas raksasa',
        'Katai',
        'Dalam',
    ],
    'c' => 1,
],

[
    'q' => 'Bagian tumbuhan yang mengangkut hasil fotosintesis adalah...',
    'a' => [
        'Xilem',
        'Floem',
        'Epidermis',
        'Korteks',
    ],
    'c' => 1,
],

[
    'q' => 'Cahaya merambat...',
    'a' => [
        'Berbelok',
        'Lurus',
        'Melengkung',
        'Melingkar',
    ],
    'c' => 1,
],

[
    'q' => 'Hewan yang mengalami metamorfosis sempurna adalah...',
    'a' => [
        'Belalang',
        'Kupu-kupu',
        'Kecoa',
        'Capung',
    ],
    'c' => 1,
],

[
    'q' => 'Lapisan ozon berfungsi untuk...',
    'a' => [
        'Menahan sinar ultraviolet',
        'Menghasilkan hujan',
        'Membentuk angin',
        'Menghasilkan oksigen',
    ],
    'c' => 0,
],

[
    'q' => 'Contoh gaya sentuh adalah...',
    'a' => [
        'Gaya gravitasi',
        'Gaya magnet',
        'Gaya dorong',
        'Gaya listrik',
    ],
    'c' => 2,
],
[
    'q' => 'Alat pernapasan pada ikan adalah...',
    'a' => [
        'Paru-paru',
        'Insang',
        'Kulit',
        'Trakea',
    ],
    'c' => 1,
],

[
    'q' => 'Bagian tumbuhan yang berfungsi sebagai tempat fotosintesis adalah...',
    'a' => [
        'Akar',
        'Batang',
        'Daun',
        'Bunga',
    ],
    'c' => 2,
],

[
    'q' => 'Planet yang memiliki cincin paling jelas adalah...',
    'a' => [
        'Mars',
        'Jupiter',
        'Saturnus',
        'Venus',
    ],
    'c' => 2,
],

[
    'q' => 'Hewan yang dapat hidup di dua alam disebut...',
    'a' => [
        'Mamalia',
        'Amfibi',
        'Reptil',
        'Aves',
    ],
    'c' => 1,
],

[
    'q' => 'Satuan gaya adalah...',
    'a' => [
        'Joule',
        'Newton',
        'Watt',
        'Volt',
    ],
    'c' => 1,
],

[
    'q' => 'Perubahan uap air menjadi air disebut...',
    'a' => [
        'Menguap',
        'Mengembun',
        'Membeku',
        'Mencair',
    ],
    'c' => 1,
],

[
    'q' => 'Contoh hewan mamalia adalah...',
    'a' => [
        'Ayam',
        'Kucing',
        'Ikan',
        'Katak',
    ],
    'c' => 1,
],

[
    'q' => 'Bintang yang menjadi pusat tata surya adalah...',
    'a' => [
        'Bulan',
        'Matahari',
        'Mars',
        'Venus',
    ],
    'c' => 1,
],

[
    'q' => 'Organ tubuh yang berfungsi memompa darah adalah...',
    'a' => [
        'Paru-paru',
        'Jantung',
        'Ginjal',
        'Lambung',
    ],
    'c' => 1,
],

[
    'q' => 'Energi yang dimiliki benda karena bergerak disebut energi...',
    'a' => [
        'Panas',
        'Kinetik',
        'Listrik',
        'Kimia',
    ],
    'c' => 1,
],

[
    'q' => 'Tumbuhan menyerap air melalui...',
    'a' => [
        'Daun',
        'Batang',
        'Akar',
        'Bunga',
    ],
    'c' => 2,
],

[
    'q' => 'Planet yang kita tempati adalah...',
    'a' => [
        'Mars',
        'Venus',
        'Bumi',
        'Jupiter',
    ],
    'c' => 2,
],

[
    'q' => 'Alat ukur panjang adalah...',
    'a' => [
        'Termometer',
        'Mistar',
        'Neraca',
        'Stopwatch',
    ],
    'c' => 1,
],

[
    'q' => 'Hewan yang memakan daging disebut...',
    'a' => [
        'Herbivora',
        'Omnivora',
        'Karnivora',
        'Insektivora',
    ],
    'c' => 2,
],

[
    'q' => 'Bagian mata yang mengatur banyaknya cahaya masuk adalah...',
    'a' => [
        'Kornea',
        'Pupil',
        'Retina',
        'Lensa',
    ],
    'c' => 1,
],

[
    'q' => 'Perubahan wujud dari padat menjadi cair disebut...',
    'a' => [
        'Menguap',
        'Membeku',
        'Mencair',
        'Mengembun',
    ],
    'c' => 2,
],

[
    'q' => 'Energi listrik dapat diubah menjadi energi cahaya pada...',
    'a' => [
        'Kipas angin',
        'Lampu',
        'Setrika',
        'Blender',
    ],
    'c' => 1,
],

[
    'q' => 'Gas yang paling banyak terdapat di atmosfer adalah...',
    'a' => [
        'Oksigen',
        'Nitrogen',
        'Karbon Dioksida',
        'Hidrogen',
    ],
    'c' => 1,
],

[
    'q' => 'Planet yang disebut Bintang Kejora adalah...',
    'a' => [
        'Mars',
        'Venus',
        'Merkurius',
        'Saturnus',
    ],
    'c' => 1,
],

[
    'q' => 'Alat untuk mengukur massa adalah...',
    'a' => [
        'Neraca',
        'Mistar',
        'Termometer',
        'Amperemeter',
    ],
    'c' => 0,
],

[
    'q' => 'Benda yang tidak dapat menghantarkan listrik disebut...',
    'a' => [
        'Konduktor',
        'Isolator',
        'Semikonduktor',
        'Resistor',
    ],
    'c' => 1,
],

[
    'q' => 'Gerhana Matahari terjadi ketika...',
    'a' => [
        'Bumi di antara Matahari dan Bulan',
        'Bulan di antara Matahari dan Bumi',
        'Matahari di antara Bumi dan Bulan',
        'Semua jawaban salah',
    ],
    'c' => 1,
],

[
    'q' => 'Hewan yang berkembang biak dengan melahirkan disebut...',
    'a' => [
        'Ovipar',
        'Vivipar',
        'Ovovivipar',
        'Amfibi',
    ],
    'c' => 1,
],

[
    'q' => 'Tumbuhan hijau menghasilkan oksigen pada proses...',
    'a' => [
        'Respirasi',
        'Fotosintesis',
        'Fermentasi',
        'Transpirasi',
    ],
    'c' => 1,
],

[
    'q' => 'Lapisan bumi yang paling luar disebut...',
    'a' => [
        'Inti',
        'Mantel',
        'Kerak bumi',
        'Magma',
    ],
    'c' => 2,
],

[
    'q' => 'Sumber energi alternatif yang berasal dari angin adalah...',
    'a' => [
        'PLTU',
        'PLTA',
        'PLTB',
        'PLTS',
    ],
    'c' => 2,
],

[
    'q' => 'Contoh perubahan kimia adalah...',
    'a' => [
        'Es mencair',
        'Air menguap',
        'Kayu terbakar',
        'Air membeku',
    ],
    'c' => 2,
],

[
    'q' => 'Bagian telinga yang berfungsi menangkap getaran suara adalah...',
    'a' => [
        'Daun telinga',
        'Gendang telinga',
        'Rumah siput',
        'Saraf pendengaran',
    ],
    'c' => 0,
],

[
    'q' => 'Planet terjauh dari Matahari adalah...',
    'a' => [
        'Uranus',
        'Neptunus',
        'Saturnus',
        'Jupiter',
    ],
    'c' => 1,
],

[
    'q' => 'Fotosintesis memerlukan cahaya...',
    'a' => [
        'Lampu',
        'Matahari',
        'Bulan',
        'Bintang',
    ],
    'c' => 1,
],
[
    'q' => 'Organ pernapasan utama pada manusia adalah...',
    'a' => [
        'Jantung',
        'Paru-paru',
        'Hati',
        'Ginjal',
    ],
    'c' => 1,
],

[
    'q' => 'Planet yang dikenal sebagai Planet Merah adalah...',
    'a' => [
        'Venus',
        'Mars',
        'Jupiter',
        'Merkurius',
    ],
    'c' => 1,
],

[
    'q' => 'Rumus kimia air adalah...',
    'a' => [
        'CO₂',
        'H₂O',
        'NaCl',
        'O₂',
    ],
    'c' => 1,
],

[
    'q' => 'Hewan yang berkembang biak dengan bertelur disebut...',
    'a' => [
        'Vivipar',
        'Ovipar',
        'Ovovivipar',
        'Mamalia',
    ],
    'c' => 1,
],

[
    'q' => 'Sumber energi utama bagi bumi adalah...',
    'a' => [
        'Bulan',
        'Bintang',
        'Matahari',
        'Api',
    ],
    'c' => 2,
],

[
    'q' => 'Alat untuk mengukur suhu adalah...',
    'a' => [
        'Barometer',
        'Termometer',
        'Higrometer',
        'Mistar',
    ],
    'c' => 1,
],

[
    'q' => 'Tumbuhan membuat makanan melalui proses...',
    'a' => [
        'Respirasi',
        'Fotosintesis',
        'Fermentasi',
        'Evaporasi',
    ],
    'c' => 1,
],

[
    'q' => 'Gas yang diperlukan tumbuhan untuk fotosintesis adalah...',
    'a' => [
        'Oksigen',
        'Nitrogen',
        'Karbon Dioksida',
        'Hidrogen',
    ],
    'c' => 2,
],

[
    'q' => 'Bagian tumbuhan yang berfungsi menyerap air adalah...',
    'a' => [
        'Batang',
        'Daun',
        'Akar',
        'Bunga',
    ],
    'c' => 2,
],

[
    'q' => 'Planet terbesar dalam tata surya adalah...',
    'a' => [
        'Saturnus',
        'Jupiter',
        'Mars',
        'Neptunus',
    ],
    'c' => 1,
],

[
    'q' => 'Perubahan air menjadi uap disebut...',
    'a' => [
        'Membeku',
        'Mengembun',
        'Menguap',
        'Mencair',
    ],
    'c' => 2,
],

[
    'q' => 'Hewan pemakan tumbuhan disebut...',
    'a' => [
        'Karnivora',
        'Herbivora',
        'Omnivora',
        'Insektivora',
    ],
    'c' => 1,
],

[
    'q' => 'Indra untuk melihat adalah...',
    'a' => [
        'Telinga',
        'Hidung',
        'Mata',
        'Kulit',
    ],
    'c' => 2,
],

[
    'q' => 'Bagian darah yang berfungsi mengangkut oksigen adalah...',
    'a' => [
        'Plasma',
        'Sel darah merah',
        'Sel darah putih',
        'Trombosit',
    ],
    'c' => 1,
],

[
    'q' => 'Tulang yang melindungi otak adalah...',
    'a' => [
        'Tulang rusuk',
        'Tulang tengkorak',
        'Tulang belakang',
        'Tulang paha',
    ],
    'c' => 1,
],

[
    'q' => 'Gaya yang menyebabkan benda jatuh ke bumi adalah...',
    'a' => [
        'Gaya magnet',
        'Gaya gravitasi',
        'Gaya gesek',
        'Gaya otot',
    ],
    'c' => 1,
],

[
    'q' => 'Planet yang paling dekat dengan Matahari adalah...',
    'a' => [
        'Venus',
        'Merkurius',
        'Mars',
        'Bumi',
    ],
    'c' => 1,
],

[
    'q' => 'Benda yang dapat menghantarkan listrik disebut...',
    'a' => [
        'Isolator',
        'Konduktor',
        'Semikonduktor',
        'Resistor',
    ],
    'c' => 1,
],

[
    'q' => 'Jantung manusia memiliki ... ruang.',
    'a' => [
        '2',
        '3',
        '4',
        '5',
    ],
    'c' => 2,
],

[
    'q' => 'Lapisan atmosfer tempat terjadinya cuaca adalah...',
    'a' => [
        'Stratosfer',
        'Troposfer',
        'Mesosfer',
        'Termosfer',
    ],
    'c' => 1,
],
[
    'q' => 'Organ tubuh manusia yang berfungsi sebagai tempat pertukaran oksigen dan karbon dioksida adalah...',
    'a' => [
        'Jantung',
        'Paru-paru',
        'Hati',
        'Ginjal',
    ],
    'c' => 1,
],

[
    'q' => 'Contoh sumber daya alam yang tidak dapat diperbarui adalah...',
    'a' => [
        'Air',
        'Angin',
        'Minyak bumi',
        'Sinar matahari',
    ],
    'c' => 2,
],

[
    'q' => 'Bagian tumbuhan yang berfungsi menyerap air dan mineral dari tanah adalah...',
    'a' => [
        'Akar',
        'Batang',
        'Daun',
        'Buah',
    ],
    'c' => 0,
],

[
    'q' => 'Planet yang dikenal memiliki cincin paling jelas adalah...',
    'a' => [
        'Jupiter',
        'Saturnus',
        'Mars',
        'Neptunus',
    ],
    'c' => 1,
],

[
    'q' => 'Perubahan energi yang terjadi pada panel surya adalah...',
    'a' => [
        'Listrik menjadi panas',
        'Panas menjadi gerak',
        'Cahaya menjadi listrik',
        'Kimia menjadi listrik',
    ],
    'c' => 2,
],

[
    'q' => 'Bagian bunga yang berfungsi menarik perhatian serangga adalah...',
    'a' => [
        'Putik',
        'Mahkota bunga',
        'Benang sari',
        'Kelopak',
    ],
    'c' => 1,
],

[
    'q' => 'Planet yang memiliki ukuran terbesar di tata surya adalah...',
    'a' => [
        'Saturnus',
        'Jupiter',
        'Uranus',
        'Neptunus',
    ],
    'c' => 1,
],

[
    'q' => 'Alat untuk mengukur kelembapan udara adalah...',
    'a' => [
        'Barometer',
        'Termometer',
        'Higrometer',
        'Anemometer',
    ],
    'c' => 2,
],

[
    'q' => 'Contoh hewan herbivora adalah...',
    'a' => [
        'Harimau',
        'Singa',
        'Kambing',
        'Elang',
    ],
    'c' => 2,
],

[
    'q' => 'Gas yang paling banyak dihasilkan tumbuhan saat fotosintesis adalah...',
    'a' => [
        'Karbon dioksida',
        'Nitrogen',
        'Oksigen',
        'Hidrogen',
    ],
    'c' => 2,
],

    ];

    /**
     * ==============================
     * BANK SOAL MATEMATIKA (150 SOAL)
     * ==============================
     */
    protected static array $matematikaQuestions = [
 [
    'q' => 'Hasil dari 36² adalah...',
    'a' => [
        '1296',
        '1269',
        '1369',
        '1396',
    ],
    'c' => 0,
],

[
    'q' => 'Hasil dari 960 ÷ 12 adalah...',
    'a' => [
        '70',
        '75',
        '80',
        '85',
    ],
    'c' => 2,
],

[
    'q' => 'Nilai dari 19 × 12 adalah...',
    'a' => [
        '218',
        '228',
        '238',
        '248',
    ],
    'c' => 1,
],

[
    'q' => 'FPB dari 54 dan 72 adalah...',
    'a' => [
        '12',
        '18',
        '24',
        '36',
    ],
    'c' => 1,
],

[
    'q' => 'KPK dari 15 dan 20 adalah...',
    'a' => [
        '45',
        '50',
        '60',
        '75',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 3/10 + 5/10 adalah...',
    'a' => [
        '7/10',
        '8/10',
        '9/10',
        '1',
    ],
    'c' => 1,
],

[
    'q' => '20% dari 450 adalah...',
    'a' => [
        '80',
        '85',
        '90',
        '95',
    ],
    'c' => 2,
],

[
    'q' => 'Luas persegi dengan sisi 24 cm adalah...',
    'a' => [
        '576 cm²',
        '556 cm²',
        '596 cm²',
        '566 cm²',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling persegi dengan sisi 32 cm adalah...',
    'a' => [
        '124 cm',
        '126 cm',
        '128 cm',
        '130 cm',
    ],
    'c' => 2,
],

[
    'q' => 'Luas persegi panjang dengan panjang 40 cm dan lebar 15 cm adalah...',
    'a' => [
        '550 cm²',
        '575 cm²',
        '600 cm²',
        '625 cm²',
    ],
    'c' => 2,
],

[
    'q' => 'Keliling persegi panjang dengan panjang 36 cm dan lebar 14 cm adalah...',
    'a' => [
        '100 cm',
        '96 cm',
        '92 cm',
        '104 cm',
    ],
    'c' => 0,
],

[
    'q' => 'Nilai dari 9³ adalah...',
    'a' => [
        '729',
        '819',
        '629',
        '919',
    ],
    'c' => 0,
],

[
    'q' => 'Bentuk desimal dari 3/8 adalah...',
    'a' => [
        '0,325',
        '0,375',
        '0,425',
        '0,475',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 990 ÷ 11 adalah...',
    'a' => [
        '80',
        '85',
        '90',
        '95',
    ],
    'c' => 2,
],

[
    'q' => 'Nilai x jika x + 48 = 120 adalah...',
    'a' => [
        '70',
        '71',
        '72',
        '73',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 1200 - 675 adalah...',
    'a' => [
        '505',
        '515',
        '525',
        '535',
    ],
    'c' => 2,
],

[
    'q' => 'Akar kuadrat dari 441 adalah...',
    'a' => [
        '19',
        '20',
        '21',
        '22',
    ],
    'c' => 2,
],

[
    'q' => 'Jumlah sudut dalam segi lima adalah...',
    'a' => [
        '360°',
        '540°',
        '720°',
        '900°',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 28 × 25 adalah...',
    'a' => [
        '650',
        '675',
        '700',
        '725',
    ],
    'c' => 2,
],

[
    'q' => 'Nilai dari 6⁴ adalah...',
    'a' => [
        '1296',
        '1396',
        '1496',
        '1596',
    ],
    'c' => 0,
],

[
    'q' => 'Luas segitiga dengan alas 24 cm dan tinggi 18 cm adalah...',
    'a' => [
        '196 cm²',
        '206 cm²',
        '216 cm²',
        '226 cm²',
    ],
    'c' => 2,
],

[
    'q' => 'Keliling segitiga sama sisi dengan panjang sisi 20 cm adalah...',
    'a' => [
        '40 cm',
        '50 cm',
        '60 cm',
        '80 cm',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 4/9 + 3/9 adalah...',
    'a' => [
        '6/9',
        '7/9',
        '8/9',
        '1',
    ],
    'c' => 1,
],

[
    'q' => 'Bentuk persen dari 0,95 adalah...',
    'a' => [
        '90%',
        '92%',
        '95%',
        '98%',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 56 × 15 adalah...',
    'a' => [
        '820',
        '830',
        '840',
        '850',
    ],
    'c' => 2,
],

[
    'q' => 'Volume kubus dengan sisi 12 cm adalah...',
    'a' => [
        '1728 cm³',
        '1628 cm³',
        '1828 cm³',
        '1928 cm³',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling lingkaran dengan jari-jari 35 cm (π = 22/7) adalah...',
    'a' => [
        '210 cm',
        '220 cm',
        '230 cm',
        '240 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 1250 + 875 adalah...',
    'a' => [
        '2025',
        '2075',
        '2125',
        '2175',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 26 × 26 adalah...',
    'a' => [
        '656',
        '666',
        '676',
        '686',
    ],
    'c' => 2,
],

[
    'q' => 'Seorang pedagang membeli 12 buku dengan harga Rp18.000 per buku. Total uang yang harus dibayar adalah...',
    'a' => [
        'Rp196.000',
        'Rp206.000',
        'Rp216.000',
        'Rp226.000',
    ],
    'c' => 2,
],
[
    'q' => 'Hasil dari 625 ÷ 25 adalah...',
    'a' => [
        '20',
        '25',
        '30',
        '35',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai dari 17² adalah...',
    'a' => [
        '279',
        '289',
        '299',
        '309',
    ],
    'c' => 1,
],

[
    'q' => 'FPB dari 45 dan 60 adalah...',
    'a' => [
        '5',
        '10',
        '15',
        '20',
    ],
    'c' => 2,
],

[
    'q' => 'KPK dari 8 dan 14 adalah...',
    'a' => [
        '56',
        '48',
        '64',
        '72',
    ],
    'c' => 0,
],

[
    'q' => 'Hasil dari 5/8 + 2/8 adalah...',
    'a' => [
        '6/8',
        '7/8',
        '1',
        '3/4',
    ],
    'c' => 1,
],

[
    'q' => '40% dari 250 adalah...',
    'a' => [
        '90',
        '95',
        '100',
        '105',
    ],
    'c' => 2,
],

[
    'q' => 'Luas persegi dengan sisi 22 cm adalah...',
    'a' => [
        '484 cm²',
        '444 cm²',
        '504 cm²',
        '464 cm²',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling persegi dengan sisi 30 cm adalah...',
    'a' => [
        '90 cm',
        '120 cm',
        '100 cm',
        '110 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Luas persegi panjang dengan panjang 35 cm dan lebar 8 cm adalah...',
    'a' => [
        '260 cm²',
        '270 cm²',
        '280 cm²',
        '290 cm²',
    ],
    'c' => 2,
],

[
    'q' => 'Keliling persegi panjang dengan panjang 28 cm dan lebar 12 cm adalah...',
    'a' => [
        '70 cm',
        '80 cm',
        '90 cm',
        '100 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai dari 8³ adalah...',
    'a' => [
        '512',
        '612',
        '412',
        '712',
    ],
    'c' => 0,
],

[
    'q' => 'Bentuk desimal dari 7/20 adalah...',
    'a' => [
        '0,30',
        '0,35',
        '0,40',
        '0,45',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 810 ÷ 9 adalah...',
    'a' => [
        '80',
        '90',
        '100',
        '110',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai x jika x - 28 = 47 adalah...',
    'a' => [
        '75',
        '74',
        '73',
        '72',
    ],
    'c' => 0,
],

[
    'q' => 'Hasil dari 950 - 475 adalah...',
    'a' => [
        '455',
        '465',
        '475',
        '485',
    ],
    'c' => 2,
],

[
    'q' => 'Akar kuadrat dari 400 adalah...',
    'a' => [
        '18',
        '19',
        '20',
        '21',
    ],
    'c' => 2,
],

[
    'q' => 'Jumlah sudut pada segi empat adalah...',
    'a' => [
        '180°',
        '270°',
        '360°',
        '540°',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 32 × 18 adalah...',
    'a' => [
        '566',
        '576',
        '586',
        '596',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai dari 5⁴ adalah...',
    'a' => [
        '525',
        '625',
        '725',
        '825',
    ],
    'c' => 1,
],

[
    'q' => 'Luas segitiga dengan alas 20 cm dan tinggi 15 cm adalah...',
    'a' => [
        '150 cm²',
        '200 cm²',
        '250 cm²',
        '300 cm²',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling segitiga sama sisi dengan panjang sisi 18 cm adalah...',
    'a' => [
        '48 cm',
        '54 cm',
        '60 cm',
        '72 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 7/9 + 2/9 adalah...',
    'a' => [
        '1',
        '8/9',
        '9/18',
        '10/9',
    ],
    'c' => 0,
],

[
    'q' => 'Bentuk persen dari 0,65 adalah...',
    'a' => [
        '60%',
        '65%',
        '70%',
        '75%',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 45 × 16 adalah...',
    'a' => [
        '700',
        '710',
        '720',
        '730',
    ],
    'c' => 2,
],

[
    'q' => 'Volume kubus dengan sisi 10 cm adalah...',
    'a' => [
        '900 cm³',
        '1000 cm³',
        '1100 cm³',
        '1200 cm³',
    ],
    'c' => 1,
],

[
    'q' => 'Keliling lingkaran dengan jari-jari 28 cm (π = 22/7) adalah...',
    'a' => [
        '156 cm',
        '166 cm',
        '176 cm',
        '186 cm',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 975 + 325 adalah...',
    'a' => [
        '1200',
        '1250',
        '1300',
        '1350',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 24 × 24 adalah...',
    'a' => [
        '556',
        '566',
        '576',
        '586',
    ],
    'c' => 2,
],

[
    'q' => 'Nilai dari 1800 - 925 adalah...',
    'a' => [
        '865',
        '875',
        '885',
        '895',
    ],
    'c' => 1,
],

[
    'q' => 'Jika harga sebuah buku Rp15.000 dan membeli 6 buku, maka total harga yang harus dibayar adalah...',
    'a' => [
        'Rp80.000',
        'Rp85.000',
        'Rp90.000',
        'Rp95.000',
    ],
    'c' => 2,
],
[
    'q' => 'Hasil dari 48² adalah...',
    'a' => [
        '2204',
        '2304',
        '2404',
        '2504',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 560 ÷ 8 adalah...',
    'a' => [
        '70',
        '75',
        '80',
        '65',
    ],
    'c' => 0,
],

[
    'q' => 'Nilai dari 13 × 17 adalah...',
    'a' => [
        '211',
        '221',
        '231',
        '241',
    ],
    'c' => 1,
],

[
    'q' => 'FPB dari 36 dan 48 adalah...',
    'a' => [
        '6',
        '8',
        '12',
        '24',
    ],
    'c' => 2,
],

[
    'q' => 'KPK dari 10 dan 15 adalah...',
    'a' => [
        '20',
        '25',
        '30',
        '35',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 4/7 + 2/7 adalah...',
    'a' => [
        '5/7',
        '6/7',
        '7/7',
        '8/7',
    ],
    'c' => 1,
],

[
    'q' => '30% dari 500 adalah...',
    'a' => [
        '120',
        '130',
        '140',
        '150',
    ],
    'c' => 3,
],

[
    'q' => 'Luas persegi dengan sisi 20 cm adalah...',
    'a' => [
        '400 cm²',
        '380 cm²',
        '420 cm²',
        '360 cm²',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling persegi dengan sisi 25 cm adalah...',
    'a' => [
        '90 cm',
        '95 cm',
        '100 cm',
        '105 cm',
    ],
    'c' => 2,
],

[
    'q' => 'Luas persegi panjang dengan panjang 30 cm dan lebar 12 cm adalah...',
    'a' => [
        '320 cm²',
        '340 cm²',
        '350 cm²',
        '360 cm²',
    ],
    'c' => 3,
],

[
    'q' => 'Keliling persegi panjang dengan panjang 24 cm dan lebar 16 cm adalah...',
    'a' => [
        '80 cm',
        '70 cm',
        '60 cm',
        '90 cm',
    ],
    'c' => 0,
],

[
    'q' => 'Nilai dari 6³ adalah...',
    'a' => [
        '196',
        '216',
        '236',
        '256',
    ],
    'c' => 1,
],

[
    'q' => 'Bentuk desimal dari 9/20 adalah...',
    'a' => [
        '0,35',
        '0,40',
        '0,45',
        '0,50',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 630 ÷ 9 adalah...',
    'a' => [
        '60',
        '70',
        '80',
        '90',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai x jika x + 36 = 85 adalah...',
    'a' => [
        '49',
        '50',
        '51',
        '52',
    ],
    'c' => 0,
],

[
    'q' => 'Hasil dari 820 - 365 adalah...',
    'a' => [
        '445',
        '450',
        '455',
        '460',
    ],
    'c' => 2,
],

[
    'q' => 'Akar kuadrat dari 324 adalah...',
    'a' => [
        '16',
        '17',
        '18',
        '19',
    ],
    'c' => 2,
],

[
    'q' => 'Jumlah sudut dalam segitiga adalah...',
    'a' => [
        '90°',
        '180°',
        '270°',
        '360°',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 27 × 15 adalah...',
    'a' => [
        '395',
        '405',
        '415',
        '425',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai dari 4⁴ adalah...',
    'a' => [
        '128',
        '196',
        '256',
        '512',
    ],
    'c' => 2,
],

[
    'q' => 'Luas segitiga dengan alas 18 cm dan tinggi 14 cm adalah...',
    'a' => [
        '126 cm²',
        '136 cm²',
        '146 cm²',
        '156 cm²',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling segitiga sama sisi dengan panjang sisi 16 cm adalah...',
    'a' => [
        '32 cm',
        '48 cm',
        '64 cm',
        '56 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 5/6 + 1/6 adalah...',
    'a' => [
        '1',
        '5/12',
        '6/12',
        '7/6',
    ],
    'c' => 0,
],

[
    'q' => 'Bentuk persen dari 0,85 adalah...',
    'a' => [
        '75%',
        '80%',
        '85%',
        '90%',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 36 × 14 adalah...',
    'a' => [
        '494',
        '504',
        '514',
        '524',
    ],
    'c' => 1,
],

[
    'q' => 'Volume kubus dengan sisi 9 cm adalah...',
    'a' => [
        '729 cm³',
        '7290 cm³',
        '810 cm³',
        '900 cm³',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling lingkaran dengan jari-jari 21 cm (π = 22/7) adalah...',
    'a' => [
        '122 cm',
        '132 cm',
        '142 cm',
        '152 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 845 + 275 adalah...',
    'a' => [
        '1110',
        '1120',
        '1130',
        '1140',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 21 × 21 adalah...',
    'a' => [
        '421',
        '431',
        '441',
        '451',
    ],
    'c' => 2,
],

[
    'q' => 'Nilai dari 1500 - 675 adalah...',
    'a' => [
        '815',
        '825',
        '835',
        '845',
    ],
    'c' => 1,
],
[
    'q' => 'Hasil dari 48 × 5 adalah...',
    'a' => [
        '220',
        '240',
        '250',
        '260',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 720 ÷ 9 adalah...',
    'a' => [
        '80',
        '90',
        '70',
        '75',
    ],
    'c' => 0,
],

[
    'q' => 'Nilai dari 14² adalah...',
    'a' => [
        '186',
        '196',
        '206',
        '216',
    ],
    'c' => 1,
],

[
    'q' => 'FPB dari 18 dan 24 adalah...',
    'a' => [
        '4',
        '8',
        '6',
        '12',
    ],
    'c' => 2,
],

[
    'q' => 'KPK dari 9 dan 12 adalah...',
    'a' => [
        '24',
        '36',
        '18',
        '48',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 2/5 + 1/5 adalah...',
    'a' => [
        '3/5',
        '2/10',
        '1/5',
        '4/5',
    ],
    'c' => 0,
],

[
    'q' => 'Nilai dari 25% × 80 adalah...',
    'a' => [
        '10',
        '15',
        '20',
        '25',
    ],
    'c' => 2,
],

[
    'q' => 'Luas persegi dengan sisi 15 cm adalah...',
    'a' => [
        '200 cm²',
        '225 cm²',
        '250 cm²',
        '180 cm²',
    ],
    'c' => 1,
],

[
    'q' => 'Keliling persegi dengan sisi 18 cm adalah...',
    'a' => [
        '72 cm',
        '64 cm',
        '68 cm',
        '70 cm',
    ],
    'c' => 0,
],

[
    'q' => 'Luas persegi panjang dengan panjang 20 cm dan lebar 6 cm adalah...',
    'a' => [
        '100 cm²',
        '110 cm²',
        '120 cm²',
        '130 cm²',
    ],
    'c' => 2,
],

[
    'q' => 'Keliling persegi panjang dengan panjang 18 cm dan lebar 9 cm adalah...',
    'a' => [
        '54 cm',
        '56 cm',
        '58 cm',
        '60 cm',
    ],
    'c' => 0,
],

[
    'q' => 'Nilai dari 5³ adalah...',
    'a' => [
        '100',
        '125',
        '150',
        '175',
    ],
    'c' => 1,
],

[
    'q' => 'Bentuk desimal dari 7/10 adalah...',
    'a' => [
        '0,7',
        '0,5',
        '0,8',
        '0,9',
    ],
    'c' => 0,
],

[
    'q' => 'Hasil dari 360 ÷ 12 adalah...',
    'a' => [
        '25',
        '28',
        '30',
        '32',
    ],
    'c' => 2,
],

[
    'q' => 'Nilai x jika x - 15 = 40 adalah...',
    'a' => [
        '50',
        '55',
        '60',
        '45',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 275 - 148 adalah...',
    'a' => [
        '127',
        '117',
        '137',
        '147',
    ],
    'c' => 0,
],

[
    'q' => 'Akar kuadrat dari 225 adalah...',
    'a' => [
        '12',
        '13',
        '14',
        '15',
    ],
    'c' => 3,
],

[
    'q' => 'Sudut lurus besarnya adalah...',
    'a' => [
        '90°',
        '180°',
        '270°',
        '360°',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 14 × 16 adalah...',
    'a' => [
        '224',
        '214',
        '234',
        '244',
    ],
    'c' => 0,
],

[
    'q' => 'Nilai dari 3⁴ adalah...',
    'a' => [
        '27',
        '64',
        '81',
        '72',
    ],
    'c' => 2,
],

[
    'q' => 'Luas segitiga dengan alas 16 cm dan tinggi 10 cm adalah...',
    'a' => [
        '80 cm²',
        '160 cm²',
        '90 cm²',
        '70 cm²',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling segitiga sama sisi dengan panjang sisi 14 cm adalah...',
    'a' => [
        '28 cm',
        '42 cm',
        '56 cm',
        '48 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 3/8 + 1/8 adalah...',
    'a' => [
        '1/2',
        '4/8',
        '5/8',
        '3/4',
    ],
    'c' => 0,
],

[
    'q' => 'Bentuk persen dari 0,4 adalah...',
    'a' => [
        '20%',
        '30%',
        '40%',
        '50%',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 24 × 12 adalah...',
    'a' => [
        '268',
        '288',
        '298',
        '308',
    ],
    'c' => 1,
],

[
    'q' => 'Volume kubus dengan sisi 8 cm adalah...',
    'a' => [
        '512 cm³',
        '256 cm³',
        '484 cm³',
        '576 cm³',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling lingkaran dengan jari-jari 14 cm (π = 22/7) adalah...',
    'a' => [
        '66 cm',
        '88 cm',
        '77 cm',
        '99 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 625 + 275 adalah...',
    'a' => [
        '850',
        '875',
        '900',
        '925',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 18 × 18 adalah...',
    'a' => [
        '324',
        '342',
        '318',
        '336',
    ],
    'c' => 0,
],

[
    'q' => 'Nilai dari 1000 - 475 adalah...',
    'a' => [
        '515',
        '525',
        '535',
        '545',
    ],
    'c' => 1,
],


[
    'q' => 'Hasil dari 25 + 17 adalah...',
    'a' => [
        '42',
        '40',
        '43',
        '41',
    ],
    'c' => 0,
],

[
    'q' => 'Hasil dari 96 - 38 adalah...',
    'a' => [
        '56',
        '57',
        '58',
        '59',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 12 × 8 adalah...',
    'a' => [
        '84',
        '96',
        '92',
        '88',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 144 ÷ 12 adalah...',
    'a' => [
        '10',
        '11',
        '13',
        '12',
    ],
    'c' => 3,
],

[
    'q' => 'Nilai dari 9² adalah...',
    'a' => [
        '81',
        '72',
        '90',
        '99',
    ],
    'c' => 0,
],

[
    'q' => 'FPB dari 24 dan 36 adalah...',
    'a' => [
        '6',
        '12',
        '18',
        '24',
    ],
    'c' => 1,
],

[
    'q' => 'KPK dari 6 dan 8 adalah...',
    'a' => [
        '24',
        '18',
        '12',
        '48',
    ],
    'c' => 0,
],

[
    'q' => 'Hasil dari 3/4 + 1/4 adalah...',
    'a' => [
        '3/8',
        '1',
        '1/2',
        '2',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai dari 15% × 200 adalah...',
    'a' => [
        '20',
        '25',
        '30',
        '35',
    ],
    'c' => 2,
],

[
    'q' => 'Luas persegi dengan sisi 9 cm adalah...',
    'a' => [
        '72 cm²',
        '18 cm²',
        '81 cm²',
        '90 cm²',
    ],
    'c' => 2,
],

[
    'q' => 'Keliling persegi dengan sisi 12 cm adalah...',
    'a' => [
        '48 cm',
        '36 cm',
        '24 cm',
        '60 cm',
    ],
    'c' => 0,
],

[
    'q' => 'Luas persegi panjang dengan panjang 15 cm dan lebar 8 cm adalah...',
    'a' => [
        '100 cm²',
        '120 cm²',
        '130 cm²',
        '140 cm²',
    ],
    'c' => 1,
],

[
    'q' => 'Keliling persegi panjang dengan panjang 20 cm dan lebar 5 cm adalah...',
    'a' => [
        '40 cm',
        '45 cm',
        '50 cm',
        '55 cm',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 7³ adalah...',
    'a' => [
        '343',
        '240',
        '321',
        '294',
    ],
    'c' => 0,
],

[
    'q' => 'Bentuk desimal dari 3/5 adalah...',
    'a' => [
        '0,3',
        '0,5',
        '0,6',
        '0,8',
    ],
    'c' => 2,
],

[
    'q' => 'Hasil dari 250 : 5 adalah...',
    'a' => [
        '45',
        '50',
        '55',
        '60',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai x jika x + 18 = 45 adalah...',
    'a' => [
        '25',
        '27',
        '28',
        '30',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 125 - 67 adalah...',
    'a' => [
        '57',
        '59',
        '58',
        '60',
    ],
    'c' => 2,
],

[
    'q' => 'Akar kuadrat dari 169 adalah...',
    'a' => [
        '11',
        '12',
        '13',
        '14',
    ],
    'c' => 2,
],

[
    'q' => 'Sudut siku-siku besarnya adalah...',
    'a' => [
        '45°',
        '90°',
        '180°',
        '360°',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 18 × 15 adalah...',
    'a' => [
        '260',
        '270',
        '280',
        '290',
    ],
    'c' => 1,
],

[
    'q' => 'Nilai 2⁵ adalah...',
    'a' => [
        '16',
        '32',
        '64',
        '25',
    ],
    'c' => 1,
],

[
    'q' => 'Luas segitiga dengan alas 10 cm dan tinggi 8 cm adalah...',
    'a' => [
        '40 cm²',
        '80 cm²',
        '18 cm²',
        '20 cm²',
    ],
    'c' => 0,
],

[
    'q' => 'Keliling segitiga sama sisi dengan panjang sisi 9 cm adalah...',
    'a' => [
        '18 cm',
        '27 cm',
        '36 cm',
        '45 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 1/2 + 1/3 adalah...',
    'a' => [
        '2/5',
        '3/5',
        '5/6',
        '4/6',
    ],
    'c' => 2,
],

[
    'q' => 'Bentuk persen dari 0,75 adalah...',
    'a' => [
        '70%',
        '75%',
        '80%',
        '85%',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 16 × 16 adalah...',
    'a' => [
        '246',
        '256',
        '266',
        '276',
    ],
    'c' => 1,
],

[
    'q' => 'Volume kubus dengan sisi 5 cm adalah...',
    'a' => [
        '100 cm³',
        '120 cm³',
        '125 cm³',
        '150 cm³',
    ],
    'c' => 2,
],

[
    'q' => 'Keliling lingkaran dengan jari-jari 7 cm (π = 22/7) adalah...',
    'a' => [
        '22 cm',
        '44 cm',
        '49 cm',
        '56 cm',
    ],
    'c' => 1,
],

[
    'q' => 'Hasil dari 300 + 425 adalah...',
    'a' => [
        '715',
        '720',
        '725',
        '730',
    ],
    'c' => 2,
],


];


    public function definition(): array
    {
        return [
            'subject_id' => Subject::factory(),
            'payload' => '',
            'description' => '',
            'score' => 1,
            'is_active' => true,
        ];
    }

    public function withAnswers(): static
    {
        return $this->afterCreating(function (Question $question) {

            $questionData = $this->getQuestionForSubject($question);

            if (!$questionData) {
                return;
            }

            $description = fake()->randomElement(
                self::$DESCRIPTIONS[$question->subject->name]
            );

            $question->update([
                'payload' => $questionData['q'],
                'description' => $description,
            ]);

            foreach ($questionData['a'] as $index => $answer) {
                $question->answers()->create([
                    'text' => $answer,
                    'is_correct' => $index === $questionData['c'],
                    'is_active' => true,
                ]);
            }
        });
    }

    protected function getQuestionForSubject(Question $question): ?array
    {
        switch ($question->subject->name) {

            case 'IPS':

                if (self::$ipsIndex >= count(self::$ipsQuestions)) {
                    self::$ipsIndex = 0;
                }

                return self::$ipsQuestions[self::$ipsIndex++];

            case 'IPA':

                if (self::$ipaIndex >= count(self::$ipaQuestions)) {
                    self::$ipaIndex = 0;
                }

                return self::$ipaQuestions[self::$ipaIndex++];

            case 'Matematika':

                if (self::$matematikaIndex >= count(self::$matematikaQuestions)) {
                    self::$matematikaIndex = 0;
                }

                return self::$matematikaQuestions[self::$matematikaIndex++];

            default:
                return null;
        }
    }

    public function forSubject(Subject $subject): static
    {
        return $this->state(fn () => [
            'subject_id' => $subject->id,
        ]);
    }
}