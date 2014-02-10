    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">New</a>
        </li>
      </ul>
      
      
        <fieldset>
          <div class="Manage_Markups_left">
						<div class="Manage_Markups_left_top">Manage Categories</div>
						<div class="Manage_Markups_left_middle">
							<div class="Manage_Markups_text_main">
									<div class="Manage_Markups_icon"><img src="<?php echo base_url() ?>assets/images/Manage_Markup_icon.jpg" alt="" /></div>
									<div class="Manage_Markups_text"><a href="add_state.php" >Add Category</a> </div>
									<div class="Manage_Markups_icon"><img src="<?php echo base_url() ?>assets/images/Manage_Markup_icon.jpg" alt="" /></div>
									<div class="Manage_Markups_text"><a href="view_states.php" >View Categories</a> </div>
							</div>
						</div>
						<div class="Manage_Markups_left_bootom"><img src="<?php echo base_url() ?>assets/images/Manage_Markup_bootom_img.jpg" alt="" /></div>
					</div>
					<div class="Manage_Markups_left">
						<div class="Manage_Markups_left_top">Manage Sub Categories</div>
						<div class="Manage_Markups_left_middle">
							<div class="Manage_Markups_text_main">
									<div class="Manage_Markups_icon"><img src="<?php echo base_url() ?>assets/images/Manage_Markup_icon.jpg" alt="" /></div>
									<div class="Manage_Markups_text"><a href="add_state.php" >Add Category</a> </div>
									<div class="Manage_Markups_icon"><img src="<?php echo base_url() ?>assets/images/Manage_Markup_icon.jpg" alt="" /></div>
									<div class="Manage_Markups_text"><a href="view_states.php" >View Categories</a> </div>
							</div>
						</div>
						<div class="Manage_Markups_left_bootom"><img src="<?php echo base_url() ?>assets/images/Manage_Markup_bootom_img.jpg" alt="" /></div>
					</div>
        </fieldset>

     

    </div>
     