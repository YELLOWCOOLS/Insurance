$(function() {

        var $fullText = $('.admin-fullText');
        $('#admin-fullscreen').on('click', function() {
            $.AMUI.fullscreen.toggle();
        });

        $(document).on($.AMUI.fullscreen.raw.fullscreenchange, function() {
            $fullText.text($.AMUI.fullscreen.isFullscreen ? '退出全屏' : '开启全屏');
        });


        var dataType = $('body').attr('data-type');
        for (key in pageData) {
            if (key == dataType) {
                pageData[key]();
            }
        }

        $('.tpl-switch').find('.tpl-switch-btn-view').on('click', function() {
            $(this).prev('.tpl-switch-btn').prop("checked", function() {
                    if ($(this).is(':checked')) {
                        return false
                    } else {
                        return true
                    }
                })
                // console.log('123123123')

        })
    })
    // ==========================
    // 侧边导航下拉列表
    // ==========================

$('.tpl-left-nav-link-list').on('click', function() {
        $(this).siblings('.tpl-left-nav-sub-menu').slideToggle(80)
            .end()
            .find('.tpl-left-nav-more-ico').toggleClass('tpl-left-nav-more-ico-rotate');
    })
    // ==========================
    // 头部导航隐藏菜单
    // ==========================

$('.tpl-header-nav-hover-ico').on('click', function() {
    $('.tpl-left-nav').toggle();
    $('.tpl-content-wrapper').toggleClass('tpl-content-wrapper-hover');
})


