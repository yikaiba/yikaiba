<?php exit;?>0014969119963ef3ab22ae1ffdbe1ead62062b450387s:1743:"a:2:{s:8:"template";s:1679:"<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url();?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong><?php echo $name;?>推荐位</strong>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="label">
                    <label>推荐位名称</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="name" name="name" size="60" datatype="s" value="<?php echo $info["name"];?>">
                    <div class="input-note">推荐位名称</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>推荐位顺序</label>
                </div>
                <div class="field">
                    <input type="number" class="input" id="sequence" name="sequence" size="60" datatype="n" value="<?php echo $info["sequence"];?>">
                    <div class="input-note">数字越小越靠前</div>
                </div>
            </div>
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <input type="hidden" name="position_id" type="hidden" value="<?php echo $info["position_id"];?>">
                <button class="button bg-main" type="submit">保存</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxFormPage();
    });
</script>";s:12:"compile_time";i:1465375996;}";