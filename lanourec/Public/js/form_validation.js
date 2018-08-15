/*表单数据提交表单验证*/
function beforeSubmit(form){
    $("#submit_btn").click(function(event) {
        alert('000');
        if($("input[name = waste_weight]").value == '' || $("input[name = waste_weight]").value == null){
            alert('重量不能为空！');
            $("input[name = waste_weight]").focus();
            return false;
            }
        if(form.waste_weight.value.length>=4){
            alert('重量数据过大！');
            form.waste_weight.focus();
            return false;
            }
        //标题数据验证
        // var reg_ch=/^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[a-zA-Z0-9_]){1,20}$/;//包含中文，英文和数字下划线验证
        // var reg_eng=/^[a-zA-Z]*$/; //英文验证
        // var reg_dig = /^\d{0,3}$/; //数字验证
        // if(!reg_dig.test(form.waste_weight.value)){
        //     alert('重量数据只能是数字！');
        //     form.waste_weight.focus();
        //     return false;
        //     }
    });
    
return true;
}