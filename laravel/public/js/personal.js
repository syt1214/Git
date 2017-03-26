window.onload=function() {
//声明数组
    var province = ['北京', '上海', '广东', '江苏'];
    var citys = [];

    citys[0] = ['朝阳区', '海淀区', '东城区','宣武区','西城区'];
    citys[1] = ['静安区', '浦东区', '黄埔区', '青浦区', '普陀区', '闸北区','嘉定区','长宁区'];
    citys[2] = ['广州', '东莞', '深圳'];
    citys[3] = ['南京', '常州', '徐州', '镇江', '无锡', '宜兴', '苏州','南通','扬州','盐城'];

    /*var op = new Option(province[0], 0);
     var op = new Option(province[1], 0);
     var op = new Option(province[2], 0);*/
//得到城市的下拉选择框
    var pro = document.getElementById('pro');

//得到区的下拉选择框
    var ci = document.getElementById('city');

//使用循环完成对象的创建
    for (var i = 0; i < province.length; i++) {
        var op = new Option(province[i], i);
        pro.options.add(op);
        // console.log(op);
    }

    pro.onchange = function () {
        //清空标签
        ci.options.length = 0;
        //选择北京的时候，citye[0]
        //选择上海的时候，citye[1]
        //选择广州的时候，citye[2]
        //alert(1);
        //alert(pro.value);
        var index = pro.value;
        //console.log(citys[index]);
        //得到对于的数组
        var cityList = citys[index];
        //循环添加都标签中
        for (var i = 0; i < cityList.length; i++) {
            var op = new Option(cityList[i], i);
            ci.options.add(op);
        }
    }
//手动去触发函数，就是将一个匿名函数赋给一个属性，对象.属性(),调用方法。
    pro.onchange();
}