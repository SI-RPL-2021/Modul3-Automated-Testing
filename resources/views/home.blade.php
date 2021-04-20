@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="https://cdn.idntimes.com/content-images/post/20210309/1-392b3595ab0e69eec94d98c5ee1f615f.jpg" alt="" style="width : 50px;" class="rounded-circle"> &nbsp;{{ Auth::user()->name }}</div>

                <div class="card-body">
                    <img src="https://lh3.googleusercontent.com/MNEfzEV7FTAFDvCD8rxg0HVUtzRsGa9FUwJY-39QA1hJ3EO9vMjCi5JI_9l95QhPpd1YTbCaR_2Am6fa-Wjr4By6kIfptDVw3x5dasY43vTVjJyaMB3RAkOMSGdOqdzx1iRvBIaGNbc=w1920-h542-no" alt="Logo EAD" style="width: 500px;">
                </div>
                <div class="card-footer">
                <b>{{ Auth::user()->email }}</b>
                <br>
                Logo EAD
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
