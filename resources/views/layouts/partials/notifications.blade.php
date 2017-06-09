<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-notify/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-notify/main.css')}}">

<script src="{{asset('plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
  @if((Notify::all())!==null)
    <script type="text/javascript">
        @foreach (Notify::get('success') as $notification)
            $.notify({
                // options
                //icon: 'glyphicon glyphicon-warning-sign',
                //title: 'Bootstrap notify',
                message: '{{$notification}}'
            },{
                // settings
                type: "success",
                placement: {
                    from: "bottom",
                    align: "center"
                }
            });
        @endforeach
        @foreach (Notify::get('error') as $notification)
            $.notify({
                // options
                //icon: 'glyphicon glyphicon-warning-sign',
                //title: 'Bootstrap notify',
                message: '{{$notification}}'
            },{
                // settings
                type: "danger",
                placement: {
                    from: "bottom",
                    align: "center"
                }
            });
        @endforeach
        @foreach (Notify::get('info') as $notification)
            $.notify({
                // options
                //icon: 'glyphicon glyphicon-warning-sign',
                //title: 'Bootstrap notify',
                message: '{{$notification}}'
            },{
                // settings
                type: "info",
                placement: {
                    from: "bottom",
                    align: "center"
                }
            });
        @endforeach
    </script>
  @endif