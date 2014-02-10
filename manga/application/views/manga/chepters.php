<?php 
	/*
	*/
	echo '<pre>';
	$chepters = $this->session->userdata('chepters1');
	print_R($chepters);
//	print_R($table_id);
	echo '</pre>';
?>

<div id="wrapper_body">
  <div id="bodyust">
    <div id="mangaimg"><img alt="Historys Strongest Disciple Kenichi Manga" src="http://cdn.mangaeden.com/mangasimg/<?php echo $chepters->image ?>" width="200" height="300"></div>
    <div id="mangaproperties">
      <h1><?php echo $chepters->title; ?></h1>
      <table>
        <tbody><tr>
            <td class="propertytitle">Name:</td>
            <td>
              <h2 class="aname"><?php echo $chepters->title; ?></h2>
            </td>
          </tr>
          <tr>
            <td class="propertytitle">Alternate Name:</td>
            <td>History\'s Strongest Disciple Kenichi, Shijou Saikyou no Deshi Kenichi, Strongest Disciple Kenichi, KenIchi: The Mightiest Disciple, hsdk</td>
          </tr>
          <tr>
            <td class="propertytitle">Year of Release:</td>
            <td><?php echo $chepters->released; ?></td>
          </tr>
          <tr>
            <td class="propertytitle">Status:</td>
            <td><?php echo $chepters->status; ?></td>
          </tr>
					<?php if(isset($chepters->author)) {?>
          <tr>
            <td class="propertytitle">Author:</td>
            <td><?php echo $chepters->author; ?></td>
          </tr>
					<?php } ?>
					<?php if(isset($chepters->artist)) {?>
          <tr>
            <td class="propertytitle">Artist:</td>
            <td><?php echo $chepters->artist; ?></td>
          </tr>
					<?php } ?>
          <tr>
            <td class="propertytitle">Reading Direction:</td>
            <td>Right to Left</td>
          </tr>
					<?php if(isset($chepters->categories)) {?>	
          <tr>
            <td class="propertytitle">Genre:</td>
            <td>
						<?php foreach	($chepters->categories as $categories) {?>
							<a href="/popular/action"><span class="genretags"><?php echo $categories; ?></span></a>
						<?php } ?>
						</td>
          </tr>
					<?php } ?>
          <tr>
            <td>&nbsp;</td>
            <td></td>
          </tr>
          <tr>
            <td class="propertytitle">Tweet it:</td>
            <td>
              twit
            </td>
          </tr>
          <tr>
            <td class="propertytitle">Like it:</td>
            <td>
              fb
            </td>
          </tr>
        </tbody></table>
      
    </div>
  </div>
  <div class="clear"></div>
  <div id="readmangasum">
    <h2>Read <?php echo $chepters->title; ?> Manga Online</h2>
    <p><?php echo $chepters->description; ?></p>
  </div>
  <div id="chapterlist">
    <table id="listing">
      <tbody>
				<tr class="table_head">
          <th class="leftgap">Chapter Name</th>
          <th>Date Added</th>
        </tr>
				<?php 
					//$reversed = array_reverse($chepters->chapters);
					
					foreach	($chepters->chapters as $chepter) {
					//foreach	($reversed as $chepter) {
				?>
        <tr>
          <td>
            <div class="chico_manga"></div>
            <a href="<?php echo site_url('manga/chepters_data/'.$chepters->alias.'/'. $chepter[0]); ?>"><?php echo $chepters->title. ' ' . $chepter[0]; ?></a> : <?php echo $chepter[2] ?></td>
          <td><?php echo date('d/m/Y', $chepter[1]); ?></td>
        </tr>
				<?php } ?>
      </tbody>
		</table>
  </div>
  <div class="clear"></div>
</div>

<div class="container top">

  <ul class="breadcrumb">
    <li>
      <a href="<?php echo site_url("admin"); ?>">
        <?php echo ucfirst($this->uri->segment(1)); ?>
      </a> 
      <span class="divider">/</span>
    </li>
    <li class="active">
      <?php echo ucfirst($this->uri->segment(2)); ?>
    </li>
  </ul>

  <div class="page-header users-header">
    <h2>
      <?php echo ucfirst($this->uri->segment(2)); ?> 
        <!--<a  href="<?php //echo site_url("admin").'/'.$this->uri->segment(2);  ?>/add" class="btn btn-success">Add a new</a> -->
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
        echo form_input('search_string');


        $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Go');


        echo form_submit($data_submit);

        echo form_close();
        ?>

      </div>
      <?php echo '<pre>';
      print_R($chepters); ?>


      <?php //echo '<div class="pagination">'.$links.'</div>'; ?>

    </div>
  </div>