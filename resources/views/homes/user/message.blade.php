<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>{{$config[0]->name}}</title>

        <link rel="stylesheet" href="/homes/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/homes/bootstrap/css/bootstrap-theme.min.css">
        <script type="text/javascript" src="/homes/js/jquery-3.2.1.min.js">
        </script>
        <script type="text/javascript" src="/homes/bootstrap/js/bootstrap.min.js">
        </script>
        <link rel="stylesheet" href="/homes/css/user.replay.css">
    </head>
    
    <body style="background:#F0F3EF no-repeat center center fixed;font: 12px/1.3 'Arial','Microsoft YaHei';background-size: 100% 100%;background-position: top center;">
    
        <div>
            <div>
                <nav class="navbar navbar-fixed-top" id="navbar">
                    <div class="container">
                        <div class="navbar-header" id="navbar-header1">
                            <a href="/home/login">
                            <img src="http://ozsrs9z8f.bkt.clouddn.com/{{$config[0]->logo}}" alt="" style="width:80px;height:27px;margin-top:7px;">
                            </a>
                        </div>
                        <div class="navbar-header" id="navbar-header2">
                            <form action="/home/search" class="navbar-form navbar-right" method="get">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="精彩生活，微博搜索" >
                            </div>

                            {{csrf_field()}}
                            <button class="btn btn-warning" type="submit">
                                搜索
                            </button>
                        </form>
                        </div>
                          <div id="nav-1">
                        <div style="float:right;line-height: 20px;font-size: 16px;margin-right: 20px;margin-top: 10px">
                           <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            <a href="/home/details/quit"  title="退出登录" style="text-decoration:none;">
                                退出
                            </a>
                        </div>
                        <div style="float:right;line-height: 20px;font-size: 16px;margin-right: 20px;margin-top: 10px">
                            <li class="dropdown" style="list-style-type:none">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration:none;">{{$rev->nickName}}<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="/home/user">个人中心</a></li>
                                <li><a href="/home/details/edit">个人信息</a></li>
                                <li><a href="/home/changepass">修改密码</a></li>
                                <li><a href="/home/message">系统消息</a></li>
                              </ul>
                            </li>
                        </div>
                        <div style="float:right;line-height: 20px;font-size: 16px;margin-right: 20px;margin-top: 10px">
                            <span class="glyphicon glyphicon-home" aria-hidden="true">
                                                        </span>
                            <a href="/home/login" style="text-decoration:none;">
                                首页
                            </a>
                        </div>
                    </div>
                        <!--/.navbar-collapse -->
                    </div>
                </nav>
            </div>
            <!-- 头结束 -->
            <!-- 中间开始 -->
            <div class="row" id="weibo">
                <div class="container">
                    <!-- 头像 及北京-->
                    <div class="container">
                        <div class="jumbotron" id="backg" style="background:url('/homes/images/2016.jpg');background-repeat:no-repeat">
                        
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <!-- 头像 -->
                                <div id="jimg" style="margin-left: 100px">
                                     <img src="http://ozsrs9z8f.bkt.clouddn.com/{{$rev->photo}}?imageView2/1/w/200/h/200/q/75|watermark/2/text/bXl3ZWlibw==/font/5a6L5L2T/fontsize/240/fill/I0YxRUZFNg==/dissolve/100/gravity/SouthEast/dx/10/dy/10|imageslim" style="width:100px;" id="img" class="img-circle">

                                </div>
                                <div>
                                  <!-- 昵称 -->
                                    <div id="nickname" style="font-size: 20px;">
                                        {{$rev->nickName}}&nbsp;&nbsp;
                                        
                                    </div>
                                    <div id="nickName" style="margin-top:10px;font-size: 15px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;年龄:&nbsp;{{$rev->age}}&nbsp;&nbsp;职业:&nbsp;{{$rev->work}}&nbsp;&nbsp;积分:<span id="fsoc">{{$rev->socre}}</span>&nbsp;&nbsp;&nbsp;性别:&nbsp;
                                        @if($rev->sex=='w')
                                        女
                                        @else
                                        男
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <!-- 头像 及北京-->
                    <style> #weibo #lanmu li { margin-top: 5px; font-size: 14px}</style>

                    <!-- 栏目及遍历 -->
                    <div class="container">
                        <!-- 栏目 -->
                        <div class="col-md-3 sidebar" id="lanmu">
                            <ul class="nav nav-sidebar">
                                <li class="active">
                                    <a href="/home/user">
                                        微博
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/fans">
                                        粉丝
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/attention">
                                        关注
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/photo">
                                        相册管理
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/point">
                                        我微博的赞
                                        @if($point>0)
                                        <div style="width: 20px;height: 20px;background:#fa7d3c;float: right;border-radius: 10px;margin-left: 3px;text-align:center;color: #fff;line-height: 20px ">
                                            {{$point}}
                                        </div>
                                        @else
                                        <div></div>
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/replay">
                                        微博评论
                                        @if($replay>0)
                                        <div style="width: 20px;height: 20px;background:#fa7d3c;float: right;border-radius: 10px;margin-left: 3px;text-align:center;color: #fff;line-height: 20px ">
                                            {{$replay}}
                                        </div>
                                        @else
                                        <div></div>
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/forward">
                                        微博转发
                                        @if($forward>0)
                                        <div style="width: 20px;height: 20px;background:#fa7d3c;float: right;border-radius: 10px;margin-left: 3px;text-align:center;color: #fff;line-height: 20px  ">
                                            {{$forward}}
                                        </div>
                                        @else
                                        <div></div>
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a href="/home/message" style="text-decoration:none;">
                                        系统消息 @if($message>0)
                                        <div style="width: 20px;height: 20px;background:#fa7d3c;float: right;border-radius: 10px;margin-left: 3px;text-align:center;color: #fff;line-height: 20px  ">
                                            {{$message}}
                                        </div>
                                        @else
                                        <div>
                                        </div>
                                        @endif
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- 栏目结束 -->
                        <!-- 微博 -->
                        <div class="col-md-8 sidebar">
                             <div class="col-lg-12" style="margin-left: 12px;background-color: #fff;margin-bottom: 10px;width: 830px; ">
                                <h3>系统消息</h3>
                            </div>
                            @if($res->isEmpty())
                        <div class="col-lg-12" id="tiezi" style="width: 830px;margin-top: 10px;height: 40px;line-height: 40px;background-color: #fff;margin-left: 14px">
                            你还没有任何系统消息哟~~~
                        </div>
                        @else
                            <!-- 微博遍历的地方 -->
                           @foreach($res as $k=>$v)
                            <div class="col-lg-12" id="tiezi" style="width: 830px">
                                <div class="col-lg-12">
                                    <!-- 头像 -->
                                    <div class="col-log-2" id="tieimg">
                                        <img src="/homes/uploads/default.jpg" style="width: 50px;height:50px"  id="img" class="img-circle">

                                    </div>
                                    <!-- 名称和时间 -->
                                    <div class="col-log-8" id="tiename" style="margin-top: 20px">
                                        <b>
                                           系统管理员:
                                        </b>
                                        <br/>
                                        <em>
                                           时间:&nbsp;&nbsp;{{date('Y-m-d H:i:s',$v->time)}}
                                        </em>
                                    </div>
                                </div>
                                <!-- 内容 -->
                                <div class="col-lg-10" style="margin-left: 70px">
                                    
                                </div>
                              
                                <div class="col-lg-10" style="background-color: #ccc;padding:5px;margin-left: 85px;margin-top: 5px;margin-bottom: 10px;border-radius: 10px;">
                                    <i>
                                        亲爱的用户:{{$v->content}}
                                    </i>
                                  
                                </div>
                               
                            </div>
                            @endforeach
                            @endif

                            <!-- 微博遍历结束 -->
                        </div>
                            <div style="float: right">{!! $res->render() !!}</div>

                        <!-- 微博 -->
                    </div>
                </div>
            </div>
            <!-- 中间结束 -->
        </div>
    </body>

</html>