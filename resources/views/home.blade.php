@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="https://lh3.googleusercontent.com/SN5YPRmPRASjOqQmu3-zLZXDi1QToAkVBv5HmS4e1FMvdt3r98O_GsFR5v43trJZngYWPZncWBLRkIMUkvPkQvE1KSEdMG1CsdFaJT-X1O5itT2jLn_udpx10vcVhLqipGB6UsC8dWI=s888-no" alt="" style="width : 50px;" class="rounded-circle"> &nbsp;{{ Auth::user()->name }}</div>

                <div class="card-body">
                    <img src="https://lh3.googleusercontent.com/MNEfzEV7FTAFDvCD8rxg0HVUtzRsGa9FUwJY-39QA1hJ3EO9vMjCi5JI_9l95QhPpd1YTbCaR_2Am6fa-Wjr4By6kIfptDVw3x5dasY43vTVjJyaMB3RAkOMSGdOqdzx1iRvBIaGNbc=w1920-h542-no" alt="Logo EAD" style="width: 500px;">
                </div>
                <div class="card-footer">
                <b>{{ Auth::user()->email }}</b>
                <br>
                Logo EAD
                </div>
            </div>
            <br>
            <br>
            
            <div class="card">
                <div class="card-header">
                    <img src="https://lh3.googleusercontent.com/SN5YPRmPRASjOqQmu3-zLZXDi1QToAkVBv5HmS4e1FMvdt3r98O_GsFR5v43trJZngYWPZncWBLRkIMUkvPkQvE1KSEdMG1CsdFaJT-X1O5itT2jLn_udpx10vcVhLqipGB6UsC8dWI=s888-no" alt="" style="width : 50px;" class="rounded-circle"> &nbsp;{{ Auth::user()->name }}</div>

                <div class="card-body">
                    <img src="https://lh3.googleusercontent.com/fC12xa7UX7BsjowyJoiosc1O3m8HS9PBaz12f8VSVF_uLiP9BtXaFa63r-mXjFqs1ZFMEi6pOPukcBW24SjQvcOK6b9Rcg7QQdpS7VnDQdOftz-SADnsO8x3kl9xBI-83gHkmsMFTQw=w1583-h890-no" alt="Logo EAD" style="width: 500px;">
                </div>
                <div class="card-footer">
                <b>{{ Auth::user()->email }}</b>
                <br>
                Foto bersama
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
