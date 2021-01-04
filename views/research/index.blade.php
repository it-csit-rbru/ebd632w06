@extends("layouts.master")

@section('title') 
    Index
@endsection

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>NameTh</th>
            <th>NameEn</th>
            <th>Budget</th>
            <th>Contract Signed</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($researchs as $r)
        
        <tr>
            <td>{{ $r->nameth }}</td>
            <td>{{ $r->nameen}}</td>
            <td>{{ $r->budget}}</td>
            <td>{{ $r->contract_signed}}</td>
        </tr>

        @endforeach

    </tbody>
</table>
    
@endsection
    
