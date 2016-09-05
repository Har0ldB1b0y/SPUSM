<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="row" style="top: -100px; ">
    <img src="/images/bg.jpg" alt=""style="width: 100%; height: 250px" >
</div>
<div class="col-md-10 col-md-offset-1">
    <div class="col-sm-12" style=" height: 200px;top: -100px; background-color: white;
    -webkit-box-shadow: 0px 1px 5px 0px rgba(102,101,102,1);
-moz-box-shadow: 0px 1px 5px 0px rgba(102,101,102,1);
box-shadow: 0px 1px 5px 0px rgba(102,101,102,1);">
       <div class="row">
           <div class="col-md-2">
               <img src="/images/selfie.jpg" alt="" width="200px" style="margin-right: 10px;margin-left: -20px;border: white 5px solid;">
           </div>
           <div class="col-sm-10">
               <h1>{{ Auth::user()->profile->name }}</h1>
               <p>{{ Auth::user()->profile->course->name}} / {{ Auth::user()->profile->level->name }}
               <br>Mobile:{{ Auth::user()->profile->mobile_number }}
               <br>Email:{{ Auth::user()->profile->email}} / {{ Auth::user()->profile->level->name }}</p>
               <br>
           </div>
       </div>
    </div>
    <div class="col-md-2" style="top: -90px;">
        <button class="btn btn-success btn-sm pull-right form-control text-left"><span class="glyphicon glyphicon-edit"></span> Update Profile</button>
        <br><br>
        <button class="btn btn-success btn-sm pull-right form-control"><span class="glyphicon glyphicon glyphicon-share"></span> Reserve Book</button>

        <br><br>


    </div>
    <div class="col-md-10" style="top: -100px;">
        <br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-volume-up"></span> Library Announcements</div>
                <div class="panel-body">
                    sdfasdf
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4><span class="glyphicon glyphicon-tags"></span> Pending Reservations</h4>
            <div class="panel panel-default" >
                <div class="panel-body">
                    {{ Auth::user()->profile->name }}<br>
                    {{ Auth::user()->profile->gender }}<br>
                    {{ Auth::user()->profile->name }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4><span class="glyphicon glyphicon-th-list"></span> Transactions Logs</h4>
            <div class="panel panel-default" >
                <div class="panel-body">
                    {{ Auth::user()->profile->name }}<br>
                    {{ Auth::user()->profile->gender }}<br>
                    {{ Auth::user()->profile->name }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">

    </div>
</div>
@include('sweet::alert')
@if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
    @endif


            <!-- Scripts -->
    <script src="js/sweetalert.min.js"></script>

    <script src="/js/app.js"></script>
</body>
</html>
