<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::create([
            'user_id' => 1,
            'author_id' => 1,
            'category_id' => 1,
            'title' => "Gerakan Sholat Dipolitisasi Kubu 02 Demi Kecintaannya Dengan Prabowo",
            'slug' => "judul-pertama",
            'excerpt' => "Belajar agama sejak dini membuat saya paham gerakan sholat yang dipraktekkan setiap hari.",
            'body' => "Belajar agama sejak dini membuat saya paham gerakan sholat yang dipraktekkan setiap hari. Semua ada aturannya, setiap gerakan memiliki bacaan sendiri-sendiri. Bahkan mencegah agar tidak salah dan berakhir menjadi kebiasaan, orang tua saya membelikan beberapa buku tata cara sholat. Di sana tertera materi sunnah dan wajibnya gerakan dan bacaan yang sudah diatur sejak dahulu kala agama kita dibawakan oleh para nabi dan utusan Tuhan Yang Maha Esa.
            <p>
            Namun hari ini saya mendengar selentingan ucapan, tentang tata cara sholat yang dibelokkan oleh salah satu kubu capres. PAN, PAN, PAN, Zulkifli Hasan berhasil mencuri perhatian publik lewat aksi bar-barnya mempermainkan gerakan sholat.
            Awalnya dia memang hanya membicarakan persoalan pelantunan lafadz “Aamiin”, saat sholat berjamaah. Tapi merembet ke gerakan akhir sholat yakni attahiyat, dimana jari telunjuk harus dimunculkan saat bacaan sampai pada kalimat syahadat. Itu sudah ketentuan sekaligus aturan pusat, dari Sang Pencipta. </p>
            <p>
            Namun oleh Zulhas, telunjuk itu dibelokkan ke penambahan satu jari. Sehingga ada dua jari yang dibentangkan saat attahiyat, karena saking cintanya dengan seorang Prabowo. Sangat miris. Saya sambil ngelus dada, berseloroh “apa memang betul kalau menjadi pendukung seorang Prabowo itu harus bodoh, Tuhan?” </p>
            <p>
            Saya rasa Zulhas paham betul kaidah dari tata cara sholat itu, tapi dia coba permainkan agar bisa menarik perhatian publik dengan gaya bercanda yang dibawanya. Nabi, Rosulnya Allah memaparkan kisah di balik mengapa jari telunjuk dibentangkan saat pelafadztan ayat syahadat. </p>
            <p>
            Jari telunjuk itu menandakan Esa yang berarti satu, tidak ada yang lain. Dalam ajaran Islam, Tuhan tidak berbapak dan tidak beribu, tidak juga bersaudara. Karena Dia berdiri sendiri, Yang Menciptakan alam semesta seisinya.
            Kecintaannya kepada seorang Prabowo justru berakibat fatal dan menjerumuskan. Hal itu tidak boleh dilakukan, karena bisa merusak tatanan negara dan pola pikir manusia. Apa yang dilakukan Zulhas ini bukan sekedar bercanda, tapi tarafnya sudah meracuni otak rakyat. </p>
            <p>
            Coba bagaimana jika yang melihat video itu anak-anak, dapat dibayangkan sendiri kalau mereka sedang aktifnya meniru tindakan orang dewasa. Dan apa yang dipertontonkan Zulhas ke publik, sama sekali tidak bersifat mengedukasi. Dukungan itu bersifat tidak sehat dan justru mematikan karena mengandung racun. </p>
            <p>
            Majelis Ulama Indonesia sendiri sudah buka suara terkait candaan Zulhas ini, tergolong sebagai penistaan agama. Tapi bagaimana dengan pemerintah? Mereka bukan hanya terlibat hubungan dalam pemerintahan, tapi juga hubungan politik dalam sebuah koalisi yang berusaha menghalalkan segala cara untuk memenangkan Prabowo-Gibran.</p>
            <p>
            Sanksi memang seharusnya dikeluarkan untuk meluruskan semua, agar para pelaku yang mempermainkan agama ini jera dan menjadi pembelajaran bagi orang lain. Semua tujuannya tertuju pada seluruh elemen negeri ini, agar lebih berhati-hati mengaitkan hal krusial seperti halnya tata cara ibadah ummat.</p>
            <p>
            Namun apa itu nanti juga diberlakukan untuk Zulhas? Kalau sebelumnya ada komika yang dikejar Gus Miftah, karena menistakan agama lewat mempermainkan nama Nabi Muhammad yang menempel dalam nama panjang kebanyakan orang. Harusnya Gus Miftah juga merukyah Zulhas yang justru memberikan dampak buruk bagi publik. Agar fair khususnya umat islam yang tidak terima dengan celotehan penghinaan Tuhan lewat dua jari tangan dalam attahiyat. </p>
            <p>
            Kita tunggu saja, hanya akan jadi bangkai dan ditutupi dengan bangkai lain seperti kasus umpatan “Ndasmu” kemarin. Atau malah disingkirkan dengan air yang mengalir sampai bersih. Karena kekuatan yang disebut orang dalam sedang kencang-kencangnya berhembus di negara kita. Dan Zulhas tergolong di dalamnya.</p>

            Apalagi jelang pesta demokrasi ini, semakin brutal tingkahnya para penguasa. Ya begitulah, tidak lain dan tidak bukan, semua itu demi memenangkan Paslon 02, Prabowo-Gibran. Jadi yang membuat nama keduanya jelek harus ditutup serapi mungkin.
            "
        ]);
        Post::create([
            'user_id' => 1,
            'author_id' => 1,
            'category_id' => 1,
            'title' => "Jadi Politisi Itu Dengan Berproses Bukan Berpose",
            'slug' => "judul-kedua",
            'excerpt' => "Indro menyampaikan pendapatnya tentang bagaimana model partai politik hari ini",
            'body' => "Indro menyampaikan pendapatnya tentang bagaimana model partai politik hari ini, yang tidak punya ideologi untuk membentuk kader unggul. Tidak adanya ideologi itu yang membuat politik dinasti di negara kita langgeng.
            <p>
            Komedian Warkop itu menilai kualitas anak muda jaman sekarang yang masuk politik tanpa ideologi, menjadi pengaruh besar berkembangnya politik dinasti demi kepentingkan kekuasaan. Ya, saya tahu betul keresahan yang diungkap Indro adalah bentuk kekecewaannya dengan anak muda yang bisa instan menjadi cawapres hari ini lewat kekuatan bapaknya.</p>
            <p>
            Namun yang perlu kita tarik hikmahnya adalah gaya politik menjijikkan ini tidak boleh disamaratakan dengan style politik kawula muda lainnya. Masih ada yang waras, bahkan banyak. Mereka masih senang dan enjoy menikmati fase berprosesnya, tanpa melibatkan orang dalam hingga orang tuanya yang punya jabatan.</p>
            <p>
            Hal itu pula yang kini sedang diperlihatkan di depan publik, ketika Kaesang Pangarep menilai bingung dengan positioning Ganjar dalam kepemimpinannya nanti. Sontak hal itu membuat Ganjar menanggapi dengan selow dan penuh nasehat, layaknya seorang senior kepada juniornya.</p>
            <p>
            Perlu belajar menjadi seorang politisi, dia bergabung dengan dunia politik belum ada hitungan tahun. Baru menjelang pilpres ini, sedangkan Ganjar sudah mengawalinya sejak duduk di bangku perkuliahan. Dia ikut ambil bagian menyuarakan demokrasi di tahun 1998.
            Dia bergabung dengan PDIP karena ada tokoh idolanya yang memprakarsai berdirinya partai banteng bermoncong putih itu, yakni Presiden pertama RI Ir. Soekarno, panutan yang diceritakan bapaknya sejak Ganjar kecil.
            </p>
            <p>
            Ideologi Pancasila sudah mengakar puluhan tahun dalam integritasnya. Hingga sekarang dia bisa merangkul banyak anak muda untuk bergabung politik. Ambil saja contohnya Seno Bagaskara, yang kini sudah ikut menjadi jurkamnya.
            Seno tidak bergabung partai karena bapaknya, berangkat dari kepo dan kemauannya untuk belajar politik. Dia tidak langsung juga menjadi ketua umum partai. Padahal kalau dilihat dari banyak sudut pandang, orang akan tahu perbedaan antara Seno yang jadi jurkamnya Ganjar dan juga Kaesang yang jadi ketum PSI dan kabar-kabarnya mau dinobatkan sebagai Gubernur Jateng.</p>
            <p>
            Aduh, mulut ini gatal kalau tidak ketawa bung. Sejauh mana sih kemampuan Kaesang? Kok sampai mau dicalonkan jadi seorang gubernur? Kok ya ada-ada saja ini pendukungnya. Semakin keluar dari akal sehat saja.
            Saya tidak ingin memaksakan kehendak, jika memang pandangan politik seorang Kaesang memang dibatasi. Tapi secara nalar saja kita melihat perjalanan Ganjar, ketegasan dalam bersikap itu keluar darinya.</p>
            <p>
            Bahkan dalam kasus debat kemarin, saat dia memaparkan visi-misi dan program dengan jelas sesuai kebutuhan rakyat, meneruskan IKN karena potensi keberlanjutannnya menjadi bekal Indonesia emas dan merupakan amanat presiden pertama.
            Lalu saat menjawab permasalahan pupuk kandang yang jadi problem nasional, dia membawa data dan fakta di lapangan. Lalu potret lain ada saat dia menjelaskan tentang langkahnya mengatasi pengangguran, ketegasannya menuntaskan pelanggaran HAM sampai ke perangi korupsi dengan tindakan yang menjerakan para koruptor.</p>
            <p>
            Begitu Kaesang masih bingung menempatkan posisi Ganjar, hingga membandingkan dengan Prabowo dan Anies? Prabowo jelas melanjutkan, tanpa pilih-memilih dong? Sedangkan Anies adalah perubahan. Tapi Ganjar masih memegang teguh hitam-putih.
            Dia memilah mana yang putih, yang pantas dilanjutkan dan dipercepat dengan inovasi baru. Kemudian mencabuti yang hitam dan memutihkannya. Ya hitam itu seperti yang buruk diperbaiki demi keberlanjutan cita-cita Indonesia emas nanti. Seperti pengangkangan hukum dan penyanderaan koruptor, harus dicari formulanya untuk perbaikan.
            </p>
            <p>
            Ganjar mengajarkan kepada anak muda untuk belajar tanpa batas waktu, butuh effort yang besar untuk menjadi politisi ulung.
            Jangan rusak marwah ketum PSI hanya dengan kata provokasi bingung, demi capres yang kamu dukung sekarang, Mas Kesang.
            Proses adalah langkah sejati sebuah keberhasilan hal apapun dalam kehidupan. Dan Ganjar terus melewati itu, bahkan sampai detik ini dia merasakan yang namanya proses menuju kemenangan. Jabatan tidak perlu dikejar, cukup diusahakan. Karena Ganjar sudah mendapat amanah sebagai capres, maka dia berusaha untuk berproses dengan baik dan benar.</p>
            <p>
            Yang namanya curang dan instan itu adalah hal membahayakan, bagi kehidupan di dunia maupun dalam berbangsa dan bernegara. Karena Kaesang sudah ditunjuk menjadi ketum, maka dia harus belajar. Bukan mengandalkan boneka dengan cengengesan yang dibawanya untuk menarik perhatian publik.</p>
            "
        ]);
        Post::create([
            'user_id' => 1,
            'author_id' => 2,
            'category_id' => 1,
            'title' => "ktp sakti kartu serba guna untuk rakyat indonesia",
            'slug' => "judul-ketiga",
            'excerpt' => "Pernah suatu ketika aku memiliki pengalaman lucu dan sedikit memalukan",
            'body' => "Pernah suatu ketika aku memiliki pengalaman lucu dan sedikit memalukan, kisah ini berawal saat aku masih kuliah semester awal. Kala itu aku mengeluhkan sakit perut, mengingat diriku punya riwayat magh. Sehingga tanpa pikir panjang langsung aku memeriksakan diri ke rumah sakit.
            <p>
            Aku tak ragu untuk pergi ke rumah sakit, karena diriku punya kartu BPJS sehingga akan meringankan administrasi disana. Namun setibanya diruang pendaftaran, nyatanya bukan BPJS yang ku bawa, melainkan kartu skin care yang terselip cantik di dompetku.
            Fyi, terkadang kedua manikku sukar membedakan BPJS dengan kartu skin care, sebab warnanya hampir plek-ketiplek. Ahasil aku pun menjalani pengobatan secara reguler, atau jalur umum. Begitulah ribetnya kalo banyak kartu, sembarang kartu masuk dan jika akan digunakan malah terlupakan.</p>
            <p>
            Di era gempuran keriweuhan, nyatanya ada calon pemimpin yang teramat mengerti rakyat, mengerti kebutuhan dan keinginan rakyat supaya terbebas dari keribetan itu. Hadirnya KTP Sakti yang digagas oleh Ganjar-Mahfud akan memberi kemudahan rakyat, baik dalam penyaluran bantuan maupun pemberian layanan publik.</p>
            <p>
            Sejauh ini kita tahu bahwa banyak bantuan pemerintahan mengalir ke rakyat tidak mampu, namun sayangnya pembagian bantuan sosial belum merata. Masih banyak rakyat miskin yang sama sekali tidak pernah mendapatkan bansos, berbeda dengan rakyat mampu yang malah mendapatkan bansos dan parahnya lagi diterima. Itulah kesalahan-kesalahan yang harus segera dibenahi, supaya wong cilik tetap mendapatkan haknya dari pemerintahan.</p>
            <p>
            Dengan hadirnya KTP Sakti ala Ganjar-Mahfud, akan mempermudah proses penerimaan bansos bagi rakyat tidak mampu. Sebab melalui KTP Sakti, pendistribusian bansos akan lebih sesuai dan tepat sasaran.</p>
            <p>

            KTP Sakti bukanlah sekedar omongan belaka, namun sudah ada Perpresnya (Peraturan Presiden) 39 Nomor 2019 tentang Satu Data Indonesia (SDI). Tinggal disempurnakan melalui E-KTP yang dilengkapi RFID, dengan begitu fungsi KTP tidak hanya sebatas memberikan informasi kependudukan saja, namun menjadi kartu serba guna yang dapat diakses untuk mendapatkan layanan publik.
            Mulai dari jaminan pendidikan, kesehatan, pertaninan, perikanan, tenaga kerja, bantuan sosial seperti sembako dan lain sebagainya semua akan mudah diakses hanya menggunakan satu kartu saja, yakni KTP.</p>
            <p>
            Semua data rakyat Indonesia akan tertata dan tersistem, pun regulasi dan pantauannya lebih update, karena datanya selalu diproses secara berkala. Tentunya dari KTP yang jelas rakyat miliki memudahkannya untuk mendapatkan layanan yang baik serta terpadu. Pun mereka yang berhak mendapat bantuan, bisa ada dalam satu data dan itu dikelola langsung oleh pemerintah.
            Pembagian bantuan yang sebelumnya tidak setara dan lebih sering salah sasaran, akan termanajemen dengan baik, sehingga pendistribusiannya pun merata.</p>
            <p>
            Ganjar-Mahfud telah berkomitmen untuk memperkuat serta menyempurnakan bantuan pemerintah kepada masyarakat yang berhak. Dan lewat KTP Sakti itulah capres-cawapres dengan nomor urut 03 ini akan getol mengkampanyekan program jitunya, sekaligus menepis isu jika dirinya menjadi Presiden maka bansos akan dihilangkan.
            Sejatinya bansos adalah program negara yang telah berjalan, tujuannya untuk membantu dan meringankan beban masyarakat tidak mampu, sekaligus bentuk kepedulian pemerintah terhadap rakyatnya.</p>
            <p>
            Oleh sebab itu, kabar burung yang tersiar dimana-mana tentang pelenyapan program bansos jika Ganjar jadi presiden adalah black campaign. Sengaja dibangun guna menakut-nakuti rakyat, dan membentuk rasa ketidakpercayaan rakyat kepada Ganjar. Dengan begitu mereka ragu untuk memilih Ganjar.</p>
            <p>
            Padahal itu semua omong kosong, justru melalui KTP Sakti itulah salah satu upaya Ganjar-Mahfud dalam mengintegrasikan kebijakan pemerintahan untuk masa depan masyarakat Indonesia.
            Aku percaya, bahwa Ganjar-Mahfud akan benar-benar menunaikan kebijakan itu. Keduanya bersungguh-sungguh mengabdikan diri kepada nusa dan bangsa, bukan sedang mewujudkan ambisi belaka.
            Do’aku, semoga pemimpin masa depan adalah orang baik yang senantiasa mengayomi serta peduli terhadap rakyatnya. Dan semoga rakyat Indonesia menjatuhkan pilihannya kepada orang yang tepat, sebab ini untuk kelangsungan hidup warga negara Indonesia selama 5 tahun ke depan. Pun memanfaatkan momen yang tidak datang dua kali, yakni menjemput bonus demografi serta menyongsong Indonesia Emas 2045.
            "
        ]);
        Post::create([
            'user_id' => 1,
            'author_id' => 2,
            'category_id' => 1,
            'title' => "ktp sakti kartu serba guna untuk rakyat indonesia",
            'slug' => "judul-keempat",
            'excerpt' => "Pernah suatu ketika aku memiliki pengalaman lucu dan sedikit memalukan.",
            'body' => "Pernah suatu ketika aku memiliki pengalaman lucu dan sedikit memalukan, kisah ini berawal saat aku masih kuliah semester awal. Kala itu aku mengeluhkan sakit perut, mengingat diriku punya riwayat magh. Sehingga tanpa pikir panjang langsung aku memeriksakan diri ke rumah sakit.
            <p>
            Aku tak ragu untuk pergi ke rumah sakit, karena diriku punya kartu BPJS sehingga akan meringankan administrasi disana. Namun setibanya diruang pendaftaran, nyatanya bukan BPJS yang ku bawa, melainkan kartu skin care yang terselip cantik di dompetku.
            Fyi, terkadang kedua manikku sukar membedakan BPJS dengan kartu skin care, sebab warnanya hampir plek-ketiplek. Ahasil aku pun menjalani pengobatan secara reguler, atau jalur umum. Begitulah ribetnya kalo banyak kartu, sembarang kartu masuk dan jika akan digunakan malah terlupakan.</p>
            <p>
            Di era gempuran keriweuhan, nyatanya ada calon pemimpin yang teramat mengerti rakyat, mengerti kebutuhan dan keinginan rakyat supaya terbebas dari keribetan itu. Hadirnya KTP Sakti yang digagas oleh Ganjar-Mahfud akan memberi kemudahan rakyat, baik dalam penyaluran bantuan maupun pemberian layanan publik.</p>
            <p>
            Sejauh ini kita tahu bahwa banyak bantuan pemerintahan mengalir ke rakyat tidak mampu, namun sayangnya pembagian bantuan sosial belum merata. Masih banyak rakyat miskin yang sama sekali tidak pernah mendapatkan bansos, berbeda dengan rakyat mampu yang malah mendapatkan bansos dan parahnya lagi diterima. Itulah kesalahan-kesalahan yang harus segera dibenahi, supaya wong cilik tetap mendapatkan haknya dari pemerintahan.</p>
            <p>
            Dengan hadirnya KTP Sakti ala Ganjar-Mahfud, akan mempermudah proses penerimaan bansos bagi rakyat tidak mampu. Sebab melalui KTP Sakti, pendistribusian bansos akan lebih sesuai dan tepat sasaran.</p>
            <p>

            KTP Sakti bukanlah sekedar omongan belaka, namun sudah ada Perpresnya (Peraturan Presiden) 39 Nomor 2019 tentang Satu Data Indonesia (SDI). Tinggal disempurnakan melalui E-KTP yang dilengkapi RFID, dengan begitu fungsi KTP tidak hanya sebatas memberikan informasi kependudukan saja, namun menjadi kartu serba guna yang dapat diakses untuk mendapatkan layanan publik.
            Mulai dari jaminan pendidikan, kesehatan, pertaninan, perikanan, tenaga kerja, bantuan sosial seperti sembako dan lain sebagainya semua akan mudah diakses hanya menggunakan satu kartu saja, yakni KTP.</p>
            <p>
            Semua data rakyat Indonesia akan tertata dan tersistem, pun regulasi dan pantauannya lebih update, karena datanya selalu diproses secara berkala. Tentunya dari KTP yang jelas rakyat miliki memudahkannya untuk mendapatkan layanan yang baik serta terpadu. Pun mereka yang berhak mendapat bantuan, bisa ada dalam satu data dan itu dikelola langsung oleh pemerintah.
            Pembagian bantuan yang sebelumnya tidak setara dan lebih sering salah sasaran, akan termanajemen dengan baik, sehingga pendistribusiannya pun merata.</p>
            <p>
            Ganjar-Mahfud telah berkomitmen untuk memperkuat serta menyempurnakan bantuan pemerintah kepada masyarakat yang berhak. Dan lewat KTP Sakti itulah capres-cawapres dengan nomor urut 03 ini akan getol mengkampanyekan program jitunya, sekaligus menepis isu jika dirinya menjadi Presiden maka bansos akan dihilangkan.
            Sejatinya bansos adalah program negara yang telah berjalan, tujuannya untuk membantu dan meringankan beban masyarakat tidak mampu, sekaligus bentuk kepedulian pemerintah terhadap rakyatnya.</p>
            <p>
            Oleh sebab itu, kabar burung yang tersiar dimana-mana tentang pelenyapan program bansos jika Ganjar jadi presiden adalah black campaign. Sengaja dibangun guna menakut-nakuti rakyat, dan membentuk rasa ketidakpercayaan rakyat kepada Ganjar. Dengan begitu mereka ragu untuk memilih Ganjar.</p>
            <p>
            Padahal itu semua omong kosong, justru melalui KTP Sakti itulah salah satu upaya Ganjar-Mahfud dalam mengintegrasikan kebijakan pemerintahan untuk masa depan masyarakat Indonesia.
            Aku percaya, bahwa Ganjar-Mahfud akan benar-benar menunaikan kebijakan itu. Keduanya bersungguh-sungguh mengabdikan diri kepada nusa dan bangsa, bukan sedang mewujudkan ambisi belaka.
            Do’aku, semoga pemimpin masa depan adalah orang baik yang senantiasa mengayomi serta peduli terhadap rakyatnya. Dan semoga rakyat Indonesia menjatuhkan pilihannya kepada orang yang tepat, sebab ini untuk kelangsungan hidup warga negara Indonesia selama 5 tahun ke depan. Pun memanfaatkan momen yang tidak datang dua kali, yakni menjemput bonus demografi serta menyongsong Indonesia Emas 2045.
            "
        ]);

        Post::create([
            'user_id' => 1,
            'author_id' => 1,
            'category_id' => 1,
            'title' => "Ganjar OTW Kena Umpatan “Ndasmu Pengadilan HAM”?",
            'slug' => "judul-kelima",
            'excerpt' => "Di sela-sela kegiatan pagi tadi, saya dikejutkan dengan sebuah video yang datang di tengah-tengah kader partai Gerindra. ",
            'body' => "Di sela-sela kegiatan pagi tadi, saya dikejutkan dengan sebuah video yang datang di tengah-tengah kader partai Gerindra. Prabowo Subianto sebagai ketua, duduk nyaman di kursi kebesarannya dengan para kader yang mengelilinginya.
            Saya kira itu acara konsolidasi atau hal bernilai positif lainnya. <p>

            Tapi video berdurasi pendek yang diupload oleh salah satu akun tiktok itu menampilkan Prabowo yang sedang meluapkan kekesalannya, dari peristiwa debat beberapa hari yang lalu.
            Lebih tepatnya saat dia disinggung tentang putusan Mahkamah Kontitusi yang melanggar etik. Anies Baswedan hanya bertanya tentang perasaannya tentang hasil putusan MKMK, yang mematenkan bahwa putusan tentang batas umur capres-cawapres oleh MK itu melanggar etik.
            Memang benar putusan MK bersifat final, tapi bagaimana tentang legitimasinya? Lalu bagaimana dengan fatsun politik yang berjalan? Benarkah Gibran tetep etis menjadi cawapresnya, dengan kawalan embel-embel anak presiden? </p>
            <p>
            Akan baik-baik saja jika Prabowo cukup menjawab dengan tidak keberatan dan merasa enjoy, karena pakar hukumnya sudah bilang itu final dan boleh-boleh saja tanpa terbebani prosesnya yang penuh kejanggalan.
            Berhenti di situ sudah cukup, tapi mengapa sampai membangkitkan emosinya? Sontak gemoy yang dia agung-agungkan ambyar berkeping-keping. Dan semakin parah lagi tatkala video tadi tersebar, yang memperlihatkan arogansi Prabowo tidak lagi terbendung.
            Ya, umpatan “Soal etik, etik, etik…. Ndasmu etik” bergaung memenuhi ruang yang ditempati kader Gerindra. Dia kira hal itu tidak bermasalah karena hanya di hadapan kadernya, bukan di depan publik. Karena yang dia tampilkan di publik hanya kelihaiannya berjoget dan keyword gemoy yang membuat muak.
            </p>
            <p>
            Akhirnya bangkai itu tercium juga, setelah sekian lama disembunyikan dengan menggunakan topeng “penerus Jokowi”. Dia sudah mulai kegerahan bersembunyi di balik sifat sabarnya yang selalu ditampilkan ke publik. Jokowi yang dari kemarin ikut menutupinya, mungkin merasa kecolongan.
            Ya bagaimana kalau memang sifat bawaan dari lahir, mana bisa diredam selamanya? Hanya berlaku sementara saja.  Sebelumnya Jokowi sendiri menjadi korban umpatan dari Prabowo, saat keduanya menjadi lawan dalam kontestasi pilpres 2014 dan 2019. Karena kontestasi selalu dimenangkan oleh Jokowi, Prabowo berusaha menjadi kritikus sekaligus pengamat yang jeli.
            </p>
            <p>
            Saking jelinya dia membelokkan setiap usaha Jokowi, seperti ketidakpercayaannya dengan pertumbuhan ekonomi kala itu. Penghinaannya ditampilkan vulgar dengan mengumpati pemerintah Jokowi berakhir viral. “Pertumbuhan ekonomi Indonesia adalah 5%..., 5% ndasmu”, begitu kelakarnya penuh nada mencemooh dan rasa kesal serta tidak terima bahwa lawannya lebih baik darinya.
            Hal itu yang kini terjadi saat dia berhadapan dengan Anies. Itu baru disinggung perasaan tentang pelanggaran etik tentang putusan MK. Bagaimana dengan Ganjar Pranowo, yang kala itu menanyakan keseriusan Prabowo untuk menghadirkan keadilan bagi korban pelanggaran HAM?
            </p>
            <p>
            Akankah Ganjar juga mendapat umpatan serupa berbunyi “Ndasmu Pengadilan HAM”?
            Ya mungkin tadinya yang terpublish memang umpatan tentang pertanyaan Anies soal putusan MK, tapi  kita kan tidak tahu kalau masih adakah umpatan lain di belakangnya. Bisa saja. Karena dari sesi debat itu Prabowo memang berapi-api ketika disinggung masa lalunya.
            Selain pelanggaran etik MK, Ganjar juga menanyakan tentang akankah capres 02 itu membuat pengadilan HAM untuk membantu keluarga korban pelanggaran, serta menemukan makam dan mengusut terakhir keberadaan korban. Tapi emosi Prabowo justru meluap.
            Dia bahkan marah karena isu ini kembali dikeluarkan setiap pilpres. Ganjar menanyakan hal itu karena dari pilpres lalu, Prabowo tidak memberikan solusi dan komitmen kuat. Maka hal itu yang terus-terusan dikejar oleh keluarga korban dan pihak yang masih penasaran dimana letak pertanggungjawaban Prabowo, selain dipecatnya dari dunia militer.

            </p>
            <p>
            Karena hingga sekarang gambarannya sangat jomplang, saat melihat Prabowo bebas menikmati jabatan hingga maju nyapres terus-terusan. Sedangkan keluarga korban masih hilir mudik mencari kepastian hukum bagi anak, adek, kakak dan kepala keluarga mereka yang hilang ditelan kerusuhan orba.
            Lagi-lagi pertanyaan itu masih mengambang tanpa kejelasan Prabowo, maka disikat oleh Ganjar. Jika dia nanti jadi presideN maka dia akan menuntaskan pelanggaran HAM. Ganjar akan berdiri bersama keluarga korban demi sebuah keadilan.
            Prabowo masih seperti yang dulu, masih arogan, abu-abu, manipulatif dengan kalimat-kalimat ambigunya dan pastinya penuh emosi. Ya kita bisa lihat sendiri keyword “Ndasmu” yang mungkin bisa diklasifikasikan sebagai kata umpatan dan kasar kembali bergaung, secara berulang keluar dari mulutnya.
            </p>
            <p>
            Masih mau bilang dia adalah calon pemimpin yang baik? Masih mau memuji bahwa Prabowo capres gemoy yang beradab? Aduh bung, jangan mau dibodohi lagi ya. Demi masa depan kita, harus pakai akal sehat dan hati nurani.
            </p>
            "
        ]);

        Post::create([
            'user_id' => 1,
            'author_id' => 1,
            'category_id' => 1,
            'title' => "Tiga Harmonisasi Ganjar-Mahfud Bersama Rakyat”?",
            'slug' => "judul-keenam",
            'excerpt' => "Setiap mendengar lagu Bagimu Negeri, mata saya berbinar, ada letupan-letupan kecil di hati.",
            'body' => "

            Setiap mendengar lagu Bagimu Negeri, mata saya berbinar, ada letupan-letupan kecil di hati. Penjiwaan dalam dendangan itu begitu kental, menyentuh kalbu yang terdalam. Sudah layaknya janji, sudah seperti komitmen bagi kami, anak bangsa, untuk menjaga tumpah darah Indonesia, dari orang-orang yang berusaha memecah-belah negara dengan berbagai cara.
            <p>
            78 tahun negara kita merdeka, untuk apa jika kemerdekaan itu tidak terimplementasi dalam diri setiap warganya? Kita sudah pernah merasakan matinya demokrasi selama 32 tahun bersama pemerintahan orde baru. Setelah itu kita bisa keluar dari kungkungan itu dan kembali menghirup udara segar kemerdekaan.
            Pasca 25 tahun umur reformasi terlepas dari zaman dibungkamnya suara rakyat, haruskah kita kembali ke zaman orba itu hanya karena salah memilih pemimpin? Bung, demokrasi dimana rakyat yang memegang tahta tertinggi dalam menentukan pemimpinnya, sudah diperjuangkan oleh Presiden kelima Megawati Soekarnoputri dengan perjuangannya kala itu.
            </p>
            <p>
            Masak iya kita menyerahkan kembali kemerdekaan itu kepada penguasa yang hanya mementingkan urusannya? Tidak. Dijajah negara sendiri, tidak boleh ada lagi. “Bagimu Negeri” bersenandung penuh makna di telinga saat tiga jari mengacung di udara.
            Ya hari ini panggilan untuk mengabdi pada tanah air itu berdengung jelang pilpres 2024. Datangnya dari tanah di sebelah Timur, tepatnya di Merauke, Papua. Ganjar Pranowo memulai kampanye hari pertamanya di tanah Papua. Sedangkan wakilnya, Mahfud MD, di ujung Barat yakni Sabang, Aceh.
            </p>
            <p>
            Mereka sudah bersepakat menggunakan waktu kampanyenya ini dengan baik melalu pembagian tugas. Desa adalah tujuan mereka untuk menyapa warga. Disana banyak cerita mengalun, banyak aspirasi pula yang dimasukkan dalam kantongnya.
            Bahkan tak segan, solusi dari permasalahan seperti kesehatan ia berikan langsung. Atas izin Bawaslu, Ganjar rencanakan segera untuk mendirikan Puskesmas. Dengan programnya 1 desa 1 faskes 1 nakes, implementasinya nyata digarap di tanah Kondo. Ganjar tidak mau menunda karena kesehatan adalah kebutuhan mendesak.
            </p>
            <p>
            Di Jateng sendiri dia sudah membangun puskesmas hingga 70 lebih bangunan. Hanya dia calon pemimpin yang peduli dengan kesehatan rakyat lewat aksi nyata tanpa bualan ataupun janji manis, Ganjar merealisasikan hal itu.
            Tiga yang menjadi nomor urutnya dalam kontestasi pilpres nanti, nyatanya sudah memiliki banyak makna. Seperti yang nampak dalam pergerakan gesitnya saat ada problem yang menghinggapi kehidupan warga.
            </p>
            <p>
            Dia tidak diam, terus bergerak melakukan upaya untuk menyejahterakan rakyatnya. Jika bergerak belum cukup, maka dia harus berjuang untuk mencapai satu harapan yang membawa kemaslahatan bagi rakyat. Selanjutnya kita akan berhasil, karena kita harus optimistis bahwa kejujuran dalam berproses itu akan berbuah manis di akhir nanti.
            Semua dimulai dari pergerakan Ganjar dan Mahfud di hari kampanyenya, di mulai dari Sabang dan Merauke. Ada 3 makna dalam hari pertama kampanye  ini, mengapa akhirnya mereka memilih Sabang dan Merauke menjadi daerah yang keduanya sambangi.
            </p>
            <p>
            Pertama, mereka terinspirasi dengan lagu nasional “Dari Sabang Sampai Merauke” yang menunjukkan besar negara kita terbentang dari ujung timur ke barat.
            Kedua karena sila ke-3, Persatuan Indonesia. Walaupun mereka jauh tapi masih terhubung dan masih bersama dalam pertemuan lewat video teleconference, yang membaurkan warga di Sabang dan Merauke.
            </p>
            <p>
            Terakhir, ketiga karena Sabang dan Merauke adalah titik awal. Dari timur menjadi awal dimulainya waktu untuk melakukan rutinitas kegiatan sehari-hari. Dari sana tempat menyambut matahari terbit paling awal, tempat di mana rakyatnya mengawali waktu kerja dan usaha.
            Sedangkan Sabang adalah titik awal berdirinya kerajaan Islam pertama di Nusantara. Maka semangat membangun negeri menjadi berkobar dari awal mula semua berpusat. Semangat untuk membawa salam 3 jari itu terus tergaung dimanapun Ganjar dan Mahfud berada.
            </p>
            <p>
            Sama halnya saat keduanya bersilaturahmi ke Makassar, salam 3 jari di sana menjadi gerakan massif yang digaungkan warga. Dengan salam 3 jari mereka mendeklarasikan dukungan dan kesiapannya untuk memenangkan Ganjar-Mahfud dalam kontestasi pilpres 2024 nanti.
            Kali ini salam 3 jari juga teracung di Merauke saat menyanyikan lagu “Bagimu Negeri”. Penuh semangat persatuan, penuh spirit kemenangan dan punuh suka cita yang menghinggapi warga Waningap. Ya dengan resminya kampanye dibuka, Ganjar merapatkan barisannya untuk bergerak.
            </p>
            <p>
            Jika ada gangguan dan hambatan, maka dia dan barisannya akan berjuang sekuat tenaga untuk melawan kecurangan dalam bentuk apapun. Tapi harus sesuai aturan, jangan sampai perlawanan itu melanggar konstitusi atau aturan yang berlaku lainnya. Maka Ganjar membekali para relawan dengan buku saku, agar tetap berjalan pada relnya.
            Kalau sudah bergerak dan berjuang, maka akhirnya kita harus optimis untuk berhasil seperti tujuan awal kita memenangkan Ganjar-Mahfud. Tentu semua harus dilalui dengan proses yang benar dan dengan cara demokratis. Karena kemenangan dengan demokratis itu adalah kemenangan yang tepat dan sesuai dengan suara rakyat Indonesia yang memegang posisi tertinggi demokrasi di negeri ini.
            </p>
            "
        ]);

        Post::create([
            'user_id' => 1,
            'author_id' => 1,
            'category_id' => 2,
            'title' => "Bastianini Remuk Redam di MotoGP 2023",
            'slug' => "judul-ketujuh",
            'excerpt' => "Jakarta - Enea Bastianini gagal memenuhi ekspektasi di musim debutnya dengan tim pabrikan Ducati. Musim yang sulit secara fisik dan mental bagi pebalap Italia itu.",
            'body' => "

            Jakarta - Enea Bastianini gagal memenuhi ekspektasi di musim debutnya dengan tim pabrikan Ducati. Musim yang sulit secara fisik dan mental bagi pebalap Italia itu.
            Bastianini promosi dari Gresini ke Ducati setelah finis ketiga di 2022. Hal itu juga berarti bahwa Bastianini melompat dari tadinya menunggangi Desmosedici GP21 langsung ke GP23 untuk musim 2023.
            <p>
            Perubahan tersebut berdampak besar karena Bastianini memiliki kepala kru yang baru (Marco Rigamonti) dan tim yang baru pula. Petaka langsung menghampiri Bastianini di sprint race pada seri pertama. Bastianini bersenggolan dengan Luca Marini sehingga jatuh dan mengalami retak tulang selangka.
            </p>
            <p>
            Baca artikel detiksport, Bastianini Remuk Redam di MotoGP 2023
            </p>
            <p>
            Alhasil, Enea Bastianini harus melewatkan balapan utama Portimao dan empat seri berikutnya sebelum comeback di Mugello pada bulan Juni. Bastianini kemudian jatuh lagi di Catalunya, yang melukai pergelangan kaki dan tangan kirinya.
            </p>
            <p>
            Alhasil, rider berusia 26 tahun itu lagi-lagi harus menepi sebelum comeback di Mandalika. Bastianini berarti melewatkan total 16 balapan dalam 20 seri di sepanjang musim lalu dan cuma finis di urutan 15 klasemen akhir. Satu-satunya penghiburan bagi Bestia hanyalah ketika tampil sebagai juara di balapan utama Malaysia.
            </p>
            <p>
            'Itu adalah musim yang sulit secara mental dan fisik, kata dia kepada Speedweek. Setelah cedera pertama, aku sadar sulit atau bahkan mustahil bisa kembali ke lintasan dengan cepat. Saat itu aku juga menyadari peluang juaraku hanya 0 sampai 1, itu sangat-sangat aneh.
            </p>
            <p>
            Saat aku kembali, bahuku enggak nyaman untuk balapan di tiga atau empat seri pertama, dan saat aku sudah pulih, aku jatuh lagi dan terluka lagi. Di segi mental, saat itu sangat sulit. Aku toh selalu fokus dan positif, tapi sulit melakukannya.
            </p>
            <p>
            Namun, aku kembali, aku menang, dan itu sangat menyenangkan untuk kami semua. Aku kompetitif di Malaysia dan Qatar karena kami memahami sesuatu Tim juga mengenalku lebih baik, tapi memang betul akan sulit untukku memenangi titel juara bahkan tanpa cedera sekalipun, Bastianini menambahkan.
            </p>
            "
        ]);


        Post::create([
            'user_id' => 2,
            'author_id' => 2,
            'category_id' => 2,
            'title' => "6 Pemain Skotlandia yang Merumput di Luar Inggris pada 2023/2024",
            'slug' => "judul-kedelapan",
            'excerpt' => "Dalam beberapa tahun terakhir, Skotlandia kembali memasuki era keemasan yang ditandai dengan munculnya pemain-pemain bintang. Hasilnya, The Tartan Army berhasil lolos ke Euro 2024 Jerman setelah duduk sebagai runner-up Grup A di bawah Spanyol.",
            'body' => "

            Dalam beberapa tahun terakhir, Skotlandia kembali memasuki era keemasan yang ditandai dengan munculnya pemain-pemain bintang. Hasilnya, The Tartan Army berhasil lolos ke Euro 2024 Jerman setelah duduk sebagai runner-up Grup A di bawah Spanyol.
<p>


Selama ini, pemain asal Skotlandia mayoritas hanya bermain di Scottish Premiership atau English Premier League. Pada 2023/2024, terdapat enam pemain asal Skotlandia yang mulai merumput di liga top lain selain dua liga di Inggris Raya tersebut.
</p>

<p>

Siapa saja pemain itu dan seperti apa kiprahnya sepanjang paruh pertama musim ini? Berikut daftar pemain Skotlandia yang merumput di luar Inggris pada 2023/2024!
</p>

<p>

1. Max Johnston belum diandalkan sebagai bek kiri utama Sturm Graz

<p>

Max Johnston baru saja bergabung dengan Sturm Graz dari Motherwell pada musim panas 2023. Ia didatangkan untuk menambah amunisi bek kanan di skuad Die Schwoazn pada 2023/2024. Sayangnya, mengingat usianya yang masih muda, ia belum dipilih sebagai pemain inti di tim senior. Bahkan, Johnston terkadang masih diturunkan untuk memperkuat tim Sturm Graz II.
</p>

<p>

2. Jack Hendry jadi bek tengah andalan Al-Ettifaq

<p>

Jack Hendry adalah satu-satunya pemain Skotlandia yang merumput di Liga Arab Saudi bernsama Al-Ettifaq. Sebelum itu, ia sudah memiliki segudang pengalaman membela beberapa klub ternama di Eropa, seperti Celtic dan Club Brugge. Kini, ia dipilih sebagai bek tengah utama di tim asal Dammam, Arab Saudi, tersebut. Hendry juga didapuk sebagai pemain andalan di Timnas Skotlandia.
</p>

<p>

3. Josh Doig sering diturunkan sebagai di pos bek kiri Hellas Verona

</p>

<p>

Josh Doig termasuk bintang muda yang dimiliki Skotlandia. Pemain berusia 21 tahun ini didatangkan Hellas Verona dari Hibernian pada musim panas 2022. Pada 2023/2024, ia sudah diturunkan sebagai bek kiri utama Gialloblu, tetapi cedera memaksanya absen. Dalam dua laga Serie A terakhir, ia sudah kembali diturunkan tetapi belum masuk dalam starting line-up.
</p>

<p>

4. Kieran Tierney kerap mengisi pos bek kiri Real Sociedad
Kieran Tierney memutuskan berlabuh ke Real Sociedad setelah melihat minimnya potensi diturunkan bersama Arsenal di bawah asuhan Mikel Arteta. Pada 2023/2024, performa Tierney di tim Txuri-Urdin bisa dibilang cukup baik. Ia kerap masuk dalam starting line-up. Sayangnya, pada tengah musim, ia terdampak cedera yang memaksanya absen selama 5 pekan. Namun, dalam beberapa laga terakhir, pemain kelahiran Isle of Man ini sudah diturunkan kembali sebagai bek kiri utama di bawah mentor Imanol Alguacil.
</p>

<p>

5. Lewis Ferguson terpilih sebagai gelandang serang andalan Bologna
Lewis Ferguson bisa dibilang sebagai pemain Skotlandia yang tengah mendapat sorotan musim ini. Pemain berusia 24 tahun ini sudah bergabung dengan Bologna dari Aberdeen pada musim panas 2022. Sejak musim lalu, ia sudah masuk sebagai gelandang serang utama timnya. Bahkan, Ferguson termasuk pemain yang berkontribusi atas kesuksesan I Rossoblu menembus papan atas pada 2023/2024.
</p>


            "
        ]);

        Post::create([
            'user_id' => 1,
            'author_id' => 1,
            'category_id' => 3,
            'title' => "5 Cara Bertahan dan Bangkit Setelah Mengalami Kegagalan dalam Bisnis",
            'slug' => "judul-kesembilan",
            'excerpt' => "Mengalami kegagalan dalam bisnis adalah salah satu bagian dari perjalanan menuju kesuksesan. Mereka yang saat ini sudah berhasil, biasanya berasal dari perjalanan panjang dan jatuh bangun dari kegagalan yang berhasil dilalui.",
            'body' => "

            Mengalami kegagalan dalam bisnis adalah salah satu bagian dari perjalanan menuju kesuksesan. Mereka yang saat ini sudah berhasil, biasanya berasal dari perjalanan panjang dan jatuh bangun dari kegagalan yang berhasil dilalui.
<p>
Bagaimanapun juga, kemampuan untuk bangkit setelah kegagalan adalah kunci penting dalam mencapai tujuan bisnis. Berikut adalah lima cara yang dapat membantu kamu bertahan dan bangkit setelah mengalami kegagalan dalam bisnis.
</p
<p>
Salah satu langkah pertama untuk bangkit dari kegagalan adalah berusaha belajar dari pengalaman tersebut. Cari tahu penyebab kegagalan, analisis apa yang bisa diperbaiki, dan pahami pelajaran yang dapat diambil dari situasi tersebut.

Ini akan membantu kamu menghindari kesalahan yang sama di masa depan. Sehingga kamu bisa tumbuh sebagai pemimpin yang lebih bijaksana.
</p>
<p?>
Agar bisa sukses, sebagai pebisnis kamu perlu menggunakan kegagalan sebagai pelajaran. Ini berguna untuk memperbaiki
strategi dan rencana bisnis adalah langkah kunci untuk bangkit.

Evaluasi kembali tujuan bisnis, strategi yang digunakan, dan ganti rencana yang diperlukan untuk mencapai kesuksesan di
masa yang akan datang. Jangan takut untuk melakukan perubahan yang diperlukan untuk memperbaiki kinerja bisnismu.</p>
<p>
    Penting sekali untuk membangun mental positif dan ketahanan saat menghadapi kegagalan. Lihatlah kegagalan sebagai
    batu loncatan untuk mencapai kesuksesan yang lebih besar, bukan sebagai akhir dari perjalananmu.

    Kamu perlu berpegang teguh pada visimu dan tetap fokus. Selanjutnya, jangan lupa berkomitmen untuk terus maju
    meskipun menghadapi rintangan.</p>
<p>
    Mencari dukungan dari mentor atau komunitas bisnis juga bisa menjadi kunci untuk bertahan dan bangkit setelah
    kegagalan. Alangkah lebih baik jika kamu berbagi pengalaman dengan mereka yang pernah mengalami hal serupa atau
    mendapatkan bimbingan dari mereka yang lebih berpengalaman.

    Selain dapat memberikan wawasan baru, ini juga bisa menjadi motivasi bagimu untuk melangkah maju. Kamu tidak akan
    merasa sendirian menghadapi berbagai kegagalan tersebut.</p>
<p>Setelah mengalami kegagalan, penting sekali untuk membangun kembali jaringan dan relasi bisnismu. Ingat, kegagalan
    bukanlah akhir dari segalanya. Yakinlah kamu bisa melewati semuanya dengan keterbukaan, kejujuran, dan usaha untuk
    memperbaiki. Dengan ini, kamu dapat membangun kembali kepercayaan dengan mitra bisnis, klien, atau investor.

    Mengalami kegagalan dalam bisnis adalah bagian dari proses perjalanan menuju kesuksesan. Bagaimanapun juga, responmu
    terhadap kegagalan tersebut adalah kunci seberapa jauh kamu bisa bertahan dan bangkit. Yakinlah kamu dapat bangkit
    lebih kuat dan menuju ke arah kesuksesan yang lebih besar!</p>

"
]);

