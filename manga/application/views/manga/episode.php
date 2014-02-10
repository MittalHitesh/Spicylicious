<?php print_r($this->session->userdata('chepters')); ?>
<script type="text/javascript">
      (function() {
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
        s.src = 'http://s5.mangapanda.com/sup/js/1198917538_0424c3a301360bc3a39f6bd34d993f00.js';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
      })();
    </script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-30587444-1']);
      _gaq.push(['_setDomainName', 'none']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type="text/javascript">
      document['mangaid'] = 337;
      document['chapterno'] = 554;
      document['nl'] = '/historys-strongest-disciple-kenichi/554/2';
      document['pl'] = '/historys-strongest-disciple-kenichi/553/17';
      document['pu'] = 'http://i998.mangapanda.com/historys-strongest-disciple-kenichi/554/historys-strongest-disciple-kenichi-4741751.jpg';
    
      function omvKeyPressed(e) {
        var keyCode = 0;
        if (navigator.appName == "Microsoft Internet Explorer") {
          if (!e) {
            var e = window.event;
          }
          if (e.keyCode) {
            keyCode = e.keyCode;
            if ((keyCode == 37) || (keyCode == 39)) {
              window.event.keyCode = 0;
            }
          } else {
            keyCode = e.which;
          }
        } else {
          if (e.which) {
            keyCode = e.which;
          } else {
            keyCode = e.keyCode;
          }
        }
				switch (keyCode) {                case 37:
            window.location = "/historys-strongest-disciple-kenichi/553/17";
            return false;
          case 39:
            window.location = "/historys-strongest-disciple-kenichi/554/2";
            return false;
        
          default:
            return true;
        }
      }
      document.onkeydown = omvKeyPressed;
			</script>
  
	<div id="wrapper_body">

  <div class="clear"></div>
  <div id="readmangasum">
    <h2>Read <?php //echo $chepters->title; ?> Manga Online</h2>
    <p><?php //echo $chepters->description; ?></p>
  </div>
	<table>
		<tr>
			<td>
				<div id="selectmanga"><select id="chapterMenu" name="chapterMenu"></select></div>
			</td>
			<td>
				<span class="prev"><a href="#">Previous</a></span>
			</td>
			<td>	
				<select id="pageMenu" name="pageMenu"><option value="/historys-strongest-disciple-kenichi/554" selected="selected">1</option>
              <option value="">2</option>
              <option value="/historys-strongest-disciple-kenichi/554/3">3</option>
              <option value="/historys-strongest-disciple-kenichi/554/4">4</option>
              <option value="/historys-strongest-disciple-kenichi/554/5">5</option>
              <option value="/historys-strongest-disciple-kenichi/554/6">6</option>
              <option value="/historys-strongest-disciple-kenichi/554/7">7</option>
              <option value="/historys-strongest-disciple-kenichi/554/8">8</option>
              <option value="/historys-strongest-disciple-kenichi/554/9">9</option>
              <option value="/historys-strongest-disciple-kenichi/554/10">10</option>
              <option value="/historys-strongest-disciple-kenichi/554/11">11</option>
              <option value="/historys-strongest-disciple-kenichi/554/12">12</option>
              <option value="/historys-strongest-disciple-kenichi/554/13">13</option>
              <option value="/historys-strongest-disciple-kenichi/554/14">14</option>
              <option value="/historys-strongest-disciple-kenichi/554/15">15</option>
              <option value="/historys-strongest-disciple-kenichi/554/16">16</option>
            </select>
			</td>	
			<td>
				<span class="next"><a href="#">Next</a></span>
			</td>
		</tr>
	
	</table>
  <div id="chapterlist">
		 <table class="episode-table">
        <tr>
          
          <td>
            <div id="imgholder"><a href="/historys-strongest-disciple-kenichi/554/2"><img id="img" width="800" height="1157" src="http://i998.mangapanda.com/historys-strongest-disciple-kenichi/aa/554/historys-strongest-disciple-kenichi-4741749.jpg" alt="Historys Strongest Disciple Kenichi 554 - Page 1" name="img" /></a> </div>
            <div class="c4"></div>
          </td>
          
        </tr>
      </table>
		
  </div>
  <div class="clear"></div>
</div>
	
<?php 
echo '<pre>';
print_r($chepters); 
?>