@extends('frontend.master')

@section('title')
    Seat
@endsection

@section('content')
    <main>
        <div class="container mt-5">
            <div class="card p-5">
                <table id="example" class="table display nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <th scope="col">Seat</th>
                        <th scope="col">Rent</th>
                        <th scope="col">Allocation Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- <tr>
                        <td>{{$member->seat->room->floor . $member->seat->room->room . $member->seat->room->seat}}</td>
                        <td>{{$member->seat->room->seat_rent}} &#2547;</td>
                        <td>{{($member->seat->created_at->format('d F Y'))}}</td>
                    </tr> --}}
                    <tr>
                        <td>
                            @if($member->seat && $member->seat->room)
                                {{$member->seat->room->floor . $member->seat->room->room . $member->seat->room->seat}}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($member->seat && $member->seat->room)
                                {{$member->seat->room->seat_rent}} &#2547;
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($member->seat)
                                {{($member->seat->created_at->format('d F Y'))}}
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
            
        </div>
    </main>
@endsection