<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $slideshow = new App\SlideShow;
        $slideshow->name = "photo1";
        $slideshow->photo = "assets/img/img1.jpg";
        $slideshow->save();

        $slideshow = new App\SlideShow;
        $slideshow->name = "photo2";
        $slideshow->photo = "assets/img/img2.jpg";
        $slideshow->save();

        $slideshow = new App\SlideShow;
        $slideshow->name = "photo3";
        $slideshow->photo = "assets/img/img3.jpg";
        $slideshow->save();

        /**ABOUT US GENERASI */

        $generasi = new App\Generasi;
        $generasi->name = "gen x";
        $generasi->photo = "assets/aboutus/au10.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen ix";
        $generasi->photo = "assets/aboutus/au9.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen viii";
        $generasi->photo = "assets/aboutus/au8.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen vii";
        $generasi->photo = "assets/aboutus/au7.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen vi";
        $generasi->photo = "assets/aboutus/au6.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen v";
        $generasi->photo = "assets/aboutus/au5.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen iv";
        $generasi->photo = "assets/aboutus/au4.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen iii";
        $generasi->photo = "assets/aboutus/au3.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen ii";
        $generasi->photo = "assets/aboutus/au2.png";
        $generasi->save();

        $generasi = new App\Generasi;
        $generasi->name = "gen i";
        $generasi->photo = "assets/aboutus/au1.png";
        $generasi->save();

        $ukm = new App\Ukm;
        $ukm->name = "Ultima Sonora";
        $ukm->photo = "assets/ukmnobg/senbud/ulsonbg.png";
        $ukm->info = "Ultima Sonora merupakan Paduan Suara Mahasiswa Universitas Multimedia Nusantara sejak tahun 2007. Dalam menjaga eksistensinya, Ultima Sonora aktif dalam mengadakan berbagai konser, seperti konser Inagurasi yang diadakan rutin setiap tahunnya";
        $ukm->ig = "UltimaSonora";
        $ukm->link = "http://www.instagram.com/UltimaSonora";
        $ukm->hari = "Selasa & Jumat";
        $ukm->jam = "17.00-20.00 WIB";
        $ukm->tagline = "#SingWithUS";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Teater KataK";
        $ukm->photo = "assets/ukmnobg/senbud/katakbg.png";
        $ukm->info = "Komunitas Anak Teater Kampus (KataK) didirikan sebagai wadah berseni peran di UMN. KataK berkembang menjadi fasilitator bagi mereka yang ingin belajar ilmu teater.Puluhan produksi sudah diselenggarakan baik di dalam maupun di luar universitas.";
        $ukm->ig = "teaterkatak";
        $ukm->link = "http://www.instagram.com/teaterkatak";
        $ukm->hari = "Selasa, Rabu,& Kamis";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "“Berani Melompat Lebih Tinggi Melewati Batasan Yang Ada”";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "UMN Symphony Orchestra";
        $ukm->photo = "assets/ukmnobg/senbud/usobg.png";
        $ukm->info = "UMN Symphony Orchestra berdiri sejak 2015 dan resmi menjadi ukm pada tahun 2016. Melalui tagline ‘Viva La Musica’  kami tidak hanya sekedar bermain musik, tetapi juga menghidupkan rasa dalam setiap individu, sehingga seluruh permainan musik yang kami hasilkan dapat tersampaikan dengan baik dan dirasakan";
        $ukm->ig = "umnsymphonyorchestra";
        $ukm->link = "http://www.instagram.com/umnsymphonyorchestra";
        $ukm->hari = "Selasa & Kamis";
        $ukm->jam = "17.00-20.00 WIB";
        $ukm->tagline = "Viva La Musica!";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Qorie";
        $ukm->photo = "assets/ukmnobg/senbud/qoriebg.png";
        $ukm->info = "Qorie merupakan sebuah UKM seni dan budaya yang berfokus pada kebudayaan Korea Selatan. Qorie juga menjadi sarana untuk mempelajari tata bahasa korea serta menjadi tempat bagi mahasiswa/i untuk menunjukan bakat dan minat mereka dalam seni tari dan musik korea.";
        $ukm->ig = "qorie_umn";
        $ukm->link = "http://www.instagram.com/qorie_umn";
        $ukm->hari = "Senin s/d Jumat";
        $ukm->jam = "17.00-20.00 WIB *(disesuaikan perdivisi)";
        $ukm->tagline = "Qorie, Saranghaja!";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Jcafe";
        $ukm->photo = "assets/ukmnobg/senbud/jcafebg.png";
        $ukm->info = "Jcafe adalah Unit Kegiatan Mahasiswa (UKM) yang beranggotakan para penggemar budaya Jepang di UMN. Jcafe memberikan wadah kepada para mahasiswa untuk mengembangkan minat & bakat serta passion mereka terhadap seni dan budaya berbasis jepang.";
        $ukm->ig = "jcafe_umn";
        $ukm->link = "http://www.instagram.com/jcafe_umn";
        $ukm->hari = "Senin s/d Jumat";
        $ukm->jam = "17.00-19.00 WIB *(disesuaikan perdivisi)";
        $ukm->tagline = "Jcafe, Express Your Japanese Passion!";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Mufomic";
        $ukm->photo = "assets/ukmnobg/senbud/mufomicbg.png";
        $ukm->info = "Multimedia Face of Music (MUFOMIC) merupakan salah satu Unit Kegiatan Mahasiswa (UKM) di Universitas Multimedia Nusantara yang bergerak di bidang seni dan budaya, yaitu musik dalam format band.";
        $ukm->ig = "mufomic";
        $ukm->link = "http://www.instagram.com/mufomic";
        $ukm->hari = "Selasa";
        $ukm->jam = "17.00-22.00 WIB";
        $ukm->tagline = "Mufomic - ORKES";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Obscura";
        $ukm->photo = "assets/ukmnobg/senbud/obscurabg.png";
        $ukm->info = "Obscura merupakan Unit Kegiatan Mahasiswa (UKM) yang bergerak di bidang fotografi dibawah naungan UMN.Obscura bertujuan untuk mempertemukan para pecinta fotografi di kalangan mahasiswa UMN. Obscura memegang erat motto “Together We Learn” karena mengedepankan kebersamaan dalam belajar.";
        $ukm->ig = "obscuratwl";
        $ukm->link = "http://www.instagram.com/obscuratwl";
        $ukm->hari = "Rabu";
        $ukm->jam = "17.00-22.00 WIB";
        $ukm->tagline = "Together We Learn!";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Tracce";
        $ukm->photo = "assets/ukmnobg/senbud/traccebg.png";
        $ukm->info = "Traditional dance atau yang akrab disebut dengan TRACCE merupakan Unit Kegiatan Mahasiswa di Universitas Multimedia Nusantara yang memberi wadah bagi mahasiswa yang ingin menyalurkan bakat dan minatnya dalam seni tradisional yang berasal dari Indonesia.";
        $ukm->ig = "tracceumn";
        $ukm->link = "http://www.instagram.com/tracceumn";
        $ukm->hari = "Selasa, Rabu,& Kamis";
        $ukm->jam = "17.30-20.00 WIB";
        $ukm->tagline = "“Nari terus, nari terus, nari terus!”";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Ultima Toys";
        $ukm->photo = "assets/ukmnobg/senbud/utoysbg.png";
        $ukm->info = "Ultima Toys adalah Unit Kegiatan Mahasiswa sebagai tempat belajar juga sarana untuk berbagi ide dan kreativitas yang berkaitan dengan fotografi mainan";
        $ukm->ig = "ultimatoys";
        $ukm->link = "http://www.instagram.com/ultimatoys";
        $ukm->hari = "Kamis";
        $ukm->jam = "17.00-19.00 WIB";
        $ukm->tagline = "Where Toys Come to Life";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Street Dance";
        $ukm->photo = "assets/ukmnobg/senbud/sdbg.png";
        $ukm->info = "Let’s Dance (LDNC) adalah Unit Kegiatan Mahasiswa (UKM) yang berfokus di bidang tari. LDNC sendiri biasa dikenal dengan UKM street dance. Tujuan dibentuknya LDNC adalah menjadi tempat atau wadah untuk mahasiswa UMN yang tertarik dengan dunia tari, ada berbagai macam style yang akan dipelajari seperti: b-boy, locking, hip-hop, ladies, popping, dll";
        $ukm->ig = "streetdanceumn";
        $ukm->link = "http://www.instagram.com/streetdanceumn";
        $ukm->hari = "Kamis";
        $ukm->jam = "19.00-21.00 WIB";
        $ukm->tagline = "Dance to Your Own Beat";
        $ukm->bidang = "senbud";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "UMN Programming Club";
        $ukm->photo = "assets/ukmnobg/sainsos/umnpcbg.png";
        $ukm->info = "UMN PC (UMN Programming Club) adalah UKM yang melatih kemampuan CP (Competitive Programming) dengan tujuan mengasah logika dan daya pikir delchipier. Delchipier melakukan CP bersama-sama setiap minggunya dengan materi yang disusun untuk mengembangkan skill CP secara mendalam.";
        $ukm->ig = "umnprogrammingclub";
        $ukm->link = "http://www.instagram.com/umnprogrammingclub";
        $ukm->hari = "Senin & Kamis";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "We Code The Future, Future Starts With Us";
        $ukm->bidang = "sainsos";
        $ukm->save();
        
        $ukm = new App\Ukm;
        $ukm->name = "UESC";
        $ukm->photo = "assets/ukmnobg/sainsos/uescbg.png";
        $ukm->info = "UESC (UMN English Student Council) sebagai salah satu UKM UMN berbahasa Inggris, ingin mengembangkan kemampuan berbahasa Inggris anggotanya. Dengan keempat divisi UESC yaitu Scrabble, Speech, Spelling Bee, dan Debate, banyak variasi keterampilan yang dapat kita semua asah.";
        $ukm->ig = "uesc_umn";
        $ukm->link = "http://www.instagram.com/uesc_umn";
        $ukm->hari = "Kamis";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "So, You Think We ain't Fun?";
        $ukm->bidang = "sainsos";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Rencang";
        $ukm->photo = "assets/ukmnobg/sainsos/rencangbg.png";
        $ukm->info = "Rencang merupakan komunitas sosial yang menjadi wadah bagi mahasiswa/i UMN untuk dapat berdampak bagi masyarakat yang membutuhkan. Banyak program-program yang dilakukan untuk mencapai tujuan tersebut, seperti donor darah, kampanye sosial, berbagi kebahagiaan dengan orang yang membutuhkan, dan berbagai kegiatan yang mengakrabkan sesama anggota.";
        $ukm->ig = "rencangaye";
        $ukm->link = "http://www.instagram.com/rencangaye";
        $ukm->hari = "Selasa";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "Unite as a Family to Manifest Love and Sincerity";
        $ukm->bidang = "sainsos";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Mapala";
        $ukm->photo = "assets/ukmnobg/sainsos/mapalabig.png";
        $ukm->info = "Mapala UMN merupakan organisasi yang berasaskan kekeluargaan, persaudaraan, persamaan, kemerdekaan, dan gotong royong, yang didasari oleh semangat kemanusiaan yang adil dan beradab. Mapala UMN bertujuan untuk memberikan wadah kepada Mahasiswa UMN yang berminat terhadap kegiatan alam yang keanggotaannya diatur dalam Anggaran Rumah Tangga.";
        $ukm->ig = "mapalaumn";
        $ukm->link = "http://www.instagram.com/mapalaumn";
        $ukm->hari = "Jumat";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "Salam Lestari!";
        $ukm->bidang = "sainsos";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "GDC";
        $ukm->photo = "assets/ukmnobg/sainsos/gdcbg.png";
        $ukm->info = "Game Development Club adalah UKM yang merangkul mahasiswa yang berminat terhadap game development. Disini, mahasiswa dapat mengisi waktu mereka untuk mempelajari lebih dalam mengenai proses pembuatan game.";
        $ukm->ig = "gdcumn";
        $ukm->link = "http://www.instagram.com/gdcumn";
        $ukm->hari = "Rabu";
        $ukm->jam = "17.00-19.00 WIB";
        $ukm->tagline = "We Make Great Games! ";
        $ukm->bidang = "sainsos";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Lions Basket";
        $ukm->photo = "assets/ukmnobg/olahraga/basketbg.png";
        $ukm->info = "UMN Lions Basketball merupakan salah satu UKM yang berada di UMN, yang bergerak di bidang olahraga khususnya olahraga bola basket. Lions basketball ini sudah berdiri sejak 2010. Lions basketball ini memiliki tujuan sebagai wadah bagi para mahasiswa dan mahasiswi untuk dapat menunjukan potensi dan bakat mereka dalam bidang olahraga basket.";
        $ukm->ig = "umn_lions";
        $ukm->link = "http://www.instagram.com/umn_lions";
        $ukm->hari = "Senin, Rabu,& Jumat";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "UMN Lions Jaya Jaya Luar Biasa";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Lions Badminton";
        $ukm->photo = "assets/ukmnobg/olahraga/badminbg.png";
        $ukm->info = "Lions badminton merupakan UKM di kampus UMN yang bergerak di bidang olahraga. Lions Badminton juga menjadi wadah bagi setiap mahasiswa/i untuk mengembangkan minat dan bakat mereka khususnya di bidang bulutangkis.";
        $ukm->ig = "lionsbadmintonumn";
        $ukm->link = "http://www.instagram.com/lionsbadmintonumn";
        $ukm->hari = "Rabu & Kamis";
        $ukm->jam = "18.00-22.00 WIB";
        $ukm->tagline = "Lions Badminton!";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Capoeira";
        $ukm->photo = "assets/ukmnobg/olahraga/capoeirabg.png";
        $ukm->info = "Di Capoeira UMN kami belajar bersama dan bermain bersama dengan santai.Capoeira UMN menerapkan Mix Method dimana kami belajar capoeira dicampur dengan tricking, yoga, akrobatik dan sebagainya.";
        $ukm->ig = "capoeiraumn";
        $ukm->link = "http://www.instagram.com/capoeiraumn";
        $ukm->hari = "Kamis";
        $ukm->jam = "17.30-21.00 WIB";
        $ukm->tagline = "É vou jogar!";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Fortius e-Sports";
        $ukm->photo = "assets/ukmnobg/olahraga/fortiusbg.png";
        $ukm->info = "Fortius E-Sport merupakan Unit Kegiatan Mahasiswa (UKM) yang ada di UMN yang ditujukan untuk mahasiswa/i dengan cabang olahraga E-Sport. Fortius berasal dari kata latin, dengan memiliki arti Sangat kuat.";
        $ukm->ig = "fortiusesports";
        $ukm->link = "http://www.instagram.com/fortiusesports";
        $ukm->hari = "Senin, Rabu, & Jumat";
        $ukm->jam = "19.00-21.00 WIB";
        $ukm->tagline = "Fight.Dominate.Win";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Lions Futsal";
        $ukm->photo = "assets/ukmnobg/olahraga/futsalbg.png";
        $ukm->info = "Lions Futsal adalah UKM olahraga futsal di UMN yang mewadahi mahasiswa ataupun mahasiswi untuk menyalurkan bakat atau hobi yang dimiliki.  Lions futsal juga aktif mengikuti kompetisi tingkat universitas. Lions Futsal pernah menjuarai beberapa kejuaraan baik internal maupun eksternal.";
        $ukm->ig = "lionsfutsal_umn";
        $ukm->link = "http://www.instagram.com/lionsfutsal_umn";
        $ukm->hari = "Senin & Jumat";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "Lions Futsal UMN, Victory";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Tenis Meja";
        $ukm->photo = "assets/ukmnobg/olahraga/pingpongbg.png";
        $ukm->info = "UKM Tenis Meja adalah UKM yang ditujukan untuk mahasiswa/i yang tertarik untuk mempelajari tenis meja dan mengembangkan kemampuan untuk mengikuti kompetisi.";
        $ukm->ig = "ukmtenismeja.umn";
        $ukm->link = "http://www.instagram.com/ukmtenismeja.umn";
        $ukm->hari = "Selasan & Rabu";
        $ukm->jam = "17.00-19.00 WIB";
        $ukm->tagline = "Tenis Meja UMN!";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Softball";
        $ukm->photo = "assets/ukmnobg/olahraga/softballbg.png";
        $ukm->info = "Softball adalah unit kegiatan mahasiswa yang bergerak dalam bidang softball";
        $ukm->ig = "softballumn";
        $ukm->link = "http://www.instagram.com/softballumn";
        $ukm->hari = "Selasa & Rabu";
        $ukm->jam = "17.30-20.00 WIB";
        $ukm->tagline = "Softball UMN!";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Spectre";
        $ukm->photo = "assets/ukmnobg/olahraga/spectrebg.png";
        $ukm->info = "Spectre adalah UKM yang berfokus di bidang stunt action untuk dunia perfilman. Tujuan dari UKM ini adalah mengasah ilmu yang dibutuhkan oleh para anggota untuk berperforma di dunia perfilman dengan tingkat standar profesional. Ilmu tersebut terdiri dari teknik gerakan menyerang, jatuhan, aksi reaksi dan gun handling yang dicakup dari berbagai macam beladiri.";
        $ukm->ig = "usfxspectre";
        $ukm->link = "http://www.instagram.com/usfxspectre";
        $ukm->hari = "Rabu & Jumat";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "USF ACTION!!!";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Lions Voli";
        $ukm->photo = "assets/ukmnobg/olahraga/volibg.png";
        $ukm->info = "Lions Volleyball merupakan salah satu UKM yang diselenggarakan oleh Universitas Multimedia Nusantara dalam cabang olahraga bola voli.Lions Volleyball sendiri mempunyai tagline 'Hustle Hit, Never Quit', dapat bisa diartikan dalam permainan ini, setiap pukulan yang didapat harus tetap bersikap rendah tetapi tidak menyerah.";
        $ukm->ig = "umnlionsvolleyball";
        $ukm->link = "http://www.instagram.com/umnlionsvolleyball";
        $ukm->hari = "Senin & Rabu";
        $ukm->jam = "17.00-21.00 WIB";
        $ukm->tagline = "Hustle Hit, Never Quit";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $ukm = new App\Ukm;
        $ukm->name = "Taekwondo UMN";
        $ukm->photo = "assets/ukmnobg/olahraga/taekwonbg.png";
        $ukm->info = "Taekwondo UMN merupakan Unit Kegiatan Mahasiswa yang mendukung mahasiswa UMN dalam melakukan bela diri Taekwondo. Taekwondo UMN juga  menghasilkan juara juara bertarung di berbagai tingkatan";
        $ukm->ig = "taekwondo_umn";
        $ukm->link = "http://www.instagram.com/taekwondo_umn";
        $ukm->hari = "Selasa & Kamis";
        $ukm->jam = "18.00-21.00 WIB";
        $ukm->tagline = "If You Worry About How , You Will Never Start";
        $ukm->bidang = "olahraga";
        $ukm->save();

        $kegiatan = new App\Kegiatan;
        $kegiatan->name = "U-FEST";
        $kegiatan->photo = "assets/kegiatan/logoufestbig.png";
        $kegiatan->info = "UMN Festival atau U-Fest adalah kegiatan mahasiswa di bawah naungan BEM UMN yang bertujuan untuk meningkatkan ikatan antar seluruh mahasiswa dari setiap jurusan dan angkatan lewat bidang olahraga, sosial, dan seni.";
        $kegiatan->ig = "umnfestival";
        $kegiatan->link = "http://www.instagram.com/umnfestival";
        $kegiatan->save();

        $kegiatan = new App\Kegiatan;
        $kegiatan->name = "MAXIMA";
        $kegiatan->photo = "assets/kegiatan/logomaximabig.png";
        $kegiatan->info = "MAXIMA atau Malam Ekspresi Mahasiswa adalah kegiatan dibawah naungan BEM UMN yang ditujukan untuk meningkatkan kesadaran dan partisipasi aktif mahasiswa serta menjalin hubungan, dikemas dalam wujud pementasan, pameran, uji coba UKM, dan pentas seni.";
        $kegiatan->ig = "maximaumn";
        $kegiatan->link = "http://www.instagram.com/maximaumn";
        $kegiatan->save();

        $kegiatan = new App\Kegiatan;
        $kegiatan->name = "MR. & MS. UMN";
        $kegiatan->photo = "assets/kegiatan/logomrmsbig.png";
        $kegiatan->info = "Mr. & Ms. UMN merupakan kegiatan mahasiswa yang berada dibawah naungan BEM UMN dengan tujuan untuk mencari duta bagi Universitas Multimedia Nusantara.";
        $kegiatan->ig = "mrmsumn";
        $kegiatan->link = "http://www.instagram.com/mrmsumn";
        $kegiatan->save();

        $kegiatan = new App\Kegiatan;
        $kegiatan->name = "STARLIGHT";
        $kegiatan->photo = "assets/kegiatan/logostarlightbig.png";
        $kegiatan->info = "Starlight merupakan salah satu program kerja dari BEM UMN dimana para pelajar baik internal maupun eksternal UMN dapat berkompetisi dengan menunjukkan kebolehannya untuk menampilkan bakat mereka di kegiatan ini.";
        $kegiatan->ig = "starlightumn";
        $kegiatan->link = "http://www.instagram.com/starlightumn";
        $kegiatan->save();

        $kegiatan = new App\Kegiatan;
        $kegiatan->name = "BANK SAMPAH";
        $kegiatan->photo = "assets/kegiatan/logobanksampahbig.png";
        $kegiatan->info = "Bank Sampah adalah kegiatan mahasiswa di bawah naungan BEM UMN yang bertujuan untuk membangun kesadaran mahasiswa akan pentingnya lingkungan yang sehat dan bebas dari sampah.";
        $kegiatan->ig = "banksampah_umn";
        $kegiatan->link = "http://www.instagram.com/banksampah_umn";
        $kegiatan->save();

        $kegiatan = new App\Kegiatan;
        $kegiatan->name = "OMB UMN";
        $kegiatan->photo = "assets/kegiatan/logoombbig.png";
        $kegiatan->info = "Orientasi Mahasiswa Baru Universitas Multimedia Nusantara atau OMB UMN adalah kegiatan mahasiswa dibawah naungan BEM UMN yang bertujuan memberi bekal untuk masa pendidikan mahasiswa baru Universitas Multimedia Nusantara.";
        $kegiatan->ig = "ombumn";
        $kegiatan->link = "http://www.instagram.com/ombumn";
        $kegiatan->save();

        $lso = new App\Lso;
        $lso->name = "RUMPIN";
        $lso->photo = "assets/lso/logorumpinbig.png";
        $lso->info1 = "Rumpin merupakan sebuah LSO yang bergerak pada bidang sosial dan berfokus pada pendidikan. Dengan tagline “Together, Inspire for the Future”, kami percaya bahwa pendidikan dapat membantu mengubah masa depan. Tujuan utama Rumpin saat ini adalah memberikan bantuan untuk anak-anak yang masih belum mendapatkan pengetahuan dan edukasi yang layak. Kami juga mau menjadi wadah bagi mahasiswa Universitas Multimedia Nusantara untuk menyalurkan jiwa social mereka kepada anak-anak yang membutuhkan.";
        $lso->info2 = "Rumpin juga telah melaksanakan beberapa kegiatan sosial yang melibatkan mahasiswa Universitas Multimedia Nusantara sendiri dan menyalurkan bantuan ke beberapa lembaga, panti asuhan dan sekolah yang membutuhkan.";
        $lso->info3 = "";
        $lso->ig = "rumpin_umn";
        $lso->link = "http://www.instagram.com/rumpin_umn";
        $lso->save();

        $lso = new App\Lso;
        $lso->name = "U-BIZ";
        $lso->photo = "assets/lso/logoubizbig.png";
        $lso->info1 = "U-BIZ adalah organisasi bisnis dari mahasiswa untuk mahasiswa yang bertujuan meningkatkan jiwa kewirausahaan mahasiswa. Adapun U-BIZ UMN memiliki dua departemen.";
        $lso->info2 = "Pertama, Departemen U-BIZ Walkneat sebagai salah satu unit bisnis yang dimiliki oleh organisasi Ubiz. Memberikan mahasiswa kesempatan untuk mencoba terjun ke dunia bisnis secara langsung dengan menjalankan bisnis dalam bidang pelayanan cuci sepatu.";      
        $lso->info3 = "Kedua, Departemen Komunitas sebagai wadah mahasiswa untuk mengembangkan potensi diri dalam dunia bisnis dengan bantuan pengetahuan, sharing dan konsultasi dari Organisasi Ubiz.";      
        $lso->ig = "ubizumn";
        $lso->link = "http://www.instagram.com/ubizumn";
        $lso->save();

        $lso = new App\Lso;
        $lso->name = "DUTA ANTI NARKOBA";
        $lso->photo = "assets/lso/logodunarbig.png";
        $lso->info1 = "Duta Anti Narkoba atau Dunar merupakan Lembaga Semi Otonom yang berada dibawah naungan Badan Eksekutif Mahasiswa. Dunar dibentuk tahun 2016 dan  berhasil mempertahankan eksistensinya sampai saat ini dengan mewujudkan peraturan kampus yang menentang segala bentuk penyalahgunaan narkoba di lingkungan kampus UMN. Kegiatan internal Dunar berupa Seminar, Anti Narkoba Week, HANI, Awarding Night serta beberapa kegiatan kecil lainnya.";
        $lso->info2 = "Selain itu, kegiatan eksternal Dunar berupa kerjasama dengan berbagai organisasi luar seperti Fornasmapan dan Artipena. Dunar bertujuan untuk memberikan edukasi, membuat program - program menarik sepanjang tahun serta membagikan pengalaman berkesan bagi mahasiswa/i UMN.";      
        $lso->info3 = "";      
        $lso->ig = "dutaantinarkoba.umn";
        $lso->link = "http://www.instagram.com/dutaantinarkoba.umn";
        $lso->save();

        $lso = new App\Lso;
        $lso->name = "UMN MEDIC";
        $lso->photo = "assets/lso/logomedicbig.png";
        $lso->info1 = "UMN Medical Center merupakan suatu lembaga semi otonom yang berdiri di bawah pengawasan BEM dan bergerak di bidang kesehatan. Saat ini UMN medical Center sudah memiliki VI generasi yang sekarang dijalankan oleh generasi ke VI.";
        $lso->info2 = "Dengan tagline “Spread Health through Happiness”, UMN Medical Center mengajak seluruh Civitas akademika UMN untuk menjaga kesehatan dengan memberikan pertolongan pertama dan edukasi kepada civitas akademika UMN mengenai pentingnya menjaga kesehatan dan peduli kepada sesama melalui kampanye - kampanye interaktif serta seminar mengenai kesehatan. Selain itu, UMN Medical Center juga belajar mengenai kekeluargaan melalui berbagai kegiatan yang menyenangkan.";      
        $lso->info3 = "";      
        $lso->ig = "umnmedicalcenter";
        $lso->link = "http://www.instagram.com/umnmedicalcenter";
        $lso->save();

        $lso = new App\Lso;
        $lso->name = "KOMPAS CORNER";
        $lso->photo = "assets/lso/logokomcorbig.png";
        $lso->info1 = "Kompas Corner merupakan Lembaga Semi Otonom (LSO) yang telah berdiri selama 7 tahun sejak Mei 2013 dan berada di bawah direct supervision dari Harian Kompas. Kegiatan yang dijalankan oleh Kompas Corner antara lain, melakukan media visit, membuat podcast dan webseries, menyelenggarakan event di bawah naungan Harian Kompas serta menjadi media partner.";
        $lso->info2 = "Kompas Corner juga memiliki ruangan yang dapat diakses setiap hari Senin - Kamis pukul 09.00 - 17.00 dan 09.00 - 15.00 di hari Jumat oleh seluruh mahasiswa Universitas Multimedia Nusantara dan dapat dijadikan wadah untuk berdiskusi, bermain, membaca buku, hingga mengakses Kompas Data.";      
        $lso->info3 = "";      
        $lso->ig = "kompascorner";
        $lso->link = "http://www.instagram.com/kompascorner";
        $lso->save();

        $lso = new App\Lso;
        $lso->name = "U-STORE";
        $lso->photo = "assets/lso/logoustorebig.png";
        $lso->info1 = "U-Store merupakan koperasi mahasiswa berbadan hukum, beroperasi sejak tahun 2015 dan terletak di Gedung C lantai 1 Universitas Multimedia Nusantara. U-Store menyediakan berbagai kebutuhan untuk menunjang kegiatan perkuliahan dan gaya hidup sehari-hari.";
        $lso->info2 = "U-Store menjual produk otentik yang berciri khas Universitas Multimedia Nusantara seperti kaos, hoodie, lanyard, pin, dll. U-Store juga menyediakan jasa vendor bagi organisasi ataupun mahasiswa yang membutuhkan. Jasa ini dapat digunakan untuk memproduksi barang-barang keperluan organisasi. Selain itu, U-Store juga menyediakan jasa penyewaan Handie Talkie (HT) bagi organisasi maupun mahasiswa. U-Store selalu membuka kepengurusan baru setiap tahunnya untuk menghadirkan berbagai inovasi di masa yang akan datang.";      
        $lso->info3 = "";      
        $lso->ig = "kopmaustore";
        $lso->link = "http://www.instagram.com/kopmaustore";
        $lso->save();
    }
}
