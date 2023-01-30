@extends("layout")
@section("corpo")

<div class="row">
    @foreach($response as $key => $value)
    <div class="col-md-3 d-flex flex-column align-items-center">
        <a href="{{explode( '.',$value['link'])[0]}}">
            <figure class="m-2">
                <img src="{!! asset('assets/images/'.$value['icone']) !!}" alt="{{$value['titulo']}}" width="100" height="100">
            </figure>
        </a>
        <p class="text-center">{{$value['titulo']}}</p>
    </div>
    @endforeach
    <div class="col-md-3 d-flex flex-column align-items-center">
        <a href="/alunos">
            <figure class="m-2">
                <img src="{{asset('assets/images/icons8-estudando-o-grupo-on-line-100.png')}}" alt="Alunos" width="100" height="100">
            </figure>
        </a>
        <p class="text-center">Alunos</p>
    </div>
</div>

@endsection