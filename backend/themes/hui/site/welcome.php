<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My ';
?>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>数据报告</h5> <span class="label label-primary">K+</span>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="index-2.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="index-2.html#">选项1</a>
                            </li>
                            <li><a href="index-2.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div>

                        <div class="pull-right text-right">

                            <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                            <br/>
                            <small class="font-bold">&yen; 20 054.43</small>
                        </div>
                        <h4>广东省销售数据
                            <br/>
                            <small class="m-r"><a href="graph_flot.html"> 查看所有数据</a> </small>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>最新动态</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="index-2.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="index-2.html#">选项1</a>
                            </li>
                            <li><a href="index-2.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content no-padding">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p><a class="text-info" href="index-2.html#">#感谢有你#</a> 感谢你们一路的相伴，未来也请让我为你们撑腰，我们会更好</p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1分钟前</small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="index-2.html#">@颜文字君</a> 女生身高×1.09后，就是最适合你的男生身高；相反，男生是÷1.09就可以了..小伙伴们可以试着算下..【图是我的..(*/ω＼*)</p>
                            <div class="text-center m">
                                <span id="sparkline8"></span>
                            </div>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2小时前</small>
                        </li>

                        <li class="list-group-item">
                            <p><a class="text-info" href="index-2.html#">#发型师#</a> 刚才剪发，顾客在看这个视频，妈蛋，这舞姿太销魂了，笑得手颤抖。。。</p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1分钟前</small>
                        </li>
                        <li class="list-group-item">
                            <p><a class="text-info" href="index-2.html#">#一年级#</a> ——#陈氏父子# cut：“他是我的陈爸爸”[心]“我叫陈思成，陈老师的陈” [心]“不再见就是，你也好，爸爸也好，妈妈也好，都永远不要说再见</p>
                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2分钟前</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>最新消息</h5>
                    <div class="ibox-tools">
                        <span class="label label-warning-light">10条未读</span>
                    </div>
                </div>
                <div class="ibox-content">

                    <div>
                        <div class="feed-activity-list">

                            <div class="feed-element">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/h-ui/img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">5分钟前</small>
                                    <strong>谨斯里</strong> 上传了一个文件
                                    <br>
                                    <small class="text-muted">2014.11.8 12:22</small>

                                </div>
                            </div>

                            <div class="feed-element">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/h-ui/img/a2.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2个月前</small>
                                    <strong>田亮</strong> 参加了<strong>《粑粑去哪儿》</strong>
                                    <br>
                                    <small class="text-muted">2014.11.8 12:22</small>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/h-ui/img/a3.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2小时前</small>
                                    <strong>林依晨Ariel</strong> 刚刚起床
                                    <br>
                                    <small class="text-muted">2014.11.8 12:22</small>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/h-ui/img/a5.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">32分钟前</small>
                                    <strong>颜文字君</strong> 评论了
                                    <br>
                                    <small class="text-muted">2014.11.8 12:22</small>
                                    <div class="well">
                                        【九部令人拍案叫绝的惊悚悬疑剧情佳作】如果你喜欢《迷雾》《致命ID》《电锯惊魂》《孤儿》《恐怖游轮》这些好片，那么接下来推荐的9部同类题材并同样出色的的电影，绝对不可错过哦~
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> 喜欢 </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> 加载更多</button>

                    </div>

                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>项目进度</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="index-2.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="index-2.html#">选项1</a>
                            </li>
                            <li><a href="index-2.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content ibox-heading">
                    <h3>还有约79842492229个Bug需要修复</h3>
                    <small><i class="fa fa-map-marker"></i> 地点当然是在办公室</small>
                </div>
                <div class="ibox-content timeline">

                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-briefcase"></i> 6:00
                                <br/>
                                <small class="text-navy">2 小时前</small>
                            </div>
                            <div class="col-xs-7 content no-top-border">
                                <p class="m-b-xs"><strong>服务器已彻底崩溃</strong>
                                </p>

                                <p>还未检查出错误</p>

                                <p><span data-diameter="40" class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,4,7,3,2,9,8,7,4,5,1,2,9,5,4,7,2,7,7,3,5,2</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-file-text"></i> 7:00
                                <br/>
                                <small class="text-navy">3小时前</small>
                            </div>
                            <div class="col-xs-7 content">
                                <p class="m-b-xs"><strong>修复了0.5个bug</strong>
                                </p>
                                <p>重启服务</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-coffee"></i> 8:00
                                <br/>
                            </div>
                            <div class="col-xs-7 content">
                                <p class="m-b-xs"><strong>喝水、上厕所、做测试</strong>
                                </p>
                                <p>
                                    喝了4杯水，上了3次厕所，控制台输出出2324个错误，神啊，带我走吧
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-phone"></i> 11:00
                                <br/>
                                <small class="text-navy">21小时前</small>
                            </div>
                            <div class="col-xs-7 content">
                                <p class="m-b-xs"><strong>项目经理打电话来了</strong>
                                </p>
                                <p>
                                    TMD，项目经理居然还没有起床！！！
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-user-md"></i> 09:00
                                <br/>
                                <small>21小时前</small>
                            </div>
                            <div class="col-xs-7 content">
                                <p class="m-b-xs"><strong>开会</strong>
                                </p>
                                <p>
                                    开你妹的会，老子还有897894个bug没有修复
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <i class="fa fa-comments"></i> 12:50
                                <br/>
                                <small class="text-navy">讨论</small>
                            </div>
                            <div class="col-xs-7 content">
                                <p class="m-b-xs"><strong>…………</strong>
                                </p>
                                <p>
                                    又是操蛋的一天
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


