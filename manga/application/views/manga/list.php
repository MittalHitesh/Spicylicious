    <div class="container top">
			
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> 
						<!--<a  href="<?php //echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Add a new</a> -->
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
            $options_manufacturers = array();    
            /* foreach ($manufacturers as $array) {
              foreach ($array as $key => $value) {
                $options_manufacturers[$key] = $key;
              }
              break;
            } */

            echo form_open('admin/manufacturers', $attributes);
					//$search_string_selected
              echo form_label('Search:', 'search_string');
              echo form_input('search_string' );

              
              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Go');

             
              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>
					<?php echo '<pre>';print_R($list); ?>
					<?php foreach($list as $value) { ?>
								print
						<div style="width:30%; float: left;">
							<a href="<?php echo base_url().'mangas/'.$value['id'].'/'.$value['alias']; ?>">
							<img src="<?php echo base_url(). "assets/imagesa/".$value['image']; ?>" /></a>
						</div>
					<?php } ?>	
					
          <?php echo '<div class="pagination">'.$links.'</div>'; ?>

      </div>
    </div>