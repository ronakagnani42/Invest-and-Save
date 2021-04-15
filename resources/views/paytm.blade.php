<!DOCTYPE html>
<html>
<head>
    <title>Payment gateway using Paytm</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div clas="container" style="margin-top:110px; text-align:center;">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dashboard') }}">
                Go Back Home
            </a>
</div>
<br>
<div class="container" width="500px">
    <div class="panel panel-primary">  
        <div class="panel-heading"><h3 class="text-center">Groww More Payment gateway using Paytm</h3></div>
        <div class="panel-body">
            <form action="{{ route('make.payment') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                
                @if($message = Session::get('message'))
                        <p>{!! $message !!}</p>
                    <?php Session::forget('success'); ?>
                @endif

                {{-- @foreach ($users as $user) --}}

                    <div class="row">
                        <div class="col-md-12">
                            <strong>ID:</strong>
                            <input type="number" class="form-control" value="{{auth()->user()->id}}" name="user_id" readonly required>
                        </div>
                        <div class="col-md-12">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" readonly required>
                        </div>
                    <div class="col-md-12">
                            <strong>Mobile No:</strong>
                            <input type="text" name="mobile" class="form-control" maxlength="10" placeholder="Mobile No." required>
                        </div> 
                        <div class="col-md-12">
                            <strong>Email:</strong>
                            <input type="email" class="form-control" value="{{auth()->user()->email}}" name="email" readonly required>
                        </div>
                        <div class="col-md-12" >
                            <br/>
                            <div class="btn btn-info">
                                Term Fee : 299 Rs/-
                            </div>
                        </div>
                        <div class="col-md-12">
                            <br/>
                            <button type="submit" class="btn btn-success">Paytm</button>
                        </div>
                    </div>

                {{-- @endforeach --}}

            </form>
        </div>
    </div>
</div>
<!--@yield('payment_redirect')-->
</body>
</html>