<?php

namespace Database\Seeders;

use App\Models\SkpdProv;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skpd_provs = [
            ['nama_skpd' => 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS KESEHATAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'RUMAH SAKIT UMUM DAERAH ULIN BANJARMASIN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'RUMAH SAKIT JIWA SAMBANG LIHUM', 'pemda' => 'PROV'],
            ['nama_skpd' => 'RUMAH SAKIT UMUM DR. H. MOCH ANSARI SALEH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'RUMAH SAKIT GIGI DAN MULUT GUSTI HASAN AMAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN KESATUAN BANGSA DAN POLITIK', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN PENANGGULANAN BENCANA DAERAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'SATUAN POLISI PAMONG PRAJA DAN PEMADAM KEBAKARAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS SOSIAL', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS TENAGA KERJA DAN TRANSMIGRASI', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS KETAHANAN PANGAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS LINGKUNGAN HIDUP', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS KEPENDUDUKAN PENCATATAN SIPIL DAN KELUARGA BERENCANA', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PERHUBUNGAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS KOMUNIKASI DAN INFORMATIKA', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PEMUDA DAN OLAHRAGA', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PERPUSTAKAAN DAN KEARSIPAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS TANAMAN PANGAN DAN HORTIKULTURA', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PERKEBUNAN DAN PETERNAKAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS KEHUTANAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS ENERGI DAN SUMBER DAYA MINERAL', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PARIWISATA', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS KELAUTAN DAN PERIKANAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PERDAGANGAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PERINDUSTRIAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'SEKRETARIAT DPRD', 'pemda' => 'PROV'],
            ['nama_skpd' => 'INSPEKTORAT DAERAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN PENGHUBUNG', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN RISET DAN INOVASI DAERAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'pemda' => 'PROV'],
            ['nama_skpd' => 'SEKRETARIAT DAERAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN KEPEGAWAIAN DAERAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN PENDAPATAN DAERAH', 'pemda' => 'PROV'],
            ['nama_skpd' => 'BADAN KEPENDUDUKAN DAN KELUARGA BERENCANA NASIONAL', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PERTANAHAN', 'pemda' => 'PROV'],
            ['nama_skpd' => 'DINAS PERTANIAN DAN KETAHANAN PANGAN', 'pemda' => 'PROV']
        ];

        SkpdProv::insert($skpd_provs);
    }
}
