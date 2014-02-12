<?php 
	echo 'hitesh';
	//echo '<pre>'; print_r($result);
	
	
	
?>
<div id="series_info">
  <div class="left_col">
    <img src="http://cdn.mangaeden.com/mangasimg/<?php echo $result->image; ?>" id="series_image" width="225" height="300" alt="Read Bleach manga online" />
  </div>
  <div class="right_col">
    <h1><?php echo $result->title; ?></h1>
    <div id="series_details">
			<div>
        <span>Title:</span>
        <?php echo $result->title; ?>
			</div>
			<div>
        <span>Authors:</span>
        <?php echo $result->author; ?>
			</div>
      <div>
        <span>Description:</span>
        <div>
          <span id="brief_notes">
						<?php echo $result->description; ?>   
					</span>
				</div>
      </div>
      <div>
				<span>Status:</span>
				<?php echo $result->status; ?>       
			</div>
      <div>
        <span>Released:</span>
				<?php echo $result->released; ?>      
			</div>
      <div id="rating">
        <span>Rating:</span>
				<span id="rating_num">9.54</span>
        (<span id="votes">1280</span> Votes)
        <span><a href="#" data-series-id="4">Rate it!</a></span>
      </div>
      <div>
        <span>Genres:</span>
									<?php foreach ($result->categories as $categories) { ?>
                  <span class="red_box">
										<a href="#"><?php echo $categories; ?></a>
									</span>, 
									<?php } ?>
				</div>
    </div>
  </div>
</div>

<div id="chapters">
  <h2><?php echo $result->title; ?> Manga Chapters</h2>
  <ul>
		<?php foreach($result->chapters as $chapters) { ?>
    <li>
        <?php echo l($result->title.' Chapter '. $chapters[0], 'mangas/'.$result->alias.'/chapter/'.$chapters[0]); ?> 
			<?php echo $chapters[2]; ?> 
      <span class="right_text"><?php echo date('Y-m-d', $chapters[1]); ?></span> 
    </li>
    <?php } ?> 
	</ul>
</div>
