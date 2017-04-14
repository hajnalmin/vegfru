/**
 * Created by zhm on 17/3/3.
 */
$(function(){
    //定义json数据
    var main = {
        init:function(){
            this.shareAndStart();//分享和产品评星
            this.getCode();//获取四位验证码
            this.proAdd();//产品数量的增加和减少
        },


        //分享和产品评星
        shareAndStart:function(){
            //分享
            $('.show_collect span').eq(1).children("i").mouseover(function(){
                $(".show_share").show();
                $(this).parent().addClass('span_hover');
            }).mouseout(function(){
                $(".show_share").hide();
                $(this).parent().removeClass('span_hover');
            });
            //产品评星
            //1. 给所有的li注册mouseenter事件
            var start = $(".start i");
            start.click(function () {
                $(this).addClass('s2').prevAll().addClass('s2');
                $(this).addClass('s1');
            }).mouseleave(function () {
                $(this).children().addClass('s1');
                $("i.current").addClass('s2').prevAll().addClass('s2');
            });
            start.click(function () {
                $(this).addClass("current").siblings().removeClass("current")
            })

        },
        //购买物品数量的增加和减少
        proAdd:function(){
            var ipt = $('.show_r_count .count_input');
            //增加
            $('.show_r_count #up').click(function(){
                var index = ipt.val();
                index++;
                ipt.val(index);
            });

            $('.show_r_count #down').click(function(){
                var index = ipt.val();
                if(index == 1)return alert('至少请选择一个！');
                index--;
                ipt.val(index);
            })
        },


        //随机验证码
        getCode:function(){
            function createCode(){
                //1.将所有字母，数字装入一个数组备用
                var codes = [];
                //2.数字(0-9)大写字母(A-Z)小写字母（a-z）
                for (var i = 48; i <= 57; i++) {
                    codes.push(i);
                }
                for (var i = 65; i <= 90; i++) {
                    codes.push(i);
                }
                for (var i = 97; i <= 122; i++) {
                    codes.push(i);
                }

                //3 从0-61之间取随机数
                var arr = [];
                for(var i = 0;i<4;i++){
                    var index = Math.floor(Math.random() * (61 - 0 + 1)+0);
                    var char = String.fromCharCode(codes[index]);
                    arr.push(char);
                }
                //4.输出验证码
                var code=arr.join("");
                $('.show_code').html(code);
            }
            createCode();
            $('.show_code').click(createCode);
        }



    };

    main.init();





});
