@extends('layouts.navbarlanding')
@extends('layouts.footer')

<section class="cardBerita section-margin" id=cardBerita>
    <div class="container">
        <div class=col-12>
            <br>
            <br>
                <h2>  {!!$articles->judul!!} </h2>
                <p> {!! $articles->isi!!} </p>
                <p class="card-tex text-muted">Ditulis oleh : {{$articles->nama_penulis }}</p>
                <p class="card-tex text-muted">Tanggal Posting : {{$articles->published_at}}
              </div>
            </div>
           </div>
     
    </div>
</div>
</div>
</section>