<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatan = [
            ['kecamatan' => 'AWAYAN', 'kabupaten' => 'BALANGAN'],
            ['kecamatan' => 'BATU MANDI', 'kabupaten' => 'BALANGAN'],
            ['kecamatan' => 'HALONG', 'kabupaten' => 'BALANGAN'],
            ['kecamatan' => 'JUAI', 'kabupaten' => 'BALANGAN'],
            ['kecamatan' => 'LAMPIHONG', 'kabupaten' => 'BALANGAN'],
            ['kecamatan' => 'PARINGIN', 'kabupaten' => 'BALANGAN'],
            ['kecamatan' => 'PARINGIN SELATAN', 'kabupaten' => 'BALANGAN'],
            ['kecamatan' => 'PARINGIN SELATAN', 'kabupaten' => 'BALANGAN'],
            ['kecamatan' => 'TEBING TINGGI', 'kabupaten' => 'BALANGAN'],

            ['kecamatan' => 'ALUH ALUH', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'ARANIO', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'ASTAMBUL', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'BERUNTUNG BARU', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'CINTAPURI DARUSSALAM', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'GAMBUT', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'KARANG INTAN', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'KERTAK HANYAR', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'MARTAPURA', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'MARTAPURA BARAT', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'MARTAPURA TIMUR', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'MATARAMAN', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'PARAMASAN', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'PENGARON', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'SAMBUNG MAKMUR', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'SIMPANG EMPAT', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'SUNGAI PINANG', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'SUNGAI TABUK', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'TATAH MAKMUR', 'kabupaten' => 'BANJAR'],
            ['kecamatan' => 'TELAGA BAUNTUNG', 'kabupaten' => 'BANJAR'],

            ['kecamatan' => 'ALALAK', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'ANJIR MUARA', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'ANJIR PASAR', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'BAKUMPAI', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'BARAMBAI', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'BELAWANG', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'CERBON', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'JEJANGKIT', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'KURIPAN', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'MANDASTANA', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'MARABAHAN', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'MEKARSARI', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'RANTAU BADAUH', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'TABUKAN', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'TABUNGANEN', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'TAMBAN', 'kabupaten' => 'BARITO KUALA'],
            ['kecamatan' => 'WANARAYA', 'kabupaten' => 'BARITO KUALA'],

            ['kecamatan' => 'ANGKINANG', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'DAHA BARAT', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'DAHA SELATAN', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'DAHA UTARA', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'KALUMPANG', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'KANDANGAN', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'LOKSADO', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'PADANG BATUNG', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'SIMPUR', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'SUNGAI RAYA', 'kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kecamatan' => 'TELAGA LANGSAT', 'kabupaten' => 'HULU SUNGAI SELATAN'],

            ['kecamatan' => 'BARABAI', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'BATANG ALAI SELATAN', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'BATANG ALAI TIMUR', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'BATANG ALAI UTARA', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'BATU BENAWA', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'HANTAKAN', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'HARUYAN', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'LABUAN AMAS SELATAN', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'LABUAN AMAS UTARA', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'LIMPASU', 'kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kecamatan' => 'PANDAWAN', 'kabupaten' => 'HULU SUNGAI TENGAH'],

            ['kecamatan' => 'AMUNTAI SELATAN', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'AMUNTAI TENGAH', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'AMUNTAI UTARA', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'BABIRIK', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'BANJANG', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'DANAU PANGGANG', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'HAUR GADING', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'PAMINGGIR', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'SUNGAI PANDAN', 'kabupaten' => 'HULU SUNGAI UTARA'],
            ['kecamatan' => 'SUNGAI TABUKAN', 'kabupaten' => 'HULU SUNGAI UTARA'],

            ['kecamatan' => 'BANJARBARU SELATAN', 'kabupaten' => 'KOTA BANJARBARU'],
            ['kecamatan' => 'BANJARBARU UTARA', 'kabupaten' => 'KOTA BANJARBARU'],
            ['kecamatan' => 'CEMPAKA', 'kabupaten' => 'KOTA BANJARBARU'],
            ['kecamatan' => 'LANDASAN ULIN', 'kabupaten' => 'KOTA BANJARBARU'],
            ['kecamatan' => 'LIANG ANGGANG', 'kabupaten' => 'KOTA BANJARBARU'],

            ['kecamatan' => 'BANJARMASIN BARAT', 'kabupaten' => 'KOTA BANJARMASIN'],
            ['kecamatan' => 'BANJARMASIN SELATAN', 'kabupaten' => 'KOTA BANJARMASIN'],
            ['kecamatan' => 'BANJARMASIN TENGAH', 'kabupaten' => 'KOTA BANJARMASIN'],
            ['kecamatan' => 'BANJARMASIN TIMUR', 'kabupaten' => 'KOTA BANJARMASIN'],
            ['kecamatan' => 'BANJARMASIN UTARA', 'kabupaten' => 'KOTA BANJARMASIN'],

            ['kecamatan' => 'HAMPANG', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'KELUMPANG BARAT', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'KELUMPANG HILIR', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'KELUMPANG HULU', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'KELUMPANG SELATAN', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'KELUMPANG TENGAH', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'KELUMPANG UTARA', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PAMUKAN BARAT', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PAMUKAN SELATAN', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PAMUKAN UTARA', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAU LAUT BARAT', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAU LAUT KEPULAUAN', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAU LAUT SELATAN', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAU LAUT TANJUNG SELAYAR', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAU LAUT TENGAH', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAU LAUT TIMUR', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAU SEBUKU', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAU SEMBILAN', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAULAUT SIGAM', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'PULAULAUT UTARA', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'SAMPANAHAN', 'kabupaten' => 'KOTABARU'],
            ['kecamatan' => 'SUNGAI DURIAN', 'kabupaten' => 'KOTABARU'],

        ];

        Kecamatan::insert($kecamatan);
    }
}
