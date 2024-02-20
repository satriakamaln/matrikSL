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



        ];

        Kelurahan::insert($kelurahan);
    }
}
