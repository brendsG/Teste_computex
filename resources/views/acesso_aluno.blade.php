@extends("layout")
@section("corpo")
<h2 class="m-3 text-center">Turmas</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <td style="font-size: 20px;" class="text-center">Turma</td>
            <td style="font-size: 20px;" class="text-center">Grau</td>
            <td style="font-size: 20px;" class="text-center">Serie</td>
            <td style="font-size: 20px;" class="text-center">Turno</td>
            <td style="font-size: 20px;" class="text-center">Ano</td>
        </tr>
    </thead>
    <tbody>
        @foreach($response as $key=> $value)
        <tr>
            <td class="text-center">
                <p>{{$key+1}}</p>
            </td>
            <td class="text-center">
                <p>{{$value['grau_longo']}}</p>
            </td>
            <td class="text-center">
                <p>{{$value['serie_longa']}}</p>
            </td>
            <td class="text-center">
                <p>{{$value['turno']}}</p>
            </td>
            <td class="text-center">
                <p>{{substr_replace($value['ano'], '.', 4, 0)}}</p>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection