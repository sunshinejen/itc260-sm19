<?php
//application/views/news/index.php
$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title; ?></h2>

<?php foreach ($default_tags as $tag): ?>

        <p><a href="<?php echo site_url('pics/view/' . $tag);?>"><?=$tag?></a></p>


<?php endforeach; 
$this->load->view($this->config->item('theme') . 'footer');
?>