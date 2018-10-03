@extends('layouts.app')
@section('content')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTable').DataTable();
        });
    </script>
    <div class="container">
        <h3>記事管理</h3>
        <table id="dataTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>タイトル</td>
                </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
