<?php /* Smarty version 2.6.27, created on 2016-10-24 04:22:57
         compiled from CRM/Member/Form/Search/Common.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Form/Search/Common.tpl', 1, false),array('block', 'ts', 'CRM/Member/Form/Search/Common.tpl', 68, false),array('modifier', 'crmAddClass', 'CRM/Member/Form/Search/Common.tpl', 28, false),array('function', 'help', 'CRM/Member/Form/Search/Common.tpl', 40, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><tr>
  <td><label><?php echo $this->_tpl_vars['form']['membership_type_id']['label']; ?>
</label><br />
      <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['membership_type_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'twenty') : smarty_modifier_crmAddClass($_tmp, 'twenty')); ?>

  </td>
  <td><label><?php echo $this->_tpl_vars['form']['membership_status_id']['label']; ?>
</label><br />
      <?php echo $this->_tpl_vars['form']['membership_status_id']['html']; ?>

  </td>
</tr>

<tr>
  <td>
  <?php echo $this->_tpl_vars['form']['member_source']['label']; ?>

    <br /><?php echo $this->_tpl_vars['form']['member_source']['html']; ?>

    <p>
    <?php echo $this->_tpl_vars['form']['member_test']['label']; ?>
 <?php echo smarty_function_help(array('id' => "is-test",'file' => "CRM/Contact/Form/Search/Advanced"), $this);?>
 &nbsp;<?php echo $this->_tpl_vars['form']['member_test']['html']; ?>

    </p>
  </td>
  <td>
    <p>
    <?php echo $this->_tpl_vars['form']['member_is_primary']['label']; ?>

    <?php echo smarty_function_help(array('id' => "id-member_is_primary",'file' => "CRM/Member/Form/Search.hlp"), $this);?>

    <?php echo $this->_tpl_vars['form']['member_is_primary']['html']; ?>

    </p>
    <p>
    <?php echo $this->_tpl_vars['form']['member_pay_later']['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['member_pay_later']['html']; ?>

    </p>
    <p>
      <?php if ($this->_tpl_vars['form']['member_auto_renew']): ?>
          <label><?php echo $this->_tpl_vars['form']['member_auto_renew']['label']; ?>
</label>
          <?php echo smarty_function_help(array('id' => "id-member_auto_renew",'file' => "CRM/Member/Form/Search.hlp"), $this);?>

          <br/>
          <?php echo $this->_tpl_vars['form']['member_auto_renew']['html']; ?>

        <?php endif; ?>
    </p>
    <p>
    <?php echo $this->_tpl_vars['form']['member_is_override']['label']; ?>

    <?php echo smarty_function_help(array('id' => "id-member_is_override",'file' => "CRM/Member/Form/Search.hlp"), $this);?>

    <?php echo $this->_tpl_vars['form']['member_is_override']['html']; ?>

    </p>
  </td>
</tr>

<tr><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Member Since<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td></tr>
<tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/DateRange.tpl", 'smarty_include_vars' => array('fieldName' => 'member_join_date','from' => '_low','to' => '_high')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</tr>

<tr><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Start Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td></tr>
<tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/DateRange.tpl", 'smarty_include_vars' => array('fieldName' => 'member_start_date','from' => '_low','to' => '_high')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</tr>

<tr><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td></tr>
<tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/DateRange.tpl", 'smarty_include_vars' => array('fieldName' => 'member_end_date','from' => '_low','to' => '_high')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</tr>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignContext' => 'componentSearch','campaignTrClass' => '','campaignTdClass' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['membershipGroupTree']): ?>
<tr>
  <td colspan="4">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/Search.tpl", 'smarty_include_vars' => array('groupTree' => $this->_tpl_vars['membershipGroupTree'],'showHideLinks' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </td>
</tr>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>