<?php
class BlogPreview {
    public $page_name;
    public $title;
    public $preview;
    public $date;
}

function createPortfolioPhotoElements($photos) {
    foreach ($photos as $photo) {
        echo "<div class=\"row\"><div class=\"span12\"><img src=\"assets/img/".$photo.".jpg\" alt=\"\"></div></div>";
    }
}

function createBlogPreviewElements($blogPreviews) {
    foreach ($blogPreviews as $blogPreview) {
        echo "<div class=\"date\">".$blogPreview->date."</div>";
        echo "<h4 class=\"blogTitle\"><a href=\"".$blogPreview->page_name.".php\">".$blogPreview->title."</a></h4>";
        echo "<div class=\"row\"><div class=\"span12\"><img src=\"assets/img/".$blogPreview->preview.".jpg\" alt=\"\"></div></div>";
        echo "<div class=\"blogLink\"><a href=\"".$blogPreview->page_name.".php\">cмотреть</a></div>";
        echo "<div class=\"hr\"><hr /></div>";
    }
}
?>
