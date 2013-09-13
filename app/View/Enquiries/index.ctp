<h2>Enquiry</h2>

    <div class="row" >
        <div class="span3 offset1">
            <?php echo $this->Form->create(false);?>
            <label>First Name</label>
            <?php echo $this->Form->input('firstName',array('class'=>'span3','placeholder'=>'Your First Name','label'=>false,'required'=>true));?>
  <label>Contact</label>
            <?php echo $this->Form->input('contact',array('class'=>'span3','placeholder'=>'Email/Phone','label'=>false,'required'=>true));?>
            <label>Subject</label>
            <?php echo $this->Form->input('subject',array('stype'=>'select','options'=>$project,'placeholder'=>'Select A Subject','label'=>false,'required'=>true));?>
        </div>
        <div class="span5">
            <label>Message</label>
            <?php echo $this->Form->input('message',array('class'=>'input-xlarge span5','label'=>false,'type'=>'textarea','id'=>'message','rows'=>'10','required'=>true));?>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <?php echo $this->Form->end(array('label'=>'Send Enquiry','class'=>'btn btn-primary'));?>
    </div>
