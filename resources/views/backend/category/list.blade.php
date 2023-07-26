
    <div class="col-md-7">
        @if(session('success'))
            <div class="alert bg-success" role="alert">
                <svg class="glyph stroked checkmark">
                    <use xlink:href="#stroked-checkmark"></use>
                </svg> {{session('success')}} <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
            </div>
        @endif

        <h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
        <div class="vertical-menu">
            <div class="item-menu active">Danh mục </div>
            <table class="table">
                <thead>

                </thead>
                <tbody>
                @foreach($category as $index => $item)
                    <tr>
                        <th scope="row" style="width: 5%">
                            <input type="checkbox" id="checkbox">
                        </th>
                        <th style="width: 30%">{{$index+=1}}</th>
                        <td  style="width: 30%">{{$item->loaiphong}}</td>
                        <td>
                            <a onclick="return confirm('Bạn Có Muốn Xóa Loại Phòng Này Không')" href="{{route('category.delete',['id'=>$item->id])}}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                            <a href="{{route('category.edit',['id'=>$item->id])}}">
                                <button class="btn btn-success">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            <input type="checkbox" id="checkbox"> Chọn Tất Cả

            {{--        <div class="item-menu"><span>Nam</span>--}}
            {{--            <div class="category-fix">--}}
            {{--                <a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>--}}
            {{--                <a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>--}}

            {{--            </div>--}}
            {{--        </div>--}}
            {{--        <div class="item-menu"><span>---|Áo khoác Nam</span>--}}
            {{--            <div class="category-fix">--}}
            {{--                <a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>--}}
            {{--                <a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>--}}

            {{--            </div>--}}
            {{--        </div>--}}
            {{--        <div class="item-menu"><span>---|---|Áo khoác Nam (Dành cho việc mở rộng)</span>--}}
            {{--            <div class="category-fix">--}}
            {{--                <a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>--}}
            {{--                <a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>--}}

            {{--            </div>--}}
            {{--        </div>--}}
            {{--        <div class="item-menu"><span>Nữ</span>--}}
            {{--            <div class="category-fix">--}}
            {{--                <a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>--}}
            {{--                <a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>--}}

            {{--            </div>--}}
            {{--        </div>--}}
            {{--        <div class="item-menu"><span>---|Áo khoác Nữ</span>--}}
            {{--            <div class="category-fix">--}}
            {{--                <a class="btn-category btn-primary" href="editcategory.html"><i class="fa fa-edit"></i></a>--}}
            {{--                <a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>--}}

            {{--            </div>--}}
            {{--        </div>--}}

        </div>
    </div>

