{{--

    Template Name: Utbildningslista

--}}

@extends('layouts.app')

@section('content')

    <!-- ************ -->
    <!-- Page content -->
    <!-- ************ -->
    <div class="background-white">
        <div class="background-white">
            <div class="container mx-auto p4">
                <div class="m2 flex flex-wrap">

                    <div class="col-12 lg-col-3">

                        @include('partials.nav-sidebars')

                        <div class="pt2">&nbsp;</div>

                        @include('partials.content-nav')

                    </div>

                    <!-- ************ -->
                    <!-- Page content -->
                    <!-- ************ -->
                    <div class="col-12 lg-col-9">
                        <main class="ml4">

                            <div>
                                <h1>{{ the_title() }}</h1>
                            </div>

                            <div id="main">
                                @if(function_exists('get_region_halland_acf_page_education_repeater_items'))
                                    @php($myItems = get_region_halland_acf_page_education_repeater_items())
                                    @if($myItems['vard_omsorg'])
                                        <ul>
                                            <h2 class="pb2">Vård och omsorg</h2>
                                            @foreach($myItems['vard_omsorg'] as $item)
                                                <li class="">
                                                    <span>
                                                        {{ $item['page']->education_name }}
                                                    </span>
                                                    @foreach ($item['page']->metadata as $metadata)
                                                        <a class="rh-labels" style="text-decoration:none;" href="{{ $metadata['link_url'] }}">{{ $metadata['kommun_name'] }}</a>
                                                    @endforeach
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    @if($myItems['barn_fritid'])
                                        <ul>
                                            <h2 class="pb2">Barn och fritid</h2>
                                            @foreach($myItems['barn_fritid'] as $item)
                                                <li class="">
                                                    <span>
                                                        {{ $item['page']->education_name }}
                                                    </span>
                                                    @foreach ($item['page']->metadata as $metadata)
                                                        <a class="rh-labels" style="text-decoration:none;" href="{{ $metadata['link_url'] }}">{{ $metadata['kommun_name'] }}</a>
                                                    @endforeach
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @endif
                            </div>

                        </main>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection