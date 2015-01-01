@extends('layout')

@section('content')

<div class="container">
    <h1>{{ $category->name }}</h1>
    {{ $category->paginate_candidates->links() }}
    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Ver</th>
        </tr>
        @foreach( $category->paginate_candidates as $candidate )
        <tr>
            <td>{{ $candidate->user->full_name }}</td>
            <td>{{ $candidate->job_type_title }}</td>
            <td>{{ str_limit($candidate->description, $limit = 100, $end = '...') }}</td>
            <td width="50">
                <a href="{{ route( 'candidate', [ $candidate->slug, $candidate->id ]) }}" class="btn btn-info">
                    Ver
                </a>
            </td>
        </tr>
        @endforeach


    </table>
    {{ $category->paginate_candidates->links() }}

</div> <!-- /container -->

@endsection