<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Groww More App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @include('header')
            <div class="max-w-6xl mx-auto mt-8 sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mx-4">
                    Mutual Fund investing made easy with trusted advisors.
                </div>

                <div class="mt-8 mx-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1">
                        <form class="p-4 row" id="fundsForm">
                            <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                                <label for="exampleInputEmail1" class="form-label">INVESTED AS</label>
                                <select class="form-select" name="invested_as" aria-label="Default select example">
                                    <option value="lumpsum" selected>Lumpsum</option>
                                    <option value="sip">SIP</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                                    <label for="amount" class="form-label">AMOUNT</label>
                                    <input type="number" name="amount" value="10000" class="form-control" id="amount">
                            </div>
                            <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                                <label for="exampleInputEmail1" class="form-label">TIME FRAME</label>
                                <select class="form-select" name="time_frame" aria-label="Default select example">
                                    <option value="3" selected>3 yrs</option>
                                    <option value="5">5 yrs</option>
                                    <option value="7">7 yrs</option>
                                    <option value="10">10 yrs</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                                <label for="exampleInputEmail1" class="form-label">RISK LEVEL</label>
                                <select class="form-select" name="risk_level" aria-label="Default select example">
                                    <option value="1" selected>Low</option>
                                    <option value="3">Medium</option>
                                    <option value="4">High</option>
                                    <option value="5">Very High</option>
                                </select>
                            </div>
                            <div class="m-3">
                           {{-- @auth --}}
                                {{-- {{$status}} --}}
                                @if($status=="1")
                                    <button type="submit" class="btn btn-primary">Calculate</button>
                                @elseif($status=="2" OR $status=="0")
                                    <button type="button" onclick="javascript:notPaid(1);" class="btn btn-primary">Login First</button>
                                @elseif($status=="3")
                                    <button type="button" onclick="javascript:notPaid(2);" class="btn btn-primary">Only premium members</button>
                                @endif
                            {{-- @endauth --}}
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mx-auto mt-4">
                    <table class="table table-bordered fundsShow hidden">
                        <thead>
                            <tr>
                            <th scope="col">SCHEME</th>
                            <th scope="col">RETURNS</th>
                            <th scope="col">CURRENT VALUE</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="funds"></tbody>
                    </table>
                </div>
                <div class="card">
                    <h5 class="card-header">Top Funds</h5>
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="nav col-3 nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach($topFunds as $key=>$fund)
                                <button class="nav-link w-100 {{ $key == 0 ? 'active' : '' }}" id="{{ $fund['id'] }}-tab" data-bs-toggle="pill" data-bs-target="#{{ $fund['id'] }}" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{{ $fund['title'] }}</button>
                                <hr>
                                @endforeach
                            </div>
                            <div class="tab-content border p-6 rounded col-9" id="v-pills-tabContent">
                                @foreach($topFunds as $key=>$fund)
                                <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="{{ $fund['id'] }}" role="tabpanel" aria-labelledby="{{ $fund['id'] }}-tab">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="fw-bolder">{{ $fund['title'] }}</h4>
                                            <p>{{ $fund['description'] }}</p>
                                            <p>Duration: <span class="fw-bolder">{{ $fund['duration'] }}</span></p>
                                            <p>Expected Return: <span class="fw-bolder">{{ $fund['expectedReturns'] }}</span></p>
                                        </div>
                                        <div class="col text-center">
                                            <img class="mt-4" src="{{ $fund['icon'] }}" />
                                        </div>
                                    </div>
                                    <h5 class="fw-bolder mt-4">Top Funds in this Category</h5>
                                    <div class="list-group" id="topFunds" style="max-width: 70%; margin-top: 20px;">
                                        @foreach($fund['schemes'] as $scheme)
                                        <a href="{{route('schemeDetails')}}?scheme={{ $scheme['code'] }}" class="list-group-item list-group-item-action p-4" aria-current="true">
                                            <div class="d-flex justify-content-between">
                                            <h5 class="mb-1 fw-bolder">{{ $scheme['name'] }}</h5>
                                            </div>
                                            <p class="mb-1">Equity (Small Cap Fund)</p>
                                            <small>RISK: {{ $fund['riskLevel'] }}</small>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script>
            function notPaid(st)
            {
                if (st == 2)
                    window.location.href="{{route('initiate.payment')}}";
                else
                    window.location.href="{{ route('login') }}";
            }

            $(document).ready(function(){
                $("#fundsForm").submit(function(e){
                    e.preventDefault();
                    calculateReturns();
                });

                $("input").keyup(function(e){
                    e.preventDefault();
                    calculateReturns();
                });

                $("select").change(function(e){
                    e.preventDefault();
                    calculateReturns();
                });

                setInterval(function(){
                    $.ajax({url: "{{ route('pingUser') }}"});
                }, 2000);

                function calculateReturns(){
                    var $inputs = $('#fundsForm :input');
                    var values = {};
                    $inputs.each(function() {
                        values[this.name] = $(this).val();
                    });
                    var time_frame = 'yrs'+values['time_frame'];
                    $.ajax({url: "https://www.assetplus.in/appserver/v1/user/info/schemesList", success: function(result){
                        result = result.filter(function(index) {
                            if(values['invested_as'] == 'sip'){
                                return (index.riskLevel == values['risk_level'] && index.returns[time_frame] != undefined && index.returns[time_frame] > 0 && index.isRecommended && index.sipAllowed);
                            }
                            return (index.riskLevel == values['risk_level'] && index.returns[time_frame] != undefined && index.returns[time_frame] > 0 && index.isRecommended);
                        });
                        result = result.sort((a,b) => (parseFloat(a.returns[time_frame]) < parseFloat(b.returns[time_frame])) ? 1 : -1)
                        $('#funds').empty();
                        $('.fundsShow').show();
                        $.each(result, function( index, value ) {
                            if(index > 4){
                                return false;
                            }
                            var rate = value.returns[time_frame];
                            if(values['invested_as'] == 'lumpsum'){
                                var returnAmount = (values['amount']*(Math.pow((1+(rate/100)), values['time_frame']))).toFixed(2);
                            }
                            if(values['invested_as'] == 'sip'){
                                var returnAmount = (values['amount'] * (Math.pow(1 + (rate/12/100), (values['time_frame']*12)) - 1) / (value.returns[time_frame]/12)*100).toFixed(2);
                            }
                            $('#funds').append("<tr><th scope='row'>"+value.schemeName+"</th><td>"+rate+"%</td><td>₹ "+returnAmount+"</td><td><a class='btn btn-success' href='{{route('schemeDetails')}}?scheme="+value.schemeCode+"'>Invest</a></td></tr>");
                        });
                    }});
                }
            });
        </script>


        @include('footer')
    </body>
</html>
