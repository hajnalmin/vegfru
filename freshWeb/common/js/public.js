
/**
 * Created by zhm on 17/2/25.
 */
$(function () {

    var main = {
        //初始化函数
        init: function () {
            this.roolNews();//标题滚动方法调用
            this.autoPic();//轮播图方法调用
            this.aboutUs();//加入我们表单的验证方法
            this.tabChange();//商品详情页的选项卡切换
            this.returnTop();//返回顶部
            this.roolSlide();//滚动的侧边栏菜单
            this.proAdd();//产品数量的增加和减少

        }
        ,
        //滚动的侧边栏
        roolSlide: function () {
            $(window).scroll(function () {
                var sTop = $(window).scrollTop();
                $('.banner_list').stop().animate({marginTop: sTop - 150});
            })
        },
        //滚动的标题
        roolNews: function () {
            //1.设置定时器表示
            var timer = null;

            //2.滚动的函数定义
            function rollUp() {
                var $news = $('.infoL_con1');
                var $lineHeight = $news.find('li:first').height();
                $news.animate({'marginTop': -$lineHeight + 'px'}, 1000, function () {
                    $news.css({marginTop: 0}).find('li:first').appendTo($news);
                });
            }

            //3设置滚动定时器
            timer = setInterval(rollUp, 1500);
            //设置鼠标划入和鼠标划出
            $('.infoL_con').mouseover(function () {
                clearInterval(timer);
            }).mouseout(function () {
                timer = setInterval(rollUp, 1500);
            });
        },

        //轮播图
        autoPic: function () {
            //获取元素
            var list = $('.infoR_list li');
            var btns = $('.btns_a a');
            var infos = $('.btns_info p');
            var count = list.length;
            var indexNow = 0;
            var timer = null;
            //核心函数
            function core(num) {
                btns.eq(num).addClass('on').siblings().removeClass('on');
                infos.eq(num).addClass('on').siblings().removeClass('on');
                list.eq(num).stop().fadeIn(1000).siblings().fadeOut(500);
            }

            //点击变换图片
            btns.click(function () {
                indexNow = $(this).index();
                core(indexNow);
            });

            //自动变换图片
            function play() {
                indexNow++;
                if (indexNow > count - 1) {
                    indexNow = 0;
                }
                core(indexNow);
            }

            //设置定时器
            timer = setInterval(play, 3000);
            $('.infoR').hover(function () {
                clearInterval(timer);
            }, function () {
                timer = setInterval(play, 3000);
            });
        }
        ,


        //关于我们的表单验证
        aboutUs: function () {
            //获取元素
            var uname = $('.username');
            var utel = $('.userTel');
            var utime = $(".sel option:selected");
            var ucon = $('.con');

            //提交按钮的表单验证
            $('.form_group button').click(function () {
                //使用正则进行验证

                //姓名2-5位中文
                if (!/[\u4e00-\u9fa5]/g.test(uname.val())) {
                    alert("请填写正确的姓名,2到5位中文！");
                    return false;
                }
                //电话号码6-11位中文

                if (!/^\d{6,11}$/.test(utel.val())) {
                    alert("请填写6-11位手机号码！");
                    return false;
                }

                //判断时间和留言内容是否为空
                if (!utime.val()){
                    alert("请选择时间！");
                    return false;
                }
                if (ucon.html() == ""){
                    alert("请输入留言内容！");
                    return false;
                }
                //判断购买方式是否为空
                var buyType = $("input[type='radio']:checked");
                if (!buyType.val()){
                    alert("请选择购买方式！");
                    return false;
                }

                alert("提交成功！");
                $('.form_group input,.form_group textarea').val("");
            })
        },

        //商品详情页的选项卡切换
        tabChange: function () {
            //获取元素
            var title_list = $('.top_list li');
            var con_list = $('.con_list li');
            var index = 0;
            //核心函数
            function core(num) {
                title_list.eq(num).addClass('title_selected').siblings().removeClass("title_selected");
                con_list.eq(num).addClass('selected').siblings().removeClass("selected");
            }

            //默认显示第一张
            core(index);
            //事件委托
            $('.top_list').on('click', 'li', function () {
                var indexTemp = $(this).index();
                index = indexTemp;
                core(index);
            })
        },
        //返回顶部开始
        returnTop:function(){
            var reTop = $('.returnTop img');
            $(window).scroll(function(){
                var sTop = $(this).scrollTop();
                sTop>$(window).height()?reTop.show():reTop.hide();
            });
            //点击返回顶部
            reTop.click(function(){
                $('body,html').stop().animate({scrollTop:0},2000)
            })
        },
        //购买物品数量的增加和减少
        proAdd:function(){
            var ipt = $('.film_r_count .count_input');
            //增加
            $('.film_r_count #up').click(function(){
                var index = ipt.val();
                index++;
                ipt.val(index);
            });

            $('.film_r_count #down').click(function(){
                var index = ipt.val();
                if(index == 1)return alert('至少请选择一个！');
                index--;
                ipt.val(index);
            })
        }

    };

    main.init();
});
