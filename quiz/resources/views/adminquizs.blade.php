<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <table border="1px">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>info</td>
                <td>Created At</td>
            </tr>
            @foreach ($quizs as $quizs)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->quizInfo}}</td>
                    <td >{{$post->created_at}}</td>
                </tr>
                @endforeach

            
            <a href="{{route('admin.question')}}"><h3>question</h3></a>

        </table>
    </body>