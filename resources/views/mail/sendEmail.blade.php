<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="text-danger mt-4">Chúc mừng quý khách đã đặt hàng thành công tại cửa hàng Electro !</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-5">
                <span class="font-weight-bold">Thông tin người đặt hàng</span> <br>
                <table class="table table-striped table-bordered mt-3">
                    <tr>
                        <td>Họ và tên</td>
                        <td class="text-danger">{{$name}}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>{{$address}}</td>
                    </tr>
                    <tr>
                        <td>SDT</td>
                        <td>{{$phone}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$email}}</td>
                    </tr>
                    <tr>
                        <td>Ngày mua hàng</td>
                        <td><span class="font-weight-bold">{{$created_at}}</span></td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="col-md-7">
                <span class="font-weight-bold">Danh sách đơn hàng hàng</span> <br>
                <table class="table table-striped table-bordered mt-3">
                    <thead>
                        <th>Tên sản phẩm</th>
                        <th>Giá tiền</th>
                    </thead>
                    <tbody>
                        @foreach($cart as $a)
                        <tr>
                            <td>{{$a['name']}}</td>
                            <td class="text-danger">{{number_format($a['price'])}} <u>đ</u> </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="font-weight-bold">Tổng đơn hàng</td>
                            <td class="text-danger font-weight-bold">{{number_format($total)}} <u>đ</u> </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="text-center">Đơn hàng đang trong quá trình xử lý , chúng tôi sẽ ship cho khách hàng trong thời gian nhanh nhất có thể . Quý khách hàng lưu ý , nhận hàng kiểm tra hàng , nếu sản phẩm không đúng như trên đơn hàng chunga tôi xin hoàn toàn chịu trách nhiệm .
                </p>
                <p class="text-center">Chúng tôi xin chân thành cảm ơn !</p>
            </div>
        </div>
    </div>
</body>

</html>
