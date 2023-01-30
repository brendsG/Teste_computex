@extends("layout")
@section("corpo")
<div class="row m-2">
    <div class="col-md-1">
        <h2>Alunos</h2>
    </div>
    <div class="col-md-1 ms-auto">
        <a href="/alunos-pdf" class="btn btn-info text-white btn-block">PDF</a>
    </div>
</div>
<div class="row">

    <table class="table table-striped">
        <thead>
            <tr>
                <td style="font-size: 20px;" class="text-center">Nº</td>
                <td style="font-size: 20px;" class="text-center">Nome</td>
                <td style="font-size: 20px;" class="text-center">Matricula</td>
                <td style="font-size: 20px;" class="text-center">Status</td>
            </tr>
        </thead>
        <tbody>
            @foreach($response as $key=> $value)
            <tr>
                <td class="text-center">
                    <p>{{$key+1}}</p>
                </td>
                <td class="text-center">
                    <p>{{$value['nome']}}</p>
                </td>
                <td class="text-center">
                    <p>{{$value['matricula']}}</p>
                </td>
                <td class="text-center">
                    <p>{{$value['status']}}</p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection