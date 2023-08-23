<?php /* Smarty version 2.6.32, created on 2023-08-23 10:19:55
         compiled from CRM/Admin/Form/Job.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Job.tpl', 1, false),array('block', 'icon', 'CRM/Admin/Form/Job.tpl', 15, false),array('block', 'ts', 'CRM/Admin/Form/Job.tpl', 16, false),array('function', 'docURL', 'CRM/Admin/Form/Job.tpl', 26, false),array('function', 'crmAPI', 'CRM/Admin/Form/Job.tpl', 45, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-job-form-block">

<?php if ($this->_tpl_vars['action'] == 8): ?>
  <div class="messages status no-popup">
      <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Deleting this Scheduled Job will cause some important site functionality to stop working.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php elseif ($this->_tpl_vars['action'] == 4): ?>
  <div class="messages status no-popup">
      <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['jobName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you would like to execute %1 job?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php else: ?>
  <div class="help">
    <?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Job parameters and command line syntax documentation<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('docUrlText', ob_get_contents());ob_end_clean(); ?>
    <?php echo smarty_function_docURL(array('page' => "user/initial-set-up/scheduled-jobs",'text' => $this->_tpl_vars['docUrlText']), $this);?>

  </div>
  <table class="form-layout-compressed">
    <tr class="crm-job-form-block-name">
        <td class="label"><?php echo $this->_tpl_vars['form']['name']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['name']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-description">
        <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-run_frequency">
        <td class="label"><?php echo $this->_tpl_vars['form']['run_frequency']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['run_frequency']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-api_action">
        <td class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>API call:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
        <td>

        <div id="fname"><br/>
        </div>
        <select name="api_entity" type="text" id="api_entity" class="crm-form-select required">
          <?php echo smarty_function_crmAPI(array('entity' => 'Entity','var' => 'entities'), $this);?>

          <?php $_from = $this->_tpl_vars['entities']['values']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entity']):
?>
            <option value="<?php echo $this->_tpl_vars['entity']; ?>
"<?php if ($this->_tpl_vars['entity'] == $this->_tpl_vars['form']['api_entity']['value']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['entity']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
        <?php echo $this->_tpl_vars['form']['api_action']['html']; ?>


        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Put in the API method name. You need to enter pieces of full API function name as described in the documentation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
<script>
<?php echo '
CRM.$(function($) {
  function assembleName( ) {

    // dunno yet
    var apiName = "";

    // building prefix
    if( $(\'#api_action\').val() == \'\' ) {
      $(\'#fname\').html( "<em>API name will start appearing here as you type in fields below.</em>" );
      return;
    }

    var apiPrefix = \'api\'

    // building entity
    var apiEntity = $(\'#api_entity\').val().replace( /([A-Z])/g, function($1) {
      return $1.toLowerCase();
    });
    // building action
    var apiAction = $(\'#api_action\').val().replace(/(\\_[a-z])/g, function($1) {return $1.toUpperCase().replace(\'_\',\'\');});
    apiName = apiPrefix + \'.\' + apiEntity + \'.\' + apiAction;
    $(\'#fname\').text( apiName );
  }

  // bind to different events to build API name live
  $(\'#api_entity\').change(assembleName)
  $(\'#api_action\').change(assembleName).keyup(assembleName);
  assembleName();
});

'; ?>

</script>

      </td>
    </tr>
    <tr class="crm-job-form-block-parameters">
      <td class="label"><?php echo $this->_tpl_vars['form']['parameters']['label']; ?>
<br /><?php echo smarty_function_docURL(array('page' => "user/initial-set-up/scheduled-jobs/#parameters"), $this);?>
</td>
      <td><?php echo $this->_tpl_vars['form']['parameters']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-scheduled-run-date">
        <td class="label"><?php echo $this->_tpl_vars['form']['scheduled_run_date']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['scheduled_run_date']['html']; ?>
<br />
            <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do not run this job before this date / time. The run frequency selected above will apply thereafter.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
              <?php if ($this->_tpl_vars['action'] == 1): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Leave blank to run as soon as possible.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Leave blank to run at next run frequency.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
            </div>
        </td>
    </tr>
    <tr class="crm-job-form-block-is_active">
      <td></td><td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
    </tr>
  </table>
<?php endif; ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>