<?php /* Smarty version 2.6.32, created on 2023-08-23 09:42:15
         compiled from CRM/Report/Form/Tabs/Filters.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Tabs/Filters.tpl', 1, false),array('modifier', 'cat', 'CRM/Report/Form/Tabs/Filters.tpl', 26, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div id="report-tab-set-filters" class="civireport-criteria">
  <div class="report-layout">
      <?php $this->assign('counter', 1); ?>
      <?php $_from = $this->_tpl_vars['filterGroups']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['filterGroup']):
?>
                <?php if ($this->_tpl_vars['filterGroup']['use_accordion_for_field_selection']): ?>
          <div class="crm-accordion-wrapper crm-accordion collapsed">
            <div class="crm-accordion-header">
              <?php echo $this->_tpl_vars['filterGroup']['group_title']; ?>

            </div><!-- /.crm-accordion-header -->
            <div class="crm-accordion-body">
        <?php endif; ?>
        <table class="report-layout">
        <?php $_from = $this->_tpl_vars['filterGroup']['tables']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tableName'] => $this->_tpl_vars['table']):
?>
          <?php $_from = $this->_tpl_vars['table']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
                <?php $this->assign('fieldOp', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_op') : smarty_modifier_cat($_tmp, '_op'))); ?>
                <?php $this->assign('filterVal', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_value') : smarty_modifier_cat($_tmp, '_value'))); ?>
                <?php $this->assign('filterMin', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_min') : smarty_modifier_cat($_tmp, '_min'))); ?>
                <?php $this->assign('filterMax', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_max') : smarty_modifier_cat($_tmp, '_max'))); ?>
                <?php if (! empty ( $this->_tpl_vars['field']['operatorType'] ) && $this->_tpl_vars['field']['operatorType'] & 4): ?>
                  <tr class="report-contents crm-report crm-report-criteria-filter crm-report-criteria-filter-<?php echo $this->_tpl_vars['tableName']; ?>
">
                    <td class="label report-contents"><?php if (! empty ( $this->_tpl_vars['field']['title'] )): ?><?php echo $this->_tpl_vars['field']['title']; ?>
<?php endif; ?></td>
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/DatePickerRangeWrapper.tpl", 'smarty_include_vars' => array('fieldName' => $this->_tpl_vars['fieldName'],'hideRelativeLabel' => 1,'from' => '_from','to' => '_to','class' => '','colspan' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </tr>
                <?php elseif ($this->_tpl_vars['form'][$this->_tpl_vars['fieldOp']]['html']): ?>
                  <tr class="report-contents crm-report crm-report-criteria-filter crm-report-criteria-filter-<?php echo $this->_tpl_vars['tableName']; ?>
" <?php if (array_key_exists ( 'no_display' , $this->_tpl_vars['field'] ) && $this->_tpl_vars['field']['no_display']): ?> style="display: none;"<?php endif; ?>>
                    <td class="label report-contents"><?php if (! empty ( $this->_tpl_vars['field']['title'] )): ?><?php echo $this->_tpl_vars['field']['title']; ?>
<?php endif; ?></td>
                    <td class="report-contents"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fieldOp']]['html']; ?>
</td>
                    <td>
                      <span id="<?php echo $this->_tpl_vars['filterVal']; ?>
_cell"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterVal']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterVal']]['html']; ?>
</span>
                      <span id="<?php echo $this->_tpl_vars['filterMin']; ?>
_max_cell">
                        <?php if (array_key_exists ( $this->_tpl_vars['filterMin'] , $this->_tpl_vars['form'] ) && $this->_tpl_vars['form'][$this->_tpl_vars['filterMin']]): ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMin']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMin']]['html']; ?>
&nbsp;&nbsp;<?php endif; ?>
                        <?php if (array_key_exists ( $this->_tpl_vars['filterMax'] , $this->_tpl_vars['form'] ) && $this->_tpl_vars['form'][$this->_tpl_vars['filterMax']]): ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMax']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['filterMax']]['html']; ?>
<?php endif; ?>
                      </span>
                    </td>
                  </tr>
                <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
        <?php endforeach; endif; unset($_from); ?>
        </table>
        <?php if ($this->_tpl_vars['filterGroup']['use_accordion_for_field_selection']): ?>
            </div><!-- /.crm-accordion-body -->
          </div><!-- /.crm-accordion-wrapper -->
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
  </div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>