<?php /* Smarty version 2.6.32, created on 2023-08-23 09:55:14
         compiled from CRM/Contact/Form/Edit/CustomData.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/CustomData.tpl', 1, false),array('modifier', 'cat', 'CRM/Contact/Form/Edit/CustomData.tpl', 14, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_from = $this->_tpl_vars['groupTree']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group_id'] => $this->_tpl_vars['cd_edit']):
?>
  <?php if ($this->_tpl_vars['cd_edit']['is_multiple'] == 1): ?>
    <?php $this->assign('tableID', $this->_tpl_vars['cd_edit']['table_id']); ?>
    <?php $this->assign('divName', ((is_array($_tmp=$this->_tpl_vars['group_id'])) ? $this->_run_mod_handler('cat', true, $_tmp, "_".($this->_tpl_vars['tableID'])) : smarty_modifier_cat($_tmp, "_".($this->_tpl_vars['tableID'])))); ?>
    <div></div>
    <div
     class="crm-accordion-wrapper crm-custom-accordion <?php if ($this->_tpl_vars['cd_edit']['collapse_display'] && ! $this->_tpl_vars['skipTitle']): ?>collapsed<?php endif; ?>">
  <?php else: ?>
    <div id="<?php echo $this->_tpl_vars['cd_edit']['name']; ?>
"
       class="crm-accordion-wrapper crm-custom-accordion <?php if ($this->_tpl_vars['cd_edit']['collapse_display']): ?>collapsed<?php endif; ?>">
  <?php endif; ?>
    <div class="crm-accordion-header">
      <?php echo $this->_tpl_vars['cd_edit']['title']; ?>

    </div>
    <div id="customData<?php echo $this->_tpl_vars['group_id']; ?>
" class="crm-accordion-body">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/Edit/CustomData.tpl", 'smarty_include_vars' => array('customDataEntity' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachmentjs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <!-- crm-accordion-body-->
  </div>
  <!-- crm-accordion-wrapper -->
  <div id="custom_group_<?php echo $this->_tpl_vars['group_id']; ?>
_<?php echo $this->_tpl_vars['cgCount']; ?>
"></div>
  <?php endforeach; endif; unset($_from); ?>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachmentjs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>