<?php

namespace Database\Seeders;

use App\Models\OrganizationStructure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        OrganizationStructure::truncate();

        // Struktur Utama
        $strukturUtama = [
            ['name' => 'Dr. H. R. M. ARIEF M. EDIE, M.Si', 'position' => 'Ketua Pembina TP. PKK', 'photo' => 'profiles/default.jpg', 'order' => 1],
            ['name' => 'Asisten Pemerintahan & Kesra', 'position' => 'Pembina TP. PKK', 'photo' => 'profiles/default.jpg', 'order' => 2],
            ['name' => 'Ny. LUTFIANA LUKMAN HAKIM', 'position' => 'Ketua TP. PKK Kabupaten', 'photo' => 'struktur/K.PKK.png', 'order' => 3],
            ['name' => 'Ny. MUAYYANAH FAUSAN DJA\'FAR', 'position' => 'Staf Ahli', 'photo' => 'struktur/Staff1.png', 'order' => 4],
            ['name' => 'Ny. AZIZAH ISMET EFFENDI', 'position' => 'Staf Ahli', 'photo' => 'struktur/Staff2.png', 'order' => 5],
            ['name' => 'Ir. Hj. ISHAFIJATI SETIJA BUDHI, MM', 'position' => 'Staf Ahli', 'photo' => 'struktur/Staff3.png', 'order' => 6],
            ['name' => 'NUR ANNISA, SH., M.Si', 'position' => 'Sekretaris', 'photo' => 'struktur/S1.png', 'order' => 7],
            ['name' => 'Ny. Dra. POERWANTI SETIJANINGSIH', 'position' => 'Sekretaris', 'photo' => 'struktur/S2.png', 'order' => 8],
            ['name' => 'Ny. R. FENTI HASANAH', 'position' => 'Sekretaris', 'photo' => 'struktur/S3.png', 'order' => 9],
            ['name' => 'Ir. Hj. ELLY FARIDA FAUZI RUSLI', 'position' => 'Bendahara', 'photo' => 'struktur/B1.png', 'order' => 10],
            ['name' => 'Ny. BUDIYATI, SE', 'position' => 'Bendahara', 'photo' => 'struktur/B2.png', 'order' => 11],
            ['name' => 'KRISTINA WIDYA HANDINI EDI, SE', 'position' => 'Bendahara', 'photo' => 'struktur/B3.png', 'order' => 12],
        ];

        foreach ($strukturUtama as $item) {
            OrganizationStructure::create([
                'name' => $item['name'],
                'position' => $item['position'],
                'photo' => $item['photo'],
                'section' => 'struktur_utama',
                'subsection' => null,
                'order' => $item['order'],
                'is_active' => true,
            ]);
        }

        // Bidang I - Ketua
        OrganizationStructure::create([
            'name' => 'Ny. SITI AISYAH GANI',
            'position' => 'Ketua',
            'photo' => 'struktur/K.BPKK.png',
            'section' => 'bidang_1',
            'subsection' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        // Bidang I - POKJA I
        $pokja1 = [
            ['name' => 'Ny. Dra. Hj.RENIMAH BUDI UTOMO', 'position' => 'Ketua', 'photo' => 'struktur/KP1.png', 'order' => 1],
            ['name' => 'Ny. SITI ZAINAH, MPd.I', 'position' => 'Wakil', 'photo' => 'struktur/WK1.png', 'order' => 2],
            ['name' => 'YENNI KUSUMA WIDIASTUTIK, SH', 'position' => 'Sekretaris', 'photo' => 'struktur/SP1.png', 'order' => 3],
            ['name' => 'Bp. SAID, SHi', 'position' => 'Anggota', 'photo' => 'struktur/AP1.png', 'order' => 4],
            ['name' => 'Ny. TUTIK HIDAYATI', 'position' => 'Anggota', 'photo' => 'struktur/AP11.png', 'order' => 5],
            ['name' => 'Ny. Hj. RAHMAWATI ABD. RAHEM', 'position' => 'Anggota', 'photo' => 'struktur/AP111.png', 'order' => 6],
        ];

        foreach ($pokja1 as $item) {
            OrganizationStructure::create([
                'name' => $item['name'],
                'position' => $item['position'],
                'photo' => $item['photo'],
                'section' => 'bidang_1',
                'subsection' => 'pokja_1',
                'order' => $item['order'],
                'is_active' => true,
            ]);
        }

        // Add sample data for other bidang/pokja - you can continue adding more based on the existing structure
        $this->seedBidang2();
        $this->seedBidang3();
        $this->seedBidang4();
    }

    private function seedBidang2(): void
    {
        // Bidang II - Pendidikan dan Peningkatan Ekonomi Keluarga - Ketua
        OrganizationStructure::create([
            'name' => 'Dra. Hj. NURHAYATI AFFANDY',
            'position' => 'Ketua',
            'photo' => 'struktur/K.BPPEK.png',
            'section' => 'bidang_2',
            'subsection' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        // POKJA II data
        $pokja2 = [
            ['name' => 'CHRISTIN YAKUB, SE, MM', 'position' => 'Ketua', 'photo' => 'struktur/KP2.png', 'order' => 1],
            ['name' => 'Ny. ENNY SUHARYANTI, S.Pd', 'position' => 'Wakil', 'photo' => 'struktur/WK2.png', 'order' => 2],
            ['name' => 'Ny. SITI HOTIJAH, SM', 'position' => 'Sekretaris', 'photo' => 'struktur/SP2.png', 'order' => 3],
            ['name' => 'Ny. Hj.MARIJATUL KIPTIYAH TAUFIQ, S.Pd', 'position' => 'Anggota', 'photo' => 'struktur/AP2.png', 'order' => 4],
            ['name' => 'Ny. RINA ROIDATUL, SE', 'position' => 'Anggota', 'photo' => 'struktur/AP22.png', 'order' => 5],
            ['name' => 'Bp. AGUNG PURWO NUGROHO, SS., S.Pd., M.Pd', 'position' => 'Anggota', 'photo' => 'struktur/AP222.png', 'order' => 6],
            ['name' => 'Ny. HOIRIYAH', 'position' => 'Anggota', 'photo' => 'struktur/AP2222.png', 'order' => 7],
        ];

        foreach ($pokja2 as $item) {
            OrganizationStructure::create([
                'name' => $item['name'],
                'position' => $item['position'],
                'photo' => $item['photo'],
                'section' => 'bidang_2',
                'subsection' => 'pokja_2',
                'order' => $item['order'],
                'is_active' => true,
            ]);
        }
    }

    private function seedBidang3(): void
    {
        // Bidang III - Ketua Bidang Penguatan Ketahanan Pangan - Ketua
        OrganizationStructure::create([
            'name' => 'Ny. Dra.SRI SUHARTINI ANDANG, MM',
            'position' => 'Ketua',
            'photo' => 'struktur/K.BPKP.png',
            'section' => 'bidang_3',
            'subsection' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        // POKJA III data
        $pokja3 = [
            ['name' => 'Ny. Hj. DINA DJAUHARI, SH', 'position' => 'Ketua', 'photo' => 'struktur/KP3.png', 'order' => 1],
            ['name' => 'Ny. Hj.SUPIYATUN', 'position' => 'Wakil', 'photo' => 'struktur/WP3.png', 'order' => 2],
            ['name' => 'Ny. NURPENI  HIDAYATI  ARIEF, SH', 'position' => 'Sekretaris', 'photo' => 'struktur/SP3.png', 'order' => 3],
            ['name' => 'Ny. NINIK ANGGRAINI, S. SE. MM', 'position' => 'Anggota', 'photo' => 'struktur/AP3.png', 'order' => 4],
            ['name' => 'Ny. DEWI EGA OKTAVIANI', 'position' => 'Anggota', 'photo' => 'struktur/AP33.png', 'order' => 5],
            ['name' => 'Ny. YULIANTINA', 'position' => 'Anggota', 'photo' => 'struktur/AP333.png', 'order' => 6],
            ['name' => 'EMMY ROFIATOEN', 'position' => 'Anggota', 'photo' => 'struktur/AP3333.png', 'order' => 7],
            ['name' => 'Ny. CICIK SUFATMAWATI, SE', 'position' => 'Anggota', 'photo' => 'struktur/AP33333.png', 'order' => 8],
            ['name' => 'Ny. WIWIK SUDARWANTI, S. Sos', 'position' => 'Anggota', 'photo' => 'struktur/AP333333.png', 'order' => 9],
        ];

        foreach ($pokja3 as $item) {
            OrganizationStructure::create([
                'name' => $item['name'],
                'position' => $item['position'],
                'photo' => $item['photo'],
                'section' => 'bidang_3',
                'subsection' => 'pokja_3',
                'order' => $item['order'],
                'is_active' => true,
            ]);
        }
    }

    private function seedBidang4(): void
    {
        // Bidang IV - Kesehatan Keluarga dan Lingkungan - Ketua
        OrganizationStructure::create([
            'name' => 'Hj. BINTI SOLIKHAH, STp, MM',
            'position' => 'Ketua',
            'photo' => 'struktur/K.BKKL.png',
            'section' => 'bidang_4',
            'subsection' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        // POKJA IV data
        $pokja4 = [
            ['name' => 'Ny. SITI FATIRAH SISWO, S.Pd', 'position' => 'Ketua', 'photo' => 'struktur/KP4.png', 'order' => 1],
            ['name' => 'DESITA RAHMAD', 'position' => 'Wakil', 'photo' => 'struktur/WK4.png', 'order' => 2],
            ['name' => 'Ny. ELIS AGUS RIYANTI, S.Kep', 'position' => 'Sekretaris', 'photo' => 'struktur/SP4.png', 'order' => 3],
            ['name' => 'Ny. dr. WIWID MAYASARI', 'position' => 'Anggota', 'photo' => 'struktur/AP4.png', 'order' => 4],
            ['name' => 'Ny. dr. SISKA AMALIA', 'position' => 'Anggota', 'photo' => 'struktur/AP44.png', 'order' => 5],
            ['name' => 'NOER EKA HIDAYATI', 'position' => 'Anggota', 'photo' => 'struktur/AP444.png', 'order' => 6],
            ['name' => 'Ny. NURUL HIDAYATI, SE', 'position' => 'Anggota', 'photo' => 'struktur/AP4444.png', 'order' => 7],
            ['name' => 'Ny. TULSI HAYATI, SE. MM', 'position' => 'Anggota', 'photo' => 'profiles/default.jpg', 'order' => 8],
        ];

        foreach ($pokja4 as $item) {
            OrganizationStructure::create([
                'name' => $item['name'],
                'position' => $item['position'],
                'photo' => $item['photo'],
                'section' => 'bidang_4',
                'subsection' => 'pokja_4',
                'order' => $item['order'],
                'is_active' => true,
            ]);
        }
    }
}