// 页面数据
var pageData = {
    // ===============================================
    // 首页
    // ===============================================
    'index': function indexData() {


        var myScroll = new IScroll('#wrapper', {
            scrollbars: true,
            mouseWheel: true,
            interactiveScrollbars: true,
            shrinkScrollbars: 'scale',
            preventDefault: false,
            fadeScrollbars: true
        });

        var myScrollA = new IScroll('#wrapperA', {
            scrollbars: true,
            mouseWheel: true,
            interactiveScrollbars: true,
            shrinkScrollbars: 'scale',
            preventDefault: false,
            fadeScrollbars: true
        });

        var myScrollB = new IScroll('#wrapperB', {
            scrollbars: true,
            mouseWheel: true,
            interactiveScrollbars: true,
            shrinkScrollbars: 'scale',
            preventDefault: false,
            fadeScrollbars: true
        });



        // document.addEventListener('touchmove', function(e) { e.preventDefault(); }, false);

        // ==========================
        // 百度图表A http://echarts.baidu.com/
        // ==========================

        var echartsA = echarts.init(document.getElementById('tpl-echarts-A'));
        option = {

            tooltip: {
                trigger: 'axis',
            },
            legend: {
                data: ['浏览量', '收藏量', '回访量']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [{
                type: 'category',
                boundaryGap: true,
                data: ['3/5', '3/6', '3/7', '3/8', '3/9', '3/10', '3/11']
            }],

            yAxis: [{
                type: 'value'
            }],
            series: [{
                    name: '浏览量',
                    type: 'line',
                    stack: '总量',
                    areaStyle: { normal: {} },
                    data: [120, 132, 101, 134, 90, 230, 210],
                    itemStyle: {
                        normal: {
                            color: '#59aea2'
                        },
                        emphasis: {

                        }
                    }
                },
                {
                    name: '收藏量',
                    type: 'line',
                    stack: '总量',
                    areaStyle: { normal: {} },
                    data: [220, 182, 191, 234, 290, 330, 310],
                    itemStyle: {
                        normal: {
                            color: '#e7505a'
                        }
                    }
                },
                {
                    name: '回访量',
                    type: 'line',
                    stack: '总量',
                    areaStyle: { normal: {} },
                    data: [150, 232, 201, 154, 190, 330, 410],
                    itemStyle: {
                        normal: {
                            color: '#32c5d2'
                        }
                    }
                }
            ]
        };
        echartsA.setOption(option);
    },
    // ===============================================
    // 图表页
    // ===============================================
    'chart': function chartData() {
        // ==========================
        // 百度图表A http://echarts.baidu.com/
        // ==========================

        var echartsC = echarts.init(document.getElementById('tpl-echarts-C'));


        optionC = {
            tooltip: {
                trigger: 'axis'
            },
            toolbox: {
                top: '0',
                feature: {
                    dataView: { show: true, readOnly: false },
                    magicType: { show: true, type: ['line', 'bar'] },
                    restore: { show: true },
                    saveAsImage: { show: true }
                }
            },
            legend: {
                data: ['浏览量', '收藏量', '回访量']
            },
            xAxis: [{
                type: 'category',
                data: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
            }],
            yAxis: [{
                    type: 'value',
                    name: '水量',
                    min: 0,
                    max: 250,
                    interval: 50,
                    axisLabel: {
                        formatter: '{value} ml'
                    }
                },
               
            ],
            series: [{
                    name: '浏览量',
                    type: 'bar',
                    data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3]
                },
                {
                    name: '收藏量',
                    type: 'bar',
                    data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
                },
                {
                    name: '回访量',
                    type: 'bar',
                  
                    data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2]
                }
            ]
        };

        echartsC.setOption(optionC);

        var echartsB = echarts.init(document.getElementById('tpl-echarts-B'));
        optionB = {
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                x: 'center',
                data: ['浏览途径', '客户类型', '浏览量', '收藏量', '回访量']
            },
            radar: [{
                    indicator: [
                        { text: '收藏', max: 100 },
                        { text: '搜索', max: 100 },
                        { text: '推荐', max: 100 },
                    ],
                    center: ['25%', '40%'],
                    radius: 80
                },
                {
                    indicator: [
                        { text: '年龄段', max: 100 },
                        { text: '婚姻情况', max: 100 },
                        { text: '资产', max: 100 },
                        { text: '性别', max: 100 },
                       
                    ],
                    radius: 80,
                    center: ['50%', '60%'],
                },
                {
                    indicator: (function() {
                        var res = [];
                        for (var i = 1; i <= 12; i++) {
                            res.push({ text: i + '月', max: 100 });
                        }
                        return res;
                    })(),
                    center: ['75%', '40%'],
                    radius: 80
                }
            ],
            series: [{
                    type: 'radar',
                    tooltip: {
                        trigger: 'item'
                    },
                    itemStyle: { normal: { areaStyle: { type: 'default' } } },
                    data: [{
                        value: [60, 73, 30],
                        name: '浏览途径'
                    }]
                },
                {
                    type: 'radar',
                    radarIndex: 1,
                    itemStyle: { normal: { areaStyle: { type: 'default' } } },
                    data: [{
                            value: [25, 50, 40, 69],
                            name: '客户类型'
                        }]
                },
                {
                    type: 'radar',
                    radarIndex: 2,
                    itemStyle: { normal: { areaStyle: { type: 'default' } } },
                    data: [{
                            name: '浏览量',
                            value: [67, 85, 90,76 , 54, 43, 52, 64, 31, 27, 16, 20],
                        },
                        {
                            name: '收藏量',
                            value: [34, 40, 42,39 ,12 , 15., 13, 11, 10, 12,18, 16]
                        },
                        {
                            name: '回访量',
                            value: [12,15 ,14 , 13,17 , 19, 11, 7, 10, 5, 2, 7]
                        }
                    ]
                }
            ]
        };
        echartsB.setOption(optionB);
        var echartsA = echarts.init(document.getElementById('tpl-echarts-A'));
        option = {

            tooltip: {
                trigger: 'axis',
            },
            legend: {
                data: ['浏览量', '收藏量', '回访量']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [{
                type: 'category',
                boundaryGap: true,
                data: ['3/5', '3/6', '3/7', '3/8', '3/9', '3/10', '3/11']
               
            }],

            yAxis: [{
                type: 'value'
            }],
            series: [{
                    name: '浏览量',
                    type: 'line',
                    stack: '总量',
                    areaStyle: { normal: {} },
                    data: [120, 132, 101, 134, 90, 230, 210],
                    itemStyle: {
                        normal: {
                            color: '#59aea2'
                        },
                        emphasis: {

                        }
                    }
                },
                {
                    name: '收藏量',
                    type: 'line',
                    stack: '总量',
                    areaStyle: { normal: {} },
                    data: [220, 182, 191, 234, 290, 330, 310],
                    itemStyle: {
                        normal: {
                            color: '#e7505a'
                        }
                    }
                },
                {
                    name: '回访量',
                    type: 'line',
                    stack: '总量',
                    areaStyle: { normal: {} },
                    data: [150, 232, 201, 154, 190, 330, 410],
                    itemStyle: {
                        normal: {
                            color: '#32c5d2'
                        }
                    }
                }
            ]
        };
        echartsA.setOption(option);
    }
}