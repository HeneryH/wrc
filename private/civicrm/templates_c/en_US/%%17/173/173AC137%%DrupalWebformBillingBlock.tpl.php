<?php /* Smarty version 2.6.32, created on 2023-08-23 13:41:11
         compiled from CRM/Mjwshared/Form/DrupalWebformBillingBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Mjwshared/Form/DrupalWebformBillingBlock.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    $(document).ready(function() {
      if (typeof CRM.vars.payment === \'undefined\') {
        var paymentJSVars = {'; ?>
<?php $_from = $this->_tpl_vars['paymentJSVars']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrayKey'] => $this->_tpl_vars['arrayValue']):
?><?php echo $this->_tpl_vars['arrayKey']; ?>
:'<?php echo $this->_tpl_vars['arrayValue']; ?>
',<?php endforeach; endif; unset($_from); ?><?php echo '};
        CRM.vars.payment = paymentJSVars;
      }
    });
  });
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>