{{--

    Template Name: Utbildningslista

--}}

@extends('layouts.app')

@section('content')
    <div class="mx-auto center" style="max-width: 1440px;">
        <main id="main" class="rh-xpad-B">
            <div class="pt3">
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

@endsection