<!DOCTYPE html>
<html>
    <head>
    <title></title>
    </head>
    <body>

        <table border="1px">
            <tr>
                <td>id</td>
                <td>question</td>
                <t>created at</td>
            </tr>
            @foreach($questions as $questions)
                <tr>
                    <td> {{$questions->idOfQuiz}}</td>
                    <td>{{$questions->questions}}</td>
                    <td>{{$questions->created_at}}</td>
                </tr>
                @endforeach
        </table>
        
        <a href="{{route('quizs.questions')}}"><h3>allls</h3></a>
        <a href="{{route('admin.quiz')}}">quiz</a>
    </body>   
