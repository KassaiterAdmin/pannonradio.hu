@extends ('layout')

@section('content')
    <div class="sub-title">
        <h2>Pannon Rádió - A magyar szavak oldala</h2>
        <a href="mailto:andrasatya@gmail.com"><i class="fa fa-envelope-o" style="font-size:36px"></i></a>
    </div>
    <div class="col-md-12 content-page">
        <!-- Init Post -->
        <div class="col-md-12 blog-post">
            <div class="post-title">
                <span>
                    <h1>Orvosolandó méltánytalanságok</h1>
                </span>
            </div>
            <div class="post-info">
                <span>Dec 6, 2016 </span>
            </div>
            <p>
                Ahogyan az egykori, igazi Pannon Rádió meghasonlott főemberei komoly erőkkel igyekeztek hallgatóimmal elfeledtetni az elmúlt évek alatt, és úgy emlékezni a rádióra, mintha soha, a közelében sem lettem volna, úgy a rádió domain-neve is parlagon hevert hosszú idő óta, én pedig azért vettem meg, mert méltatlannak éreztem ezt a semmivé válást. Nem, nem keresem se ennek, se annak a felelőseit, csak emlékezni szeretnék a hőskorra egy olyan oldalon, amely még valamennyire egybe tudja gyűjteni az egykori rajongókat, akik közül nekem nagyon sok barátság, sőt jeles munkatársi kör is adódott.
                Emlékezni pedig a magam módján tudok, hát így teszem. Egykor rendkívül népszerű könyvem, a VOLT EGYSZER EGY PANNON RÁDIÓ most hétről-hétre, fejezetenként az Olvasók elé kerül. Aztán, ha nagyon sok lelkesedést tapasztalok, összejöhetünk olykor személyesen is.
                Minden esetre, köszönöm a figyelmet.<br><br>
                Még élek: <i>Pajor András atya</i>
            </p>
        </div>
        <!-- Init Post end -->

        @foreach($blogposts as $blogpost)
            @include('blogposts.post')
        @endforeach
    </div>
@endsection