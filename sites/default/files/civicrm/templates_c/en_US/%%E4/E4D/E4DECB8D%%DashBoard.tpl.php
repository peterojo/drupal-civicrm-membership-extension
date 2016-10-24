<?php /* Smarty version 2.6.27, created on 2016-10-24 03:35:42
         compiled from CRM/Member/Page/DashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Page/DashBoard.tpl', 1, false),array('block', 'ts', 'CRM/Member/Page/DashBoard.tpl', 28, false),array('function', 'help', 'CRM/Member/Page/DashBoard.tpl', 28, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['membershipSummary']): ?>
  <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-member-intro"), $this);?>
</h3>
  <table class="report">
    <tr class="columnheader-dark">
      <th scope="col" rowspan="2"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Members by Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <?php if ($this->_tpl_vars['preMonth']): ?>
      <th scope="col" colspan="3"><?php echo $this->_tpl_vars['premonth']; ?>
 &ndash; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(Last Month)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <?php endif; ?>
        <th scope="col" colspan="3"><?php echo $this->_tpl_vars['month']; ?>
<?php if ($this->_tpl_vars['isCurrent']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> (MTD)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></th>
        <th scope="col" colspan="3">
            <?php if ($this->_tpl_vars['year'] == $this->_tpl_vars['currentYear']): ?>
    <?php echo $this->_tpl_vars['year']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(YTD)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
    <?php echo $this->_tpl_vars['year']; ?>
 <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['month'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>through %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        </th>
      <th scope="col" rowspan="2">
        <?php if ($this->_tpl_vars['isCurrent']): ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php else: ?>
          <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['month'],'2' => $this->_tpl_vars['year'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Members as of %1 %2<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
      </th>
    </tr>

    <tr class="columnheader-dark">
        <?php if ($this->_tpl_vars['preMonth']): ?>
            <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Renew<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <?php endif; ?>
        <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Renew<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Renew<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    </tr>

    <?php $_from = $this->_tpl_vars['membershipSummary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        <tr>
            <td><strong><?php echo $this->_tpl_vars['row']['month']['total']['name']; ?>
</strong></td>
          <?php if ($this->_tpl_vars['preMonth']): ?>
            <td class="label">
              <?php if ($this->_tpl_vars['row']['premonth']['new']['url']): ?><a href="<?php echo $this->_tpl_vars['row']['premonth']['new']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['premonth']['new']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['row']['premonth']['new']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['row']['premonth']['renew']['url']): ?><a href="<?php echo $this->_tpl_vars['row']['premonth']['renew']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['premonth']['renew']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['row']['premonth']['renew']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['row']['premonth']['total']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['row']['premonth']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['premonth']['total']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['row']['premonth']['total']['count']; ?>

              <?php endif; ?>&nbsp;[
              <?php if ($this->_tpl_vars['row']['premonth_owner']['premonth_owner']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['row']['premonth_owner']['premonth_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['premonth_owner']['premonth_owner']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['row']['premonth_owner']['premonth_owner']['count']; ?>

              <?php endif; ?>]
            </td>
          <?php endif; ?>

            <td class="label">
              <?php if ($this->_tpl_vars['row']['month']['new']['url']): ?><a href="<?php echo $this->_tpl_vars['row']['month']['new']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['month']['new']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['row']['month']['new']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['row']['month']['renew']['url']): ?><a href="<?php echo $this->_tpl_vars['row']['month']['renew']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['month']['renew']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['row']['month']['renew']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['row']['month']['total']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['row']['month']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['month']['total']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['row']['month']['total']['count']; ?>

              <?php endif; ?>&nbsp;[
              <?php if ($this->_tpl_vars['row']['month_owner']['month_owner']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['row']['month_owner']['month_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['month_owner']['month_owner']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['row']['month_owner']['month_owner']['count']; ?>

              <?php endif; ?>]
            </td>

            <td class="label">
              <?php if ($this->_tpl_vars['row']['year']['new']['url']): ?><a href="<?php echo $this->_tpl_vars['row']['year']['new']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['year']['new']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['row']['year']['new']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['row']['year']['renew']['url']): ?><a href="<?php echo $this->_tpl_vars['row']['year']['renew']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['year']['renew']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['row']['year']['renew']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['row']['year']['total']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['row']['year']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['year']['total']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['row']['year']['total']['count']; ?>

              <?php endif; ?>&nbsp;[
              <?php if ($this->_tpl_vars['row']['year_owner']['year_owner']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['row']['year_owner']['year_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['year_owner']['year_owner']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['row']['year_owner']['year_owner']['count']; ?>

              <?php endif; ?>]
            </td>

            <td class="label">
              <?php if ($this->_tpl_vars['isCurrent']): ?>
                <?php if ($this->_tpl_vars['row']['current']['total']['url']): ?>
                  <a href="<?php echo $this->_tpl_vars['row']['current']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['current']['total']['count']; ?>
</a>
                <?php else: ?>
                  <?php echo $this->_tpl_vars['row']['current']['total']['count']; ?>

                <?php endif; ?>&nbsp;[
                <?php if ($this->_tpl_vars['row']['current_owner']['current_owner']['url']): ?>
                  <a href="<?php echo $this->_tpl_vars['row']['current_owner']['current_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['current_owner']['current_owner']['count']; ?>
</a>
                <?php else: ?>
                  <?php echo $this->_tpl_vars['row']['current_owner']['current_owner']['count']; ?>

                <?php endif; ?> ]
              <?php else: ?>
                <?php if ($this->_tpl_vars['row']['total']['total']['url']): ?>
                  <a href="<?php echo $this->_tpl_vars['row']['total']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['total']['total']['count']; ?>
</a>
                <?php else: ?>
                  <?php echo $this->_tpl_vars['row']['total']['total']['count']; ?>

                <?php endif; ?>&nbsp;[
                <?php if ($this->_tpl_vars['row']['total_owner']['total_owner']['url']): ?>
                  <a href="<?php echo $this->_tpl_vars['row']['total_owner']['total_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['total_owner']['total_owner']['count']; ?>
</a>
                <?php else: ?>
                  <?php echo $this->_tpl_vars['row']['total_owner']['total_owner']['count']; ?>

                <?php endif; ?> ]
              <?php endif; ?>
            </td>         </tr>
    <?php endforeach; endif; unset($_from); ?>

    <tr class="columnfooter">
        <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Totals (all types)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td>
        <?php if ($this->_tpl_vars['preMonth']): ?>
            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['premonth']['new']['url']): ?><a href="<?php echo $this->_tpl_vars['totalCount']['premonth']['new']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['premonth']['new']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['totalCount']['premonth']['new']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['premonth']['renew']['url']): ?><a href="<?php echo $this->_tpl_vars['totalCount']['premonth']['renew']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['premonth']['renew']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['totalCount']['premonth']['renew']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['premonth']['total']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['totalCount']['premonth']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['premonth']['total']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['totalCount']['premonth']['total']['count']; ?>

              <?php endif; ?>&nbsp;[
              <?php if ($this->_tpl_vars['totalCount']['premonth_owner']['premonth_owner']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['totalCount']['premonth_owner']['premonth_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['premonth_owner']['premonth_owner']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['totalCount']['premonth_owner']['premonth_owner']['count']; ?>

              <?php endif; ?>]
            </td>
        <?php endif; ?>

            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['month']['new']['url']): ?><a href="<?php echo $this->_tpl_vars['totalCount']['month']['new']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['month']['new']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['totalCount']['month']['new']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['month']['renew']['url']): ?><a href="<?php echo $this->_tpl_vars['totalCount']['month']['renew']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['month']['renew']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['totalCount']['month']['renew']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['month']['total']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['totalCount']['month']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['month']['total']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['totalCount']['month']['total']['count']; ?>

              <?php endif; ?>&nbsp;[
              <?php if ($this->_tpl_vars['totalCount']['month_owner']['month_owner']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['totalCount']['month_owner']['month_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['month_owner']['month_owner']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['totalCount']['month_owner']['month_owner']['count']; ?>

              <?php endif; ?>]
            </td>

            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['year']['new']['url']): ?><a href="<?php echo $this->_tpl_vars['totalCount']['year']['new']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['year']['new']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['totalCount']['year']['new']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['year']['renew']['url']): ?><a href="<?php echo $this->_tpl_vars['totalCount']['year']['renew']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['year']['renew']['count']; ?>
</a>
              <?php else: ?><?php echo $this->_tpl_vars['totalCount']['year']['renew']['count']; ?>
<?php endif; ?>
            </td>
            <td class="label">
              <?php if ($this->_tpl_vars['totalCount']['year']['total']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['totalCount']['year']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['year']['total']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['totalCount']['year']['total']['count']; ?>

              <?php endif; ?>&nbsp;[
              <?php if ($this->_tpl_vars['totalCount']['year_owner']['year_owner']['url']): ?>
                <a href="<?php echo $this->_tpl_vars['totalCount']['year_owner']['year_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['year_owner']['year_owner']['count']; ?>
</a>
              <?php else: ?>
                <?php echo $this->_tpl_vars['totalCount']['year_owner']['year_owner']['count']; ?>

              <?php endif; ?>]
            </td>

            <td class="label">
              <?php if ($this->_tpl_vars['isCurrent']): ?>
                <?php if ($this->_tpl_vars['row']['total']['total']['url']): ?>
                  <a href="<?php echo $this->_tpl_vars['row']['total']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['current']['total']['count']; ?>
</a>
                <?php else: ?>
                  <?php echo $this->_tpl_vars['totalCount']['current']['total']['count']; ?>

                <?php endif; ?>&nbsp;[
                <?php if ($this->_tpl_vars['row']['total_owner']['total_owner']['url']): ?>
                  <a href="<?php echo $this->_tpl_vars['row']['total_owner']['total_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['current_owner']['current_owner']['count']; ?>
</a>
                <?php else: ?>
                  <?php echo $this->_tpl_vars['totalCount']['current_owner']['current_owner']['count']; ?>

                <?php endif; ?> ]
              <?php else: ?>
                <?php if ($this->_tpl_vars['totalCount']['total']['url']): ?>
                  <a href="<?php echo $this->_tpl_vars['totalCount']['total']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['total']['total']['count']; ?>
</a>
                <?php else: ?>
                  <?php echo $this->_tpl_vars['totalCount']['total']['total']['count']; ?>

                <?php endif; ?>&nbsp;[
                <?php if ($this->_tpl_vars['totalCount']['total_owner']['total_owner']['url']): ?>
                  <a href="<?php echo $this->_tpl_vars['totalCount']['total_owner']['total_owner']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['total_owner']['total_owner']['count']; ?>
</a>
                <?php else: ?>
                  <?php echo $this->_tpl_vars['totalCount']['total_owner']['total_owner']['count']; ?>

                <?php endif; ?> ]
              <?php endif; ?>
            </td>

    </tr>
    <tr><td colspan='11'>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Primary member counts (those who "own" the membership rather than receiving via relationship) are in [brackets].<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </td></tr>
  </table>
<?php endif; ?>
<div class="spacer"></div>

<?php if ($this->_tpl_vars['rows']): ?>
  <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Memberships<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
  <div class="form-item">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Member/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'dashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>