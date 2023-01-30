<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 class="m-3 text-center">Alunos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <td style="font-size: 25px; padding-right: 15px;" class="text-center">Nº</td>
                <td style="font-size: 25px; padding-right: 15px;" class="text-center">Nome</td>
                <td style="font-size: 25px; padding-right: 15px;" class="text-center">Matricula</td>
                <td style="font-size: 25px; padding-right: 15px;" class="text-center">Status</td>
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
</body>

</html>