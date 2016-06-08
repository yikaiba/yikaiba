<?php exit;?>00149690020968da4e0fc1545cd384c207e6448dfe7ds:4529:"a:2:{s:8:"template";s:4465:"<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>DuxCms安装向导</title>
    <link rel="stylesheet" href="/yikaiba/public/common/css/pintuer.css">
    <link rel="stylesheet" href="/yikaiba/public/install/css/style.css">
    <script src="/yikaiba/public/js/jquery.js"></script>
    <script src="/yikaiba/public/common/js/pintuer.js"></script>
    <script src="/yikaiba/public/common/js/respond.js"></script>
    <script src="/yikaiba/public/install/js/install.js"></script>
</head>

<body>
    <div class="container">
        <div class="ins-head">
            <h1>DuxCms 安装程序</h1>
        </div>
        <div class="panel ins-panel">
            <div class="ins-step">
                <div class="step">
                    <div class="step-bar complete" style="width:25%;"><span class="step-point icon-check"></span><span class="step-text">阅读用户协议</span></span>
                    </div>
                    <div class="step-bar active" style="width:25%;"><span class="step-point">2</span><span class="step-text">检查安装环境</span>
                    </div>
                    <div class="step-bar" style="width:25%;"><span class="step-point">3</span><span class="step-text">配置程序信息</span>
                    </div>
                    <div class="step-bar" style="width:25%;"><span class="step-point">4</span><span class="step-text">完成安装操作</span>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="form-x form-auto form-check">
                    <h3>功能支持检测</h3>
                    <?php foreach ($check_env as $vo) { ?>
                    <div class="form-group">
                        <div class="label"><?php echo $vo["0"];?>:</div>
                        <div class="field">
                            <?php echo $vo["3"];?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if ($vo[4]=='error' ){ echo "<font color=red><b>×</b></font>"; } else { echo "<font color=green><b>√</b></font>"; } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <h3>函数支持检测</h3>
                    <?php foreach ($check_func as $vo) { ?>
                    <div class="form-group">
                        <div class="label"><?php echo $vo["0"];?>:</div>
                        <div class="field">
                            <?php echo $vo["3"];?>
                            <?php if ($vo[4]=='error' ){ echo "<font color=red><b>×</b></font>"; } else { echo "<font color=green><b>√</b></font>"; } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <h3>目录权限检测</h3>
                    <?php foreach ($check_dirfile as $vo) { ?>
                    <div class="form-group">
                        <div class="label"><?php echo $vo["1"];?>:</div>
                        <div class="field">
                            <?php echo $vo["3"];?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if ($vo[2]=='error' ){ echo "<font color=red><b>×</b></font>"; } else { echo "<font color=green><b>√</b></font>"; } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="panel-foot">
                <div class="line-middle">
                    <div class="xm6"><a class="button bg-main button-block text-center" href="<?php echo url('index');?>">上一步</a>
                    </div>
                    <div class="xm6">
                        <?php if (!function_exists( 'mysql_connect')||!function_exists( 'mysql_pconnect')){ ?>
                        <a class="button bg-sub button-block text-center" href="javascript:;" onclick="alert('关键功能无法使用，无法继续操作！')" class="submit">下一步</a>
                        <?php }else { ?>
                        <a class="button bg-sub button-block text-center" href="<?php echo url('setup2');?>" class="submit">下一步</a>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>";s:12:"compile_time";i:1465364209;}";