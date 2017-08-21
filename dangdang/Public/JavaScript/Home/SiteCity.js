/**
 * Created by Administrator on 2017/7/26.
 */
//省市联动
function citys(obj,url) {
    var city_id=$(obj).val();
    //获得父节点后获取后一个兄弟元素然后获取select子节点再取出id
    var id=$(obj).parent().next('div').find('select').attr('id');
    //获得父节点后获取后一个兄弟元素然后获取select子节点获取option子节点再取出内容
    var text=$(obj).parent().next('div').children().children().first().html();
    var data={'id':city_id};
    // var url='__ROOT__/Home/Site/city';
    $.ajax({
        url:url,
        type:'post',
        data:data,
        dataType:'json',
        success:function (res) {
            var res=eval("("+res+")");
            if(res.return_code=='404'){
                //不处理
            }else{
                $('#'+id).empty();//清除上一条插入的数据
                $('#'+id).append("<option selected='selected' class='' value=''>"+text+"</option>");//插入所属，可省略
                $.each(res,function (i,n) {
                    $('#'+id).append("<option class='"+n.id+"' value='"+n.id+"'>"+n.name+"</option>");
                });
            }

        }
    });
}
