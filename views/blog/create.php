<h1>NOVI BLOG</h1>

<div>
    <form class="form" action="<?php echo URL . 'blog/add'?>" method="post" enctype="multipart/form-data">
        <label for="blogT">Text</label> <textarea rows="4" cols="50" name="blogT"></textarea <br/>
        <label for="image">Slika</label> <input type="file" id="image" name="image" /> <br/>
        <input class="button" type="submit" value="dodaj" />

    </form>
    <a href="<?php echo URL;?>dog">Index</a>
</div>
