@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="./svg/js.jpeg" alt="" style="height:170px;" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div><h1><b>LaraGram</b></h1></div>
            <div class="d-flex">
                <div class="pr-5"> <strong>150k</strong> posts</div>
                <div class="pr-5"><strong>1M</strong> followers</div>
                <div class="pr-5"><strong>563k</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Laragram.org</div>
            <div>
                Software Developer focused on the backend, infrastructure and open source. <br>
                Nodejs, Typescript | Love Linux C++ | Cybersecurity Evangelist| Javascript, Reactjs|<br>
                Github Campus Experts @webdev.
            </div>
            <div>
                <a href="#">https://www.laragram.org</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="./svg/naruto.jpg" alt="" class="w-100">
        </div>
         <div class="col-4">
            <img src="./svg/shipu.jpg" alt="" class="w-100">
        </div>
         <div class="col-4">
            <img src="./svg/uzu.jpg" alt="" class="w-100">
        </div>
    </div>

</div>
@endsection
