<div class="col-md-3">
    <div class="card card-primary card-outline" style="margin-left:-20px;">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{url('')}}/{{Auth::user()->image}}" alt="User profile" style="width:100px;height:100px;border-radius: 50%;">
          </div>

          <h4 class="font-weight-bold text-center">{{Auth::user()->name}}</h4>
          <p class="text-muted text-center">{{Auth::user()->email}}</p>
          @php
            $value = "- " ;
             foreach (Auth::user()->roles as $a){
                $value .= $a->name . "-" ;
             }
           @endphp
          <p class="text-muted text-center" style="margin-top:-30px;">
              @if(isset($value))
               {{$value}}
              @endif
          </p>

          <ul class="list-group list-group-unbordered mb-3 text-left">
            <li class="list-group-item">
              <b><i class="fas fa-user" style="color:#fed700;"></i></b>&ensp;&ensp;<a href="{{route('account')}}" class="@if($routeName=Route::currentRouteName() =='account' ){{ 'text' }}@endif" style="font-weight:bold;color:black;">Tài khoản của tôi</a>
            </li>
            <li class="list-group-item">
              <b><i class="fas fa-file-invoice-dollar" style="color:#fed700;"></i></b>&ensp;&ensp;<a href="{{route('listInvioce')}}" class="@if($routeName=Route::currentRouteName() =='listInvioce' ){{ 'text' }}@endif" style="font-weight:bold;color:black;">Đơn mua</a>
            </li>
            <li class="list-group-item">
              <b><i class="fas fa-bell" style="color:#fed700;"></i></b>&ensp;&ensp;<a href="#" style="font-weight:bold;color:black;">Thông báo</a>
            </li>
          </ul>

        </div>
        <!-- /.card-body -->
    </div>
</div>
