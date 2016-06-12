<?php exit;?>001496911930310b4948def2429536ffa2c146cfce98s:1127:"a:2:{s:8:"template";s:1063:"<div class="header">
  <div class="w1200 fn-clear">
    <div class="logo"><img src="/yikaiba/public/assets/img/logo.fw.png" width="300" height="80"  alt=""/></div>
    <div class="nav">
      <a href="/yikaiba/">首页</a>
      <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>6, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
      <a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a>
      <?php } ?>
    </div>
    <div class="formbox">
      <form action="{:U('portal/search/index')}" method="post" class="fn-clear">
        <input type="text" name="keyword" value="" class="stext fn-left" placeholder="请输入关键词" value="" />
        <button type="submit" name="sbut" class="sbut fn-left"></button>
      </form>
    </div>
    <!--
    <div class="uinfo">
      <a href="http://www.uishijie.com/#" class="login">登录</a><a href="http://www.uishijie.com/#" class="reg">注册</a>
    </div>
    -->
  </div>
</div>";s:12:"compile_time";i:1465375930;}";