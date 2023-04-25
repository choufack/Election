<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des regions</title>
</head>
<body>
    @if ($liste->count() > 0)
        <table>
             <tr>
               <th>ID</th>
               <th>Label</th>
               <th>Action</th>
             </tr>
             <tbody>
                @foreach ($liste as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->Label}}</td>
                    <td>
                        <a href="/region-delete/{{$r->id}}">Delete</a>
                        <a href="/form-update-region/{{$r->id}}">Edit</a>
                    </td>
                  </tr>
                @endforeach
             </tbody>
        </table>
    @endif
</body>
</html>