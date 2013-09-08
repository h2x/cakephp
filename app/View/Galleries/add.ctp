<table class="table table-striped table-bordered" >
    <tr>
        <th style="text-align: center"><?php echo 'Upload'; ?></th>
        <th style="text-align: center" class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <tr>
        <td>
            <?php echo $this->Form->create('Gallery', array('action'=>'uploadphotos','enctype' => 'multipart/form-data','inputDefaults'=>array('label'=>false)));?>
            <?php echo $this->Form->input('photos', array('type' => 'file','escape'=>false));?>
        </td>
        <td style="text-align: center"><?php echo $this->Form->end(array('label'=>'Upload','class'=>'btn btn-primary'));?></td>
    </tr>
</table>