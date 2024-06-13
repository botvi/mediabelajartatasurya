<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/tatasurya.css">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/loading.css">
    <title>Tata Surya</title>
    <style>
        .modal-title {
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #373A40;
            font-size: 50px;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand link-page" href="/belajar">
                <img src="{{ asset('web') }}/assets/btn/back.png" width="60" height="auto" />
            </a>
            <div class="navbar-brand text-start col">
                <div class="text-light">
                    <h2><span style="color: #ffffff;">Tata</span> <span style="color: rgb(246, 172, 26);">Surya
                        </span><span class="infotitle" href="#" data-bs-toggle="modal"
                            data-bs-target="#infoModal"><img src="{{ asset('web') }}/assets/btn/about.png"
                                width="25px" alt=""></span>
                    </h2>
                </div>
            </div>

        </div>
    </nav>
    <!-- INFO -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Tata Surya </span></h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                    </button>
                </div>
                <div class="modal-body">Tata surya adalah susunan benda-benda lagit yang terdiri atas matahari sebagai
                    pusat tata surya, planet-planet, komet, meteoroid, dan asteroid yang mengelilingi matahari. Planet
                    yang dekat dengan matahari bergerak lebih cepat daripada planet yang jauh dari Matahari.
                    <br><br>
                    Bidang edar planet-planet dalam mengelilingi matahari disebut bidang edar dan bidang edar bumi dalam
                    mengelilingi matahari disebut bidang ekliptika. Susunan Tata Surya terdiri atas Matahari, Planet
                    Dalam, Planet Luar, Komet, Meteorid, dan Asteroid.
                </div>
            </div>
        </div>
    </div>
    <!-- INFO -->

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Display Planets Horizontally -->
                <div class="planet-container">
                    <!-- MATAHARI -->
                    <a class="planet" id="matahari" href="#" data-bs-toggle="modal"
                        data-bs-target="#matahariModal">
                        <img src="{{ asset('web') }}/assets/planet/matahari.png" alt="Matahari" />
                    </a>
                    <!-- MATAHARI -->
                    <a class="planet" id="merkurius" href="#" data-bs-toggle="modal"
                        data-bs-target="#merkuriusModal">
                        <img src="{{ asset('web') }}/assets/planet/merkurius.png" alt="Merkurius" />
                    </a>
                    <address class="planet" id="venus" href="#" data-bs-toggle="modal"
                        data-bs-target="#venusModal">
                        <img src="{{ asset('web') }}/assets/planet/venus.png" alt="Venus" />
                    </address>
                    <a class="planet" id="bumi" href="#" data-bs-toggle="modal" data-bs-target="#bumiModal">
                        <img src="{{ asset('web') }}/assets/planet/bumi.png" alt="Bumi" />
                    </a>
                    <a class="planet" id="mars" href="#" data-bs-toggle="modal" data-bs-target="#marsModal">
                        <img src="{{ asset('web') }}/assets/planet/mars.png" alt="Mars" />
                    </a>
                    <a class="planet" id="jupiter" href="#" data-bs-toggle="modal"
                        data-bs-target="#jupiterModal">
                        <img src="{{ asset('web') }}/assets/planet/jupiter.png" alt="Jupiter" />
                    </a>
                    <a class="planet" id="saturnus" href="#" data-bs-toggle="modal"
                        data-bs-target="#saturnusModal">
                        <img src="{{ asset('web') }}/assets/planet/saturnus.png" alt="Saturnus" />
                    </a>
                    <a class="planet" id="uranus" href="#" data-bs-toggle="modal"
                        data-bs-target="#uranusModal">
                        <img src="{{ asset('web') }}/assets/planet/uranus.png" alt="Uranus" />
                    </a>
                    <a class="planet" id="neptunus" href="#" data-bs-toggle="modal"
                        data-bs-target="#neptunusModal">
                        <img src="{{ asset('web') }}/assets/planet/neptunus.png" alt="Neptunus" />
                    </a>
                </div>
            </div>
        </div>

        <!-- MATAHARI -->
        <div class="modal fade" id="matahariModal" tabindex="-1" aria-labelledby="matahariModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Matahari</span>
                        </h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Matahari adalah bintang yang berupa bola gas panas dan bercahaya yang
                        menjadi pusat sistem tata surya. Matahari memiliki empat lapisan yaitu inti matahari, fotosfer,
                        kromosfer, dan korona.
                        <br>
                        <br>
                        ➢ Inti Matahari : memiliki suhu 1,5 x 107°C yang cukup untuk mempertahankan fusi termonuklir
                        dan
                        berfungsi sebagai sumber energi matahari. Energi dari inti diradiasikan ke lapisan luar matahari
                        kemudian sampai ke ruang angkasa.
                        <br>
                        <br>
                        ➢ Fotosfer : memiliki suhu 6.000 Kelvin, ketebalan 300 km. Energi matahari radiasikan ke luar
                        dan
                        terdeteksi sebagai sinar matahari di bumi. Di dalam fotosfer terdapat bintik matahari yaitu
                        daerah dengan medan magnet yang kuat, dingin dan lebih gelap dari wilayah sekitarnya.
                        <br>
                        <br>
                        ➢ Kromosfer : memiliki suhu 4.500 Kelvin, ketebalan 2.000 km. Kromosfer terlihat seperti gelang
                        merah yang mengeliling bulan pada ketika terjadi gerhana matahari total.
                        <br>
                        <br>
                        ➢ Korona : lapisan terluar matahari dengan suhu 1.000.000 Kelvin, ketebalan 700.000 km,
                        berwarna
                        keabu – abuan yang dihasilkan dari ionisasi atom karena suhu sangat tinggi, terlihat seperti
                        mahkota dengan warna keabu – abuan yang mengelilingi bulan ketika terjadi gerhana matahari
                        total.
                    </div>

                </div>
            </div>
        </div>
        <!-- MATAHARI -->
        <!-- MERKURIUS -->
        <div class="modal fade" id="merkuriusModal" tabindex="-1" aria-labelledby="merkuriusModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Merkurius</span>
                        </h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Merkurius adalah planet terdekat dengan Matahari, dengan permukaan yang
                        dipenuhi kawah dan lembah akibat tabrakan meteor. Memiliki atmosfer tipis dan suhu ekstrem, dari
                        -173°C hingga 427°C. Intinya terdiri dari besi, dan rotasinya sangat lambat, dengan satu hari
                        Merkurius setara dengan 176 hari Bumi. Kecepatan rata-rata Merkurius saat mengorbit Matahari
                        adalah sekitar 47,87 kilometer per detik atau sekitar 107.082 mil per jam. Diameter Merkurius
                        adalah sekitar 4.880 kilometer.
                        <br>
                        <br>
                        Merkurius tidak memiliki satelit alami yang besar seperti planet-planet lain dalam tata surya
                        kita. Sejauh ini, tidak ada misi yang berhasil mengamati satelit alami di sekitar Merkurius.
                    </div>

                </div>
            </div>
        </div>
        <!-- MERKURIUS -->
        <!-- VENUS -->
        <div class="modal fade" id="venusModal" tabindex="-1" aria-labelledby="venusModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Venus</span></h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Venus adalah planet kedua dari Matahari dalam tata surya kita. Permukaannya
                        dipenuhi dengan gunung berapi dan lembah. Atmosfernya tebal, menciptakan suhu permukaan yang
                        sangat panas. Venus memiliki diameter sekitar 12.104 kilometer.
                        <br>
                        <br>
                        Kecepatan rata-rata Venus saat mengorbit Matahari adalah sekitar 35,02 kilometer per detik atau
                        sekitar 78.341 mil per jam.
                        <br>
                        <br>
                        Meskipun Venus tidak memiliki satelit alami, beberapa penelitian telah menyarankan kemungkinan
                        adanya satelit alami yang belum terdeteksi dengan ukuran yang sangat kecil atau di orbit yang
                        sangat dekat dengan planet ini.
                    </div>

                </div>
            </div>
        </div>
        <!-- VENUS -->
        <!-- BUMI -->
        <div class="modal fade" id="bumiModal" tabindex="-1" aria-labelledby="bumiModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Bumi</span></h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Bumi adalah planet tempat kita tinggal, yang menjadi rumah bagi kehidupan
                        seperti yang kita kenal. Permukaannya terdiri dari daratan, lautan, dan atmosfer yang
                        memungkinkan kehidupan berkembang. Bumi memiliki diameter sekitar 12.742 kilometer.
                        <br><br>
                        Kecepatan rata-rata Bumi saat mengorbit Matahari adalah sekitar 29,78 kilometer per detik atau
                        sekitar 66.616 mil per jam.
                        <br><br>
                        Meskipun Bumi tidak memiliki satelit alami seperti planet-planet lain dalam tata surya kita,
                        kita memiliki satu satelit alami yang sangat terkenal, yaitu Bulan.
                    </div>

                </div>
            </div>
        </div>
        <!-- BUMI -->
        <!-- MARS -->
        <div class="modal fade" id="marsModal" tabindex="-1" aria-labelledby="marsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Mars</span></h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Mars adalah planet keempat dari Matahari dalam tata surya kita.
                        Permukaannya
                        terdiri dari padang pasir, gunung, dan lembah, dengan dua gunung tertinggi di tata surya,
                        Olympus Mons dan lembah terdalam, Valles Marineris. Mars memiliki atmosfer yang tipis, terutama
                        terdiri dari karbon dioksida. Planet ini juga memiliki dua kutub es yang relatif kecil. Mars
                        memiliki diameter sekitar 6.779 kilometer.
                        <br><br>
                        Kecepatan rata-rata Mars saat mengorbit Matahari adalah sekitar 24 kilometer per detik atau
                        sekitar 53.979 mil per jam.
                        <br><br>
                        Mars memiliki dua satelit alami yang bernama Phobos dan Deimos. Kedua satelit ini relatif kecil
                        dan tidak beraturan, dengan Deimos lebih jauh dari Mars daripada Phobos.
                    </div>

                </div>
            </div>
        </div>
        <!-- MARS -->
        <!-- JUPITER -->
        <div class="modal fade" id="jupiterModal" tabindex="-1" aria-labelledby="jupiterModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Jupiter</span>
                        </h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Jupiter adalah planet terbesar dalam tata surya kita, terutama terdiri dari
                        gas-gas seperti hidrogen dan helium. Dengan ciri khas garis-garis pada permukaannya yang
                        disebabkan oleh awan-awan, Jupiter memiliki diameter sekitar 139.822 kilometer. Saat mengorbit
                        Matahari, kecepatan rata-rata Jupiter adalah sekitar 13,07 kilometer per detik atau sekitar
                        29.236 mil per jam.
                        <br>
                        Jupiter juga dikenal memiliki sistem satelit yang luas. Saat ini, lebih dari
                        80 satelit atau bulan telah teridentifikasi mengelilingi Jupiter, dengan beberapa di antaranya,
                        seperti Ganymede, Callisto, Io, dan Europa, menjadi objek penelitian yang menarik dalam
                        eksplorasi ruang angkasa.
                    </div>

                </div>
            </div>
        </div>
        <!-- JUPITER -->
        <!-- SATURNUS -->
        <div class="modal fade" id="saturnusModal" tabindex="-1" aria-labelledby="saturnusModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Saturnus</span>
                        </h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Saturnus adalah planet gas raksasa yang terkenal dengan cincinnya yang
                        spektakuler. Dengan diameter sekitar 116.460 kilometer, Saturnus merupakan planet kedua terbesar
                        dalam tata surya kita setelah Jupiter. Saat mengorbit Matahari, kecepatan rata-rata Saturnus
                        adalah sekitar 9,68 kilometer per detik atau sekitar 21.675 mil per jam.
                        <br><br>
                        Saturnus juga dikenal memiliki banyak satelit atau bulan yang mengorbitnya. Saat ini, lebih dari
                        80 satelit telah teridentifikasi mengelilingi Saturnus, dengan yang paling terkenal adalah
                        Titan, yang merupakan satelit terbesar dan satu-satunya satelit dalam tata surya yang memiliki
                        atmosfer yang signifikan. Cincin Saturnus, terdiri dari partikel-partikel es dan batu yang
                        berukuran bervariasi, memberikan pesona yang unik pada planet ini dan telah menjadi subjek
                        penelitian dan kekaguman selama berabad-abad.
                    </div>

                </div>
            </div>
        </div>
        <!-- SATURNUS -->
        <!-- URANUS -->
        <div class="modal fade" id="uranusModal" tabindex="-1" aria-labelledby="uranusModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Uranus</span></h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Uranus adalah planet gas raksasa yang memiliki ciri khas poros rotasi yang
                        cenderung tegak lurus terhadap orbitnya, memberikannya rotasi yang unik dan orbit yang hampir
                        horizontal. Dengan diameter sekitar 50.724 kilometer, Uranus merupakan planet ketujuh terbesar
                        dalam tata surya kita.
                        <br><br>
                        Saat mengorbit Matahari, kecepatan rata-rata Uranus adalah sekitar 6,81 kilometer per detik atau
                        sekitar 15.242 mil per jam.
                        <br><br>
                        Uranus juga memiliki sejumlah satelit atau bulan yang mengelilinginya. Saat ini, terdapat
                        setidaknya 27 satelit yang telah teridentifikasi mengorbit Uranus. Beberapa di antaranya adalah
                        Miranda, Ariel, Umbriel, Titania, dan Oberon. Uranus juga memiliki cincin tipis, tetapi tidak
                        sejelas cincin planet seperti Saturnus. Meskipun Uranus telah dikunjungi oleh wahana antariksa,
                        pengetahuan kita tentang planet ini masih terbatas, dan masih ada banyak yang perlu dipelajari.
                    </div>

                </div>
            </div>
        </div>
        <!-- URANUS -->
        <!-- NEPTUNUS -->
        <div class="modal fade" id="neptunusModal" tabindex="-1" aria-labelledby="neptunusModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <!-- Add the modal-dialog-centered class to vertically center the modal and modal-lg for large screens -->
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="aboutModalLabel"><span style="color: #ffffff;">Neptunus</span>
                        </h5>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{ asset('web') }}/assets/btn/close_2.png" alt="Close button">
                        </button>
                    </div>
                    <div class="modal-body">Neptunus adalah planet gas raksasa yang terletak di luar batas Tata Surya
                        utama, merupakan planet terjauh dari Matahari. Dengan diameter sekitar 49.244 kilometer,
                        Neptunus adalah planet keempat terbesar dalam tata surya kita.
                        <br><br>
                        Saat mengorbit Matahari, kecepatan rata-rata Neptunus adalah sekitar 5,43 kilometer per detik
                        atau sekitar 12.146 mil per jam.
                        <br><br>
                        Neptunus juga memiliki sejumlah satelit atau bulan yang mengelilinginya. Saat ini, Neptunus
                        memiliki setidaknya 14 satelit yang telah teridentifikasi. Beberapa satelit yang lebih terkenal
                        adalah Triton, Nereid, dan Proteus. Triton, yang merupakan satelit terbesar Neptunus, juga salah
                        satu satelit terbesar dalam tata surya dan memiliki atmosfer yang tipis.
                        <br><br>
                        Neptunus juga memiliki cincin yang terdiri dari partikel-partikel debu dan batuan, meskipun
                        cincinnya jauh lebih samar daripada cincin planet lain seperti Saturnus. Meskipun Neptunus
                        adalah salah satu planet yang paling jauh dan sulit dijangkau dalam tata surya kita, misi misi
                        luar angkasa telah memberikan wawasan yang berharga tentang planet ini.






                    </div>

                </div>
            </div>
        </div>
        <!-- NEPTUNUS -->

    </div>

    <!-- Canvas for Particle Effect -->

    <!-- JavaScript -->
    <script src="{{ asset('web') }}/assets/js/loading.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
