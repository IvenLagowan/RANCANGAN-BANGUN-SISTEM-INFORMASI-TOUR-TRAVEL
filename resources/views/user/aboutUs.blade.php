{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')
    <div class="container">
        <div class="row">
            {{-- team image --}}
            <div class="col">
                <img src="{{ asset('image/about-page-image/team.jpg') }}" alt="Team image">
            </div>
            {{-- team discription --}}
            <div class="col mt-2">
                <h2 class="mb-5 fw-bold">Tentang Kami</h2>
                <div class="text-justify lh-lg">
                    <p >Di Papua Tengah, kami bersemangat menampilkan keindahan Sri Lanka yang mempesona. 
                        Sebagai agen perjalanan terkemuka di negara ini, kami berspesialisasi dalam menyusun rencana perjalanan yang dipersonalisasi 
                        yang menawarkan pengalaman tak terlupakan. Dengan pengetahuan dan keahlian lokal kami yang mendalam, kami mengambil
                        kebanggaan dalam mengatur perjalanan unik yang membawa Anda ke dalam kekayaan budaya Papa Tengah. menakjubkan 
                        lanskap, dan warisan budaya yang dinamis. Apakah Anda mencari liburan pantai yang tenang, satwa liar yang mendebarkan 
                        pertemuan, atau eksplorasi budaya, kami hadir untuk mewujudkan impian perjalanan Anda.  Memercayai
                        Tur Papua Tengah untuk memandu Anda dalam perjalanan luar biasa melalui keajaiban Papua Tengah.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- close container --}}
    <br>

        {{-- more details section --}}
        <div class="mt-5 d-flex justify-content-around ">
            <div>
                <img src="{{ asset('image/help-tools/img1About.svg') }}" class="ms-5" alt="1 YEARS EXPERIENCES logo">
                <h5>1 YEARS EXPERIENCES</h5>
                
                    <p class="mt-3 lh-base">
                        Discover Papua Tengah wonders <br>
                        with our 5 years’ expertise. <br>
                        Memorable journeys tailored <br>
                        to your preferences await.
                    </p>
            </div>
            <div>
                <img src="{{ asset('image/help-tools/img2About.svg') }}" class="ms-5" alt="ACCOMMODATION ADVICE logo">
                <h5>ACCOMMODATION ADVICE</h5>

                <p class="mt-3 lh-base">
                    Find your perfect stay in Papua Tengah. Expert <br>
                    advice on accommodations to make your <br>
                    trip unforgettable.
                </p>

            </div>
            <div>
                <img src="{{ asset('image/help-tools/img3About.svg') }}" class="ms-5" alt="MAP logo">
                <h5>MOST COMPLETED MAP</h5>

                <p class="mt-3 lh-base">
                    Explore confidently with our complete <br>
                    map. Discover hidden gems and plan <br>
                    your adventures effortlessly.
                </p>

            </div>
            <div>
                <img src="{{ asset('image/help-tools/img4About.svg') }}" class="ms-5" alt="TRANSPORT logo">
                <h5 class="ms-5">TRANSPORT</h5>

                <p class="mt-3 lh-base">
                    Choose from our reliable transport options <br>
                    and enjoy convenient journeys to your <br>
                    desired destinations.
                </p>

            </div>
        </div>

        {{-- WHY CHOOSE US? section --}}
        <div>
            <img src="{{ asset('image/help-tools/for-about-section-Img.svg') }}" class="image-position" width="99.5%" alt="BG image">
            <div class="container">
                <div class="text-position text-justify lh-lg">
                    <h2 class="fw-bold mb-4">WHY CHOOSE US?</h2>
                    <p>
                        At Sri Lanka Tours, we are your trusted travel partner for exploring <br>
                        the wonders of Sri Lanka. With our extensive experience and local expertise, <br>
                        we offer personalized itineraries and seamless travel experiences tailored to <br>
                        your preferences. Our dedicated team of professionals is committed to providing <br>
                        exceptional service, ensuring your journey is filled with unforgettable moments. <br>
                        From cultural heritage sites to pristine beaches, lush tea plantations to thrilling <br>
                        wildlife encounters, we strive to showcase the best of Papua Tengah. Choose <br>
                        Papua Tengah for a truly immersive and memorable travel experience in the<br>
                        jewel of the Indian Ocean.
                    </p>
                </div>
            </div>
        </div>
        
@endsection