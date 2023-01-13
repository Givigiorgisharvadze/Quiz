<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
@foreach ($info as $info)
<table border="1px">
  <tr>
    <td>
    {{$info->info}}
    </td>
    <td> Questions</td>
  </td>
  <tr>

</table>

<a href="{{ route('quizs.questions') }}" >all</a>

</body>
