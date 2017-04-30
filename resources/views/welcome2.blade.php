@extends('layouts.applanding')

@section('content')

    @foreach($sections as $section)

            @if($section->tipo == 'small')

                        <!-- Se creara un seccion pequena-->
    <div class="section">
        <div class="container smallsec">
            <img src="{{ URL::to('/') }}/uploads/{{ $section->imagen }}">
            <br>
                <h2>{{ $section->titulo }}</h2>
                <p>{{ $section->mensaje }}</p>
                <div class="row">

                    <div class="col-sm-3"></div>

                    @if($section->getEnlace1())
                        <div class="col-sm-2 smallseclink">
                            <a href="{{ $section->enlace1url }}"><i>{{ $section->enlace1title }}</i></a>
                        </div>
                    @endif
                    @if($section->getEnlace2())
                        <div class="col-sm-2 smallseclink">
                            <a href="{{ $section->enlace2url }}"><i>{{ $section->enlace2title }}</i></a>
                        </div>
                    @endif
                    @if($section->getEnlace3())
                        <div class="col-sm-2 smallseclink">
                             <a href="{{ $section->enlace3url }}"><i>{{ $section->enlace3title }}</i></a>
                        </div>
                    @endif

                    <div class="col-sm-3"></div>

                </div>
        </div>
    </div>

            @else

                    <!-- Se creara un seccion full-->

                    <div class="section">
                        <div class="container-fluid">
                            <div style="background-image:url({{ URL::to('/') }}/uploads/{{ $section->colorfondo }})">
                                <div class="fulsection">
                                    
                                    <a href="{{ $section->enlace1url }}"><span class="superdivlinkeable"></span></a>
                                    <img src="{{ URL::to('/') }}/uploads/{{ $section->imagen }}" class="imagenlargacentrada">
                                    <span id="pruebaestilo">{{ $section->titulo }}</span>

                                </div>
                            </div>
                        </div>
                    </div>



            @endif

    @endforeach

@endsection