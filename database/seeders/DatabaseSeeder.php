<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@dpm.com',
                'password' => Hash::make('admin123'),
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'SUPER_ADMIN'
            ], [
                'name' => 'noadmin',
                'email' => 'noadmin@dpm.com',
                'password' => Hash::make('noadmin123'),
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Luh Yudi Ayuningsih',
                'email' => 'ketua@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ida Bagus Oka Kusuma Wiratama',
                'email' => 'wakilinternal@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Alrich Rovananda Brata',
                'email' => 'wakileksternal@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Kadek Diah Puspa Loka',
                'email' => 'sekretarisumum@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Made Gede Bayu Ananta',
                'email' => 'sekretarisjendral@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Nyoman Bella Ari Dewi',
                'email' => 'bendahara1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Komang Neti Dewi',
                'email' => 'bendahara2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Kadek Wardani',
                'email' => 'ketuarelasi@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Komang Ayu Cintia Dewi',
                'email' => 'wakilrelasi@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Putu Sisca Damayanti',
                'email' => 'sekretarisrelasi@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Putu Jossy Arya Kusuma',
                'email' => 'stafrelasi1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Kadek Aelin',
                'email' => 'stafrelasi2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Pande Koming Putri Suryandewi',
                'email' => 'stafrelasi3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'D. A. Feby Pradnyani',
                'email' => 'stafrelasi4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Luh Ayu Ratna Dwiyanthi P',
                'email' => 'stafrelasi5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Putu Ria Oktariani',
                'email' => 'stafrelasi6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Wayan Sri Anggarini',
                'email' => 'stafrelasi7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Flavia Eugenia',
                'email' => 'stafrelasi8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Ketut Ria Yuliantari',
                'email' => 'stafrelasi9@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Maria Agatha Renaningtyas',
                'email' => 'ketuahukum@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Joghinanda Raihan Febrianto',
                'email' => 'wakilhukum@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Eiunike Aurora Shafia Putri',
                'email' => 'sekretarishukum@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Syafira Rachel Azzahra',
                'email' => 'stafhukum1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Kevin Abdurrahman Setiono',
                'email' => 'stafhukum2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Putu Ayu Librayanti',
                'email' => 'stafhukum3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Asano Ezar Syandhana',
                'email' => 'stafhukum4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ngakan Alit Marchel Stefano',
                'email' => 'stafhukum5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Putu Yunita Sri Wedari',
                'email' => 'stafhukum6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Gusti Ngurah Nararya Jayawastu',
                'email' => 'stafhukum7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Hidayat Taufik',
                'email' => 'stafhukum8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ade Saepullah',
                'email' => 'ketuaaspirasi@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Adi Irmawan',
                'email' => 'wakilaspirasi@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Anggita Nur Aguspriyani',
                'email' => 'sekretarisaspirasi@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Komang Anggie Pratiwi',
                'email' => 'stafaspirasi1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Melsy Yani Binaria BR Kaban',
                'email' => 'stafaspiras2i@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Ketut Mariana Purnama',
                'email' => 'stafaspirasi3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Gede Eka Widhi Adnyana',
                'email' => 'stafaspirasi4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Muhammad Dzaky Raihan Putra',
                'email' => 'stafaspirasi5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Anak Agung Putri Shanti Swarupini Sadhaka',
                'email' => 'stafaspirasi6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Nala Andrianingsih',
                'email' => 'stafaspirasi7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Nurul Hidayati',
                'email' => 'stafaspirasi8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Wayan Ulan Arystina Citra',
                'email' => 'stafaspirasi9@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Solafide Stefanny',
                'email' => 'stafaspirasi10@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ],
            [
                'name' => 'Jelita Agethi',
                'email' => 'ketuapengawasan@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Gede Yudi Ardiawan',
                'email' => 'wakilpengawasan@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ayu Putu Diah Parami Hartayani',
                'email' => 'sekretarispengawasan@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Luh Putu Hasti Sri Maharani',
                'email' => 'stafpengawasan1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Michelle Leony Kesuma',
                'email' => 'stafpengawasan2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Putu Dea Aryati Okantari',
                'email' => 'stafpengawasan3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Zefanya Bintang Yusetyo',
                'email' => 'stafpengawasan4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ivan Tobias Aryo Putro',
                'email' => 'stafpengawasan5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Muhammad Wiratsongko',
                'email' => 'stafpengawasan6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Komang Andi Prastya',
                'email' => 'stafpengawasan7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ida Bagus Putu Aditya Wiguna',
                'email' => 'stafpengawasan8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Helfi Zepta Marta Br Manurung',
                'email' => 'stafpengawasan9@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Billie Saputra Dewa',
                'email' => 'stafpengawasan10@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Luh Putu Ayu Siwastuti Cayadewi',
                'email' => 'ketuabudgeting@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Riris Nur Handayani',
                'email' => 'wakilbudgeting@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Luh Emi Pradewi',
                'email' => 'sekretarisbudgeting@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Komang Pada Arta Yasa',
                'email' => 'stafbudgeting1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Kadek Dita Oka Mahendra',
                'email' => 'stafbudgeting2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Nur Syifa Eka Putri',
                'email' => 'stafbudgeting3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Sang Ayu Kompiang Ari Ardiningsih',
                'email' => 'stafbudgeting4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Wayan Mas Lestari',
                'email' => 'stafbudgeting5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Luh Arni Sukmayanti',
                'email' => 'stafbudgeting6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ida Ayu Nyoman Sri Rahayu',
                'email' => 'stafbudgeting7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Nyoman Sutri Artati',
                'email' => 'stafbudgeting8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Made Dewi Pradnyani',
                'email' => 'stafbudgeting9@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Vania Dwi Astuningtyas',
                'email' => 'stafbudgeting10@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Ketut Savna Diatmika Putri',
                'email' => 'kepalaadministrasi@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Nauval Azhar Romadhoni',
                'email' => 'stafadmin1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ita Purnamasari',
                'email' => 'stafadmin2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Made Ira Vary Ayesti',
                'email' => 'stafadmin3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Putu Ari Kartika Putri',
                'email' => 'stafadmin4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Komang Pande Duta Mahardika',
                'email' => 'stafadmin5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Made Suci Wulandari',
                'email' => 'stafadmin6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Putu Diva Indira Putri',
                'email' => 'stafadmin7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Dewa Ayu Gede Ovy Bulan Chariza',
                'email' => 'stafadmin8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Anak Agung Istri Rai Firadnyani',
                'email' => 'kepalakestari@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Kadek Dwi Sapta Rendrahadi',
                'email' => 'stafkestari1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Najwa Royhatul Janna',
                'email' => 'stafkestari2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Kadek Natasha',
                'email' => 'stafkestari3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Made Hita Prawirtania',
                'email' => 'stafkestari4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'I Kadek Devara Sandy Pradnyana Putra',
                'email' => 'stafkestari5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Kadek Dilla Arthavia Putri',
                'email' => 'stafkestari6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Kadek Andini Natasya Dwi Arta',
                'email' => 'stafkestari7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ayu Istawati Jayanti',
                'email' => 'stafkestari8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Agnes Karmelia Yashinta',
                'email' => 'kepalainternal@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Erna Shintya',
                'email' => 'stafinternal1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Edward Mazzoleri Wibowo',
                'email' => 'stafinternal2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Usman Maulana',
                'email' => 'stafinternal3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Putu Sinta Desy Artani',
                'email' => 'stafinternal4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Maria Mahdalena Vista Putri Karana',
                'email' => 'stafinternal5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Putu Leoni Artika Putri',
                'email' => 'stafinternal6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Kaleb Juniko Sianipar',
                'email' => 'stafinternal7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Jounathan Barlev Silitonga',
                'email' => 'stafinternal8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Anak Agung Gede Bagus Genta Budhi Dharma',
                'email' => 'kepalalitbang@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Putu Lyra Melinda',
                'email' => 'staflitbang1@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Esagaloh Mutiara Putri',
                'email' => 'staflitbang2@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Nirina Zulianty',
                'email' => 'staflitbang3@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Luh Putu Dian Pratiwi',
                'email' => 'staflitbang4@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Sagung Mirah Pradnya Putri',
                'email' => 'staflitbang5@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Kyka Kania Eugene',
                'email' => 'staflitbang6@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Komang Gede Setyana Dharma Putra',
                'email' => 'staflitbang7@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Rifah Aisyah',
                'email' => 'staflitbang8@example.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Anjis Rahel Napitupulu',
                'email' => 'kepalakv@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Putu Arva Gotama',
                'email' => 'stafkv1@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Adriel Fanotona Saro Hia',
                'email' => 'stafkv2@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Fadhiel Muhammad Akbar',
                'email' => 'stafkv3@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Bintang Azalea Adi Shirasasmita',
                'email' => 'stafkv4@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Syifa Balqis Hartanto',
                'email' => 'stafkv5@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ni Luh Putu Widya Paramitha',
                'email' => 'stafkv6@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Kadek Kayla Divira',
                'email' => 'stafkv7@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Muhammad Izzul Isror',
                'email' => 'stafkv8@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Ida Bagus Putu Ananda Arjawa',
                'email' => 'stafkv9@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ], [
                'name' => 'Dewa Nyoman Putera Wiradharma',
                'email' => 'stafkv10@email.com',
                'password' => 'example123',
                'image_path' => 'public/images/users/default-user.png',
                'role' => 'ADMIN'
            ],
        ]);

        DB::table('user_roles')->insert([
            ['role' => 'KETUA'],
            ['role' => 'WAKIL KETUA INTERNAL'],
            ['role' => 'WAKIL KETUA EKSTERNAL'],
            ['role' => 'SEKERTARIS UMUM'],
            ['role' => 'SEKERTARIS JENDRAL'],
            ['role' => 'BENDAHARA I'],
            ['role' => 'BENDAHARA II'],
            ['role' => 'KOMISI I'],
            ['role' => 'KOMISI II'],
            ['role' => 'KOMISI III'],
            ['role' => 'KOMISI IV'],
            ['role' => 'KOMISI V'],
            ['role' => 'STAF AHLI LITBANG'],
            ['role' => 'STAF AHLI INTERNALISASI & HUBUNGAN ANTAR ANGGOTA'],
            ['role' => 'STAF AHLI KESTARI'],
            ['role' => 'STAF AHLI ADMINISTRASI UMUM'],
            ['role' => 'STAF AHLI KOMUNIKASI VISUAL'],
        ]);
    }
}
