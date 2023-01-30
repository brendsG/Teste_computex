@extends("layout")
@section("corpo")
<div class="d-flex flex-column align-items-center">
    <h2>Horários</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                @foreach($response as $key => $value)
                <th class="text-center">
                    <p>{{$value['dia']}}</p>
                </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 4; $i++) <tr>
                @foreach($response as $key=> $value)
                <td class="text-center">
                    <p class="m-0">{{$value['horarios'][$i]['disciplina']}}</p>
                    <p class="m-0">Prof(a): {{$value['horarios'][$i]['professor']}}</p>
                    <p class="m-0">de {{substr_replace($value['horarios'][$i]['inicio'], ':', 2, 0)}} a {{substr_replace($value['horarios'][$i]['fim'], ':', 2, 0)}}</p>
                </td>
                @endforeach

                </tr>
                @endfor
        </tbody>
    </table>
</div>
@endsection