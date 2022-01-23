<div class="technology-card card-row h-content bg-white rounded-4 overflow-hidden shadow-lg w-100 m-2 mb-3 animate-05 hover-size-001 " filter="0">

    <div class="technology-name fw-bold fs-5 p-2 ps-3 pe-3 text-start w-100 text-uppercase">
        {{$technology->technology_name}}
    </div>

    <div class="w-100 d-inline-flex">

        <div class="w-25 d-inline-flex">
            {{--        Color module--}}

            <div class="p-2 ps-3 pe-3 w-50" style="background-color: {{$technology->branch_color}}">
                <div class="technology-code fs-2 fw-bold text-white  ">
                    {{$technology->code}}
                </div>
                <div class="d-flex justify-content-between text-white">
                    <span class="technology-branch text-small bottom-0">
                        {{$technology->branch_name}}
                    </span>
                    <span class="technology-area text-end bottom-0" data-title="{{$technology->area_name}}">
                        <div class="pt-1 me-2" style="transform: scale(1.6)">
                            @php echo htmlspecialchars_decode($technology->area_icon) @endphp
                        </div>
                    </span>
                </div>
            </div>

            {{--        Counter boxes--}}

            <div class="d-flex flex justify-content-start w-50">
                @include('technologi-card-work-status')

                @include('technologi-card-active-status')
            </div>
        </div>


        <div class="w-50">
            {{-- Statistic types boxes--}}

            @include('technologi-card-row-statistic-types')

            @if(Auth::permition()->admin ==1)
                <div class="bg-light rounded-4 m-3 ms-5 me-5 mt-1 mb-1">
                    <div class="w-100 text-center p-1 animate-05 hover-size-01  mt-1 cursor-pointer " onclick="showAndHideElement(this.parentNode,'setting')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down animate-05 hover-size-01 show" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-up hide" viewBox="0 0 16 16" hidden="">
                            <path fill-rule="evenodd" d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894l6-3z"/>
                        </svg>
                    </div>
                    @include('technologi-card-admin-setting')
                </div>
            @endif
        </div>


        <div class="w-25 d-inline-flex">
            {{--    Price--}}

            <div class="pt-5 w-50 text-center">
                        <span class="fs-5 text-muted">
                            Cena:
                        </span>
                        <span class="fw-bold d-inline-flex fs-2">
                            <span class="technology-price">{{$technology->price}}</span>
                            <span>
                                <div class="top-0 mb-3 p-2 mt-2" style="transform: scale(1.4)">
                                    <img src="{{URL::asset('Img/CR-coin.svg')}}">
                                </div>
                            </span>
                        </span>
            </div>

            {{--    Buton--}}
            <div class="w-50">
                @include('technologi-card-button')
            </div>
        </div>

    </div>

    <div class="rounded-3 bg-white p-2 nation-work-status mb-2 w-100 d-flex flex-wrap" hidden>
        @foreach($technology->nations_status as $nation_status)

            @if($nation_status->code == 'active')
                @continue
            @endif
            <div class="bg-light rounded-2 m-2 shadow-sm d-flex flex justify-content-between overflow-hidden w-25">
                <div class="d-grid p-2">
                    <span class="fw-bold fs-5">
                        {{$nation_status->nation_name}}
                    </span>
                </div>
                <div class="" >
                    <button type="button" disabled class="btn btn-primary w-100 h-100"> {{$nation_status->name}}</button>
                </div>

            </div>
        @endforeach
    </div>

    <div class="rounded-3 bg-white p-2 nation-active-status mb-2 w-100 d-flex flex-wrap" hidden>
        @foreach($technology->nations_status as $nation_status)

            @if($nation_status->code != 'active')
                @continue
            @endif
            <div class="bg-light rounded-2 m-2 shadow-sm d-flex flex justify-content-between overflow-hidden w-25">
                <div class="d-grid p-2">
                    <span class="fw-bold fs-5">
                        {{$nation_status->nation_name}}
                    </span>
                </div>
                <div class="" >
                    <button type="button" disabled class="btn btn-primary w-100 h-100"> {{$nation_status->name}}</button>
                </div>

            </div>
        @endforeach
    </div>

</div>
