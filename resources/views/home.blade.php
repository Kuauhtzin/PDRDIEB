@extends('layouts.app')
@section('content')

<style type="text/css">
    #messages{
        border: 1px solid black;
        height: 300px;
        margin-bottom: 8px;
        overflow: scroll;
        padding: 5px;
    }
</style>
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Chat Message Module</div>
                <div class="panel-body">
 
                <div class="row">
                    <div class="col-lg-8" >
                      <div id="messages" ></div>
                    </div>
                    <div class="col-lg-8" >
                            <form action="sendmessage" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                <input type="hidden" name="user" value="{{ session()->get('auth.nomusr') }}" >
                                <textarea class="form-control msg"></textarea>
                                <br/>
                                <input type="button" value="Send" class="btn btn-success send-msg">
                            </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')

<script src="{{asset('plugins/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('plugins/socketio/socket.io-1.3.4.js')}}"></script>

<script>
    var socket = io.connect('{{env("APP_URL")}}:8890');
     socket.on('message', function (data) {
      console.log(data);
      $( "#messages" ).append( "<strong>"+data.user+":</strong><p>"+data.message+"</p>" );
     });

     socket.emit('subscribe', '{{$room}}');

     $('.send-msg').click(function() {
      var room = '{{$room}}';
      var token = $("input[name='_token']").val();
      var user = $("input[name='user']").val();
      var message = $('.msg').val();

      socket.emit('send', { room: room, message: message , user: user, token: token});
     });

</script>
@endpush