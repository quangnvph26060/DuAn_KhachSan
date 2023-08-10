

<div class="col-md-7">
    @if(session('success'))
        <div class="alert bg-success" role="alert">
            <svg class="glyph stroked checkmark">
                <use xlink:href="#stroked-checkmark"></use>
            </svg> {{session('success')}} <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
        </div>
    @endif


    <div class="vertical-menu">
        <div class="item-menu active">Danh Sách Banner </div>
        <table class="table">
            <thead>

            </thead>
            <tbody>

            @foreach($banner as $index => $item)
                <tr>
                    <th scope="row" style="width: 5%">
                        <input type="checkbox" id="checkbox">
                    </th>
                    <th style="width: 10%">{{$index+=1}}</th>
                    <td  style="width: 50%">
                       <img src="{{$item->banner ? Storage::url($item->banner):""}}" width="100%">
                    </td>
                    <td>
                        <a onclick="return confirm('Bạn Có Muốn Xóa Loại Phòng Này Không')" href="{{route('deletebanner',['id'=>$item->id])}}">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="{{route('getbanner',['id'=>$item->id])}}">
                            <button class="btn btn-success">Edit</button>
                        </a>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
        <input type="checkbox" id="checkbox"> Chọn Tất Cả




    </div>
</div>