Post::create([
'user_id' => 2,
'author_id' => 2,
'category_id' => 3,
'title' => "Sandiaga Ajak Anak Muda Terjun Bisnis Kuliner di Luar Negeri",
'slug' => "judul-kesepuluh",
'excerpt' => "Jakarta, IDN Times - Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf), Sandiaga Uno, mengajak
anak-anak
muda dan diaspora Indonesia untuk optimis dalam mengembangkan bisnis kuliner.",
'body' => "

Jakarta, IDN Times - Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf), Sandiaga Uno, mengajak anak-anak muda dan
diaspora Indonesia untuk optimis dalam mengembangkan bisnis kuliner.
<p>
    Ajakan itu disampaikan Sandiaga kala mengunjungi Haryanto Resto di Nad Al Sheba 1, Dubai, Uni Emirat Arab (UEA) pada
    Sabtu (6/1/2024).
</p>
<p>
    Hari ini saya bersyukur karena saya bisa langsung mengunjungi Haryanto Asia fusion ini karya daripada alumni
    Poltekpar NHI Bandung yang berkumpul di Dubai untuk menciptakan satu sentra ekonomi kreatif Indonesia, ujar Sandiaga
    dalam pernyataan resmi yang diterima IDN Times.
    Jakarta, IDN Times - Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf), Sandiaga Uno, mengajak anak-anak muda dan
    diaspora Indonesia untuk optimis dalam mengembangkan bisnis kuliner.
