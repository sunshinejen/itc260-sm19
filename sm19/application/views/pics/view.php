<?php
//application/views/pics/view.php
$this->load->view($this->config->item('theme') . 'header');

echo '<h2>'.$title.'</h2>';
//echo '<h2>'.$news_item['title'].'</h2>';
foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo '
        <figure style="display:inline-block;margin:3rem;">
            <img title="' . $pic->title . '" src="' . $photo_url . '" />
            <figcaption>' . $pic->title . '</figcaption>
        </figure>
        ';
 
}


$this->load->view($this->config->item('theme') . 'footer');
?>