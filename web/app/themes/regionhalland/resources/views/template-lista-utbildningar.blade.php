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
                            <div id="main">
                                @if(function_exists('get_region_halland_acf_page_education_repeater_items'))
                                    @php($myItems = get_region_halland_acf_page_education_repeater_items())
                                    @if($myItems['vard_omsorg'])
                                        <h2 class="pb2">Vård och omsorg</h2>
                                        <ul class="mb4">
                                            @foreach($myItems['vard_omsorg'] as $item)
                                                <li class="clearfix pt2 pb1" style="border-bottom: 1px solid grey;">
                                                    <div class="col col-6">
                                                        <strong>
                                                            {{ $item['page']->education_name }}
                                                        </strong>
                                                    </div>
                                                    <div class="col col6">
                                                        @foreach ($item['page']->metadata as $metadata)
                                                            <a class="rh-labels" style="text-decoration:none;background:#E99579;" href="{{ $metadata['link_url'] }}">{{ $metadata['kommun_name'] }}</a>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    @if($myItems['barn_fritid'])
                                        <h2 class="pb2">Barn och fritid</h2>
                                        <ul>
                                            @foreach($myItems['barn_fritid'] as $item)
                                                <li class="clearfix">
                                                    <div class="col col-6">
                                                        <strong>
                                                            {{ $item['page']->education_name }}
                                                        </strong>
                                                    </div>
                                                    <div class="col col6">
                                                        @foreach ($item['page']->metadata as $metadata)
                                                            <a class="rh-labels" style="text-decoration:none;background:#E99579;" href="{{ $metadata['link_url'] }}">{{ $metadata['kommun_name'] }}</a>
                                                        @endforeach
                                                    </div>
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