</p>
<p>
    Ajakan itu disampaikan Sandiaga kala mengunjungi Haryanto Resto di Nad Al Sheba 1, Dubai, Uni Emirat Arab (UEA) pada
    Sabtu (6/1/2024).
</p>
<p>
    Hari ini saya bersyukur karena saya bisa langsung mengunjungi Haryanto Asia fusion ini karya daripada alumni
    Poltekpar NHI Bandung yang berkumpul di Dubai untuk menciptakan satu sentra ekonomi kreatif Indonesia, ujar Sandiaga
    dalam pernyataan resmi yang diterima IDN Times.
</p>
<p>
    Dalam kunjungannya tersebut, Sandiaga juga mengaku terkesima dengan banyaknya talenta Indonesia yang bisa
    mendapatkan kesempatan berkarier di industri kuliner luar negeri, khususnya masakan-masakan Indonesia.
</p>
<p>
    Sebanyak 12 pekerja asal Indonesia pun berkarier di Restoran Haryanto Dubai.

    Jadi ini adalah bagian daripada kita mendorong program Indonesia Spice of The World sehingga bisa kita gunakan untuk
    promosi pariwisata kita, ucap Sandiaga.
</p>
<p>

    Mantan Wakil Gubernur DKI Jakarta itu berharap, anak muda dan diaspora Indonesia bisa mengikuti jejak Haryanto
    tersebut.

    Mudah-mudahan banyak anak-anak muda kita lulusan Poltekpar NHI maupun juga lulusan yang lain terinspirasi dari kisah
    Haryanto. Haryanto mulai mengembangkan bisnis sekitar 10-15 tahun yang lalu dan sekarang sudah bisa memberikan
    makanan-makanan berkualitas ke setingkat Syekh Muhammad, tutur Sandiaga.
