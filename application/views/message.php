<?php if ($this->session->flashdata('success')){ ?>
<div class="alert btn-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<i class="icon fa fa-check"> </i> <?=$this->session->flashdata('success');?>
</div>
<?php } ?>