<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table border="1px">
        <tr>
            <td>name</td>
            <td>image</th>
            <td>question</td>
            <td>created at</td>

        </tr>
        @foreach ($info as $info)
            <tr>
                <td>{{$info->name}}</td>
                <td><img src="{{$info->image}}" height="50px" width="50px"></td>
                <td>{{$datas}}</td>
                <td>{{ $info->created_at }}</td>
    
            </tr>
            @endforeach
    </table>
</body>