</p>
<p>
    Sandiaga pun optimistis akan semakin banyak para pengusaha kuliner dari kalangan anak muda yang dapat membangkitkan
    ekonomi Indonesia.

    Jadi saya sangat bangga bahwa kita dipercaya dan Indonesia bisa menjadi juara bukan hanya di tanah air tapi juga di
    mancanegara, katanya.

</p>

"
]);


Post::create([
'user_id' => 1,
'author_id' => 1,
'category_id' => 4,
'title' => "5 Hewan Unik yang Hidup di Gurun Sahara, Ada Hewan Berbahaya!",
'slug' => "judul-kesebelas",
'excerpt' => "Siapa yang tak tahu dengan Gurun Sahara? Gurun yang terletak di Benua Afrika ini merupakan padang pasir
terluas di dunia. Dengan luasnya yang mencapai 9,4 juta km kubik, Gurun Sahara melintasi 10 negara, yaitu Aljazair,
Chad, Libya, Mali, Mesir, Maroko, Sudan, Tunisia, dan Niger.",
'body' => "
Siapa yang tak tahu dengan Gurun Sahara? Gurun yang terletak di Benua Afrika ini merupakan padang pasir terluas di
dunia. Dengan luasnya yang mencapai 9,4 juta km kubik, Gurun Sahara melintasi 10 negara, yaitu Aljazair, Chad, Libya,
Mali, Mesir, Maroko, Sudan, Tunisia, dan Niger.
<p>
    Meskipun tampak gersang dan tergolong wilayah ekstrem, Gurun Sahara adalah habitat bagi beragam spesies hewan.
    Dilansir WWF, diperkirakan terdapat sekitar 70 jenis mamalia, 90 jenis burung, 100 jenis reptile, dan sejumlah
    artropoda yang menghuni gurun ini. Dari hewan-hewan tersebut, ada beberapa hewan yang tergolong unik, baik dari
    kemampuan maupun penampilannya. Apa saja hewan-hewan tersebut? Burung sekretaris atau Sagittarius serpentarius
    merupakan salah satu hewan unik yang dapat ditemui di Gurun Sahara. Burung ini dapat dikenali dari kakinya yang
    panjang, jambul yang terdiri dari 20 bulu hitam di belakang kepalanya, serta bulu tubuhnya yang berwarna abu-abu
    keputihan dengan dua bulu ekor panjang berujung hitam. Burung ini bahkan tampak seperti mengenakan celana pendek
    karena bulu berwarna hitam pada bagian atas kakinya yang panjang.
</p>
<p>
    Dilansir National Geographic, burung sekretaris dinamai demikian karena penampilannya yang mirip sekretaris
    pengacara pada abad ke-19. Warna bulunya mengingatkan pada sosok sekretaris yang biasanya memakai jas abu-abu dan
    celana hitam selutut. Selain itu, jambul pada burung ini tampak seperti sedang menyisipkan pena di balik telinga,
    seperti yang dilakukan oleh seorang sekretaris.
</p>
<p>
    Burung sekretaris merupakan jenis burung predator. Burung ini merupakan salah satu dari dua jenis burung—selain
    burung caracaras—yang berburu di darat, bukan di udara. Adapun mangsa utamanya adalah ular. Hal ini sesuai dengan
    nama ilmiahnya yang berarti “sang pemanah ular”. Setelah menangkap ular, burung sekretaris akan membunuhnya dengan
    mengentakkan atau memukul ular ke tanah, bahkan terkadang menjatuhkannya dari ketinggian.
</p>
<p>
    Ular tanduk gurun atau ular viper bertanduk (Cerastes ceraster) merupakan salah satu hewan endemik di wilayah bagian
    utara Afrika, termasuk Gurun Sahara. Ular ini memiliki dimorfisme seksual yang mencolok, dengan spesies jantan
    memiliki ukuran kepala dan mata yang lebih besar dibandingkan betina. Salah satu ciri khas yang dapat diamati pada
    ular tanduk gurun adalah adanya tonjolan seperti tanduk pada setiap matanya, seperti dilansir Basel Zoo.
</p>
<p>
    Sama seperti ular viper lainnya, ular tanduk gurun termasuk jenis ular yang berbisa. Ular ini mulai aktif dari senja
    hingga malam hari. Warna tubuhnya yang menyerupai warna pasir memungkinkan mereka untuk berkamuflase di lingkungan
    gurun.

    Di tengah ekstremnya Gurun Sahara, beberapa jenis serangga mampu bertahan hidup di sana. Salah satunya adalah semut
    perak sahara atau Cataglyphis bombycine. Spesies semut ini dikenal karena kemampuan bertahan hidupnya yang unik.
</p>
<p>
    Berdasarkan penelitian yang dipublikasikan pada Journal of Experimental Biology, semut ini dapat menempuh jarak 855
    mm per detik atau 3,1 per jam. Jarak tersebut 100 kali lebih panjang dibandingkan panjang tubuhnya. Oleh karena itu,
    semut perak sahara lantas dinobatkan sebagai semut tercepat di dunia. Selain itu, semut ini diketahui hanya
    beraktivitas di luar sarang selama 10 menit per hari. Ini adalah bentuk adaptasi mereka untuk menghindari ancaman
    predator serta mengantisipasi paparan lama suhu ekstrem di Gurun Sahara
</p>
<p>

    Gurun Sahara ternyata dihuni oleh beberapa hewan yang berbahaya. Salah satunya adalah kalajengking deathstalker atau
    Leiurus quinquestriatus yang dikenal sebagai salah satu kalajengking berbahaya di dunia. Kalajengking jenis ini
    memiliki bisa neurotoksin dengan dosis letal yang rendah. Hanya saja, bisa tersebut secara normal tidak dapat
    membunuh orang dewasa. Namun, anak-anak dan orang tua memiliki risiko yang lebih tinggi. Kabar baiknya, antibisa
    kalajengking deathstalker telah tersedia untuk membantu korban sengatan bisanya.
</p>
<p>

    Meskipun tampak berbahaya, bisa kalajengking deathstalker ternyata memiliki manfaat di bidang kesehatan, seperti
    dilansir Discover Magazine. Salah satu substansi kimia dari bisa tersebut yang cukup menarik perhatian adalah
    chlorotoxin. Saat ini, penelitian terkait chlorotoxin terus dilakukan karena dianggap memiliki potensi dalam
    pengobatan dan terapi kanker, terutama glioblastoma.
</p>
<p>

    Meskipun Gurun Sahara dikenal sebagai lingkungan yang ekstrem dan berbahaya. terdapat hewan menggemaskan yang dapat
    dijumpai di sana yaitu rubah fennec. Di antara jenis rubah lainnya, rubah bernama Latin Vulpes zerda tersebut
    merupakan rubah yang paling kecil. Meskipun kecil, rubah ini memiliki ukuran telinga yang relatif besar dibandingkan
    rubah lainnya.
</p>
<p>

    Rubah fennec merupakan hewan nokturnal atau aktif di malam hari dan menghabiskan sebagian besar waktunya di liang
    bawah tanah. Ini dilakukan untuk menghindari panasnya gurun di siang hari. Menurut National Geographic, dalam
    beradaptasi dengan kondisi ekstrem di Gurun Sahara, rubah ini memiliki beberapa adaptasi fisik, seperti telinga
    besar yang berfungsi untuk melepaskan panas berlebih sehingga menjaga tubuh rubah tetap sejuk. Selain itu, mereka
    memiliki rambut panjang dan tebal pada tubuhnya untuk melindungi diri dari suhu malam yang dingin dan sinar matahari
    yang terik di siang hari. Kakinya yang juga memiliki rambut membantu mereka untuk berjalan di atas pasir yang panas.
</p>
<p>

    Gurun Sahara mungkin merupakan salah satu lingkungan paling ekstrem di dunia, tetapi hewan-hewan di atas telah
    mengembangkan kemampuan unik untuk bertahan hidup di sana. Dengan beragam spesies yang menakjubkan, Gurun Sahara
    tidak hanya sebuah padang pasir, tetapi juga rumah bagi kehidupan yang menarik dan unik.
</p>


"


]);
}
}