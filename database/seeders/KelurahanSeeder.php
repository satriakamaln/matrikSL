<?php

namespace Database\Seeders;

use App\Models\Kelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelurahan = [
            ['kelurahan' => 'AMBAKIANG', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'AWAYAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'AWAYAN HILIR', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BADALUNGGA', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BADALUNGGA HILIR', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BARAMBAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BARU', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BIHARA', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BIHARA HILIR', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'KEDONDONG', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'MERAH', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'MUARA JAYA', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'NUNGKA', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'PIYAIT', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'PUDAK', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'PULANTAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'PUTAT BASIUN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'SEI PUMPUNG', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'SIKONTAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'TANGALIN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'TUNDAKAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'TUNDI', 'kecamatan' => 'AWAYAN'],

            ['kelurahan' => 'BAKUNG', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'BANUA HANYAR', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'BATUMANDI', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'BUNGUR', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'GUHA', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'GUNUNG MANAU', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'HAMPA RAYA', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'KARUH', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'KASAI', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'LOK BATU', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'MAMPARI', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'MANTIMIN', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'MUNJUNG', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'PELAJAU', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'RIWA', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'TARIWIN', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'TELUK MESJID', 'kecamatan' => 'BATU MANDI'],
            ['kelurahan' => 'TIMBUN TULANG', 'kecamatan' => 'BATU MANDI'],

            ['kelurahan' => 'ANIUNGAN', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'BANGKAL', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'BARUH PANYAMBARAN', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'BINJAI PUNGGAL', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'BINJU', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'BINUANG SANTANG', 'kecamatan' => 'HALONG'],
            ['kelurahan' => ' BUNTU PILANDUK', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'GUNUNG RIUT', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'HALONG', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'HAUWAI', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'KAPU', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'KARYA', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'LIYU', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'MAMANTANG', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'MAMIGANG', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'MANTUYAN', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'MARAJAI', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'MAUYA', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'PADANG RAYA', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'PUYUN', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'SUMBER AGUNG', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'SURYATAMA', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'TABUAN', 'kecamatan' => 'HALONG'],
            ['kelurahan' => 'UREN', 'kecamatan' => 'HALONG'],

            ['kelurahan' => ' BATA', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'BUNTU KARAU', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'GALUMBANG', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'GULINGGANG', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'HAMARUNG', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'HUKAI', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'JUAI', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'LALAYAU', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'MARIAS', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'MIHU', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'MUARA NINIAN', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'MUNGKUR UYAM', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'PAMURUS', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'PANIMBAAN', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'SIRAP', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'SUMBER REJEKI', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'SUNGAI BATUNG', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'TAWAHAN', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'TELUK BAYUR', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'TIGARUN', 'kecamatan' => 'JUAI'],
            ['kelurahan' => 'WONOREJO', 'kecamatan' => 'JUAI'],

            ['kelurahan' => 'BATU MERAH', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'HILIR PASAR', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'JIMAMUN', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'JUNGKAL', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'KANDANG JAYA', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'KUPANG', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'KUSAMBI HILIR', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'KUSAMBI HULU', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'LAJAR', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'LAMPIHONG KANAN', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'LAMPIHONG KIRI', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'LAMPIHONG SELATAN', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'LOK HAMAWANG', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'LOK PANGINANGAN', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'MATANG HANAU', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'MATANG LURUS', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'MUNDAR', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'PANAITAN', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'PIMPING', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'PUPUYUAN', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'SIMPANG TIGA', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'SUNGAI AWANG', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'SUNGAI TABUK', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'TAMPANG', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'TANAH HABANG KANAN', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'TANAH HABANG KIRI', 'kecamatan' => 'LAMPIHONG'],
            ['kelurahan' => 'TELUK KARYA', 'kecamatan' => 'LAMPIHONG'],

            ['kelurahan' => 'BABAYAU', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'BALANG', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'BALIDA', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'DAHAI', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'HUJAN MAS', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'KALAHIANG', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'LAMIDA BAWAH', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'LASUNG BATU', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'LAYAP', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'LOK BATUNG', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'MANGKAYAHU', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'MURUNG ILUNG', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'PARAN', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'PARINGIN KOTA', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'PARINGIN TIMUR', 'kecamatan' => 'PARINGIN'],
            ['kelurahan' => 'SUNGAI KETAPI', 'kecamatan' => 'PARINGIN'],

            ['kelurahan' => 'BARUH BAHINU DALAM', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'BARUH BAHINU LUAR', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'BATU PIRING', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'BINJAI', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'BUNGIN', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'GALUMBANG', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'HALUBAU', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'HALUBAU UTARA', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'INAN', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'LINGSIR', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'MARADAP', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'MURUNG ABUIN', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'MURUNG JAMBU', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'PANGGUNG', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'TARANGAN', 'kecamatan' => 'PARINGIN SELATAN'],
            ['kelurahan' => 'TELAGA PURUN', 'kecamatan' => 'PARINGIN SELATAN'],

            ['kelurahan' => 'AJUNG', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'AUH', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'DAYAK PITAP', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'GUNUNG BATU', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => "JU'UH", 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'KAMBIYAIN', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'LANGKAP', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'MAYANAU', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'SIMPANG BUMBUAN', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'SIMPANG NADONG', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'SUNGSUM', 'kecamatan' => 'TEBING TINGGI'],
            ['kelurahan' => 'TEBING TINGGI', 'kecamatan' => 'TEBING TINGGI'],

            ['kelurahan' => 'ALUH ALUH BESAR', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'ALUH ALUH KECIL', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'ALUH ALUH KECIL MUARA', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'BAKAMBAT', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'BALIMAU', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'BUNIPAH', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'HANDIL BARU', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'HANDIL BUJUR', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'KUIN BESAR', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'KUIN KECIL', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'LABAT MUARA', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'PEMURUS', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'PODOK', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'PULANTAN', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'SIMPANG WARGA', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'SIMPANG WARGA DALAM', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'SUNGAI MUSANG', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'TANIPAH', 'kecamatan' => 'ALUH ALUH'],
            ['kelurahan' => 'TERAPU', 'kecamatan' => 'ALUH ALUH'],

            ['kelurahan' => 'APUAI', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'ARANIO', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'ARTAIN', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'BELANGIAN', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'BENUA RIAM', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'BUNGLAI', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'KALAAN', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => "PA'AU", 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'RANTAU BALAI', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'RANTAU BUJUR', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'TIWINGAN BARU', 'kecamatan' => 'ARANIO'],
            ['kelurahan' => 'TIWINGAN LAMA', 'kecamatan' => 'ARANIO'],

            ['kelurahan' => 'ASTAMBUL KOTA', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'ASTAMBUL SEBERANG', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'BANUA ANYAR DANAU SALAK', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'BANUA ANYAR SUNGAI TUAN', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'DANAU SALAK', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'JATI BARU', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'KALIUKAN', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'KELAMPAIAN ILIR', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'KELAMPAIAN TENGAH', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'KELAMPAIAN ULU', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'LIMAMAR', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'LOK GABANG', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'MUNGGU RAYA', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'PASAR JATI', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'PEMATANG HAMBAWANG', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'PINGARAN ILIR', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'PINGARAN ULU', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'SUNGAI ALAT', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'SUNGAI TUAN ILIR', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'SUNGAI TUAN ULU', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'TAMBAK DANAU', 'kecamatan' => 'ASTAMBUL'],
            ['kelurahan' => 'TAMBANGAN', 'kecamatan' => 'ASTAMBUL'],

            ['kelurahan' => 'BABIRIK', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'HANDIL PURAI', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'HAUR KUNING', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'JAMBU BURUNG', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'JAMBU RAYA', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'KAMPUNG BARU', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'LAWAHAN', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'MUARA HALAYUNG', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'PINDAHAN BARU', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'RUMPIANG', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'SALAT MAKMUR', 'kecamatan' => 'BERUNTUNG BARU'],
            ['kelurahan' => 'TAMBAK PADI', 'kecamatan' => 'BERUNTUNG BARU'],

            ['kelurahan' => 'ALALAK PADANG', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'BENUA ANYAR', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'CINTAPURI', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'GARIS HANYAR', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'KARYA MAKMUR', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'KERAMAT MINA', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'MAKMUR KARYA', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'SIMPANG LIMA', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'SINDANG JAYA', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'SUMBER SARI', 'kecamatan' => 'CINTAPURI DARUSSALAM'],
            ['kelurahan' => 'SURIAN HANYAR', 'kecamatan' => 'CINTAPURI DARUSSALAM'],

            ['kelurahan' => 'BANYU HIRANG', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'GAMBUT', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'GAMBUT BARAT', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'GUNTUNG PAPUYU', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'GUNTUNG UJUNG', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'KAYU BAWANG', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'KELADAN BARU', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'MAKMUR', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'MALINTANG', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'MALINTANG BARU', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'SUNGAI KUPANG', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'TAMBAK SIRANG DARAT', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'TAMBAK SIRANG BARU', 'kecamatan' => 'GAMBUT'],
            ['kelurahan' => 'TAMBAK SIRANG LAUT', 'kecamatan' => 'GAMBUT'],

            ['kelurahan' => 'ABIRAU', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'AWANG BANGKAL BARAT', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'AWANG BANGKAL TIMUR', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'JINGAH HABANG ILIR', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'JINGAH HABANG ULU', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'KARANG INTAN', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'KIRAM', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'LIHUNG', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'LOK TANGGA', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'MALI MALI', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'MANDIANGIN BARAT', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'MANDIANGIN TIMUR', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'MANDIKAPAU BARAT', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'MANDIKAPAU TIMUR', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'PADANG PANJANG', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'PANDAK DAUN', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'PASAR LAMA', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'PENYAMBARAN', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'PULAU NYIURG', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'SUNGAI ALANG', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'SUNGAI ARFAT', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'SUNGAI ASAM', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'SUNGAI LANDAS', 'kecamatan' => 'KARANG INTAN'],
            ['kelurahan' => 'SUNGAI BESAR', 'kecamatan' => 'KARANG INTAN'],

            ['kelurahan' => 'BANUA HANYAR', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'BELAYUNG BARU', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'KERTAK HANYAR I', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'KERTAK HANYAR II', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'MANARAP BARU', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'MANARAP LAMA', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'MANARAP TENGAH', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'MANDARSARI', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'MEKAR RAYA', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'PASAR KAMIS', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'SIMPANG EMPAT', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'SUNGAI LAKUM', 'kecamatan' => 'KERTAK HANYAR'],
            ['kelurahan' => 'TATAH PEMANGKIH LAUT', 'kecamatan' => 'KERTAK HANYAR'],

            ['kelurahan' => 'BINCAU', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'BINCAU MUARA', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'CINDAI ALUS', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'INDRASARI', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'JAWA', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'JAWA LAUT', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'KERATON', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'LABUAN TABU', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'MURUNG KENANGA', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'MURUNG KERATON', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'PASAYANGAN', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'PASAYANGAN BARAT', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'PASAYANGAN SELATAN', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'PASAYANGAN UTARA', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'SEKUMPUL', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'SUNGAI PARING', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'SUNGAI SIPAI', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TAMBAK BARU', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TAMBAK BARU ILIR', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TAMBAK BARU ULU', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TANJUNG REMA', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TANJUNG REMA DARAT', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TUNGGUL IRANG', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TUNGGUL IRANG ILIR', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TUNGGUL IRANG ULU', 'kecamatan' => 'MARTAPURA'],
            ['kelurahan' => 'TUNGKARAN', 'kecamatan' => 'MARTAPURA'],

            ['kelurahan' => 'ANTASAN SUTUN', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'KELILING BENTENG TENGAH', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'KELILING BENTENG ULU', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'PENGGALAMAN', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'SUNGAI BATANG', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'SUNGAI BATANG ILIR', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'SUNGAI RANGAS', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'SUNGAI RANGAS HAMBUKU', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'SUNGAI RANGAS TENGAH', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'SUNGAI RANGAS ULU', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'TANGKAS', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'TELUK SELONG', 'kecamatan' => 'MARTAPURA BARAT'],
            ['kelurahan' => 'TELUK SELONG ULU', 'kecamatan' => 'MARTAPURA BARAT'],

            ['kelurahan' => 'AKAR BAGANTUNG', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'AKAR BARU', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'ANTASAN SENOR', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'ANTASAN SENOR ILIR', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'DALAM PAGAR', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'DALAM PAGAR ULU', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'KERAMAT', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'KERAMAT BARU', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'MEKAR', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'MELAYU', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'MELAYU ILIR', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'MELAYU TENGAH', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'PEKAUMAN', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'PEKAUMAN DALAM', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'PEKAUMAN ULU', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'PEMATANG BARU', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'SUNGAI KITANO', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'TAMBAK ANYAR', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'TAMBAK ANYAR ILIR', 'kecamatan' => 'MARTAPURA TIMUR'],
            ['kelurahan' => 'TAMBAK ANYAR ULU', 'kecamatan' => 'MARTAPURA TIMUR'],

            ['kelurahan' => 'BARU', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'BAWAHAN PASAR', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'BAWAHAN SEBERANG', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'BAWAHAN SELAN', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'GUNUNG ULIN', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'LOK TAMU', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'MANGKALAWAT', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'MATARAMAN', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'PASIRAMAN', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'PEMATANG DANAU', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'SIMPANG TIGA', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'SUNGAI JATI', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'SURIAN', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'TAKUTI', 'kecamatan' => 'MATARAMAN'],
            ['kelurahan' => 'TANAH ABANG', 'kecamatan' => 'MATARAMAN'],

        ];

        Kelurahan::insert($kelurahan);
    }
}
